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
 * Strings for component 'quiz_group', language 'en', version '4.3'.
 *
 * @package     quiz_group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activatebygroup'] = 'Do quiz for group of student?';
$string['apply'] = 'Apply grades';
$string['canceledit'] = 'You have canceled the edition of group setting.';
$string['dispatchgrade_done'] = 'The group grades have been dispatch to the other groups member.';
$string['error_groupingquizsetting'] = 'The selected grouping for access and quiz must be the same.';
$string['group'] = 'Group quiz';
$string['group_attempt_already_created'] = 'An attempt for this Group quiz for your group : {$a}, already exist.';
$string['info_bygroup'] = 'Only one student per group answers the quiz questions. The grade is copied to all the members of the group using the second form below. <br/> If you need to change any grade in the test, you must use the Responses view and not the Gradebook. Then you can apply again the group grade to all the members of the group.';
$string['info_dispatchgrades'] = 'Apply the group grades to all the group members in the Gradebook. You can repeat this operation every time you edit a grade.';
$string['no_group_string'] = 'No grouping';
$string['no_grouping'] = 'Standard Quiz (no grouping)';
$string['pluginname'] = 'Group quiz';
$string['quiz_has_attempts'] = 'This quiz already has attempts. You can no longer update the group setting.';
$string['quizgroup'] = 'Group quiz';
$string['savechanges'] = 'Save';
$string['settings_edited'] = 'The quiz has been edited with the following grouping: {$a}';
$string['title_groupingselect'] = 'Choose the grouping for the quiz';
$string['titleapply'] = 'Transfer group grades';
$string['user_notin_grouping'] = 'You do not belong to the selected grouping for this Group Quiz. Please contact the manager of the quiz.';
$string['warning_group'] = 'Careful: <ul> <li>The group quiz uses a specific grouping. Make sure to give the appropriate access rule in the \'Restrict access\' section of the quiz main settings page. </li><li>If a student is in more than one groupe in the same grouping, the system will only consider his first affiliation.</li><li>Do not change the grouping if attempts exist for this quiz!</li></ul>';
