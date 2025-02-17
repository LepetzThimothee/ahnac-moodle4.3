<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language file.
 *
 * @package   theme_ahnac
 * @copyright 2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// The name of the second tab in the theme settings.
$string['advancedsettings'] = 'Advanced settings';
// The brand colour setting.
$string['brandcolor'] = 'Brand colour';
// The brand colour setting description.
$string['brandcolor_desc'] = 'The accent colour.';
// A description shown in the admin theme selector. 
$string['choosereadme'] = 'Theme ahnac is a child theme of Boost. It adds the ability to upload background photos.';
// Name of the settings pages.
$string['configtitle'] = 'Ahnac settings';
// Name of the first settings tab.
$string['generalsettings'] = 'General settings';
// The name of our plugin.
$string['pluginname'] = 'Ahnac';
// Preset files setting.
$string['presetfiles'] = 'Additional theme preset files';
// Preset files help text.
$string['presetfiles_desc'] = 'Preset files can be used to dramatically alter the appearance of the theme. See <a href=https://docs.moodle.org/dev/Boost_Presets>Boost presets</a> for information on creating and sharing your own preset files, and see the <a href=http://moodle.net/boost>Presets repository</a> for presets that others have shared.';
// Preset setting.
$string['preset'] = 'Theme preset';
// Preset help text.
$string['preset_desc'] = 'Pick a preset to broadly change the look of the theme.';
// Raw SCSS setting.
$string['rawscss'] = 'Raw SCSS';
// Raw SCSS setting help text.
$string['rawscss_desc'] = 'Use this field to provide SCSS or CSS code which will be injected at the end of the style sheet.';
// Raw initial SCSS setting.
$string['rawscsspre'] = 'Raw initial SCSS';
// Raw initial SCSS setting help text.
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else. Most of the time you will use this setting to define variables.';
// We need to include a lang string for each block region.
$string['region-side-pre'] = 'Right';

// All string from footer.mustache
$string['ahnacinfo1'] = 'Campus AHNAC is dedicated to supporting your professional development through online courses available at any time.';
$string['ahnacinfo2'] = 'If you have more specific support needs, ask your manager to create an e-learning course.';
$string['ahnacinfo3'] = 'If you encounter any issues, feel free to contact your training department.';
$string['sitemaptitle'] = 'Site map';
$string['homeurl'] = new moodle_url('/my');
$string['home'] = 'Home';
$string['coursesurl'] = new moodle_url('/course/index.php', ['categoryid' => 1]);
$string['courses'] = 'Courses';
$string['tutorialsurl'] = new moodle_url('/course/index.php', ['categoryid' => 3]);
$string['tutorials'] = 'Tutorials';
$string['followus'] = 'Follow us';
$string['facebook'] = 'Facebook';
$string['instagram'] = 'Instagram';
$string['twitter'] = 'Twitter';
$string['youtube'] = 'YouTube';
$string['linkedin'] = 'LinkedIn';
$string['otherlinks'] = 'Others';
$string['podcasts'] = 'Podcasts Bonne Mine';
$string['myahnac'] = 'MyAhnac';
$string['bluekango'] = 'BlueKanGo';