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
 * Block dashboardinformation is defined here.
 *
 * @package     block_dashboardinformation
 * @copyright   2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_dashboardinformation extends block_base {

    /**
     * Initializes class member variables.
     */
    public function init() {
        // Needed by Moodle to differentiate between blocks.
        $this->title = get_string('pluginname', 'block_dashboardinformation');
    }

    /**
     * Returns the block contents.
     *
     * @return stdClass The block contents.
     */
    public function get_content() {

        global $DB, $USER, $CFG, $OUTPUT;

        if ($this->content !== null) {
            return $this->content;
        }

        if (empty($this->instance)) {
            $this->content = '';
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->items = array();
        $this->content->icons = array();
        $this->content->footer = '';

        $pdffiles = $DB->get_records('files', array('filearea' => 'block_dashboardinformation', 'mimetype' => 'application/pdf', 'itemid' => 1));
        $imagefiles = $DB->get_records('files', array('filearea' => 'block_dashboardinformation', 'mimetype' => 'image/png', 'itemid' => 2));
        $image = '';
        foreach ($imagefiles as $imagefile) {
            if ($imagefile->filesize>0) {
                $image = $imagefile;
            }
        }
        if ($image=='') {
            $this->content->text .= 'Please add a image file in site administration';     
        }

        foreach ($pdffiles as $pdffile) {
            if ($pdffile->filesize>0) {
                $contentpdfurls = '@@PLUGINFILE@@/' . $pdffile->filepath . $pdffile->filename;
                $textpdfurls = file_rewrite_pluginfile_urls($contentpdfurls, 'pluginfile.php', $pdffile->contextid, $pdffile->component, $pdffile->filearea, $pdffile->itemid);
                $contentimageurl = '@@PLUGINFILE@@/' . $image->filepath . $image->filename;
                $imageurl = file_rewrite_pluginfile_urls($contentimageurl, 'pluginfile.php', $image->contextid, $image->component, $image->filearea, $image->itemid);
                $this->content->text .= '
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="'.$textpdfurls.'" target="_blank">
                            <img src="'.$imageurl.'" alt="Information">
                        </a>
                    </div>';
            }
        }
    
        if (!$this->content->text) {
            $this->content->text .= 'Please add a pdf file in site administration';
        }
        return $this->content;
    }

    /**
     * Defines configuration data.
     *
     * The function is called immediately after init().
     */
    public function specialization() {
        // Load user defined title and make sure it's never empty.
        if (empty($this->config->title)) {
            $this->title = get_string('pluginname_display', 'block_dashboardinformation');
        } else {
            $this->title = $this->config->title;
        }
    }

    /**
     * Enables global configuration of the block in settings.php.
     *
     * @return bool True if the global configuration is enabled.
     */
    public function has_config() {
        return true;
    }

    /**
     * Sets the applicable formats for the block.
     *
     * @return string[] Array of pages and permissions.
     */
    public function applicable_formats() {
        return array(
            'my' => true
        );
    }

    function _self_test() {
        return true;
    }
}
