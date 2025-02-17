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
 * Strings for component 'local_navbarplus', language 'en', version '4.3'.
 *
 * @package     local_navbarplus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Navbar Plus';
$string['privacy:metadata'] = 'The Navbar Plus plugin provides extended functionality to Moodle users, but does not store any personal data.';
$string['resetusertours_hint'] = '(Could take a short time)';
$string['setting_inserticonswithlinks'] = 'Icons with links';
$string['setting_inserticonswithlinks_desc'] = 'With this setting you can add link icons to the header navbar left to the icons "messages" and "notifications".<br/>
Each line consists of an icon image, a link URL, a text, supported language(s) (optional) and new window setting (optional) - separated by pipe characters. Each icon needs to be written in a new line.<br/>
For example:<br/>
fa-question|http://moodle.org|Moodle|en,de|true|d-none d-sm-flex<br/>
fa-sign-out|/login/logout.php|Logout||false<br/><br/>
Further information to the parameters:
<ul>
<li><b>Image:</b> You can add Font Awesome icon identifiers (<a href="https://fontawesome.com/v4.7.0/icons/">See the icon list on fontawesome.com</a>). Font Awesome is included in Moodle\'s core Clean and Boost themes since the version 3.3.</li>
<li><b>Link:</b> The link target can be defined by a full web URL (e.g. https://moodle.org) or a relative path within your Moodle instance (e.g. /login/logout.php). </li>
<li><b>Title:</b> This text will be written in the title and alt attributes of the icon.</li>
<li><b>Supported language(s) (optional):</b> This setting can be used for displaying the link to users of the specified language only. Separate more than one supported language with commas. If the link should be displayed in all languages, then leave this field empty.</li>
<li><b>New window (optional)</b>:  By default the link will be opened in the same window and the value of this setting is set to false. If you want to open the link in a new window set the value to true.</li>
<li><b>Additional classes (optional)</b>: You can add individual classes with this optional parameter. A common use case might be to add Bootstrap\'s responsive classes to hide an icon for specific display sizes. <br/> You can look up the definitions for the responsive Bootstrap display classes for <a href="https://getbootstrap.com/docs/4.0/utilities/display/">Bootstrap version 4</a> for all Boost based themes.<br/>
The most important classes for Boost based themes might be "d-none d-sm-flex" for hiding an icon on small devices or "d-sm-none" for only displaying the icon on small screens.
<li><b>ID (optional)</b>: You can add an individual ID to your icon element. This makes it possible to address this specific icon easily with CSS (for example for the Moodle user tours). The string you enter here will always be prefixed with "localnavbarplus-".</li>
</ul>
Please note:
<ul>
<li> Pipe dividing for optional parameters is always needed if they are located between other options. This means that you have to separate params with the pipe character although they are empty. Also see the example for the Font Awesome icon above. </li>
<li> If the icon does not show up in the navbar, please check if all mandatory params are set correctly and if the optional language setting fits to your current Moodle user language. </li>
</ul>';
$string['setting_resetusertours'] = 'Reset user tour link';
$string['setting_resetusertours_desc'] = 'With this setting you can place a Font Awesome map icon in the navbar with which the user is able to restart the user tour for the current page. By default Boost places the link to reset the user tour within the footer. This might not be eye catching. With this setting you can place the link to the more visible navbar.<br/> If you want to change this icon, please have a look at the README.md file.';
