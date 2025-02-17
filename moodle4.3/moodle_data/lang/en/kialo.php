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
 * Strings for component 'kialo', language 'en', version '4.3'.
 *
 * @package     kialo
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptterms'] = 'Accept Terms of Service';
$string['acceptterms_desc'] = 'To enable the Kialo plugin you have to accept Kialo Edu’s <a href="{$a->terms}" target="_blank">Terms of Service</a> on behalf of all users of this Moodle instance. Here is a link to our <a href="{$a->privacy}" target="_blank">Privacy Policy</a> and to our <a href="{$a->data_security}" target="_blank">Data Security and Privacy Plan.</a>';
$string['cachedef_nonces'] = 'Used to store temporary nonces to secure LTI requests.';
$string['close_prompt'] = 'You can close this window now.';
$string['deploymentid'] = 'Discussion Linked';
$string['discussion_title'] = 'Discussion';
$string['errors:deeplinking'] = 'Something went wrong with the discussion selection. Please try again.';
$string['errors:invalidrequest'] = 'Invalid request';
$string['errors:ltiauth'] = 'Authentication failed due to an unexpected error. Please try again.';
$string['errors:missingcourseid'] = 'Missing course id';
$string['errors:missingdeploymentid'] = 'Missing deployment id';
$string['errors:missingidtoken'] = 'Missing id token';
$string['errors:missingsessiondata'] = 'Missing session data';
$string['errors:noguestaccess'] = 'Guests cannot access this activity. Please log in.';
$string['errors:nopermissiontoview'] = 'You do not have permission to view this activity.';
$string['errors:resourcelink'] = 'Activity cannot be displayed due to an unexpected error. Please try again.';
$string['groupmode_off_info'] = '<b>Please note that Moodle groups are currently <u>not</u> automatically supported.</b> (<a href="{$a->grouphelpcenterlink}">More info</a>)';
$string['groupmode_on_warning'] = '<b>Moodle groups are currently <u>not</u> automatically supported.</b> If you use the Kialo Moodle Plugin with a course that has multiple groups, <b>all</b> groups will find themselves in the <b>same</b> Kialo discussion.<br/><br/>To manually set up Kialo discussions for each of your groups, please follow the instructions in our <a href="{$a->grouphelpcenterlink}">help center</a>.<br/><br/>We will release automatic Moodle groups support in Q1 2024. <a href="{$a->pluginreleaseemailnotificationlink}">Submit your email address</a> to be notified when it is released.';
$string['hello'] = 'Hello World!';
$string['kialo:addinstance'] = 'Add a new Kialo Discussion';
$string['kialo:kialo_admin'] = 'Granted Admin rights in Kialo discussions';
$string['kialo:view'] = 'View Kialo discussions';
$string['kialofieldset'] = 'Kialo Fieldset';
$string['kialoname'] = 'Activity Name';
$string['kialosettings'] = 'Settings';
$string['modulename'] = 'Kialo Discussion';
$string['modulename_help'] = 'The Kialo Discussion activity allows you to include a Kialo discussion in your Moodle course. Students can participate in the discussion directly from Moodle, without having to manually create Kialo accounts. Kialo discussions are a great way to teach and train critical thinking, argumentation and to facilitate thoughtful classroom discussions.';
$string['modulename_link'] = 'https://support.kialo-edu.com/en/hc/moodle';
$string['modulenameplural'] = 'Kialo Discussions';
$string['pluginadministration'] = 'Edit Kialo Discussion';
$string['pluginname'] = 'Kialo Discussion';
$string['privacy:metadata:kialo'] = 'User data needs to be exchanged with Kialo Edu in order to automatically create accounts for Moodle users on kialo-edu.com, and to make the user experience as seamless as possible.';
$string['privacy:metadata:kialo:courseid'] = 'The ID of the user’s course.';
$string['privacy:metadata:kialo:email'] = 'The email address is sent from Moodle to allow you to access your data on Kialo Edu.';
$string['privacy:metadata:kialo:fullname'] = 'Your full name is sent to Kialo Edu to allow a better user experience.';
$string['privacy:metadata:kialo:language'] = 'Your language preference is sent to Kialo Edu to automatically set the user interface language.';
$string['privacy:metadata:kialo:nullproviderreason'] = 'No user data is stored by our plugin in the Moodle database. Any data we use is stored externally on kialo-edu.com.';
$string['privacy:metadata:kialo:picture'] = 'Your account avatar picture is sent to Kialo Edu to allow a better user experience.';
$string['privacy:metadata:kialo:role'] = 'The user’s role in the course is used to determine the correct permissions in the Kialo discussion.';
$string['privacy:metadata:kialo:timezone'] = 'Your time zone preference is sent to Kialo Edu to automatically set the user time zone.';
$string['privacy:metadata:kialo:userid'] = 'The userid is sent from Moodle to allow you to access your data on Kialo Edu.';
$string['privacy:metadata:kialo:username'] = 'The user name is sent from Moodle to set the default user name on Kialo Edu.';
$string['redirect_loading'] = 'Loading';
$string['redirect_title'] = 'Loading';
$string['select_discussion'] = 'Select Discussion';
$string['select_discussion_help'] = 'Opens Kialo in a new tab to select a discussion for this activity. You can create a Kialo account during this process if you don’t already have one.';
$string['termsnotaccepted'] = 'You have to accept Kialo’s <a href="{$a->terms}" target="_blank">Terms of Service</a> before you can enable the Kialo plugin.';
