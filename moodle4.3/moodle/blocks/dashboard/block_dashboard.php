<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

use core_completion\progress;

/**
 * Block dashboard is defined here.
 *
 * @package     block_dashboard
 * @copyright   2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_dashboard extends block_base {

    /**
     * Initializes class member variables.
     */
    public function init() {
        global $CFG;

        require_once($CFG->libdir . "/badgeslib.php");

        // Needed by Moodle to differentiate between blocks.
        $this->title = get_string('pluginname', 'block_dashboard');
    }

    /**
     * Gets Javascript that may be required for navigation
     */
    function get_required_javascript() {
        parent::get_required_javascript();
        $this->page->requires->js_call_amd('block_dashboard/manage_favorite_dashboard', 'init');
    }

    /**
     * Returns the block contents.
     *
     * @return stdClass The block contents.
     */
    public function get_content() {

        global $DB, $USER, $CFG, $OUTPUT;
        
        if ($this->content !== null) {
            return $this->content;
        }

        if (empty($this->instance)) {
            $this->content = '';
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->items = array();
        $this->content->icons = array();
        $this->content->footer = '';

        if (!empty($this->config->text)) {
            $this->content->text = $this->config->text;
        } else {

            $query = "SELECT e.courseid
            FROM {user_enrolments} ue
            JOIN {enrol} e
            ON ue.enrolid = e.id
            WHERE ue.userid = :userid";
  
            $params = ['userid' => $USER->id];
            $enrolcoursesids = $DB->get_records_sql($query, $params);
            $enrolcourses = [];
            $enroltrainingcourses = [];
            foreach ($enrolcoursesids as $enrolcoursesid) {
                $course = get_course($enrolcoursesid->courseid);
                $ownedbadges = badges_get_user_badges($USER->id, $enrolcoursesid->courseid);
                $certificates = get_coursemodules_in_course('certificate', $course->id);
                
                $certificate = array_pop($certificates);
                if (intval($course->category) === 1) {
                    $progress = (float) progress::get_course_progress_percentage($course, $USER->id);
                    $enrolcourses[$course->id] = [
                        "course" => $course,
                        "category" => $course->category,
                        "progress" => $progress,
                        "ownedbadges" => $ownedbadges,
                        "certificate" => $certificate,
                    ];
                } else if (intval($course->category) === 2) {
                    $urlmoduleparams = $DB->get_records('url', array('course' => $course->id));
                    $activityprogress = [];
                    foreach ($urlmoduleparams as $urlmoduleparam) {
                        $externalUrl = $urlmoduleparam->externalurl;
                        preg_match('/[?&]id=(\d+)/', $externalUrl, $matches);
                        if (!empty($matches[1])) {
                            $courseid = intval($matches[1]);
                            $externalCourse = get_course($courseid);
                            $progress = (float) progress::get_course_progress_percentage($externalCourse, $USER->id);
                            $activityprogress[$courseid] = $progress;
                        }
                    }
                    $enroltrainingcourses[$course->id] = [
                        "course" => $course,
                        "category" => $course->category,
                        "progress" => $activityprogress,
                        "ownedbadges" => $ownedbadges,
                    ];
                }
            }            

            $query = "SELECT c.*
            FROM {favourite} f
            JOIN {course} c
            ON f.itemid = c.id
            WHERE f.id != :id
            AND f.userid = :userid";
  
            $params = ['id' => 1, 'userid' => $USER->id];
            $favorite_courses = $DB->get_records_sql($query, $params);
            
            $categories = []; // List to store courses by their category

            foreach ($favorite_courses as $course) {
                $category = $DB->get_record('course_categories', ['id' => $course->category]);
                if (isset($categories[$category->id])) {
                    // The category already exist, adding course to the existing list
                    $categories[$category->id]['courses'][] = $course;
                } else {
                    // Create a new entry in the table for this category
                    $categories[$category->id] = [
                        'name' => $category->name,
                        'courses' => [$course],
                    ];
                }
            }
            

            $this->content->text = sprintf('
                <p>%s</p><br>
                <div class="container-fluid">
                    <div class="row">
                        %s
                        %s
                        %s
                    </div>
                </div>',
                get_string("additional_context", "block_dashboard"),
                $this->generate_dashboard_button('my-courses', 'my_courses', 'mes-cours', count($enrolcourses)),
                $this->generate_dashboard_button('my-training-courses', 'my_training_courses', 'mes-parcours', count($enroltrainingcourses)),
                $this->generate_dashboard_button('my-list', 'my_list', 'ma-liste', count($favorite_courses))
            );
            $this->content->text .= '
                <div id="dashboard-container" class="container-fluid mb-5" style="display: none;">
                    <div class="row">
                        <div class="col-12">
                            <div class="table mt-5">
                                <div class="dashboard-table standard-shadow card">
                                    <table class="table t-responsive">
                                        <thead id="t-head-default">
                                            <tr class="c-primary text-center">
                                                <th id="t-head-text"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="t-body-default">
                                            <tr>
                                                <td>
                                                    <p id="dashboard-text" class="pt-5 pb-3 text-center">
                                                    </p>

                                                    <p class="text-center">
                                                        <a class="btn ahnac-button text-decoration-none" href="'.new moodle_url("/course/").'">
                                                            '.get_string("display_all_courses", "block_dashboardcourselist").'
                                                        </a>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>


                                        <thead id="t-head-my-courses" style="display: none;">
                                            <tr class="c-primary text-center">
                                                <th>' . get_string('course_name', 'block_dashboard') . '</th>
                                                <th>' . get_string('course_progress', 'block_dashboard') . '</th>
                                                <th>' . get_string('course_badges', 'block_dashboard') . '</th>
                                                <th>' . get_string('course_certificate', 'block_dashboard') . '</th>
                                            </tr>
                                        </thead>
                                        <tbody id="t-body-my-courses" style="display: none;">';
                                            foreach ($enrolcourses as $courseid => $enrolcourse) {
                                                $this->content->text .= '
                                                <tr>
                                                    <td>
                                                        <a href="'. new moodle_url("/course/view.php", array("id"=>$courseid)).'">' . $enrolcourse["course"]->fullname . '</a>
                                                    </td>
                                                    <td>
                                                        <div>' . intval($enrolcourse['progress']) . '%</div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: ' . $enrolcourse['progress'] . '%;" aria-valuenow="' . $enrolcourse['progress'] . '" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>';
                                                        $ownedbadges = $enrolcourse["ownedbadges"];
                                                        if ($ownedbadges) {
                                                            foreach ($ownedbadges as $badgeId => $badge) {
                                                                $this->content->text .= '<div><i class="fa-solid fa-medal"></i> ' . $badge->name . '</div>';
                                                            }
                                                        } else {
                                                            $this->content->text .= get_string('no_badge_in_course', 'block_dashboard');
                                                        };
                                                        $this->content->text .= '
                                                    </td>
                                                    <td>';
                                                        $certificate = $enrolcourse["certificate"];
                                                        if (empty($certificate)) {
                                                            $this->content->text .= get_string('no_certificate_in_course', 'block_dashboard');
                                                        }
                                                        if (intval($enrolcourse['progress'])<100) {
                                                            $this->content->text .= get_string('course_not_finished', 'block_dashboard');
                                                        }
                                                        else {
                                                            $this->content->text .= '<a href="' . new moodle_url("/mod/certificate/view.php", array("id"=>$certificate->id)) . '">' . get_string('download_certificate_course', 'block_dashboard') . '</a>';
                                                        }
                                                        $this->content->text .= '
                                                    </td>
                                                </tr>';
                                            }
                                            $this->content->text .= '
                                        </tbody>

                                        <thead id="t-head-my-training-courses" style="display: none;">
                                            <tr class="c-primary text-center">
                                                <th>' . get_string('course_name', 'block_dashboard') . '</th>
                                                <th>' . get_string('course_progress', 'block_dashboard') . '</th>
                                                <th>' . get_string('course_badges', 'block_dashboard') . '</th>
                                            </tr>
                                        </thead>
                                        <tbody id="t-body-my-training-courses" style="display: none;">';
                                            foreach ($enroltrainingcourses as $courseid => $enroltrainingcourse) {
                                                $this->content->text .= '
                                                <tr>
                                                    <td>
                                                        <a href="'. new moodle_url("/course/view.php", array("id"=>$courseid)).'">' . $enroltrainingcourse["course"]->fullname . '</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-row">';
                                                        $progressData = $enroltrainingcourse['progress'];
                                                        foreach ($progressData as $activityCourseId => $progress) {
                                                            $this->content->text .= '
                                                            <div class="p-2">
                                                                <div>' . intval($progress) . '%</div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" style="width: ' . $progress . '%;" aria-valuenow="' . $progress . '" aria-valuemin="0" aria-valuemax="1000"></div>
                                                                </div>
                                                            </div>';
                                                        }
                                                
                                                        $this->content->text .= '
                                                        </div>
                                                    </td>
                                                    <td>';
                                                        $ownedbadges = $enroltrainingcourse["ownedbadges"];
                                                        if ($ownedbadges) {
                                                            foreach ($ownedbadges as $badgeId => $badge) {
                                                                $this->content->text .= '<div><i class="fa-solid fa-medal"></i> ' . $badge->name . '</div>';
                                                            }
                                                        } else {
                                                            $this->content->text .= get_string('no_badge_in_course', 'block_dashboard');
                                                        };
                                                        $this->content->text .= '
                                                    </td>
                                                </tr>';
                                            }
                                        $this->content->text .= '
                                        </tbody>


                                        <tbody id="t-body-my-list" style="display: none;">';
                                            foreach ($categories as $categoryid => $category) {
                                                $this->content->text .= '
                                                <tr>
                                                    <td>
                                                        <div class="accordion" id="accordionCategory' . $categoryid . '">
                                                            <div class="card-header" id="headingCategory' . $categoryid . '">
                                                                <h2 class="mb-0">
                                                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseCategory' . $categoryid . '" aria-expanded="true" aria-controls="collapseCategory' . $categoryid . '">
                                                                        ' . $category['name'] . ' <i class="fas fa-chevron-down float-right"></i>
                                                                    </button>
                                                                </h2>
                                                            </div>
                                                            <div id="collapseCategory' . $categoryid . '" class="collapse" aria-labelledby="headingCategory' . $categoryid . '" data-parent="#accordionCategory' . $categoryid . '">
                                                                <div>
                                                                    <ul class="list-group list-group-flush">';
                                                                        foreach ($category['courses'] as $course) {
                                                                            $this->content->text .= '
                                                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                                <a href="' . new moodle_url("/course/view.php?id=$course->id") . '">' . $course->fullname . '</a>
                                                                                <a class="btn btn-remove-fav" href="#" data-course-id="' . $course->id . '">Remove from Favorites</a>
                                                                            </li>';
                                                                        }
                                                                        $this->content->text .= '
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>';
                                            }
                                            $this->content->text .= '
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }

        return $this->content;
    }

    private function generate_dashboard_button($id, $stringKey, $image, $count) {
        global $OUTPUT;
        return sprintf('
            <div class="col-12 col-lg-6 col-xl-4">
                <div id="%s" href="#" class="button-dsb mb-3">
                    <div class="content standard-shadow bg-white btn dashboard-button p-4 d-flex align-items-center text-center">
                        <div class="w-50">
                            <div class="button-dsb-nb fw-bold">
                                <div class="mb-3" id="nb-%s">%03d</div>
                                <p class="mb-0">%s</p>
                            </div>
                        </div>
                        <div class="w-35 p-2">
                            <img src="%s" alt="%s" class="dashboard-img">
                        </div>
                    </div>
                </div>
            </div>',
            $id,
            $id,
            str_pad($count, 3, "0", STR_PAD_LEFT),
            get_string($stringKey, 'block_dashboard'),
            $OUTPUT->image_url($image, 'theme'),
            $image
        );
    }

    /**
     * Defines configuration data.
     *
     * The function is called immediately after init().
     */
    public function specialization() {

        // Load user defined title and make sure it's never empty.
        if (empty($this->config->title)) {
            $this->title = get_string('pluginname', 'block_dashboard');
        } else {
            $this->title = $this->config->title;
        }
    }

    /**
     * Enables global configuration of the block in settings.php.
     *
     * @return bool True if the global configuration is enabled.
     */
    public function has_config() {
        return true;
    }

    /**
     * Sets the applicable formats for the block.
     *
     * @return string[] Array of pages and permissions.
     */
    public function applicable_formats() {
        return array(
            'my' => true
        );
    }

    function _self_test() {
        return true;
    } 
}
