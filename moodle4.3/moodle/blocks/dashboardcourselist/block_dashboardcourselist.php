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

/**
 * Block dashboardcourselist is defined here.
 *
 * @package     block_dashboardcourselist
 * @copyright   2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_dashboardcourselist extends block_base {

    /**
     * Initializes class member variables.
     */
    public function init() {
        // Needed by Moodle to differentiate between blocks.
        $this->title = get_string('pluginname', 'block_dashboardcourselist');
    }

    /**
     * Gets Javascript that may be required for navigation
     */
    function get_required_javascript() {
        parent::get_required_javascript();
        $this->page->requires->js_call_amd('block_dashboardcourselist/manage_favorite_dashboardcourselist', 'init');
    }

    /**
     * Returns the block contents.
     *
     * @return stdClass The block contents.
     */
    public function get_content() {

        global $DB, $USER, $CFG;
        
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
            $query = "SELECT * FROM {course} WHERE id != :id AND category = :category";
            $params = ['id' => 1, 'category' => 1]; // category number 1 = the 'course' category
            $res = $DB->get_records_sql($query, $params, 0, 12); // limitfrom 0, limitnum 12
            
            $this->content->text = '
            <div class="container">
                <div id="courseCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner">';
        
            $counter = 0;
            $num_cards_per_slide = 3;
            
            foreach ($res as $index => $courseInfo) {
                if ($counter % $num_cards_per_slide === 0) {
                    $active = ($counter === 0) ? ' active' : '';
                    $this->content->text .= '
                        <div class="carousel-item' . $active . '">
                            <div class="row">
                    ';
                }
            
                $course = get_course($courseInfo->id);
                $imageUrl = \core_course\external\course_summary_exporter::get_course_image($course);
                
                $query = "SELECT * FROM {favourite} WHERE userid = :userid AND itemid = :courseid";
                $params = ['userid' => $USER->id, 'courseid' => $courseInfo->id];
                $is_favorite = $DB->record_exists_sql($query, $params);
                $category = $DB->get_record('course_categories', ['id' => $course->category]);

                // Set the color for the favorite icon based on whether the course is in favorites or not
                $favorite_colour = $is_favorite ? 'text-yellow' : 'text-primary';    

                $this->content->text .= '
                    <div class="col-lg-4 mb-4">
                        <a href="'. new moodle_url("/course/view.php?id=$courseInfo->id") . '" class="card-link">
                            <div class="card">
                                <img src="' . $imageUrl . '" class="card-img-top align-top" alt="Course Image">
                                <div class="card-body">
                                    <h5 class="card-title">' . $courseInfo->fullname . '</h5>
                                    <p class="card-text">' . $courseInfo->summary . '</p>
                                    <a class="favorite-icon position-absolute ' . $favorite_colour . '" href="#" style="bottom: 5%; right: 5%;" data-course-id="' . $courseInfo->id . '" data-course-fullname="' . $courseInfo->fullname . '" data-course-category-id="' . $category->id . '" data-course-category-name="' . $category->name . '"><i class="fas fa-star"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                ';
            
                $counter++;
            
                if ($counter % $num_cards_per_slide === 0 || $counter === count($res)) {
                    $this->content->text .= '
                            </div>
                        </div>
                    ';
                }
            }
            
            $this->content->text .= '
                        </div>
                    </div>
                    <a class="carousel-control-prev my-5" href="#courseCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next my-5" href="#courseCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <a class="btn ahnac-button" href="'.new moodle_url("/course/index.php?categoryid=1").'">'.get_string("display_all_courses", "block_dashboardcourselist").'</a>
                </div>
            ';
        }
        
        return $this->content;
    }

    /**
     * Defines configuration data.
     *
     * The function is called immediately after init().
     */
    public function specialization() {

        // Load user defined title and make sure it's never empty.
        if (empty($this->config->title)) {
            $this->title = get_string('pluginname_display', 'block_dashboardcourselist');
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
