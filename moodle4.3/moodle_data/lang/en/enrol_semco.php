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
 * Strings for component 'enrol_semco', language 'en', version '4.3'.
 *
 * @package     enrol_semco
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bookingidduplicate'] = 'There is already an enrolment instance with this SEMCO booking ID ({$a}).';
$string['bookingidduplicatemustchange'] = 'There is already an enrolment instance with this SEMCO booking ID ({$a}). If you want to edit the enrolment without changing the SEMCO booking ID, simply do not pass the booking ID as parameter. If you want to edit the enrolment and change the SEMCO booking ID, make sure that you do not set it to an ID which exists somewhere else in the system already.';
$string['bookingidempty'] = 'The SEMCO booking ID field must not be empty.';
$string['bookingoverlap'] = 'There is already an enrolment instance with an enrolment period which overlaps with the given enrolment period. However, overlapping enrolment periods are not supported.';
$string['coursenotexist'] = 'The given course ({$a}) does not exist.';
$string['enrolnoinstance'] = 'The SEMCO enrolment plugin instance associated to the given user enrolment instance ({$a}) does not exist.';
$string['enrolnouserinstance'] = 'The given user enrolment instance ({$a}) does not exist.';
$string['getcoursecompletionsmaxrequest'] = 'You passed more than the maximum amount of enrolment IDs (which is {$a}).';
$string['installer_addedusertorole'] = 'The role \'SEMCO webservice\' was assigned to the user \'SEMCO webservice\' automatically.';
$string['installer_addedusertoservice'] = 'The user \'SEMCO webservice\' was added to the SEMCO webservice as allowed user automatically.';
$string['installer_createdprofilefield1'] = 'The user profile field \'SEMCO user ID\' was created and properly configured automatically. This user profile field is used for Moodle users which are created by the SEMCO webservice.';
$string['installer_createdprofilefield2'] = 'The user profile field \'SEMCO user company\' was created and properly configured automatically. This user profile field is used for Moodle users which are created by the SEMCO webservice.';
$string['installer_createdprofilefield3'] = 'The user profile field \'SEMCO user birthday\' was created and properly configured automatically. This user profile field is used for Moodle users which are created by the SEMCO webservice.';
$string['installer_createdprofilefield4'] = 'The user profile field \'SEMCO user place of birth\' was created and properly configured automatically. This user profile field is used for Moodle users which are created by the SEMCO webservice.';
$string['installer_createdprofilefield5'] = 'The user profile field \'SEMCO tenant shortname\' was created and properly configured automatically. This user profile field is used for Moodle users which are created by the SEMCO webservice.';
$string['installer_createdprofilefieldcategory'] = 'The user profile field category \'SEMCO\' was created and properly configured automatically. This user profile field category is used to hold multiple user profile fields related to Moodle users which are created by the SEMCO webservice.';
$string['installer_createdrole'] = 'The role \'SEMCO webservice\' was created and properly configured automatically. This role is used for the SEMCO webservice user in Moodle.';
$string['installer_createduser'] = 'The user \'SEMCO webservice\' was created automatically. This user is used to create the webservice token for SEMCO.';
$string['installer_createdusertoken'] = 'A webservice token was created automatically for the user \'SEMCO webservice\'. You can view it on the plugin\'s settings page.';
$string['installer_enabledauth'] = 'Moodle\'s webservice auth method has been enabled automatically to allow SEMCO to communicate with Moodle via webservices.';
$string['installer_enabledplugin'] = 'The SEMCO enrolment plugin has been enabled automatically.';
$string['installer_enabledrest'] = 'Moodle\'s webservice REST protocol has been enabled automatically to allow SEMCO to communicate with Moodle via webservices.';
$string['installer_enabledws'] = 'Moodle\'s webservice subsystem has been enabled automatically to allow SEMCO to communicate with Moodle via webservices.';
$string['installer_finalnotenoproblems'] = 'SEMCO should be able to communicate with Moodle now.';
$string['installer_finalnotewithproblems'] = 'As there were issues with the automatic configuration in the previous steps, SEMCO might not be able to communicate with Moodle yet. Please double-check all configurations manually.';
$string['installer_notcreatedprofilefield1'] = 'The user profile field \'SEMCO user ID\' could not be created and properly configured automatically as it seems to exist already. Please verify the user field configuration manually.';
$string['installer_notcreatedprofilefield2'] = 'The user profile field \'SEMCO user company\' could not be created and properly configured automatically as it seems to exist already. Please verify the user field configuration manually.';
$string['installer_notcreatedprofilefield3'] = 'The user profile field \'SEMCO user birthday\' could not be created and properly configured automatically as it seems to exist already. Please verify the user field configuration manually.';
$string['installer_notcreatedprofilefield4'] = 'The user profile field \'SEMCO user place of birth\' could not be created and properly configured automatically as it seems to exist already. Please verify the user field configuration manually.';
$string['installer_notcreatedprofilefield5'] = 'The user profile field \'SEMCO tenant shortname\' could not be created and properly configured automatically as it seems to exist already. Please verify the user field configuration manually.';
$string['installer_notcreatedrole'] = 'The role \'SEMCO webservice\' could not be created and properly configured automatically as it seems to exist already. Please verify the role configuration manually.';
$string['installer_notcreateduser'] = 'The user \'SEMCO webservice\' could not be created automatically as it seems to exist already. Please verify the user configuration manually.';
$string['installer_queuedcapabilitytask'] = 'The necessary capability \'webservice/rest:use\' could not be added to the role \'SEMCO webservice\' during the initial installation of Moodle as this capability did not exist yet (the webservice subsystem will be installed after this plugin). An ad-hoc task was queued to add this capability automatically as soon as the Moodle cron is running for the first time.';
$string['installer_roledescription'] = 'This is an internal role which has the single purpose to assign all necessary capabilities to the SEMCO webservice user. Do not assign this role to any other (especially not human) user.';
$string['installer_rolename'] = 'SEMCO webservice';
$string['installer_userfield1fullname'] = 'SEMCO User ID';
$string['installer_userfield2fullname'] = 'SEMCO User company';
$string['installer_userfield3fullname'] = 'SEMCO User birthday';
$string['installer_userfield4fullname'] = 'SEMCO User place of birth';
$string['installer_userfield5fullname'] = 'SEMCO Tenant shortname';
$string['installer_userfirstname'] = 'SEMCO';
$string['installer_userlastname'] = 'Webservice';
$string['instance_namewithbookingid'] = 'SEMCO [Booking ID: {$a}]';
$string['instance_namewithoutbookingid'] = 'SEMCO';
$string['notification_missedcoursereset_bodyheader'] = 'ATTENTION! For the following course enrolments, the course completion was not reset as cron did not run timely enough:';
$string['notification_missedcoursereset_bodyline'] = 'User ID {$a->userid} in course ID {$a->courseid} with SEMCO booking ID {$a->semcobookingid} starting at {$a->timestart}.';
$string['notification_missedcoursereset_subj'] = 'Missed course completion reset';
$string['pluginname'] = 'SEMCO';
$string['privacy:metadata'] = 'The SEMCO enrolment plugin does not store any personal data.';
$string['semco:editenrolment'] = 'Edit an existing SEMCO user enrolment';
$string['semco:enrol'] = 'Enrol SEMCO users into a course';
$string['semco:getcoursecompletions'] = 'Get the course completions for given SEMCO user enrolments';
$string['semco:getenrolments'] = 'Get the existing SEMCO user enrolments from a course';
$string['semco:receiveresetnotifications'] = 'Receive course completion reset notifications';
$string['semco:unenrol'] = 'Unenrol SEMCO users from a course';
$string['semco:usewebservice'] = 'Use the SEMCO enrolment webservices';
$string['semcopluginnotenabled'] = 'The SEMCO enrolment plugin is not enabled currently.';
$string['semcopluginnotinstalled'] = 'The SEMCO enrolment plugin has not yet been installed.';
$string['settings_connectioninfoheading'] = 'Connection information';
$string['settings_coursecompletionheading'] = 'Course completion';
$string['settings_coursecompletionnotfound'] = '<p>The SEMCO enrolment plugin is able to reset a user\'s course completion if he gets enrolled into a particular course by SEMCO once more.<br />
To realize this course completion reset and to avoid to re-invent the wheel, this plugin has a soft dependency to <a href="https://moodle.org/plugins/local_recompletion">local_recompletion</a> by Dan Marsden.</p><p>
Please install local_recompletion with at least version 2023111402 alongside this plugin if you plan to use subsequent user enrolments into the same course and need to reset course completion.<br />
If you do not need plan to reset course completion, you do not need to install local_recompletion.</p>';
$string['settings_enrolmentheading'] = 'Enrolment process';
$string['settings_notifyonmissedreset'] = 'Notify on missed course completion reset';
$string['settings_notifyonmissedreset_desc'] = 'As resetting a course\'s completion must happen before the particular enrolment period starts, the success of this reset depends on the fact that cron runs without problems. If there are any problems with cron and the time frame to reset course completion is missed, the course is not reset anymore. Instead, an information message is set to the configured user(s).';
$string['settings_resetcoursecompletion'] = 'Reset course completion on subsequent enrolments';
$string['settings_resetcoursecompletion_desc'] = 'With this setting, you control if the course completion of a user is reset if he is enrolled into a particular course once more by SEMCO. If this setting is disabled, course completion is not touched at all. If this setting is enabled, the course completion is reset by a scheduled task before the next enrolment period starts.';
$string['settings_resetcoursecompletion_note'] = 'Please note: This setting just triggers the manual course recompletion which is provided by the <a href="{$a->url}">course recompletion plugin</a>. It\'s still up to the individual teachers to configure course recompletion in their courses according to the individual needs and to set the course\'s recompletion type to \'{$a->ondemand}\'.';
$string['settings_resetleadtime'] = 'Course completion reset lead time';
$string['settings_resetleadtime_desc'] = 'With this setting, you control the time between the course completion reset and the start of a particular enrolment period. Please choose the setting which matches your enrolment processes best. However, please note the explanations on the following setting \'Notify on missed course completion reset\' as well. Against this background, a longer lead time is generally preferred over a shorter time.';
$string['settings_role'] = 'Role';
$string['settings_role_desc'] = 'With this setting, you control with which role SEMCO enrols users into courses. The configured role is mandatory for all users who are enrolled from SEMCO and cannot be overridden with the SEMCO enrolment webservice endpoint. Please note as well that changes of this setting will not have any effect on existing enrolments.';
$string['settings_tokeninfo'] = 'Webservice token';
$string['settings_tokeninfofound'] = 'The webservice token for the SEMCO webservice user is:<br /><strong>{$a}</strong><br />Please use this webservice token to configure the Moodle connection in SEMCO.';
$string['settings_tokeninfononefound'] = 'No existing webservice token was found for the SEMCO webservice user. Please create a token manually.';
$string['settings_wwwrootinfo'] = 'Moodle base URL';
$string['settings_wwwrootinfofound'] = 'The Moodle base URL for the SEMCO webservice connection is:<br /><strong>{$a}</strong><br />Please use this Moodle base URL to configure the Moodle connection in SEMCO.';
$string['task_cleanorphaned'] = 'Clean orphaned SEMCO enrolment instances.';
$string['task_resetcoursecompletion'] = 'Reset course completion on subsequent enrolments.';
$string['timeendinvalid'] = 'The Timeend field must be greater than or equal to zero.';
$string['timestartendorder'] = 'The Timestart field must not be greater than the Timeend field.';
$string['timestartinvalid'] = 'The Timestart field must be greater than or equal to zero.';
$string['uninstaller_remainenabled'] = 'The SEMCO enrolment plugin is removed and will not need Moodle\'s webservice subsystem and webservice auth method anymore. However, as the plugin uninstaller does not know, if any other plugins or features still need it, both will remain enabled. Please disable them manually if you do not need them anymore.';
$string['uninstaller_removedprofilefields'] = 'The user profile fields for \'SEMCO\' were removed automatically.';
$string['uninstaller_removedrole'] = 'The role \'SEMCO webservice\' was removed automatically.';
$string['uninstaller_removeduser'] = 'The user \'SEMCO webservice\' was removed automatically.';
$string['updater_2023092601_addcapability'] = 'The capabilities \'enrol/semco:getcoursecompletions\', \'moodle/course:viewhiddencourses\' and \'moodle/grade:viewall\' were added to the role \'SEMCO webservice\' during the plugin update.';
$string['updater_2023092605_addprofilefield'] = 'The profile field \'SEMCO User company\' was created and properly configured automatically during the plugin update.';
$string['updater_2023092606_addprofilefield3'] = 'The profile field \'SEMCO User birthday\' was created and properly configured automatically during the plugin update.';
$string['updater_2023092606_addprofilefield4'] = 'The profile field \'SEMCO User place of birth\' was created and properly configured automatically during the plugin update.';
$string['updater_2023092608_addprofilefield5'] = 'The profile field \'SEMCO Tenant shortname\' was created and properly configured automatically during the plugin update.';
$string['updater_2023092610_fixprofilefield4'] = 'The profile field \'SEMCO User place of birth\' was created with an incorrect shortname during a previous update of this plugin. This resulted in the fact that SEMCO could not write into this new user profile field.';
$string['updater_2023092610_fixprofilefield4fail'] = 'The installer has tried to change the shortname of the field with an upgrade step now, but it failed. Please go to the user profile fields management page, search for the \'SEMCO User place of birth\' field and change the shortname to \'semco_userplaceofbirth\'';
$string['updater_2023092610_fixprofilefield4succ'] = 'The shortname of the field was changed with an upgrade step now.';
$string['usernotexist'] = 'The given user ({$a}) does not exist.';
$string['wsusercannotassign'] = 'You don\'t have the permission to assign this role ({$a->roleid}) to this user ({$a->userid}) in this course ({$a->courseid}).';
