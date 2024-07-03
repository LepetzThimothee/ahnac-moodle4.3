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
 * Strings for component 'qtype_reacsimilarity', language 'en', version '4.3'.
 *
 * @package     qtype_reacsimilarity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alphaselection'] = 'Please select a value of alpha value. It will be used to modify the grade accordingly.';
$string['alphaselection_help'] = 'If alpha is equal to 1, the score is not modified. If it\'s superior to 1, the notation is more severe. If it\'s inferior to 1, the notation is less severe.';
$string['answer'] = 'Answer: {$a}';
$string['answernumber'] = 'Answer: {$a}';
$string['caseno'] = 'Stereo must not be taken in account';
$string['caseyes'] = 'Stereo must be taken in account';
$string['clearanswer'] = 'Clear the answer';
$string['connection-success'] = 'The connection has been successfully established.';
$string['connectiontestresult'] = 'Result of the connection test:';
$string['correctansweris'] = 'The correct answer is:';
$string['correctanswers'] = 'Correct answers';
$string['errorintestwhilegconnection'] = 'Error while testing the connection:';
$string['errorreac'] = 'You need to draw a reaction.';
$string['filloutoneanswer'] = 'You must provide at least one possible answer. Please draw a reaction and click on the "Insert given structure as answer/..." button for each answer.';
$string['formtest'] = 'Preview answer:';
$string['insertfrom'] = 'Answer\'s insertion';
$string['insertfrom_help'] = 'Draw a structure, and click on the \'Insert given structure as answer / update the answer with the structure\' button to insert it as answer. The \'View structure in the editor\' button can be used to check what is the structure stored for each answer. Click on the \'Clear the answer\' button and set the Grade to "None" to remove an answer.';
$string['insertfromeditor'] = 'Insert given structure as answer / update the answer with the structure';
$string['inserttoeditor'] = 'View structure in the editor';
$string['isidaKEY'] = 'ISIDA Server KEY';
$string['isidaKEY_desc'] = 'Key needed to access the external ISIDA marking server.';
$string['isidaurl'] = 'ISIDA Server Url';
$string['isidaurl_desc'] = 'External marking server ISIDA url to evaluate question answer';
$string['mailmsg'] = 'Reacsimilarity question type plugin server is down, please relaunch it. Curl error no: {$a->errno}. Curl error msg: {$a->error}';
$string['mailmsg_isidaerror'] = 'Reacsimilarity question type plugin server return an error<br> : {$a}';
$string['mailmsg_security'] = 'Someone is trying to access reacsimilarity correction server. Answer from the server: {$a}';
$string['mailsubj'] = 'Need to relaunch Reacsimilarity question type server';
$string['mailsubj_isidaerror'] = 'Reacsimilarity question type server return an error';
$string['mailsubj_security'] = 'Unauthorized attempt to connect to reacsimilarity correction server.';
$string['messageprovider:reacsimilarity_down'] = 'Notify that the correction server is down';
$string['messageprovider:reacsimilarity_security'] = 'Notify that there is an unauthorized attempt to access the server of correction';
$string['moleculeempty'] = 'Please insert a reaction';
$string['pleaseenterananswer'] = 'Please enter an answer';
$string['pluginname'] = 'Reacsimilarity';
$string['pluginname_help'] = 'In response to a question, the student may draw a reaction to be compared with the answer provided.';
$string['pluginname_link'] = 'question/type/reacsimilarity';
$string['pluginnameadding'] = 'Adding a reac similarity question';
$string['pluginnameediting'] = 'Editing a reac similarity question';
$string['pluginnamesummary'] = 'A reac similarity question type that allows the quantitative comparison between the answer given by the student and the one given by the teacher.';
$string['privacy:metadata'] = 'The reacsimilarity question type plugin does not store any personal data.';
$string['scaffoldselection'] = 'You can insert a scaffold for the student.';
$string['scaffoldselection_help'] = 'A scaffold will be inserted in the student\'s sketcher to help him.';
$string['settings'] = 'Reacsimilarity setting';
$string['stereoselection'] = 'Option stereochemistry';
$string['testconnection'] = 'Test the connection to the Reacsimilarity Api.';
$string['testerrorcode'] = 'Error code : {$a}.';
$string['testerrormessage'] = 'Error message : {$a}.';
$string['threshold'] = 'Please select a value of threshold. The answer is refused below this threshold.';
$string['threshold_help'] = 'If the grade to the power of alpha is superior or equal to the threshold, the grade is equal to the grade to the power of alpha. If not, the grade is equal to 0.';
