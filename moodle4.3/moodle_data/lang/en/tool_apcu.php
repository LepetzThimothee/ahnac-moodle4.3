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
 * Strings for component 'tool_apcu', language 'en', version '4.3'.
 *
 * @package     tool_apcu
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['guidroperror'] = 'Sadly, this Moodle installation did not have enough permissions to download and store the APCu management GUI file to your wwwroot directly. Please download the APCu management GUI file from {$a->source} manually and store it to {$a->target} on your webserver. Until you download and store this file, the tool_apcu plugin will not work.';
$string['guidropinstallintro'] = 'The tool_apcu admin report plugin includes a APCu management GUI which was built by the APCu developers. This APCu management GUI is just a small PHP file. Unfortunately, this file can\'t be shipped together with this plugin\'s code as its PHP license is incompatible with Moodle\'s GPL license.';
$string['guidropinstalloutro'] = 'Please note: With "license incompatibility", it is just meant that code licensed under the PHP license must not be hosted on moodle.org/plugins. For you as administrator, it\'s fine to download, host and run the APCu management GUI file and add it to your local installation of this Moodle plugin.';
$string['guidropmissing'] = 'This plugin is missing the APCu management GUI file or the file does not contain the expected PHP code. Please consult the plugin\'s README file for further assistance. Until you download and store the APCu management GUI file, the plugin will not work.';
$string['guidropsuccess'] = 'Luckily, this Moodle installation had enough permissions to download and store the APCu management GUI file to your wwwroot directly. It was downloaded from {$a->source} and stored to {$a->target}. After finishing the installation wizard, the tool_apcu plugin will work for you as expected.';
$string['guidropupgradecheckfail'] = 'The necessary APCu management GUI file is missing in the wwwroot after the plugin upgrade.';
$string['guidropupgradechecksuccess'] = 'The necessary APCu management GUI file still exists in the wwwroot after the plugin upgrade.';
$string['pluginname'] = 'APCu management';
$string['privacy:metadata'] = 'The APCu management plugin provides extended functionality to Moodle admins, but does not store any personal data.';
