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
 * Strings for component 'filter_recitactivity', language 'en', version '4.3'.
 *
 * @package     filter_recitactivity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['character'] = 'The separator character';
$string['character_desc'] = 'Represents the separator character used in the filter.
    <br>If the character is <b style="color:red">/</b>, the filter will search for it in [[i<b style="color:red">/</b>activityname]].
	<br>All indicators (<b style="color:red"> i/, c/, d/, b/, s/</b>) must be at the begenning of double brackets <b style="color:red">[[</b>.
    <br><br><b>Integration code</b>
    <ul>
	<li>Activity name link : [[activityname]]</li>
	<li>Activity name link with icon : [[<b style="color:red">i/</b>activityname]]</li>
	<li>Activity name link with completion checkbox : [[<b style="color:red">c/</b>activityname]]</li>
    <li>Activity name link with icon and completion checkbox : [[<b style="color:red">i/c/</b>activityname]]</li>
    <li>Change link name : [[/i/c/desc:"Name"/]]activityname</li>
    <li>Add CSS classes : [[/i/c/class:"btn btn-primary"/]]</li>
    <li>Open the link to an activity in another tab : [[<b style="color:red">c/b/</b>activityname]] ou [[<b style="color:red">i/c/b/</b>activityname]]</li>
    <li> Link to a section: [[<b style="color: red">s/</b>sectionname]] or [[<b style="color: red">s/</b>/6]] to go to section 6 if its name is not personalized (not usable in edit mode).</li>
	<li>Course informations : [[<b style="color:red">d/</b>course.fullname]], [[<b style="color:red">d/</b>course.shortname]]</li>
	<li>Student firstname, lastname, email and avatar : [[<b style="color:red">d/</b>user.firstname]], [[<b style="color:red">d/</b>user.lastname]], [[<b style="color:red">d/</b>user.email]] and [[<b style="color:red">d/</b>user.picture]]</li>
	<li>First teacher firstname, lastname, email and avatar : [[<b style="color:red">d/</b>teacher1.firstname]], [[<b style="color:red">d/</b>teacher1.lastname]], [[<b style="color:red">d/</b>teacher1.email]] and [[<b style="color:red">d/</b>teacher1.picture]]. The teacher must be in the group for his name to appear.</li>
    <li>Same for teacher2, teacher3, ... for all teachers for that course.</li>
    <li>Link to H5P content: [[<b style="color:red">h5p/</b>Name of H5P]]</li>
    </ul>';
$string['dismissMsg'] = 'Dismiss';
$string['filtername'] = 'RECIT autolink';
$string['noteacheringroup'] = 'Teacher undefined';
$string['pluginname'] = 'RECIT autolink';
$string['privacy:metadata'] = 'The "Recit autolink" plugin does not store any personal data.';
$string['recitactivity:teacher'] = 'Show teacher\'s name';
$string['teacherbygroup'] = 'Show teachers in user\'s group only';
$string['teacherbygroup_desc'] = 'If this is off, d/teacher will display all teachers of the course regardless of the group';
