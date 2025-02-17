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
 * Strings for component 'tool_catalogue', language 'en', version '4.3'.
 *
 * @package     tool_catalogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutthiscourse'] = 'About this course';
$string['aboutthisprogram'] = 'About this program';
$string['all'] = 'All';
$string['allavailablecourses'] = 'All available courses';
$string['allowhtmltags'] = 'Allow HTML tags';
$string['aria:courseactions'] = 'Course actions';
$string['cachedef_filters'] = 'Learning catalogue search results and filters';
$string['catalogue'] = 'Catalogue';
$string['catalogue:config'] = 'Configure learning catalogue';
$string['catalogueisdisabled'] = 'Learning catalogue is disabled';
$string['cataloguesettings'] = 'My programs and courses catalogue settings';
$string['categories'] = 'Categories';
$string['categoriesdepthlimit'] = 'Maximum number of nested categories levels';
$string['categoriesdepthlimit_desc'] = 'Maximum number of nested categories levels in the category selector. Courses located on the deeper levels will still appear in the search results.';
$string['categorieslimit'] = 'Maximum number of same-level categories';
$string['categorieslimit_desc'] = 'Maximum number of categories of the same level in the category selector. Categories will be displayed in the same order they are defined in the Course management page. If there are more categories on one level, the categories will not be shown in the selector but all the courses will be visible in search results.';
$string['certifications'] = 'Certifications';
$string['certificationstatuscertified'] = 'The certification \'<strong>{$a->name}</strong>\' is completed';
$string['certificationstatuscertifiedwithdate'] = 'The certification \'<strong>{$a->name}</strong>\' is completed. It will expire on \'<strong>{$a->date}</strong>\'';
$string['certificationstatusexpired'] = 'The certification \'<strong>{$a->name}</strong>\' expired on {$a->date}';
$string['certificationstatusopen'] = 'The certification \'<strong>{$a->name}</strong>\' has no due date';
$string['certificationstatusopenwithdate'] = 'Complete this program by \'<strong>{$a->date}</strong>\' to get the certification \'<strong>{$a->name}</strong>\'';
$string['certificationstatusoverdue'] = 'The certification \'<strong>{$a->name}</strong>\' was due on \'<strong>{$a->date}</strong>\'';
$string['clearall'] = 'Clear all';
$string['complete'] = 'Completed';
$string['completeatleast'] = 'Complete at least {$a}';
$string['coursecoverhelp'] = 'This course is part of the \'{$a}\' program';
$string['coursecoverhelpmultiprogram'] = 'This course is part of some programs';
$string['coursecoverhelptext'] = '<ul><li>This is just one course inside larger programs</li><li>New courses could be available after completing this one</li></ul>';
$string['coursedisplayduelimit'] = 'Show days left for courses';
$string['coursedisplayduelimit_desc'] = 'Amount of days from which users will see a small reminder (X days left) next to the course name. For example, if set to 14, the reminder will be visible during the 14 days before the course reaches its conclusion date. In the case of many different conclusion dates, the system will evaluate which one is the next closest one. Set to 0 to disable this functionality.';
$string['coursefiles'] = 'Course files';
$string['courseimage_help'] = 'The course image.';
$string['coursenotavailable'] = 'Course not available';
$string['courses'] = 'Courses';
$string['coursesperpage_frontpage'] = 'Number of courses per page, site home page';
$string['coursesperpage_frontpage_desc'] = 'Number of courses to display on the site homepage when "List of courses" is included in the Site home items setting.';
$string['coursesperpage_main'] = 'Number of courses per page, main catalogue page';
$string['coursesperpage_main_desc'] = 'Number of courses to display on the main catalogue page before a category is selected or search query is given and before any filters applied.';
$string['coursesperpage_search'] = 'Number of courses per page, search results';
$string['coursesperpage_search_desc'] = 'Number of courses to display in the course search results or when category is selected.';
$string['dates'] = 'Dates';
$string['daysleft'] = '{$a} days left';
$string['defaultsortorder'] = 'Default sort order';
$string['display'] = 'Display';
$string['displaycourseinfomodal'] = 'Display course info modal';
$string['displayfields_desc'] = 'Please select all fields that need to be displayed as filters and arrange them in appropriate order. Not all types of custom fields can be used in filters.<br>Changes in table above are saved automatically.';
$string['displayfields_list'] = 'Fields to display in the \'list\' (detailed) view of learning catalogue';
$string['displayfields_tiles'] = 'Fields to display in the \'tiles\' (compact) view of learning catalogue';
$string['displayforeverybody'] = 'Display for everybody';
$string['displayfornotadmin'] = 'Display only for non admin users';
$string['displayforstudentsandguests'] = 'Display only during guest access and for students';
$string['displaynever'] = 'Never display';
$string['displayprogramcoverpage'] = 'Display program cover page';
$string['displaysummaryasis'] = 'Display as is';
$string['displaysummarynohtml'] = 'Display without HTML';
$string['displaysummarynone'] = 'Do not display';
$string['dontshowagain'] = 'Don\'t show this message again';
$string['duedate'] = 'Sort by conclusion date';
$string['duedateinfo'] = 'Due in 1 day';
$string['duedateinfodays'] = 'Due in {$a} days';
$string['duedatex'] = '<strong>Due date:</strong> {$a}';
$string['enablelearningcatalogue'] = 'Enable Learning Catalogue';
$string['enablelearningcatalogue_desc'] = 'Enable the Learning Catalogue in this site.';
$string['enddate'] = 'End date';
$string['enddatex'] = '<strong>End date:</strong> {$a}';
$string['errornopermissionviewcoursecover'] = 'No permission to view course cover page';
$string['errornopermissionviewprogram'] = 'No permission to view program';
$string['filterfields'] = 'Fields to display in the learning catalogue filter';
$string['hiddenfromlearners'] = 'Hidden from learners';
$string['htmltagsall'] = 'Allow any HTML tags';
$string['htmltagsnone'] = 'Strip all HTML tags';
$string['htmltagssafe'] = 'Only safe HTML tags';
$string['incomplete'] = 'Not completed';
$string['information'] = 'Information';
$string['iunderstand'] = 'I understand';
$string['lastaccess'] = 'Sort by last accessed';
$string['learningcataloguesettings'] = 'Learning catalogue settings';
$string['moreinfo'] = 'More information';
$string['mycourses'] = 'My courses';
$string['name'] = 'Sort by name';
$string['noresultsfor'] = 'No results for \'{$a}\'';
$string['notavailableunless'] = 'Not available unless \'<strong>{$a}</strong>\' is available';
$string['notavailableuntil'] = 'Not available until \'{$a}\' is completed';
$string['notnow'] = 'Not now';
$string['notset'] = 'Not set';
$string['overdue'] = 'Overdue';
$string['pluginname'] = 'Learning catalogue';
$string['privacy:metadata:preference:tool_catalogue_collapse_recently_accessed_courses'] = 'Whether to collapse the "Recently accessed courses" section';
$string['privacy:metadata:preference:tool_catalogue_hide_program_cover_help'] = 'Whether to show the program cover help';
$string['privacy:metadata:preference:tool_catalogue_my_courses_filter'] = 'Whether to filter the programs/courses by all/courses/programs/complete/incomplete';
$string['privacy:metadata:preference:tool_catalogue_my_courses_sort'] = 'Whether to sort the programs/courses by name/due date/last access';
$string['privacy:metadata:showprogramcoverhelp'] = 'Whether to show the program cover help';
$string['privacy:request:preference:set'] = 'The value of the setting \'{$a->name}\' was \'{$a->value}\'';
$string['proceedtocourse'] = 'Proceed to course content';
$string['proceedtoprogram'] = 'Proceed to program content';
$string['program'] = 'Program';
$string['programdisplayduelimit'] = 'Show days left until the program is due';
$string['programdisplayduelimit_desc'] = 'Amount of days from which users will see a small reminder (Due in X days) next to the program name. For example, if set to 14, the reminder will be visible during the 14 days before the program reaches its due date. Set to 0 to disable this functionality.';
$string['programempty'] = 'There are no courses in this program';
$string['programhelptext'] = '<ul><li>Programs can contain different courses</li><li>Complete the courses to complete the program</li></ul>';
$string['programhelptitle'] = 'What is a program?';
$string['programimage_help'] = 'The program image.';
$string['programlink'] = 'See "{$a}" details';
$string['programlinksingle'] = 'See program details';
$string['programs'] = 'Programs';
$string['programstructure'] = 'Program structure';
$string['progress'] = '{$a}% completed';
$string['progresscompleted'] = '{$a->completed} of {$a->total} completed';
$string['recentlyaccessedcourses'] = 'Recently accessed courses';
$string['resultsfor'] = '{$a->count} results for \'{$a->keywords}\'';
$string['safehtmltags'] = 'Safe HTML tags in summary and text fields';
$string['safehtmltags_desc'] = 'List of the HTML tags that should be kept when dispaying Course summary or course custom fields in the Learning catalogue. All other tags will be removed to ensure that course summaries do not break the layout of the catalogue.<br>Note that for course summaries HTML tags may not work well together with the \'Truncate\' setting.';
$string['searchplaceholder'] = 'Search courses or programs';
$string['selectenrolmentmethod'] = 'Select an enrolment method';
$string['showcataloguecoursecategory'] = 'Show course category in course cards';
$string['showcataloguecoursecategory_desc'] = 'The course category will be visible in every course card found in the ‘Dashboard’, ´My courses’ and some blocks.';
$string['showcoursedates'] = 'Show course dates in course modal';
$string['showcoursedates_desc'] = 'The course dates will be visible in the course modal and in the course information tab.';
$string['showmore'] = 'Show {$a} more...';
$string['startdate'] = 'Start date';
$string['startdatex'] = '<strong>Start date:</strong> {$a}';
$string['todo'] = 'To-do:';
$string['trainers'] = 'Trainers';
$string['truncatesummary'] = 'Truncate course summary';
$string['truncatesummary_desc'] = 'Maximum number of characters to show in the course summary when it is displayed. Set to 0 to not truncate.<br>This setting controls the text that is sent from the server to the browser. You can also opt for truncating individual fields directly in the browser using custom CSS.';
$string['trydifferentskeyword'] = 'Try using different keywords or filter configuration';
$string['xcourses'] = '{$a} courses';
