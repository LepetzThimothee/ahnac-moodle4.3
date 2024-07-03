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
 * Strings for component 'local_moodlecheck', language 'en', version '4.3'.
 *
 * @package     local_moodlecheck
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check'] = 'Check';
$string['checkallrules'] = 'Check over all rules';
$string['checkselectedrules'] = 'Check over selected rules';
$string['error_categoryvalid'] = 'Category <b>{$a->category}</b> is not valid';
$string['error_constsdocumented'] = 'Constant <b>{$a->object}</b> is not documented';
$string['error_default'] = 'Error: {$a}';
$string['error_definedoccorrect'] = 'Phpdocs for define statement must start with constant name and dash: <b>{$a->object}</b>';
$string['error_definesdocumented'] = 'Define statement for <b>{$a->object}</b> is not documented';
$string['error_emptynophpfile'] = 'The file is empty or doesn\'t contain PHP code. Skipped.';
$string['error_functionarguments'] = 'Phpdocs for function <b>{$a->function}</b> has incomplete parameters list';
$string['error_functiondescription'] = 'There is no description in phpdocs for function <b>{$a->object}</b>';
$string['error_noinlinephpdocs'] = 'Found comment starting with three or more slashes';
$string['error_phpdoccontentsinlinetag'] = 'Inline phpdocs tag <b>{$a->tag}</b> with incorrect contents found. It must match {@link [valid URL] [description (optional)]} or {@see [valid FQSEN] [description (optional)]}';
$string['error_phpdocsfistline'] = 'No one-line description found in phpdocs for <b>{$a->object}</b>';
$string['error_phpdocsinvalidinlinetag'] = 'Invalid inline phpdocs tag <b>{$a->tag}</b> found';
$string['error_phpdocsuncurlyinlinetag'] = 'Inline phpdocs tag not enclosed with curly brackets <b>{$a->tag}</b> found';
$string['ignorepath'] = 'Subpaths to ignore';
$string['linenum'] = 'Line <b>{$a}</b>:';
$string['notificationerror'] = 'Found {$a} errors';
$string['notificationsuccess'] = 'Well done!';
$string['path'] = 'Path(s)';
$string['path_help'] = 'Specify one or more files and/or directories to check as local paths from Moodle installation directory';
$string['pluginname'] = 'Moodle PHPdoc check';
$string['privacy:metadata'] = 'The Moodle PHPdoc check plugin does not store any personal data.';
$string['rule_categoryvalid'] = 'Category tag is valid';
$string['rule_constsdocumented'] = 'All constants are documented';
$string['rule_definedoccorrect'] = 'Check syntax for define statement';
$string['rule_definesdocumented'] = 'All define statements are documented';
$string['rule_functionarguments'] = 'Phpdocs for functions properly define all parameters';
$string['rule_functiondescription'] = 'Functions have descriptions in phpdocs';
$string['rule_noinlinephpdocs'] = 'There are no comments starting with three or more slashes';
$string['rule_phpdoccontentsinlinetag'] = 'Inline phpdocs tags have correct contents';
$string['rule_phpdocsfistline'] = 'File-level phpdocs block and class phpdocs should have one-line short description';
$string['rule_phpdocsinvalidinlinetag'] = 'Inline phpdocs tags are valid';
$string['rule_phpdocsuncurlyinlinetag'] = 'Inline phpdocs tags are enclosed with curly brackets';
