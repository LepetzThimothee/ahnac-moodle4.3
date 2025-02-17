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
 * Strings for component 'tool_resetpasswords', language 'en', version '4.3'.
 *
 * @package     tool_resetpasswords
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Action';
$string['csvdelimiter'] = 'CSV separator';
$string['emailbodyhtml'] = '<div> Hi {$a->userfullname} , <br/>
Your user account password at <b> {$a->sitename} </b> has been reset by admin.
<br/> Your current login information is:
<br/><br/>
Username: {$a->username} <br/>
Password: {$a->password} <br/><br/>
URL: {$a->URL}
</div>';
$string['emailsender'] = '{$a->siteshortname} Site Admin';
$string['emailsubject'] = 'User account password reset';
$string['encoding'] = 'Encoding';
$string['escaped_users'] = 'Escaped users';
$string['examplecsv'] = 'Example CSV';
$string['examplecsv_help'] = 'Upload CSV file with only on column for <b>username</b>, as found in this example file';
$string['password_cron'] = 'Password is generated in cron';
$string['pluginname'] = 'Bulk reset password';
$string['privacy:metadata'] = 'Reset password plugin does not store any data about users.';
$string['reseted_users'] = 'Password reseted users';
$string['resetpasswords'] = 'Reset Passwords';
$string['resetpasswords:bulkresetpassword'] = 'Bulk reset password by CSV file upload';
$string['taskname'] = 'Bulk reset password';
$string['total'] = 'Total';
$string['uploadusers'] = 'Bulk Reset Password';
$string['usernotfound'] = 'User not found';
