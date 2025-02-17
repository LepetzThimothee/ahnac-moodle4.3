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
 * Strings for component 'dbtransfer', language 'en', version '4.3'.
 *
 * @package     dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = 'Checking source table structure';
$string['copyingtable'] = 'Copying table {$a}';
$string['copyingtables'] = 'Copying table contents';
$string['creatingtargettables'] = 'Creating the tables in the target database';
$string['dbexport'] = 'Database export';
$string['dbtransfer'] = 'Database transfer';
$string['differenttableexception'] = 'Table {$a} structure does not match.';
$string['done'] = 'Done';
$string['exportschemaexception'] = 'Current database structure does not match all install.xml files. <br /> {$a}';
$string['importschemaexception'] = 'Current database structure does not match all install.xml files. <br /> {$a}';
$string['importversionmismatchexception'] = 'Current version {$a->currentver} does not match exported version {$a->schemaver}.';
$string['malformedxmlexception'] = 'Malformed XML found, can not continue.';
$string['tablex'] = 'Table {$a}:';
$string['unknowntableexception'] = 'Unknown table {$a} found in export file.';
