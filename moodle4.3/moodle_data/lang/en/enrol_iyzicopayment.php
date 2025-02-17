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
 * Strings for component 'enrol_iyzicopayment', language 'en', version '4.3'.
 *
 * @package     enrol_iyzicopayment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applycode'] = 'Apply Code';
$string['assignrole'] = 'Assign role';
$string['canntenrol'] = 'Enrolment is disabled or inactive';
$string['charge_description1'] = 'create customer for email receipt';
$string['charge_description2'] = 'Charge for Course Enrolment Cost.';
$string['cost'] = 'Enrol cost';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrolment.';
$string['couponcode'] = 'Coupon Code';
$string['currency'] = 'Currency';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during iyzico enrolments';
$string['enrol'] = 'Enrol';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['expiredaction'] = 'Enrolment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['invalidcouponcode'] = 'Invalid Coupon Code';
$string['invalidcouponcodevalue'] = 'Coupon Code {$a} is not valid!';
$string['iyzico:config'] = 'Configure iyzico enrol instances';
$string['iyzico:manage'] = 'Manage enrolled users';
$string['iyzico:unenrol'] = 'Unenrol users from course';
$string['iyzico:unenrolself'] = 'Unenrol self from the course';
$string['iyzico_sorry'] = 'Sorry, you can not use the script that way.';
$string['iyzicoaccepted'] = 'iyzico payments accepted';
$string['iyzicopayment:config'] = 'Configure iyzicopayment';
$string['iyzicopayment:manage'] = 'Manage iyzicopayment';
$string['iyzicopayment:unenrol'] = 'Unenrol iyzicopayment';
$string['iyzicopayment:unenrolself'] = 'Unenrolself iyzicopayment';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['maxenrolled'] = 'Max enrolled users';
$string['maxenrolled_help'] = 'Specifies the maximum number of users that can iyzicopayment enrol. 0 means no limit.';
$string['maxenrolledreached'] = 'Maximum number of users allowed to iyzicopayment-enrol was already reached.';
$string['messageprovider:iyzico_enrolment'] = 'iyzico enrolment messages';
$string['messageprovider:iyzicopayment_enrolment'] = 'Message Provider';
$string['newcost'] = 'New Cost';
$string['nocost'] = 'There is no cost associated with enrolling in this course!';
$string['pluginname'] = 'iyzico Payment';
$string['pluginname_desc'] = 'The iyzipay module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['publishablekey'] = 'iyzico API Key';
$string['publishablekey_desc'] = 'The API Key of iyzico account';
$string['sandboxmode'] = 'iyzico Sandbox Mode';
$string['sandboxmode_desc'] = 'Use iyzico Sandbox Mode for debugging';
$string['secretkey'] = 'iyzico Secret Key';
$string['secretkey_desc'] = 'The API Secret Key of iyzico account';
$string['sendpaymentbutton'] = 'Send payment via iyzico';
$string['status'] = 'Allow iyzico enrolments';
$string['status_desc'] = 'Allow users to use iyzico to enrol into a course by default.';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';
