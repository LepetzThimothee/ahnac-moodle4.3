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
 * Strings for component 'quiz_archiver', language 'en', version '4.3'.
 *
 * @package     quiz_archiver
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archive_already_signed'] = 'Archive is already signed';
$string['archive_autodelete'] = 'Automatic deletion';
$string['archive_autodelete_deleted'] = 'Archive was automatically deleted';
$string['archive_autodelete_disabled'] = 'Disabled';
$string['archive_autodelete_help'] = 'Automatically delete this quiz archive after a certain amount of time. The retention time can be configured below, once automatic deletion is activated.';
$string['archive_autodelete_in'] = 'Archive will be deleted in {$a}';
$string['archive_autodelete_now'] = 'Archive is scheduled for deletion';
$string['archive_autodelete_short'] = 'Deletion';
$string['archive_deleted'] = 'Archive was deleted';
$string['archive_filename_pattern'] = 'Archive name';
$string['archive_filename_pattern_help'] = 'Name of the generated quiz archive. Variables <b>must</b> follow the <code>${variablename}</code> pattern. The file extension will be added automatically.<br><br><b>Available variables</b>: <ul>{$a->variables}</ul><b>Forbidden characters</b>: <code>{$a->forbiddenchars}</code>';
$string['archive_filename_pattern_variable_cmid'] = 'Course module ID';
$string['archive_filename_pattern_variable_courseid'] = 'Course ID';
$string['archive_filename_pattern_variable_coursename'] = 'Course name';
$string['archive_filename_pattern_variable_courseshortname'] = 'Course short name';
$string['archive_filename_pattern_variable_date'] = 'Current date <small>(YYYY-MM-DD)</small>';
$string['archive_filename_pattern_variable_quizid'] = 'Quiz ID';
$string['archive_filename_pattern_variable_quizname'] = 'Quiz name';
$string['archive_filename_pattern_variable_time'] = 'Current time <small>(HH-MM-SS)</small>';
$string['archive_filename_pattern_variable_timestamp'] = 'Current unix timestamp';
$string['archive_not_signed'] = 'Archive is unsigned';
$string['archive_quiz'] = 'Archive quiz';
$string['archive_quiz_form_desc'] = 'Trigger the creation of a new quiz archive by submitting this form. This will spawn an asynchronous job which will take some time to complete. You can always check the current status on this page.';
$string['archive_retention_time'] = 'Retention time';
$string['archive_retention_time_help'] = 'The amount of time this quiz archive should be kept before it is automatically deleted. This setting only takes effect if automatic deletion is activated.';
$string['archive_signature'] = 'Signature';
$string['archive_signed_successfully'] = 'Archive signed successfully';
$string['archive_signing_failed'] = 'Archive signing failed';
$string['archive_signing_failed_no_artifact'] = 'No valid artifact file found';
$string['archive_signing_failed_tsp_disabled'] = 'TSP signing is disabled globally';
$string['archived'] = 'Archived';
$string['archiver'] = 'Quiz Archiver';
$string['archiverreport'] = 'Quiz Archiver';
$string['beta_version_warning'] = 'This plugin is currently in beta stage. Please report any problems and bugs you experience to the site administrator.';
$string['checksum'] = 'Checksum';
$string['create_quiz_archive'] = 'Create new quiz archive';
$string['delete_artifact'] = 'Delete quiz archive';
$string['delete_artifact_warning'] = 'Are you sure that you want to delete this quiz archive and therefore <b>all archived data?</b>. The job metadate will be kept.';
$string['delete_job'] = 'Delete archive job';
$string['delete_job_warning'] = 'Are you sure that you want to delete this archive job <b>including all archived data?</b>';
$string['delete_job_warning_retention'] = '<b>Attention:</b> This archive job is scheduled for automatic deletion on <code>{$a}</code>. Are you absolutely sure that you want to delete it <b>before its scheduled lifetime expired</b>?';
$string['error_archive_quiz_form_validation_failed'] = 'Form data validation failed. Please correct your input and try again.';
$string['error_invalid_archive_filename_pattern'] = 'Invalid archive filename pattern. Please correct your input and try again.';
$string['error_invalid_attempt_filename_pattern'] = 'Invalid attempt report filename pattern. Please correct your input and try again.';
$string['error_worker_connection_failed'] = 'Establishing a connection to the archive worker failed.';
$string['error_worker_reported_error'] = 'The archive worker reported an error: {$a}';
$string['error_worker_unknown'] = 'An unknown error occurred while enqueueing the job at the remote archive worker.';
$string['export_attempts'] = 'Export quiz attempts';
$string['export_attempts_filename_pattern'] = 'Report name';
$string['export_attempts_filename_pattern_help'] = 'Name of the generated quiz attempt reports (PDF files). Variables <b>must</b> follow the <code>${variablename}</code> pattern. The file extension will be added automatically.<br><br><b>Available variables</b>: <ul>{$a->variables}</ul><b>Forbidden characters</b>: <code>{$a->forbiddenchars}</code>';
$string['export_attempts_filename_pattern_variable_attemptid'] = 'Attempt ID';
$string['export_attempts_filename_pattern_variable_cmid'] = 'Course module ID';
$string['export_attempts_filename_pattern_variable_courseid'] = 'Course ID';
$string['export_attempts_filename_pattern_variable_coursename'] = 'Course name';
$string['export_attempts_filename_pattern_variable_courseshortname'] = 'Course short name';
$string['export_attempts_filename_pattern_variable_date'] = 'Current date <small>(YYYY-MM-DD)</small>';
$string['export_attempts_filename_pattern_variable_firstname'] = 'Student first name';
$string['export_attempts_filename_pattern_variable_lastname'] = 'Student last name';
$string['export_attempts_filename_pattern_variable_quizid'] = 'Quiz ID';
$string['export_attempts_filename_pattern_variable_quizname'] = 'Quiz name';
$string['export_attempts_filename_pattern_variable_time'] = 'Current time <small>(HH-MM-SS)</small>';
$string['export_attempts_filename_pattern_variable_timefinish'] = 'Attempt finish unix timestamp';
$string['export_attempts_filename_pattern_variable_timestamp'] = 'Current unix timestamp';
$string['export_attempts_filename_pattern_variable_timestart'] = 'Attempt start unix timestamp';
$string['export_attempts_filename_pattern_variable_username'] = 'Student username';
$string['export_attempts_help'] = 'Quiz attempts will always be exported';
$string['export_attempts_keep_html_files'] = 'HTML files';
$string['export_attempts_keep_html_files_desc'] = 'Keep HTML source files';
$string['export_attempts_keep_html_files_help'] = 'Save HTML source files in addition to the generated PDFs during the export process. This can be useful if you want to access the raw HTML DOM the PDFs were generated from. Disabling this option can significantly reduce the archive size.';
$string['export_attempts_num'] = 'Export quiz attempts ({$a})';
$string['export_attempts_num_help'] = 'Quiz attempts will always be exported';
$string['export_attempts_paper_format'] = 'Paper size';
$string['export_attempts_paper_format_help'] = 'The paper size to use for the PDF export. This does not not affect HTML exports.';
$string['export_course_backup'] = 'Export full Moodle course backup (.mbz)';
$string['export_course_backup_help'] = 'This will export a full Moodle course backup (.mbz) including everything inside this course. This can be useful if you want to import this course into another Moodle instance.';
$string['export_quiz_backup'] = 'Export Moodle quiz backup (.mbz)';
$string['export_quiz_backup_help'] = 'This will export a Moodle quiz backup (.mbz) including questions used inside this quiz. This can be useful if you want to import this quiz independent of this course into another Moodle instance.';
$string['export_report_section_attachments'] = 'Include file attachments';
$string['export_report_section_attachments_help'] = 'Include all file attachments (e.g., essay file submissions) inside the archive. Warning: This can significantly increase the archive size.';
$string['export_report_section_general_feedback'] = 'Include general question feedback';
$string['export_report_section_general_feedback_help'] = 'Display the general feedback for each question inside the report.';
$string['export_report_section_header'] = 'Include quiz header';
$string['export_report_section_header_help'] = 'Display quiz metadata (e.g., user, time taken, grade, ...) inside the report.';
$string['export_report_section_history'] = 'Include answer history';
$string['export_report_section_history_help'] = 'Display the answer history for each question inside the report.';
$string['export_report_section_question'] = 'Include questions';
$string['export_report_section_question_feedback'] = 'Include individual question feedback';
$string['export_report_section_question_feedback_help'] = 'Display the individual feedback for each question inside the report.';
$string['export_report_section_question_help'] = 'Display all questions that are part of this attempt inside the report.';
$string['export_report_section_quiz_feedback'] = 'Include overall quiz feedback';
$string['export_report_section_quiz_feedback_help'] = 'Display the overall quiz feedback inside the report header.';
$string['export_report_section_rightanswer'] = 'Include correct answers';
$string['export_report_section_rightanswer_help'] = 'Display the correct answers for each question inside the report.';
$string['job_created_successfully'] = 'New archive job created successfully: {$a}';
$string['job_overview'] = 'Archives';
$string['job_status_AWAITING_PROCESSING'] = 'Queued';
$string['job_status_DELETED'] = 'Deleted';
$string['job_status_FAILED'] = 'Failed';
$string['job_status_FINISHED'] = 'Finished';
$string['job_status_RUNNING'] = 'Running';
$string['job_status_TIMEOUT'] = 'Timeout';
$string['job_status_UNINITIALIZED'] = 'Uninitialized';
$string['job_status_UNKNOWN'] = 'Unknown';
$string['jobid'] = 'Job ID';
$string['num_attempts'] = 'Number of attempts';
$string['pluginname'] = 'Quiz Archiver';
$string['privacy:metadata:core_files'] = 'The quiz archiver plugin stores created quiz archives inside the Moodle file system.';
$string['privacy:metadata:quiz_archiver_job_settings'] = 'Job settings during quiz archive creation (e.g., included sections, number of attempts, ...).';
$string['privacy:metadata:quiz_archiver_job_settings:key'] = 'The key / name of a respective setting (e.g., number of attempts).';
$string['privacy:metadata:quiz_archiver_job_settings:value'] = 'The value of a respective setting (e.g., 42).';
$string['privacy:metadata:quiz_archiver_jobs'] = 'Metadata about created quiz archives.';
$string['privacy:metadata:quiz_archiver_jobs:cmid'] = 'The course module ID of the quiz the quiz archive belongs to.';
$string['privacy:metadata:quiz_archiver_jobs:courseid'] = 'The course ID of the course the quiz archive belongs to.';
$string['privacy:metadata:quiz_archiver_jobs:quizid'] = 'The quiz ID of the quiz the quiz archive belongs to.';
$string['privacy:metadata:quiz_archiver_jobs:timecreated'] = 'The time when the quiz archive was created.';
$string['privacy:metadata:quiz_archiver_jobs:timemodified'] = 'The time when the quiz archive was last modified (e.g., job status updated).';
$string['privacy:metadata:quiz_archiver_jobs:userid'] = 'The user ID of the user who created the quiz archive.';
$string['privacy:metadata:quiz_archiver_tsp'] = 'Time-Stamp Protocol (TSP) data for quiz archives.';
$string['privacy:metadata:quiz_archiver_tsp:server'] = 'The URL of the TSP server that was used to sign the quiz archive.';
$string['privacy:metadata:quiz_archiver_tsp:timecreated'] = 'The time when the quiz archive was signed.';
$string['privacy:metadata:quiz_archiver_tsp:timestampquery'] = 'The timestamp query that was sent to the TSP server.';
$string['privacy:metadata:quiz_archiver_tsp:timestampreply'] = 'The timestamp reply that was received from the TSP server.';
$string['quiz_archive'] = 'Quiz archive';
$string['quiz_archive_details'] = 'Quiz archive details';
$string['quiz_archive_not_found'] = 'Quiz archive not found';
$string['quiz_archive_not_ready'] = 'Quiz archive not ready yet';
$string['quiz_archiver:archive'] = 'Create and delete quiz archives';
$string['quiz_archiver:use_webservice'] = 'Use the quiz archiver webservice (read and write)';
$string['quiz_archiver:view'] = 'View quiz archiver report page';
$string['setting_header_archive_worker'] = 'Archive Worker Service';
$string['setting_header_archive_worker_desc'] = 'Configuration of the archive worker service and the Moodle web service it uses.';
$string['setting_header_docs_desc'] = 'This plugin archives quiz attempts as PDF and HTML files for long-term storage, independent of Moodle. It <b>requires a separate <a href="https://github.com/ngandrass/moodle-quiz-archive-worker" target="_blank">worker service</a></b> to be installed for the actual archiving process to work. Please refer to the <a href="https://github.com/ngandrass/moodle-quiz_archiver#readme" target="_blank">documentation</a> for more details and setup instructions.';
$string['setting_header_job_presets'] = 'Archive Presets';
$string['setting_header_job_presets_desc'] = 'System wide default settings for quiz archive creation. These defaults can be overridden when creating a new quiz archive. However, each individual setting can also be locked to prevent users from changing it. This can be useful when enforcing organization wide archive policies.';
$string['setting_header_tsp'] = 'Archive Signing';
$string['setting_header_tsp_desc'] = 'Quiz archives and their creation date can be digitally signed by a trusted authority using the <a href="https://en.wikipedia.org/wiki/Time_stamp_protocol" target="_blank">Time-Stamp Protocol (TSP)</a> according to <a href="https://www.ietf.org/rfc/rfc3161.txt" target="_blank">RFC 3161</a>. This can be used to cryptographically prove the integrity and creation date of the archive at a later point in time. Quiz archives can be signed automatically at creation or manually later on.';
$string['setting_internal_wwwroot'] = 'Custom Moodle base URL';
$string['setting_internal_wwwroot_desc'] = 'Overwrites the default Moodle base URL (<code>$CFG->wwwroot</code>) inside generated reports. This can be useful if you are running the archive worker service inside a private network (e.g., Docker) and want it to access Moodle directly.<br/>Example: <code>http://moodle/</code>';
$string['setting_job_timeout_min'] = 'Job timeout (minutes)';
$string['setting_job_timeout_min_desc'] = 'The number of minutes a single archive job is allowed to run before it is aborted by Moodle. Job web service access tokens become invalid after this timeout.';
$string['setting_tsp_automatic_signing'] = 'Automatically sign quiz archives';
$string['setting_tsp_automatic_signing_desc'] = 'Automatically sign quiz archives when they are created.';
$string['setting_tsp_enable'] = 'Enable quiz archive signing';
$string['setting_tsp_enable_desc'] = 'Allow quiz archives to be signed using the Time-Stamp Protocol (TSP). If this option is disabled, quiz archives can neither be signed manually nor automatically.';
$string['setting_tsp_server_url'] = 'TSP server URL';
$string['setting_tsp_server_url_desc'] = 'URL of the Time-Stamp Protocol (TSP) server to use.<br/>Examples: <code>https://freetsa.org/tsr</code>, <code>https://zeitstempel.dfn.de</code>, <code>http://timestamp.digicert.com</code>';
$string['setting_webservice_desc'] = 'The webservice that is allowed to execute all <code>quiz_archiver_*</code> webservice functions. It must also have permission to up- and download files.';
$string['setting_webservice_userid'] = 'Web service user-ID';
$string['setting_webservice_userid_desc'] = 'User-ID of the Moodle user that is used by the archive worker service to access quiz data. It must have all capabilities that are listed in the <a href="https://github.com/ngandrass/moodle-quiz_archiver#configuration" target="_blank">documentation</a> to work properly. For security reasons, this should be a dedicated user account without full administrative privileges.';
$string['setting_worker_url'] = 'Archive worker URL';
$string['setting_worker_url_desc'] = 'URL of the archive worker service to call for quiz archive task execution.<br/>Example: <code>http://127.0.0.1:8080</code> or <code>http://moodle-quiz-archive-worker:8080</code>';
$string['sign_archive'] = 'Sign archive now';
$string['sign_archive_warning'] = 'Are you sure that you want to sign this archive now?';
$string['signed_by'] = 'by';
$string['signed_on'] = 'Signed on';
$string['task_autodelete_job_artifacts'] = 'Delete expired quiz archives';
$string['task_autodelete_job_artifacts_report'] = 'Deleted {$a} quiz archives.';
$string['task_autodelete_job_artifacts_start'] = 'Deleting expired quiz archives ...';
$string['task_cleanup_temp_files'] = 'Cleanup temporary files';
$string['task_cleanup_temp_files_report'] = 'Deleted {$a} temporary files.';
$string['task_cleanup_temp_files_start'] = 'Cleaning up expired temporary files ...';
$string['tsp_client_error_content_type'] = 'TSP server returned unexpected content type {$a}';
$string['tsp_client_error_curl'] = 'Error while sending TSP request: {$a}';
$string['tsp_client_error_http_code'] = 'TSP server returned HTTP status code {$a}';
$string['tsp_query_filename'] = 'query.tsq';
$string['tsp_reply_filename'] = 'reply.tsr';
$string['users_with_attempts'] = 'Users with quiz attempts';
