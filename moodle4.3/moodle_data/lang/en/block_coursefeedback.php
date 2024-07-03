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
 * Strings for component 'block_coursefeedback', language 'en', version '4.3'.
 *
 * @package     block_coursefeedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminpage_html_allowhidinga'] = 'Allow hiding';
$string['adminpage_html_allowhidingb'] = 'If enabled, teachers can edit the visibility of the block.';
$string['adminpage_html_defaultlanguagea'] = 'Default language';
$string['adminpage_html_defaultlanguageb'] = 'Questions in the default language will be shown, if other languages fail to load (i.e. if questions in a user-prefered language aren\'t defined). That means you must at least define all questions in the default language!';
$string['adminpage_html_fbactiveforcoursesa'] = 'Max. time past since coursestart.';
$string['adminpage_html_fbactiveforcoursesb'] = 'Determines the time boundary pperiod since coursestart.';
$string['adminpage_html_globalenablea'] = 'If enabled, the block will appear in every course';
$string['adminpage_html_globalenableb'] = 'If disabled, the block will be removed from every course';
$string['adminpage_html_notinstalled'] = '\'{$a}\' (not installed)';
$string['adminpage_link_feedbackedit'] = 'edit/create survey';
$string['categorypath'] = 'Category path';
$string['caution'] = 'Warning';
$string['coursefeedback:addinstance'] = 'Add this block to course site';
$string['coursefeedback:download'] = 'Save result of the current coursefeedback into a file';
$string['coursefeedback:evaluate'] = 'Evaluate current coursefeedback';
$string['coursefeedback:managefeedbacks'] = 'Edit global settings of the coursefeedback block';
$string['coursefeedback:myaddinstance'] = 'Add this block to "My home"  page (since it is useless there, it should be forbidden for everyone)';
$string['coursefeedback:viewanswers'] = 'See the analysis of the current coursefeedback';
$string['download_html_filename'] = 'Results';
$string['download_thead_questions'] = 'Question';
$string['eventviewed'] = 'Results viewed';
$string['except_answer_exist'] = 'Answer for this question already exist';
$string['except_block_duplicate'] = 'More than one coursefeedbackblock in the course';
$string['except_block_hidden'] = 'Coursefeedback block in this course is hidden';
$string['except_invalid_courseid'] = 'Invalid course id';
$string['except_no_question'] = 'Feedback or question does not exist';
$string['except_not_active'] = 'Given feedback not active at the monent';
$string['form_area_questiontext'] = 'Edit text';
$string['form_button_downloadfb'] = 'Download rankings for the selected feedback';
$string['form_button_downloadqu'] = 'Download rankings for the selected question';
$string['form_copyof'] = 'Copy';
$string['form_feedback_infotext'] = 'Feedback info text';
$string['form_feedback_infotext_help'] = 'This text is used as userinformation about the feedback, it should contain a headline and all necessary information in all required languages';
$string['form_header_addlang'] = 'Add a text for another language';
$string['form_header_confirm'] = 'Confirmation necessary';
$string['form_header_deleteanswers'] = 'Delete user answers';
$string['form_header_deletelang'] = 'Delete language(s)';
$string['form_header_editfeedback'] = 'Edit survey';
$string['form_header_editquestion'] = 'Edit question';
$string['form_header_newfeedback'] = 'New survey';
$string['form_header_newquestion'] = 'New question';
$string['form_header_question'] = 'Question {$a}';
$string['form_header_ranking'] = 'Rankingsettings';
$string['form_html_currentlang'] = 'You are editting {$a}';
$string['form_html_deleteanswerstext'] = 'The questionaire cannot be edited at present, as user answers exist already. You can delete all responses now or copy the feedback.';
$string['form_html_deleteanswerswarning'] = 'This data will be irretrievably lost upon deletion of the user answers. <br/>Please ensure yourself that this data is not required anymore';
$string['form_html_nolangimplemented'] = 'This feedback has no implemented languages.';
$string['form_html_notextendable'] = 'You cannot extend this question, because there are no additional languages available.';
$string['form_notif_heading'] = 'Notification heading';
$string['form_option_choose'] = 'Please choose';
$string['form_select_changepos'] = 'Determine new position';
$string['form_select_confirmyesno'] = 'Do you really want to delete?';
$string['form_select_deleteanswers'] = 'Delete user answers?';
$string['form_select_feedback'] = 'Choose a feedback';
$string['form_select_newlang'] = 'Language';
$string['form_select_question'] = 'Choose a question';
$string['form_select_unwantedlang'] = 'Choose language <br/><span style="font-size: x-small;">(multiple choise possible)<span>';
$string['infopage_headline_feedbackinfo'] = 'Feedback info';
$string['infopage_html_coursestartcountd'] = 'Feedback is active if  not more time than {$a} days since coursestart have past.';
$string['infopage_link_feedbackinfo'] = 'More information';
$string['notif_deactivate_howto'] = 'You can deactivate the poll by hiding the "Course feedback" block.';
$string['notif_emoji_bad'] = 'deficient';
$string['notif_emoji_good'] = 'good';
$string['notif_emoji_neutral'] = 'sufficient';
$string['notif_emoji_ok'] = 'satisfactory';
$string['notif_emoji_super'] = 'very good';
$string['notif_emoji_superbad'] = 'insufficient';
$string['notif_feedbackactive'] = 'A user feedback poll is currently active in this course.';
$string['notif_pleaseclick'] = 'Please choose one of the emojis. Your answer is anonymous.';
$string['notif_question'] = 'Question';
$string['notif_thankyou'] = 'Thank you for your feedback &#128522;';
$string['page_headline_admin'] = 'Course feedback Administration';
$string['page_headline_listoffeedbacks'] = 'List of surveys';
$string['page_headline_listofquestions'] = 'Questionnaire of \'{$a}\'';
$string['page_html_activated'] = 'Course feedback ({$a}) has been registered as the current survey.';
$string['page_html_answersdeleted'] = 'The user answers have been deleted.';
$string['page_html_courserating'] = 'Course rating';
$string['page_html_editallquestions'] = 'Apply to all languages';
$string['page_html_intronotifications'] = 'This feedback has to fullfill the following condition(s):';
$string['page_html_nofeedbackactive'] = 'Surveys have been deactivated.';
$string['page_html_noquestions'] = 'No questions available.';
$string['page_html_norelations'] = 'All questions have to be defined in at least one common language.';
$string['page_html_saveerr'] = 'An error has occurred while saving your evaluation.';
$string['page_html_servedefaultlang'] = 'All questions should be defined in default language.';
$string['page_html_viewintro'] = 'Survey analysis. The result shows the number of votes for each grade and the average.';
$string['page_html_viewnavbar'] = 'Analysis of the survey';
$string['page_html_wasactive'] = 'was active before';
$string['page_link_backtoconfig'] = 'Back to website administration';
$string['page_link_backtofeedbackview'] = 'Back to overview';
$string['page_link_deletelanguage'] = 'Delete language(s)';
$string['page_link_download'] = 'Save results as {$a}-file';
$string['page_link_newlanguage'] = 'Add different language';
$string['page_link_newquestion'] = 'Add new question';
$string['page_link_newtemplate'] = 'Create new survey';
$string['page_link_noquestion'] = 'No questions available - create a new question.';
$string['page_link_rankings'] = 'Rankings';
$string['page_link_settings'] = 'Administration';
$string['page_link_showlistofquestions'] = 'Edit questions';
$string['page_link_use'] = 'Use';
$string['page_link_viewresults'] = 'Questions and results';
$string['perm_header_editnotpermitted'] = 'The survey can not be changed due to the following reasons:';
$string['perm_html_answersexists'] = 'This feedback has already been completed by users.';
$string['perm_html_danswerslink'] = 'To create a new survey with the same questions, you can <a href="admin.php?fid={$a}&mode=feedback&action=new">copy the feedback</a> or <a href="admin.php?fid={$a}&mode=feedback&action=danswers">delete the user answers</a>.';
$string['perm_html_duplicatelink'] = 'To create a new survey with the same questions, you can <a href="admin.php?fid={$a}&mode=feedback&action=new">copy the survey</a> or register another questionnaire as the current survey.';
$string['perm_html_erroractive'] = 'You can not change the current survey.';
$string['perm_html_wasactive'] = 'The feedback was active before -> reactivation not possible. To reuse this feedback you need to make a copy.';
$string['pluginname'] = 'Course feedback';
$string['resultspage_headline'] = 'List of all answered feedbacks for this course';
$string['resultspage_howto'] = 'Click on the name of the feedback to display questions and results.';
$string['resultspage_nav_extension'] = 'Coursefeedback results';
$string['resultspage_title'] = 'Feedbackresults';
$string['table_header_languages'] = 'Available languages';
$string['table_header_questions'] = 'Questions';
$string['table_html_average'] = 'Average';
$string['table_html_nochoice'] = 'Abstentions';
$string['table_html_nofeedback'] = 'No survey';
$string['table_html_undefinedlang'] = 'Translation missing. Language \'{$a}\' unavailable.';
$string['table_html_votes'] = 'Number of votes';
$string['untitled'] = 'Untitled';
