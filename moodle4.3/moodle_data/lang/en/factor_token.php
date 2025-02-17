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
 * Strings for component 'factor_token', language 'en', version '4.3'.
 *
 * @package     factor_token
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event:token_created'] = 'MFA token created.';
$string['form:trust'] = 'Trust this device for {$a}.';
$string['pluginname'] = 'Trust this device';
$string['privacy:metadata'] = 'The Trust this device factor plugin does not store any personal data.';
$string['settings:expireovernight'] = 'Expire trust overnight';
$string['settings:expireovernight_help'] = 'This forces tokens to expire overnight, preventing midday interruptions for users. Instead they will be asked to multi-factor authenticate at the start of a day after expiry.';
$string['settings:expiry'] = 'Trust duration';
$string['settings:expiry_help'] = 'The duration a device is trusted before requiring a new multi-factor authentication.';
$string['summarycondition'] = 'the user has previously trusted this device';
$string['tokenstoredindevice'] = 'The user with ID {$a->userid} has a multi-factor authentication token stored on their device. <br> Information: {$a->string}.';
