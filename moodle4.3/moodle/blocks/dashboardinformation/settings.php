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
 * Plugin administration pages are defined here.
 *
 * @package     block_dashboardinformation
 * @copyright   2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_heading('block_dashboardinformation_settings', get_string('pluginname', 'block_dashboardinformation'), ''));
    
    $settings->add(
        new admin_setting_configstoredfile(
            'block_dashboardinformation/pdf_file',
            get_string('pdf', 'block_dashboardinformation'),
            get_string('configpdf', 'block_dashboardinformation'),
            'block_dashboardinformation',
            1,
            array('accepted_types' => array('application/pdf'))
        )
    );

    $settings->add(
        new admin_setting_configstoredfile(
            'block_dashboardinformation/image_file',
            get_string('image', 'block_dashboardinformation'),
            get_string('configimage', 'block_dashboardinformation'),
            'block_dashboardinformation',
            2,
            array('accepted_types' => array('image/jpeg', 'image/png', 'image/gif'))
        )
    );
}
