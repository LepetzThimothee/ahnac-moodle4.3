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
 * Strings for component 'tool_replace', language 'en', version '4.3'.
 *
 * @package     tool_replace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalskiptables'] = 'Additional skip tables';
$string['additionalskiptables_desc'] = 'A list of tables (separated by commas) which should be skipped when running the database search and replace.';
$string['cannotfit'] = 'The replacement is longer than the original and shortening is not allowed; cannot continue.';
$string['disclaimer'] = 'I understand the risks of this operation';
$string['doit'] = 'Yes, do it!';
$string['excludedtables'] = 'Several tables are not updated as part of the text replacement. These include configuration, log, events, and session tables.';
$string['invalidcharacter'] = 'Invalid characters were found in the search or replace text.';
$string['notifyfinished'] = '...finished';
$string['notifyrebuilding'] = 'Rebuilding course cache...';
$string['notimplemented'] = 'Sorry, this feature is not implemented in your database driver.';
$string['notsupported'] = 'This script should be considered experimental. Changes made cannot be reverted, thus a complete backup should be made before running the script!';
$string['pageheader'] = 'Search and replace text throughout the whole database';
$string['pluginname'] = 'DB search and replace';
$string['privacy:metadata'] = 'The DB search and replace plugin does not store any personal data.';
$string['replacewith'] = 'Replace with this string';
$string['replacewithhelp'] = 'usually new server URL';
$string['searchwholedb'] = 'Search whole database for';
$string['searchwholedbhelp'] = 'usually previous server URL';
$string['shortenoversized'] = 'Shorten result if necessary';
