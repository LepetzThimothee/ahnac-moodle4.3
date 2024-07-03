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
 * Library of interface functions and constants.
 *
 * @package     mod_certificate
 * @copyright   2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Return if the plugin supports $feature.
 *
 * @param string $feature Constant representing the feature.
 * @return true | null True if the feature is supported, null otherwise.
 */
function certificate_supports($feature) {
    switch ($feature) {
        case FEATURE_MOD_INTRO:
            return true;
        default:
            return null;
    }
}

/**
 * Saves a new instance of the mod_certificate into the database.
 *
 * Given an object containing all the necessary data, (defined by the form
 * in mod_form.php) this function will create a new instance and return the id
 * number of the instance.
 *
 * @param object $moduleinstance An object from the form.
 * @param mod_certificate_mod_form $mform The form.
 * @return int The id of the newly inserted record.
 */
function certificate_add_instance($moduleinstance, $mform = null) {
    global $DB;

    $moduleinstance->timecreated = time();

    $id = $DB->insert_record('certificate', $moduleinstance);

    return $id;
}

/**
 * Updates an instance of the mod_certificate in the database.
 *
 * Given an object containing all the necessary data (defined in mod_form.php),
 * this function will update an existing instance with new data.
 *
 * @param object $moduleinstance An object from the form in mod_form.php.
 * @param mod_certificate_mod_form $mform The form.
 * @return bool True if successful, false otherwise.
 */
function certificate_update_instance($moduleinstance, $mform = null) {
    global $DB;

    $moduleinstance->timemodified = time();
    $moduleinstance->id = $moduleinstance->instance;

    return $DB->update_record('certificate', $moduleinstance);
}

/**
 * Removes an instance of the mod_certificate from the database.
 *
 * @param int $id Id of the module instance.
 * @return bool True if successful, false on failure.
 */
function certificate_delete_instance($id) {
    global $DB;

    $exists = $DB->get_record('certificate', array('id' => $id));
    if (!$exists) {
        return false;
    }

    $DB->delete_records('certificate', array('id' => $id));

    return true;
}

/**
 * Generate certificate PDF.
 *
 * @param stdClass $course The course object.
 * @param stdClass $moduleinstance The instance of the module.
 * @param stdClass $user The user object.
 * @return string|null The path to the generated PDF file, or null on failure.
 */
function generate_certificate($course, $modulecontext, $user) {
    global $CFG, $DB;

    $filename = 'certificat_' . $user->id . '.pdf';

    $sql = "SELECT *
            FROM {files}
            WHERE component = :component
            AND contextid = :contextid
            AND filearea = :filearea
            AND filename = :filename
            AND filesize > 0
            ORDER BY timemodified DESC
            LIMIT 1";
    $params = array(
        'contextid' => $modulecontext->id,
        'component' => 'mod_certificate',
        'filearea' => 'certificates',
        'filename' => $filename
    );

    $existingCertificate = $DB->get_record_sql($sql, $params);
    if ($existingCertificate) {
        return $existingCertificate->filename;
    }

    $coursename = $course->fullname;
    $username = fullname($user);

    $sql = "SELECT d.value
            FROM {customfield_data} d
            JOIN {customfield_field} f ON d.fieldid = f.id
            WHERE d.instanceid = :courseid
            AND f.shortname = :shortname";
    $params = array(
        'courseid' => $course->id,
        'shortname' => 'objectifs'
    );
    $objectifsrecord = $DB->get_record_sql($sql, $params);
    $objectifs = $objectifsrecord ? $objectifsrecord->value : '';

    $currentdate = date('d/m/Y');
    //get_course_completion_date();
    $html = '<h1>Certificat de réussite</h1>';
    $html .= '<p>Ce certificat atteste que l\'utilisateur ' . $username . ' a terminé le cours ' . $coursename . ' avec succès.</p>';
    $html .= '<p>Date de génération : ' . $currentdate . '</p>';
    if (!empty($objectifs)) {
        $html .= '<h2>Objectifs du cours</h2>';
        $html .= '<p>' . format_text($objectifs, FORMAT_HTML) . '</p>';
    }
    
    require_once($CFG->libdir.'/tcpdf/tcpdf.php');

    $bgImagePath = $CFG->dirroot . '/mod/certificate/pix/background.jpg';

    list($initialimageWidth, $initialimageHeight) = getimagesize($bgImagePath);
    $imageWidth = $initialimageWidth * 25.4 / 300;
    $imageHeight = $initialimageHeight * 25.4 / 300;
    
    $pdf = new TCPDF('L', 'mm', array($imageWidth, $imageHeight));
    $pdf->AddPage();
    $pdf->Image($bgImagePath, null, null, 0, 0, '', '', '' , false, 300, 'C');
    $pdf->SetAlpha(1);
    $pdf->SetLeftMargin(25);
    $pdf->SetY(50);
    $pdf->writeHTML($html);

    $pdfContent = $pdf->Output($filename, 'S');
    if ($pdfContent !== false) {
        $fileinfo = array(
            'contextid' => $modulecontext->id,
            'component' => 'mod_certificate',
            'filearea' => 'certificates',
            'itemid' => 0,
            'filepath' => '/',
            'filename' => $filename
        );

        $fs = get_file_storage();
        $file = $fs->create_file_from_string($fileinfo, $pdfContent);

        if ($file) {
            return $file->get_filename();
        } else {
            return null;
        }
    } else {
        return null;
    }
}

/**
 * Serves the files from the mod_certificate file areas.
 *
 * @param stdClass $course The course object.
 * @param stdClass $cm The course module object.
 * @param stdClass $context The context object.
 * @param string $filearea The name of the file area.
 * @param array $args The extra arguments.
 * @param bool $forcedownload Whether or not force download.
 * @param array $options Additional options affecting the file serving.
 * @return bool
 */
function mod_certificate_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    global $DB, $USER;

    if ($context->contextlevel != CONTEXT_MODULE) {
        return false;
    }

    require_course_login($course, true, $cm);

    $itemid = (int)array_shift($args);
    $filename = array_pop($args);
    $filepath = '/' . implode('/', $args) . '/';

    $fs = get_file_storage();
    $file = $fs->get_file($context->id, 'mod_certificate', $filearea, $itemid, $filepath, $filename);
    if (!$file) {
        return false;
    }
    $filecontent = $file->get_content();
    if ($filecontent) {
        send_file($filecontent, $filename, null, 0, true, true);
        return true;
    } else {
        return false;
    }
}