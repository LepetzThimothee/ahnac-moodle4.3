<?php

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/course/renderer.php');

class theme_ahnac_core_course_renderer extends core_course_renderer {

    /**
     * Renders course info box.
     *
     * @param stdClass $course
     * @return string
     */
    public function course_info_box(stdClass $course) {
        $content = '';
        $content .= $this->output->box_start('generalbox info');
        $chelper = new coursecat_helper();
        $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_EXPANDED);
        $content .= $this->coursecat_coursebox($chelper, $course, '', $fromcourseinfobox = true);
        $content .= $this->output->box_end();
        return $content;
    }

    /**
     * Returns HTML to display course name.
     *
     * @param coursecat_helper $chelper
     * @param core_course_list_element $course
     * @return string
     */
    protected function course_name(coursecat_helper $chelper, core_course_list_element $course): string {
        $content = '';
        if ($chelper->get_show_courses() >= self::COURSECAT_SHOW_COURSES_EXPANDED) {
            $nametag = 'h3';
        } else {
            $nametag = 'div';
        }
        $coursename = $chelper->get_course_formatted_name($course);
        $content .= html_writer::tag($nametag, $coursename, ['class' => 'coursename']);
        // If we display course in collapsed form but the course has summary or course contacts, display the link to the info page.
        $content .= html_writer::start_tag('div', ['class' => 'moreinfo']);
        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            if ($course->has_summary() || $course->has_course_contacts() || $course->has_course_overviewfiles()
                || $course->has_custom_fields()) {
                $url = new moodle_url('/course/info.php', ['id' => $course->id]);
                $image = $this->output->pix_icon('i/info', $this->strings->summary);
                $content .= html_writer::link($url, $image, ['title' => $this->strings->summary]);
                // Make sure JS file to expand course content is included.
                $this->coursecat_include_js();
            }
        }
        $content .= html_writer::end_tag('div');
        return $content;
    }

    /**
     * Displays one course in the list of courses.
     *
     * This is an internal function, to display an information about just one course
     * please use {@link core_course_renderer::course_info_box()}
     *
     * @param coursecat_helper $chelper various display options
     * @param core_course_list_element|stdClass $course
     * @param string $additionalclasses additional classes to add to the main <div> tag (usually
     *    depend on the course position in list - first/last/even/odd)
     * @return string
     */
    protected function coursecat_coursebox(coursecat_helper $chelper, $course, $additionalclasses = '', $fromcourseinfobox = false) {
        if (strpos($_SERVER['REQUEST_URI'], 'categoryid') !== false) {
        
            global $USER, $DB;
            $query = "SELECT * FROM {favourite} WHERE userid = :userid AND itemid = :courseid";
            $params = ['userid' => $USER->id, 'courseid' => $course->id];
            $isfavorite = $DB->record_exists_sql($query, $params);
            $favoriteclass = $isfavorite ? 'text-yellow' : 'text-primary';
            
            if (!isset($this->strings->summary)) {
                $this->strings->summary = get_string('summary');
            }
            if ($chelper->get_show_courses() <= self::COURSECAT_SHOW_COURSES_COUNT) {
                return '';
            }
            if ($course instanceof stdClass) {
                $course = new core_course_list_element($course);
            }
            $content = '';
            $classes = trim('coursebox clearfix '. $additionalclasses);
            if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
                $classes .= ' collapsed';
            }

            // .coursebox
            $content .= html_writer::start_tag('div', array(
                'class' => $classes,
                'data-courseid' => $course->id,
                'data-type' => self::COURSECAT_TYPE_COURSE,
            ));

            $outercontainerclass = $fromcourseinfobox ? 'mb-4' : 'col-12 mb-4';
            $content .= html_writer::start_tag('div', array('class' => $outercontainerclass));
            
            $cardattributes = array('class' => 'card');
            if ($fromcourseinfobox) {
                $cardattributes['style'] = 'width: fit-content';
            }
            $content .= html_writer::start_tag('div', $cardattributes);

            $url = new moodle_url('/course/view.php', ['id' => $course->id]);
            $content .= html_writer::start_tag('a', array('href' => $url, 'class' => 'card-link'));

            // $content .= html_writer::start_tag('div', array('class' => 'info'));
            // $content .= $this->course_enrolment_icons($course); // Shows icons corresponding to how you register for the course
            // $content .= html_writer::end_tag('div');

            $content .= html_writer::start_tag('div', array('class' => 'content'));
            $content .= $this->coursecat_coursebox_content($chelper, $course);
            $content .= html_writer::end_tag('div'); // .content
            $content .= html_writer::end_tag('a'); // .card-link

            $icon_attributes = [
                'class' => 'favorite-icon position-absolute ' . $favoriteclass,
                'href' => '#',
                'style' => 'bottom: 5%; right: 5%;',
                'data-course-id' => $course->id
            ];
            $content .= \html_writer::start_tag('a', $icon_attributes);
            $content .= \html_writer::tag('i', '', ['class' => 'fas fa-star']);
            $content .= \html_writer::end_tag('a');

            $content .= html_writer::end_tag('div'); // .card
            $content .= html_writer::end_tag('div'); // .col-12
            $content .= html_writer::end_tag('div'); // .coursebox
            
            return $content;
        } else {
            // Default Moodle display logic.
            return parent::coursecat_coursebox($chelper, $course, $additionalclasses);
        }
    }

    /**
     * Returns HTML to display course overview files.
     *
     * @param core_course_list_element $course
     * @return string
     */
    protected function course_overview_files(core_course_list_element $course): string {
        global $CFG;

        $contentimages = $contentfiles = '';
        foreach ($course->get_course_overviewfiles() as $file) {
            $isimage = $file->is_valid_image();
            $url = moodle_url::make_file_url("$CFG->wwwroot/pluginfile.php",
                '/' . $file->get_contextid() . '/' . $file->get_component() . '/' .
                $file->get_filearea() . $file->get_filepath() . $file->get_filename(), !$isimage);
            if ($isimage) {
                $contentimages .= html_writer::empty_tag('img', ['class' => 'card-img-top align-top', 'src' => $url, 'alt' => '']);
            } else {
                $image = $this->output->pix_icon(file_file_icon($file), $file->get_filename(), 'moodle');
                $filename = html_writer::tag('span', $image, ['class' => 'fp-icon']).
                    html_writer::tag('span', $file->get_filename(), ['class' => 'fp-filename']);
                $contentfiles .= html_writer::tag('span',
                    html_writer::link($url, $filename),
                    ['class' => 'coursefile fp-filename-icon text-break']);
            }
        }
        return $contentimages . $contentfiles;
    }

    /**
     * Returns HTML to display course content (summary, course contacts and optionally category name)
     *
     * This method is called from coursecat_coursebox() and may be re-used in AJAX
     *
     * @param coursecat_helper $chelper various display options
     * @param stdClass|core_course_list_element $course
     * @return string
     */
    protected function coursecat_coursebox_content(coursecat_helper $chelper, $course) {
        $content='';
        if ($chelper->get_show_courses() < self::COURSECAT_SHOW_COURSES_EXPANDED) {
            return '';
        }
        if ($course instanceof stdClass) {
            $course = new core_course_list_element($course);
        }
        if ($course->category != 3) {
            $content .= $this->course_overview_files($course);
        }
        $content .= \html_writer::start_tag('div', ['class' => 'd-flex card-body']);
        if ($course->category == 3) {
            $content .= $this->course_overview_files($course);
        }
        $content .= \html_writer::start_tag('div', ['class' => 'flex-grow-1']);
        $content .= $this->course_name($chelper, $course);
        $content .= $this->course_summary($chelper, $course);
        $content .= $this->course_contacts($course);
        $content .= $this->course_category_name($chelper, $course);
        $content .= $this->course_custom_fields($course);
        $content .= \html_writer::end_tag('div'); // .flex-grow-1
        $content .= \html_writer::end_tag('div'); // .card-body
        return $content;
    }

    /**
     * Renders the list of courses
     *
     * This is internal function, please use {@link core_course_renderer::courses_list()} or another public
     * method from outside of the class
     *
     * If list of courses is specified in $courses; the argument $chelper is only used
     * to retrieve display options and attributes, only methods get_show_courses(),
     * get_courses_display_option() and get_and_erase_attributes() are called.
     *
     * @param coursecat_helper $chelper various display options
     * @param array $courses the list of courses to display
     * @param int|null $totalcount total number of courses (affects display mode if it is AUTO or pagination if applicable),
     *     defaulted to count($courses)
     * @return string
     */
    protected function coursecat_courses(coursecat_helper $chelper, $courses, $totalcount = null) {
        global $CFG;

        $this->page->requires->js_call_amd('theme_ahnac/main', 'init');

        if ($totalcount === null) {
            $totalcount = count($courses);
        }
        if (!$totalcount) {
            // Courses count is cached during courses retrieval.
            return '';
        }

        if ($chelper->get_show_courses() == self::COURSECAT_SHOW_COURSES_AUTO) {
            // In 'auto' course display mode we analyse if number of courses is more or less than $CFG->courseswithsummarieslimit
            if ($totalcount <= $CFG->courseswithsummarieslimit) {
                $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_EXPANDED);
            } else {
                $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_COLLAPSED);
            }
        }

        // prepare content of paging bar if it is needed
        $paginationurl = $chelper->get_courses_display_option('paginationurl');
        $paginationallowall = $chelper->get_courses_display_option('paginationallowall');
        if ($totalcount > count($courses)) {
            // there are more results that can fit on one page
            if ($paginationurl) {
                // the option paginationurl was specified, display pagingbar
                $perpage = $chelper->get_courses_display_option('limit', $CFG->coursesperpage);
                $page = $chelper->get_courses_display_option('offset') / $perpage;
                $pagingbar = $this->paging_bar($totalcount, $page, $perpage,
                        $paginationurl->out(false, array('perpage' => $perpage)));
                if ($paginationallowall) {
                    $pagingbar .= html_writer::tag('div', html_writer::link($paginationurl->out(false, array('perpage' => 'all')),
                            get_string('showall', '', $totalcount)), array('class' => 'paging paging-showall'));
                }
            } else if ($viewmoreurl = $chelper->get_courses_display_option('viewmoreurl')) {
                // the option for 'View more' link was specified, display more link
                $viewmoretext = $chelper->get_courses_display_option('viewmoretext', new lang_string('viewmore'));
                $morelink = html_writer::tag(
                    'div',
                    html_writer::link($viewmoreurl, $viewmoretext, ['class' => 'btn btn-secondary']),
                    ['class' => 'paging paging-morelink']
                );
            }
        } else if (($totalcount > $CFG->coursesperpage) && $paginationurl && $paginationallowall) {
            // there are more than one page of results and we are in 'view all' mode, suggest to go back to paginated view mode
            $pagingbar = html_writer::tag('div', html_writer::link($paginationurl->out(false, array('perpage' => $CFG->coursesperpage)),
                get_string('showperpage', '', $CFG->coursesperpage)), array('class' => 'paging paging-showperpage'));
        }

        // display list of courses
        $attributes = $chelper->get_and_erase_attributes('courses');
        $content = html_writer::start_tag('div', $attributes);

        if (!empty($pagingbar)) {
            $content .= $pagingbar;
        }

        $content = html_writer::start_tag('div', ['class' => 'row']);

        $coursecount = 0;
        foreach ($courses as $course) {
            $coursecount ++;
            $classes = ($coursecount%2) ? 'odd' : 'even';
            if ($coursecount == 1) {
                $classes .= ' first';
            }
            if ($coursecount >= count($courses)) {
                $classes .= ' last';
            }
            if ($course->category != 3) {
                $classes .= ' col-md-4';
            } else {
                $classes .= ' col-md-6';
            }
            $content .= $this->coursecat_coursebox($chelper, $course, $classes);
        }

        $content .= html_writer::end_tag('div'); // .row

        if (!empty($pagingbar)) {
            $content .= $pagingbar;
        }
        if (!empty($morelink)) {
            $content .= $morelink;
        }

        $content .= html_writer::end_tag('div'); // .courses
        return $content;
    }

    /**
     * Renders HTML to display particular course category - list of it's subcategories and courses
     *
     * Invoked from /course/index.php
     *
     * @param int|stdClass|core_course_category $category
     */
    public function course_category($category) {
        global $CFG, $DB, $USER;
        $usertop = core_course_category::user_top();
        if (empty($category)) {
            $coursecat = $usertop;
        } else if (is_object($category) && $category instanceof core_course_category) {
            $coursecat = $category;
        } else {
            $coursecat = core_course_category::get(is_object($category) ? $category->id : $category);
        }
        $site = get_site();
        $actionbar = new \core_course\output\category_action_bar($this->page, $coursecat);
        $output = $this->render_from_template('core_course/category_actionbar', $actionbar->export_for_template($this));

        require_once($CFG->dirroot . '/user/profile/lib.php');
        $user_info_fields = profile_get_custom_fields(true);
        $dropdownoptions = [];

        foreach ($user_info_fields as $field) {
            $name = $field->name;
            $fieldid = $field->id;

            $sql = "SELECT DISTINCT data FROM {user_info_data} WHERE fieldid = :fieldid  AND userid = :userid";
            $params = ['fieldid' => $fieldid, 'userid' => $USER->id];
            $field_values = $DB->get_records_sql($sql, $params);
            foreach ($field_values as $value) {
                $dropdownoptions[$name] = $value->data;
            }
        }
        
        $query = "SELECT id, tagid, itemid FROM {tag_instance} WHERE itemtype='course'";
        $coursetags = $DB->get_records_sql($query);
        $taggroups = [];
        $params = $this->page->url->params();
        $categoryid = $params['categoryid'];
        foreach ($coursetags as $coursetag) {
            $course = get_course($coursetag->itemid);
            if ($course && $course->category == $categoryid) {
                $tagname = core_tag_tag::get($coursetag->tagid)->name;
                $tagnameparts = explode('_', $tagname, 2);
                if (count($tagnameparts) > 1) {
                    $keyword = $tagnameparts[0];
                    if (!isset($taggroups[$keyword])) {
                        $taggroups[$keyword] = [];
                    }
                    $taggroups[$keyword][$tagname][] = $coursetag->itemid;
                }
            }
        }
        $output .= html_writer::start_tag('div', ['class' => 'mb-5']);
        $filterdropdowns = '';
        foreach ($taggroups as $keyword => $tags) {
            $filterdropdowns .= html_writer::start_tag('select', ['class' => 'custom-select urlselect text-truncate mr-5', 'name' => $keyword]);
            $filterdropdowns .= html_writer::tag('option', 'Tous les ' . $keyword, ['value' => '']);
            foreach ($tags as $tagname => $courseids) {
                $courseidsstring = implode(',', $courseids);
                $attributes = ['value' => $tagname, 'data-course-ids' => $courseidsstring];
                if (isset($dropdownoptions[$keyword]) && str_ends_with($tagname, $dropdownoptions[$keyword])) {
                    $attributes['selected'] = 'selected';
                }
                $filterdropdowns .= html_writer::tag('option', $tagname, $attributes);
            }
            $filterdropdowns .= html_writer::end_tag('select');
        }
        $output .= $filterdropdowns;
        $output .= html_writer::end_tag('div'); // mb-5

        if (core_course_category::is_simple_site()) {
            // There is only one category in the system, do not display link to it.
            $strfulllistofcourses = get_string('fulllistofcourses');
            $this->page->set_title($strfulllistofcourses);
        } else if (!$coursecat->id || !$coursecat->is_uservisible()) {
            $strcategories = get_string('categories');
            $this->page->set_title($strcategories);
        } else {
            $strfulllistofcourses = get_string('fulllistofcourses');
            $this->page->set_title($strfulllistofcourses);
        }

        // Print current category description
        $chelper = new coursecat_helper();
        if ($description = $chelper->get_category_formatted_description($coursecat)) {
            $output .= $this->box($description, array('class' => 'generalbox info'));
        }

        // Prepare parameters for courses and categories lists in the tree
        $chelper->set_show_courses(self::COURSECAT_SHOW_COURSES_AUTO)
                ->set_attributes(array('class' => 'category-browse category-browse-'.$coursecat->id));

        $coursedisplayoptions = array();
        $catdisplayoptions = array();
        $browse = optional_param('browse', null, PARAM_ALPHA);
        $perpage = optional_param('perpage', $CFG->coursesperpage, PARAM_INT);
        $page = optional_param('page', 0, PARAM_INT);
        $baseurl = new moodle_url('/course/index.php');
        if ($coursecat->id) {
            $baseurl->param('categoryid', $coursecat->id);
        }
        if ($perpage != $CFG->coursesperpage) {
            $baseurl->param('perpage', $perpage);
        }
        $coursedisplayoptions['limit'] = $perpage;
        $catdisplayoptions['limit'] = $perpage;
        if ($browse === 'courses' || !$coursecat->get_children_count()) {
            $coursedisplayoptions['offset'] = $page * $perpage;
            $coursedisplayoptions['paginationurl'] = new moodle_url($baseurl, array('browse' => 'courses'));
            $catdisplayoptions['nodisplay'] = true;
            $catdisplayoptions['viewmoreurl'] = new moodle_url($baseurl, array('browse' => 'categories'));
            $catdisplayoptions['viewmoretext'] = new lang_string('viewallsubcategories');
        } else if ($browse === 'categories' || !$coursecat->get_courses_count()) {
            $coursedisplayoptions['nodisplay'] = true;
            $catdisplayoptions['offset'] = $page * $perpage;
            $catdisplayoptions['paginationurl'] = new moodle_url($baseurl, array('browse' => 'categories'));
            $coursedisplayoptions['viewmoreurl'] = new moodle_url($baseurl, array('browse' => 'courses'));
            $coursedisplayoptions['viewmoretext'] = new lang_string('viewallcourses');
        } else {
            // we have a category that has both subcategories and courses, display pagination separately
            $coursedisplayoptions['viewmoreurl'] = new moodle_url($baseurl, array('browse' => 'courses', 'page' => 1));
            $catdisplayoptions['viewmoreurl'] = new moodle_url($baseurl, array('browse' => 'categories', 'page' => 1));
        }
        $chelper->set_courses_display_options($coursedisplayoptions)->set_categories_display_options($catdisplayoptions);

        // Display course category tree.
        $output .= $this->coursecat_tree($chelper, $coursecat);

        return $output;
    }
}