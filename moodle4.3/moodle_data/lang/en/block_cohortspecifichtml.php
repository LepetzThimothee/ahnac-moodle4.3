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
 * Strings for component 'block_cohortspecifichtml', language 'en', version '4.3'.
 *
 * @package     block_cohortspecifichtml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortselection'] = 'Show to cohorts';
$string['cohortselection_help'] = 'The block will be only shown to the members of at least one selected cohort. This means that if you selected, for example, two cohorts and a user is only member of one of them, the block will be displayed to him as he is part of at least one selected cohort. This is equivalent to an OR connection.';
$string['cohortspecifichtml:addinstance'] = 'Add a new Text (on cohorts) block';
$string['cohortspecifichtml:myaddinstance'] = 'Add a new Text (on cohorts) block to Dashboard';
$string['cohortspecifichtml:viewalways'] = 'Always view the block';
$string['invertcohortselection'] = 'Invert the selection (hide it for the selected cohorts)';
$string['invertcohortselection_help'] = 'With this setting you can invert your selection. This means that the block will not be shown to members of the selected cohort but to everyone else.<br/>
Examples: <ul> <li>If a user matches at least one of the selected cohorts the block will not be displayed to him, even if he is also member of a cohort that is not selected.</li>
<li>If you have selected none of the cohorts and invert that, the block will be visible for <strong>all</strong> users.</li></ul>';
$string['newhtmlcohortblock'] = 'New Text (on cohorts)';
$string['nocohorts'] = 'No cohorts are defined yet. Without any cohorts <strong>the block will not be visible</strong> to anybody, even if you have entered content above. <br/>
Cohorts can be managed in the <a href="{$a->url}">site administration</a>.';
$string['notvisibletoall'] = '<br/>This block is <strong>not visible</strong> to <strong>any</strong> user.';
$string['notvisibletocohorts'] = '<br/><strong>Not</strong> visible to cohorts:';
$string['pluginname'] = 'Text (on cohorts)';
$string['privacy:metadata:block'] = 'The Text (on cohorts) block stores all of its data within the block subsystem.';
$string['resetcohortselection'] = 'Reset selection';
$string['resetcohortselection_help'] = 'If you enable and save this setting, the selection you made will be reset. This means that no cohorts are selected. Unfortunately, this workaround is needed, because unselecting all cohorts would not result in any change as an empty result is passed to the server. <br/>
If you open the block configuration again this setting is reset and won\'t be shown as there is nothing that could be reset anymore.';
$string['unrestricted'] = 'Unrestricted';
$string['visibletoall'] = '<br/>This block is <strong>visible</strong> to <strong>all</strong> users.';
$string['visibletocohorts'] = '<br/><strong>Only</strong> visible to cohorts:';
