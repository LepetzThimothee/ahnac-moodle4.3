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
 * Strings for component 'gamoteca', language 'en', version '4.3'.
 *
 * @package     gamoteca
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completionscorerequired'] = 'Game score required';
$string['completionscorerequired_help'] = 'Gamoteca game score required to mark this activity as complete';
$string['completionstatus'] = 'Passed';
$string['completionstatusrequired'] = 'Game status required';
$string['completionstatusrequired_help'] = 'Gamoteca game status required to mark this activity as complete';
$string['defaultscore'] = 'NA';
$string['defaultstatus'] = 'Not started';
$string['defaulttimespent'] = 'NA';
$string['event:gamoteca_created'] = 'Gamoteca created';
$string['event:gamoteca_created_desc'] = 'The gamoteca module with moduleid {$a->coursemoduleid} in course {$a->courseid} has been created.';
$string['event:gamoteca_deleted'] = 'Gamoteca deleted';
$string['event:gamoteca_deleted_desc'] = 'The gamoteca module with moduleid {$a->coursemoduleid} in course {$a->courseid} has been deleted.';
$string['event:gamoteca_updated'] = 'Gamoteca updated';
$string['event:gamoteca_updated_desc'] = 'The gamoteca module with moduleid {$a->coursemoduleid} in course {$a->courseid} has been updated.';
$string['gameotecatextmobile'] = 'Gamoteca game will be launched in the Gamoteca app. For an optimal experience, download the Gamoteca app from the app store before launching the game.';
$string['gameotecatextmobilepost'] = 'Note: Once you Register or Sign in on Gamoteca, your account will be linked to Moodle and your game progress and completion will be updated here too.';
$string['gamoteca:addinstance'] = 'Add link to a game on Gamoteca';
$string['gamoteca:view'] = 'View link to game on Gamoteca';
$string['gamotecaLinkTitlePrefix'] = '[Launch]';
$string['gamotecanote'] = '<strong>Note</strong>: Once you Register or Sign in on Gamoteca, your account will be linked to this platform and your game progress and completion will be updated here too.';
$string['gamotecaurl'] = 'Gamoteca game URL';
$string['gamotecaurl_help'] = 'URL to the game on Gamoteca';
$string['invalidurl'] = 'Entered URL is invalid. Should start with http:// or https://';
$string['modulename'] = 'Gamoteca';
$string['modulename_help'] = 'The Gamoteca activity module allows for the integration of learning games developed on Gamoteca.com into your courses';
$string['modulenameplural'] = 'Gamoteca';
$string['name'] = 'Gamoteca game';
$string['name_help'] = 'Gamoteca game title';
$string['openednewwindow'] = 'The Gamoteca learning experience (game) has been opened in a new window.';
$string['pluginadministration'] = 'Gamoteca administration';
$string['pluginname'] = 'Gamoteca';
$string['privacy:metadata:gameid'] = 'ID of Moodle module';
$string['privacy:metadata:gamotecadata'] = 'Information about Gamoteca game progress';
$string['privacy:metadata:gamotecadata_timecreated'] = 'Timestamp of when the game progress was added';
$string['privacy:metadata:gamotecadata_timemodified'] = 'Timestamp of when the game progress last modified';
$string['privacy:metadata:gamotecadataid'] = 'Unique ID of the Gamoteca game progress';
$string['privacy:metadata:lti_client'] = 'In order to integrate with a remote LTI service, user data needs to be exchanged with that service.';
$string['privacy:metadata:lti_client:courseid'] = 'The course ID is sent from Moodle to link progress.';
$string['privacy:metadata:lti_client:moduleid'] = 'The module ID is sent from Moodle to link progress.';
$string['privacy:metadata:lti_client:siteshortname'] = 'Moodle site\'s short name is sent from Moodle to associate with correct Gamoteca pro/enterprise account.';
$string['privacy:metadata:lti_client:userid'] = 'The user ID is sent from Moodle to allow you to associate the account on Gamoteca.';
$string['privacy:metadata:score'] = 'The number of points achieved in the Gamoteca game';
$string['privacy:metadata:timespent'] = 'Time spent by the learner since the last progress update';
$string['privacy:metadata:userid'] = 'User ID of the Moodle user';
$string['usergamestate'] = 'Status: {$a->status} / Score: {$a->score} / Time spent: {$a->timespent}';
