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
 * Strings for component 'auth_wordpress', language 'en', version '4.3'.
 *
 * @package     auth_wordpress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_collision'] = 'A user account with the same email address exists on this platform but is authenticated using an alternative method';
$string['auth_wordpressdescription'] = 'Users are logged in via WordPress using delegated OAuth 1.0a three legged authentication.';
$string['client_key'] = 'The OAuth 1.0a client key';
$string['client_key_help'] = 'This will need to be provided by the whoever configured the client at the WordPress end.';
$string['client_secret'] = 'The OAuth 1.0a client secret';
$string['client_secret_help'] = 'This will need to be provided by the whoever configured the client at the WordPress end.';
$string['missingverifier'] = 'OAuth verifier missing';
$string['pluginname'] = 'WordPress authentication';
$string['wordpress_host'] = 'The URL of your WordPress installation';
$string['wordpress_host_help'] = 'Please specify the full URL, e.g. https://mywordpress.me Trailing slashes are ignored.';
$string['wordpress_settings'] = 'WordPress settings';
