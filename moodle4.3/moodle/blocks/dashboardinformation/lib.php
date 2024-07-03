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
 * Library functions for overview.
 *
 * @package   block_dashboardinformation
 * @copyright 2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Serve the requested file for the [component_name] plugin.
 *
 * @param stdClass $course the course object
 * @param stdClass $cm the course module object
 * @param stdClass $context the context
 * @param string $filearea the name of the file area
 * @param array $args extra arguments (itemid, path)
 * @param bool $forcedownload whether or not force download
 * @param array $options additional options affecting the file serving
 * @return bool false if the file not found, just send the file otherwise and do not return anything
 */
function block_dashboardinformation_pluginfile(
    $course,
    $cm,
    $context,
    string $filearea,
    array $args,
    bool $forcedownload,
    array $options = []
): bool {
    global $CFG;
    $itemid = array_shift($args);
    $filename = array_pop($args);
    $fs = get_file_storage();
    $files = $fs->get_area_files($context->id, 'block_dashboardinformation', $filearea, $itemid);
    foreach ($files as $file) {
        if($file->get_filesize()>0) {
            $filecontent = $file->get_content();
            if ($filecontent) {
                send_file($filecontent, $filename, null, 0, true, $forcedownload);
                return true;
            } else {
                return false;
            }
        }
    }
    return false;
}