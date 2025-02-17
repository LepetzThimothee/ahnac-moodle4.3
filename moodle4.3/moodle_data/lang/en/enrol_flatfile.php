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
 * Strings for component 'enrol_flatfile', language 'en', version '4.3'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'File encoding';
$string['expiredaction'] = 'Enrolment expiry action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['filelockedmail'] = 'The text file you are using for file-based enrolments ({$a}) can not be deleted by the cron process.  This usually means the permissions are wrong on it.  Please fix the permissions so that Moodle can delete the file, otherwise it might be processed repeatedly.';
$string['filelockedmailsubject'] = 'Important error: Enrolment file';
$string['flatfile:manage'] = 'Manage user enrolments manually';
$string['flatfile:unenrol'] = 'Unenrol users from the course manually';
$string['flatfileenrolments'] = 'Flat file (CSV) enrolments';
$string['flatfilesync'] = 'Flat file enrolment sync';
$string['location'] = 'File location';
$string['location_desc'] = 'Specify full path to the enrolment file. The file is automatically deleted after processing.';
$string['mapping'] = 'Flat file role mapping';
$string['messageprovider:flatfile_enrolment'] = 'Flat file enrolment messages';
$string['notifyadmin'] = 'Notify administrator';
$string['notifyenrolled'] = 'Notify enrolled users';
$string['notifyenroller'] = 'Notify user responsible for enrolments';
$string['pluginname'] = 'Flat file (CSV)';
$string['pluginname_desc'] = 'This method will repeatedly check for and process a specially-formatted text file in the location that you specify.
The file is a comma separated file assumed to have four or six fields per line:

    operation, role, user idnumber, course idnumber [, starttime [, endtime]]

where:

* operation - add | del
* role - student | teacher | teacheredit
* user idnumber - idnumber in the user table NB not id
* course idnumber - idnumber in the course table NB not id
* starttime - start time (in seconds since epoch) - optional
* endtime - end time (in seconds since epoch) - optional

It could look something like this:
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'The Flat file (CSV) enrolment plugin may store personal data relating to future enrolments in the enrol_flatfile table.';
$string['privacy:metadata:enrol_flatfile:action'] = 'The enrolment action expected on the given date';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'The course ID to which the enrolment relates';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'The ID of the role to be assigned or unassigned';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'The time when the enrolment ends';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'The time when the enrolment is modified';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'The time when the enrolment starts';
$string['privacy:metadata:enrol_flatfile:userid'] = 'The ID of the user to which the role assignment relates';
