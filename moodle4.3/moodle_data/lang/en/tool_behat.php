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
 * Strings for component 'tool_behat', language 'en', version '4.3'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'This administration tool helps developers and test writers to create .feature files describing Moodle\'s functionalities and run them automatically. Step definitions available for use in .feature files are listed below.';
$string['allavailablesteps'] = 'All available step definitions';
$string['errorbehatcommand'] = 'Error running behat CLI command. Try running "{$a} --help" manually from CLI to find out more about the problem.';
$string['errorcomposer'] = 'Composer dependencies are not installed.';
$string['errordataroot'] = '$CFG->behat_dataroot is not set or is invalid.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot need to be set in config.php.';
$string['erroruniqueconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot values need to be different than $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot and $CFG->phpunit_prefix values.<br/>Or, if $CFG->behat_prefix is the same, $CFG->behat_dbname or $CFG->behat_dbhost need to be different from $CFG->phpunit_dbname and $CFG->phpunit_dbhost and from $CFG->dbname and $CFG->dbhost.';
$string['fieldvalueargument'] = 'Field value arguments';
$string['fieldvalueargument_help'] = 'This argument should be completed by a field value. There are many field types, including simple ones like checkboxes, selects or textareas, or complex ones like date selectors. See the dev documentation <a href="https://moodledev.io/general/development/tools/behat" target="_blank">Acceptance_testing</a> for details of expected field values.';
$string['giveninfo'] = 'Given. Processes to set up the environment';
$string['infoheading'] = 'Info';
$string['installinfo'] = 'Read {$a} for installation and tests execution info';
$string['newstepsinfo'] = 'Read {$a} for info about how to add new step definitions';
$string['newtestsinfo'] = 'Read {$a} for info about how to write new tests';
$string['nostepsdefinitions'] = 'There aren\'t any step definitions matching this filter';
$string['pluginname'] = 'Acceptance testing';
$string['privacy:metadata'] = 'The Acceptance testing plugin does not store any personal data.';
$string['stepsdefinitionscomponent'] = 'Area';
$string['stepsdefinitionscontains'] = 'Contains';
$string['stepsdefinitionsfilters'] = 'Step definitions';
$string['stepsdefinitionstype'] = 'Type';
$string['theninfo'] = 'Then. Checkings to ensure the outcomes are the expected ones';
$string['unknownexceptioninfo'] = 'There was a problem with Selenium or your browser. Please ensure you are using the latest version of Selenium. Error:';
$string['viewsteps'] = 'Filter';
$string['warndirrootconfigfound'] = 'A configuration file was found at {$a}. This file is not automatically updated and may become stale. We recommend removing this file.';
$string['wheninfo'] = 'When. Action that provokes an event';
$string['wrongbehatsetup'] = 'Something is wrong with the behat setup and so step definitions cannot be listed: <b>{$a->errormsg}</b><br/><br/>Please check:<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot are set in config.php with different values from $CFG->dataroot, $CFG->prefix and $CFG->wwwroot.</li>
<li>You ran "{$a->behatinit}" from your Moodle root directory.</li>
<li>Dependencies are installed in vendor/ and {$a->behatcommand} file has execution permissions.</li></ul>';
