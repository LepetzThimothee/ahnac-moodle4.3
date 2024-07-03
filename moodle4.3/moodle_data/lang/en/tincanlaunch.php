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
 * Strings for component 'tincanlaunch', language 'en', version '4.3'.
 *
 * @package     tincanlaunch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apCreationFailed'] = 'Failed to create Watershed Activity Provider.';
$string['appearanceheading'] = 'Appearance';
$string['badarchive'] = 'You must provide a valid zip file';
$string['badimsmanifestlocation'] = 'A tincan.xml file was found but it was not in the root of your zip file, please re-package your course';
$string['badmanifest'] = 'Some manifest errors: see errors log';
$string['checkcompletion'] = 'Check Completion';
$string['completiondetail:completionbyverb'] = 'Receive a "{$a}" statement';
$string['completiondetail:completionbyverbdesc'] = 'Student required to receive a <b>{$a}</b> statement.';
$string['completiondetail:completionexpiry'] = 'Completed within the last {$a} days';
$string['completiondetail:completionexpirydesc'] = 'Student must have completed within the last <b>{$a}</b> days.';
$string['completionexpiry'] = 'Expiry';
$string['completionexpirygroup'] = 'Completion expires after (days)';
$string['completionexpirygroup_help'] = 'This setting requires the "Completion by verb" setting enabled. Moodle will determine completion by filtering LRS statements stored within the last X days. It will unset completion for learners who had previously completed but whose completion has now expired.';
$string['completionverb'] = 'Verb';
$string['completionverbgroup'] = 'Completion by verb';
$string['completionverbgroup_help'] = 'Moodle will look for statements where the actor is the current user, the object is the specified activity id, and the verb is the one set here. If it finds a matching statement, the activity will be marked complete.';
$string['eventactivitycompleted'] = 'Activity completed';
$string['eventactivitylaunched'] = 'Activity launched';
$string['expirecredentials'] = 'Expire credentials';
$string['idmissing'] = 'You must specify a course_module ID or an instance ID';
$string['lrsdefaults'] = 'LRS Default Settings';
$string['lrsheading'] = 'Override default LRS settings';
$string['lrssettingdescription'] = 'By default, this activity uses the global LRS settings found in Site administration > Plugins > Activity modules > xAPI Launch Link. To change the settings for this specific activity, select Unlock Defaults.';
$string['modulename'] = 'xAPI Launch Link';
$string['modulename_help'] = 'A plug in for Moodle that allows the launch of xAPI (TinCan) content which is then tracked to a separate LRS.';
$string['modulenameplural'] = 'xAPI Launch Links';
$string['nomanifest'] = 'Incorrect file package - missing tincan.xml';
$string['overridedefaults'] = 'Unlock Defaults';
$string['overridedefaults_help'] = 'Allows activity to have different LRS settings than the site-wide, default LRS settings.';
$string['pluginadministration'] = 'xAPI Launch Link administration';
$string['pluginname'] = 'xAPI Launch Link';
$string['profilefields'] = 'User profile fields to sync to Agent Profile';
$string['profilefields_desc'] = 'If selected, the custom user profile fields selected will be sent to the LRS under the actors agent profile.';
$string['returntocourse'] = 'Return to course';
$string['returntoregistrations'] = 'Return to registrations table';
$string['tincanactivityid'] = 'Activity ID';
$string['tincanactivityid_help'] = 'The identifying IRI for the primary activity being launched. It <b>MUST</b> match the identifying IRI in the tincan.xml.';
$string['tincanlaunch'] = 'xAPI Launch Link';
$string['tincanlaunch:addinstance'] = 'Add a new xAPI activity to a course';
$string['tincanlaunch:view'] = 'View xAPI activity';
$string['tincanlaunch_attempt'] = 'Start New Registration';
$string['tincanlaunch_completed'] = 'Experience complete!';
$string['tincanlaunch_notavailable'] = 'The Learning Record Store is not available. Please contact a system administrator. If you are the system administrator, go to Site admin / Development / Debugging and set Debug messages to DEVELOPER. Set it back to NONE or MINIMAL once the error details have been recorded.';
$string['tincanlaunch_progress'] = 'Attempt launched in a new window. If you have closed that window, you can safely navigate away from this page.';
$string['tincanlaunch_regidempty'] = 'Registration id not found. Please close this window.';
$string['tincanlaunchcustomacchp'] = 'Custom account homepage';
$string['tincanlaunchcustomacchp_default'] = '';
$string['tincanlaunchcustomacchp_help'] = 'If entered, Moodle will use this homePage in conjunction with the ID number user profile field to identify the learner. If the ID number is not entered for a learner, they will instead be identified by email or Moodle ID number. Note: If a learner\'s id changes, they will lose access to registrations associated with former ids and completion data may be reset. Reports in your LRS may also be affected.';
$string['tincanlaunchlrsauthentication'] = 'LRS integration';
$string['tincanlaunchlrsauthentication_help'] = 'Use additional integration features to create new authentication credentials for each launch for supported LRSs.';
$string['tincanlaunchlrsauthentication_option_0'] = 'None';
$string['tincanlaunchlrsauthentication_option_1'] = 'Watershed';
$string['tincanlaunchlrsauthentication_option_2'] = 'Learning Locker 1';
$string['tincanlaunchlrsauthentication_watershedhelp'] = 'Note: for Watershed integration, the Activity Provider does not require API access enabled.';
$string['tincanlaunchlrsauthentication_watershedhelp_label'] = 'Watershed integration';
$string['tincanlaunchlrsduration'] = 'Duration';
$string['tincanlaunchlrsduration_default'] = '9000';
$string['tincanlaunchlrsduration_help'] = 'Used with \'LRS integrated basic authentication\'. Requests the LRS to keep credentials valid for this number of minutes.';
$string['tincanlaunchlrsendpoint'] = 'Endpoint';
$string['tincanlaunchlrsendpoint_default'] = '';
$string['tincanlaunchlrsendpoint_help'] = 'The LRS endpoint (e.g. http://lrs.example.com/endpoint/). Must include trailing forward slash.';
$string['tincanlaunchlrsfieldset'] = 'Default values for xAPI Launch Link activity settings';
$string['tincanlaunchlrsfieldset_help'] = 'These are site-wide, default values used when creating a new activity. Each activity has the ability to override and provide alternative values.';
$string['tincanlaunchlrslogin'] = 'Basic Login';
$string['tincanlaunchlrslogin_default'] = '';
$string['tincanlaunchlrslogin_help'] = 'Your LRS login key.';
$string['tincanlaunchlrspass'] = 'Basic Password';
$string['tincanlaunchlrspass_default'] = '';
$string['tincanlaunchlrspass_help'] = 'Your LRS password (secret).';
$string['tincanlaunchname'] = 'Launch link name';
$string['tincanlaunchname_help'] = 'The name of the launch link as it will appear to the user.';
$string['tincanlaunchurl'] = 'Launch URL';
$string['tincanlaunchurl_help'] = 'The full URL of the xAPI activity you want to launch.';
$string['tincanlaunchuseactoremail'] = 'Identify by email';
$string['tincanlaunchuseactoremail_help'] = 'If selected, learners will be identified by their email address if they have one recorded in Moodle.';
$string['tincanlaunchviewfirstlaunched'] = 'First launched';
$string['tincanlaunchviewlastlaunched'] = 'Last launched';
$string['tincanlaunchviewlaunchlink'] = 'Launch Existing Registration';
$string['tincanlaunchviewlaunchlinkheader'] = 'Launch link';
$string['tincanmultipleregs'] = 'Allow multiple registrations.';
$string['tincanmultipleregs_help'] = 'If selected, allow the learner to start more than one registration for the activity. If unchecked, only the most recent registration will be displayed. <b>This setting cannot be used when simplified launch is enabled.</b>';
$string['tincanpackage'] = 'Zip package';
$string['tincanpackage_help'] = 'If you have a packaged xAPI course, you can upload it here. If you upload a package, the Launch URL and Activity ID fields above will be automatically populated when you save using data from the tincan.xml file contained in the zip. You can edit these settings at any time, but should not change the Activity ID (either directly or by file upload) unless you understand the consequences.';
$string['tincanpackagetext'] = 'You can provide the Launch URL and Activity ID settings directly, or upload a zip package containing a tincan.xml file. The Activity ID must always be a full URL (or other IRI) AND it MUST match the Activity ID included in the tincan.xml or course.';
$string['tincanpackagetitle'] = 'Launch settings';
$string['tincansimplelaunchnav'] = 'Enable simplified launch';
$string['tincansimplelaunchnav_help'] = 'If selected, the user will bypass the registration screen and the course will be automatically launched using the most recent registration. If no prior registration is found, one will be created. <b>Enabling this setting will disable the multiple registrations setting.</b>';
