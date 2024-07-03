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
 * Strings for component 'local_recompletion', language 'en', version '4.3'.
 *
 * @package     local_recompletion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'Abandoned';
$string['advancedrecompletiontitle'] = 'Advanced';
$string['archive'] = 'Archive old attempts';
$string['archivecertificate'] = 'Archive issued certificates (mod_certificate)';
$string['archivecertificate_help'] = 'Should issued certificates be archived?';
$string['archivechoice'] = 'Archive old choice attempts';
$string['archivecompletiondata'] = 'Archive completion data';
$string['archivecompletiondata_help'] = 'Writes completion data to the local_recompletion_cc, local_recompletion_cc_cc and local_recompletion_cmc tables. Completion data will be permanently deleted if this is not selected.';
$string['archivecoursecertificate'] = 'Archive issued certificates (mod_coursecertificate)';
$string['archivecoursecertificate_help'] = 'Should issued certificates be archived? Archived certificates will remain in tool_certificate_issues table, but will have archived status.';
$string['archivecustomcertcertificates'] = 'Archive issued custom certificates (mod_customcert)';
$string['archivecustomcertcertificates_help'] = 'Should issued custom certificates be archived?';
$string['archiveh5p'] = 'Archive old H5P attempts (mod_h5pactivity)';
$string['archivehotpot'] = 'Archive old hotpot attempts';
$string['archivehvp'] = 'Archive old H5P attempts (mod_hvp)';
$string['archivelesson'] = 'Archive old Lesson attempts';
$string['archivequestionnaire'] = 'Archive old questionnaire attempts';
$string['archivequiz'] = 'Archive old quiz attempts';
$string['archivescorm'] = 'Archive old SCORM attempts';
$string['assignattempts'] = 'Assign attempts';
$string['assignattempts_help'] = 'How to handle assignment attempts within the course.
If the setting \'Update on grade change\' is used, when a teacher updates the grade inside an assignment activity and the user has already completed the course, their course completion date will be updated to use the date of the assignment grade change.';
$string['assignevent'] = 'Update course completion on grade change';
$string['bulkchangedate'] = 'Change completion date for selected users';
$string['bulkresetallcompletion'] = 'Reset all completion for selected users';
$string['certificate'] = 'Certificates (mod_certificate)';
$string['certificate_help'] = 'Should issued certificates be deleted?';
$string['certificateverifywarn'] = 'Attention: Deleting the issued certificates without archiving will result in the fact that issued certificates cannot be verified anymore in Moodle. Please only delete the certificates if this is acceptable for you.';
$string['choiceattempts'] = 'Choice attempts';
$string['choiceattempts_help'] = 'Should existing Choice attempts be deleted - if archive is selected, the old Choice attempts will be archived in the local_recompletion_cha table.';
$string['completed'] = 'Completed';
$string['completionnotenabled'] = 'Completion is not enabled in this course';
$string['completionreset'] = 'Completion for the selected students in this course has been reset.';
$string['completionresetuser'] = 'Completion for {$a} in this course has been reset.';
$string['completionupdated'] = 'Course completion dates were updated';
$string['coursecertificate'] = 'Certificates (mod_coursecertificate)';
$string['coursecertificate_help'] = 'Should issued certificates be deleted?';
$string['coursecertificateverifywarn'] = 'Attention: Deleting the issued certificates without archiving will result in the fact that issued certificates cannot be verified anymore in Moodle. Please only delete the certificates if this is acceptable for you.';
$string['coursecompletiondate'] = 'New course completion date';
$string['customcertcertificates'] = 'Custom certificates (mod_customcert)';
$string['customcertcertificates_help'] = 'Should issued custom certificates be deleted?';
$string['customcertresetcertificates'] = 'Delete issued certificates';
$string['customcertresetcertificatesverifywarn'] = 'Attention: Deleting the issued certificates, even if you archive them before the deletion, will result in the fact that issues certificates cannot be verified anymore in Moodle. Please only delete the certificates if this is acceptable for you.';
$string['datasource:local_recompletion_cc'] = 'Archive of course completions';
$string['datasource:local_recompletion_ccert_is'] = 'Archive of issued certificates (mod_customcert)';
$string['datasource:local_recompletion_cert'] = 'Archive of issued certificates (mod_certificate)';
$string['datasource:local_recompletion_cmc'] = 'Archive of activity completions';
$string['datasource:local_recompletion_h5p'] = 'Archive of H5P attempts (mod_h5pactivity)';
$string['datasource:local_recompletion_hpa'] = 'Archive of hotpot attempts';
$string['datasource:local_recompletion_lg'] = 'Archive of lesson grades';
$string['datasource:local_recompletion_qa'] = 'Archive of quiz attempts';
$string['datasource:local_recompletion_qg'] = 'Archive of quiz grades';
$string['defaultsettings'] = 'Recompletion default settings';
$string['delete'] = 'Delete existing attempts';
$string['deletecertificate'] = 'Delete issued certificates';
$string['deletecoursecertificate'] = 'Delete issued certificates';
$string['deletegradedata'] = 'Delete all grades for the user';
$string['deletegradedata_help'] = 'Delete current grade completion data from grade_grades table. Grade recompletion data is permanently deleted but data retained in Grade history data table.';
$string['donothing'] = 'Do nothing';
$string['editcompletion'] = 'Edit course completion date';
$string['editcompletion_desc'] = 'Modify the course completion date for the following users:';
$string['editrecompletion'] = 'Edit course recompletion settings';
$string['emailrecompletiontitle'] = 'Custom recompletion message settings';
$string['endtime'] = 'End time';
$string['entity:local_recompletion_cc'] = 'Archive of course completions';
$string['entity:local_recompletion_ccert_is'] = 'Archive of issued certificates (mod_customcert)';
$string['entity:local_recompletion_cert'] = 'Archive of issued certificates (mod_certificate)';
$string['entity:local_recompletion_cmc'] = 'Archive of activity completions';
$string['entity:local_recompletion_h5p'] = 'Archive of H5P attempts (mod_h5pactivity)';
$string['entity:local_recompletion_hpa'] = 'Archive of hotpot attempts';
$string['entity:local_recompletion_lg'] = 'Archive of lesson grades';
$string['entity:local_recompletion_qa'] = 'Archive of quiz attempts';
$string['entity:local_recompletion_qg'] = 'Archive of quiz grades';
$string['eventrecompletion'] = 'Course recompletion';
$string['extraattempt'] = 'Give student extra attempt/s';
$string['forcearchivecompletiondata'] = 'Force archive completion data';
$string['forcearchivecompletiondata_help'] = 'If enabled, completion data archiving will be forced on for all course recompletions. This can prevent accidental data loss.';
$string['h5pattempts'] = 'H5P attempts (mod_h5pactivity)';
$string['h5pattempts_help'] = 'How to handle H5P attempts within the course. If archive is selected, the old H5P attempts will be archived in the local_recompletion_h5p and local_recompletion_h5pr tables.';
$string['hotpotattempts'] = 'Hotpot attempts';
$string['hotpotattempts_help'] = 'How to handle hotpot attempts within the course. If archive is selected, the attempts will be archived.';
$string['hvpattempts'] = 'H5P attempts (mod_hvp)';
$string['hvpattempts_help'] = 'How to handle H5P attempts within the course. If archive is selected, the old H5P attempts will be archived in the local_recompletion_hvp table.';
$string['inprogress'] = 'In progress';
$string['invalidscheduledate'] = 'Invalid schedule date entered.';
$string['lessonattempts'] = 'Lesson attempts';
$string['lessonattempts_help'] = 'How to handle Lesson attempts within the course. If archive is selected, the attempts will be archived.';
$string['modifycompletiondates'] = 'Modify course completion dates';
$string['noassigngradepermission'] = 'Your completion was reset, but this course contains an assignment that could not be reset, please ask your teacher to do this for you if required.';
$string['nousersselected'] = 'No users were selected';
$string['penalties'] = 'Penalties';
$string['pluginname'] = 'Course recompletion';
$string['pluginssettings'] = 'Plugins settings';
$string['privacy:metadata:attempt'] = 'The attempt number';
$string['privacy:metadata:completionstate'] = 'If the activity has been completed';
$string['privacy:metadata:correct'] = 'Correct answer?';
$string['privacy:metadata:course'] = 'The course ID linked to this table.';
$string['privacy:metadata:coursemoduleid'] = 'The activity ID';
$string['privacy:metadata:coursesummary'] = 'Stores the course completion data for a user.';
$string['privacy:metadata:deadline'] = 'Deadline';
$string['privacy:metadata:endtime'] = 'End time';
$string['privacy:metadata:flag'] = 'Flag';
$string['privacy:metadata:grade'] = 'Grade';
$string['privacy:metadata:gradefinal'] = 'Final grade received for course completion';
$string['privacy:metadata:lessontime'] = 'Lesson duration';
$string['privacy:metadata:local_recompletion_cc'] = 'Archive of previous course completions.';
$string['privacy:metadata:local_recompletion_cc_cc'] = 'Archive of previous course_completion_crit_compl.';
$string['privacy:metadata:local_recompletion_ccert_is'] = 'Archive of previous course customcert issues.';
$string['privacy:metadata:local_recompletion_ccert_is:emailed'] = 'If the customcert issue was emailed.';
$string['privacy:metadata:local_recompletion_ccert_is:timecreated'] = 'The time that the customcert issue created';
$string['privacy:metadata:local_recompletion_cert'] = 'Archive of previous certificate issues.';
$string['privacy:metadata:local_recompletion_cert:timecreated'] = 'The time that the certificate issue created';
$string['privacy:metadata:local_recompletion_cha'] = 'Archive of choice answers';
$string['privacy:metadata:local_recompletion_cha:choiceid'] = 'The Choice ID of the Archive of choice answers';
$string['privacy:metadata:local_recompletion_cha:optionid'] = 'The Option ID of the Archive of choice answers';
$string['privacy:metadata:local_recompletion_cmc'] = 'Archive of previous course module completions.';
$string['privacy:metadata:local_recompletion_cmv'] = 'Archive of previous course module views.';
$string['privacy:metadata:local_recompletion_h5p'] = 'Archive for H5P (mod_h5pactivity) attempt tracking information.';
$string['privacy:metadata:local_recompletion_h5pr'] = 'Archive for H5P (mod_h5pactivity) attempt results tracking information.';
$string['privacy:metadata:local_recompletion_hpa'] = 'Archive for hotpot attempts.';
$string['privacy:metadata:local_recompletion_hvp'] = 'Archive for H5P (mod_hvp) user data.';
$string['privacy:metadata:local_recompletion_hvp:data'] = 'The actual user data that was stored.';
$string['privacy:metadata:local_recompletion_hvp:hvp_id'] = 'Id of hvp content';
$string['privacy:metadata:local_recompletion_la'] = 'Archive for lesson_attempts';
$string['privacy:metadata:local_recompletion_lb'] = 'Archive of lesson_branch';
$string['privacy:metadata:local_recompletion_lg'] = 'Archive of lesson_grades';
$string['privacy:metadata:local_recompletion_lo'] = 'Archive of lesson_overrides';
$string['privacy:metadata:local_recompletion_lt'] = 'Archive of lesson_timer';
$string['privacy:metadata:local_recompletion_ltia'] = 'User access log and gradeback data.';
$string['privacy:metadata:local_recompletion_ltia:lastaccess'] = 'The time when the user last accessed the course.';
$string['privacy:metadata:local_recompletion_ltia:lastgrade'] = 'The last grade the user was recorded of having.';
$string['privacy:metadata:local_recompletion_ltia:timecreated'] = 'The time when the user was enrolled.';
$string['privacy:metadata:local_recompletion_ltia:toolid'] = 'The ID of the tool of LTI enrolment method.';
$string['privacy:metadata:local_recompletion_ltia:userid'] = 'The ID of the user.';
$string['privacy:metadata:local_recompletion_qr'] = 'Recompletion Questionnaire response table';
$string['privacy:metadata:local_recompletion_qr:complete'] = 'complete';
$string['privacy:metadata:local_recompletion_qr:grade'] = 'Grade';
$string['privacy:metadata:local_recompletion_qr:questionnaireid'] = 'Questionnaire id';
$string['privacy:metadata:local_recompletion_qr:submitted'] = 'Submitted';
$string['privacy:metadata:maxattempts'] = 'Max number of attempts';
$string['privacy:metadata:overrideby'] = 'The user ID of the person who overrode the activity completion';
$string['privacy:metadata:quiz_attempts'] = 'Archived details about each attempt on a quiz.';
$string['privacy:metadata:quiz_attempts:attempt'] = 'The attempt number.';
$string['privacy:metadata:quiz_attempts:currentpage'] = 'The current page that the user is on.';
$string['privacy:metadata:quiz_attempts:preview'] = 'Whether this is a preview of the quiz.';
$string['privacy:metadata:quiz_attempts:state'] = 'The current state of the attempt.';
$string['privacy:metadata:quiz_attempts:sumgrades'] = 'The sum of grades in the attempt.';
$string['privacy:metadata:quiz_attempts:timecheckstate'] = 'The time that the state was checked.';
$string['privacy:metadata:quiz_attempts:timefinish'] = 'The time that the attempt was completed.';
$string['privacy:metadata:quiz_attempts:timemodified'] = 'The time that the attempt was updated.';
$string['privacy:metadata:quiz_attempts:timemodifiedoffline'] = 'The time that the attempt was updated via an offline update.';
$string['privacy:metadata:quiz_attempts:timestart'] = 'The time that the attempt was started.';
$string['privacy:metadata:quiz_grades'] = 'Archived details about the overall grade for previous quiz attempts.';
$string['privacy:metadata:quiz_grades:grade'] = 'The overall grade for this quiz.';
$string['privacy:metadata:quiz_grades:quiz'] = 'The quiz that was graded.';
$string['privacy:metadata:quiz_grades:timemodified'] = 'The time that the grade was modified.';
$string['privacy:metadata:quiz_grades:userid'] = 'The user who was graded.';
$string['privacy:metadata:rawscore'] = 'The score obtained';
$string['privacy:metadata:reaggregate'] = 'If the course completion was reaggregated.';
$string['privacy:metadata:retake'] = 'Retake';
$string['privacy:metadata:scoes_value:element'] = 'The ID of the element to be tracked';
$string['privacy:metadata:scoes_value:value'] = 'The value of the given element';
$string['privacy:metadata:score'] = 'Score';
$string['privacy:metadata:scorm_attempt'] = 'Archive of previous SCORM attempts.';
$string['privacy:metadata:scorm_scoes_value'] = 'Archive of the tracked data of the SCOes belonging to the activity';
$string['privacy:metadata:starttime'] = 'Start time';
$string['privacy:metadata:timecompleted'] = 'The time that the course was completed.';
$string['privacy:metadata:timecreated'] = 'The time when the tracked element was created';
$string['privacy:metadata:timeenrolled'] = 'The time that the user was enrolled in the course';
$string['privacy:metadata:timemodified'] = 'The last time element was tracked';
$string['privacy:metadata:timestarted'] = 'The time the course was started.';
$string['privacy:metadata:unenroled'] = 'If the user has been unenrolled from the course';
$string['privacy:metadata:useranswer'] = 'Answer';
$string['privacy:metadata:userid'] = 'The user ID linked to this table.';
$string['privacy:metadata:viewed'] = 'If the activity was viewed';
$string['pulsenotifications'] = 'Pulse notifications';
$string['pulsenotifications_help'] = 'Should Pulse notifications which have already been sent be reset?';
$string['pulseresetnotifications'] = 'Reset notifications';
$string['questionnaireattempts'] = 'Questionnaire attempts';
$string['questionnaireattempts_help'] = 'What to do with existing Questionnaire attempts. If delete and archive is selected, the old Questionnaire attempts will be archived in the local_recompletion tables.';
$string['quizattempts'] = 'Quiz attempts';
$string['quizattempts_help'] = 'What to do with existing Quiz attempts. If delete and archive is selected, the old quiz attempts will be archived in the local_recompletion tables,
 if set to give extra attempts this will add a quiz override to allow the user to have the maximum number of allowed attempts set.';
$string['recompletion'] = 'recompletion';
$string['recompletion:bulkoperations'] = 'Bulk operations';
$string['recompletion:manage'] = 'Allow course recompletion settings to be changed';
$string['recompletion:resetmycompletion'] = 'Reset my own completion';
$string['recompletioncalculateddate'] = 'Calculated date: {$a}';
$string['recompletionemailbody'] = 'Recompletion message body';
$string['recompletionemailbody_help'] = 'A custom recompletion email subject may be added as plain text or Moodle-auto format, including HTML tags and multi-lang tags

The following placeholders may be included in the message:

* Course name {$a->coursename}
* Link to course {$a->link}
* Link to user\'s profile page {$a->profileurl}
* User email {$a->email}
* User fullname {$a->fullname}';
$string['recompletionemaildefaultbody'] = 'Hi there, please recomplete the course {$a->coursename} {$a->link}';
$string['recompletionemaildefaultsubject'] = 'Course {$a->coursename} recompletion required';
$string['recompletionemailenable'] = 'Send recompletion message';
$string['recompletionemailenable_help'] = 'Enable email messaging to notifiy users that recompletion is required';
$string['recompletionemailsubject'] = 'Recompletion message subject';
$string['recompletionemailsubject_help'] = 'A custom recompletion email subject may be added as plain text

The following placeholders may be included in the message:

* Course name {$a->coursename}
* User fullname {$a->fullname}';
$string['recompletionnotenabledincourse'] = 'Recompletion is not enabled in courseid: {$a}';
$string['recompletionrange'] = 'Recompletion period';
$string['recompletionrange_help'] = 'Set the period of time before a users completion results are reset.';
$string['recompletionschedule'] = 'Recompletion schedule';
$string['recompletionschedule_help'] = 'Set a date (e.g. Jan 1st) when completion results are reset. This date is calculated forwards from when a recompletion is last run. This reset would then occur at an interval. \'Jan 1\' will result in a yearly recompletion, \'friday\' will result in recompletion being run every Friday.';
$string['recompletionsettingssaved'] = 'Recompletion settings saved';
$string['recompletiontask'] = 'Check for users that need to recomplete';
$string['recompletiontype'] = 'Recompletion type';
$string['recompletiontype:disabled'] = 'Disabled';
$string['recompletiontype:ondemand'] = 'On demand';
$string['recompletiontype:period'] = 'Period';
$string['recompletiontype:schedule'] = 'Schedule';
$string['recompletiontype_help'] = 'Determines how user completion results will be reset for new courses.

* Disabled - disables this feature.
* Period - Allows a recompletion period (eg every 60 days) based on the users last course completion date.
* On demand - Allow teacher to manually reset individual users as required.
* Schedule - allows recompletion on a specified date eg 1st Jan every year.';
$string['recompletionunenrolenable'] = 'Reset completion on un-enrolment';
$string['recompletionunenrolenable_help'] = 'Enable to trigger completion reset on user un-enrolment';
$string['resetallcompletion'] = 'Reset all completion';
$string['resetcompletionconfirm'] = 'Are you sure you want to reset all completion data in this course for {$a}?  Warning - this may permanently delete some submitted content.';
$string['resetcompletionfor'] = 'Reset completion for {$a}';
$string['resetlti'] = 'Reset LTI grades';
$string['resetltis'] = 'LTI grades';
$string['resetltis_help'] = 'How to handle LTI grades within the course.
If the setting \'Reset LTI grades\' is used, all grade LTI results will be reset to 0.
When user achieved new completion in the course, the updated course grade will be resend to the LTI provider.';
$string['resetmycompletion'] = 'Reset my activity completion';
$string['restricted'] = 'Resetting completion for a given user is restricted';
$string['restrictedbyenrol'] = 'Resetting completion for a given user is restricted by enrolment method';
$string['restrictenrol'] = 'Enrol method';
$string['restrictenrol_help'] = 'Ony users enrolled with selected enrol methods will be included in resetting completion data. If none selected, that means no restrictions on enrolment method for users.';
$string['restrictionsettings'] = 'Restrictions settings';
$string['restrictionsheader'] = 'Restrictions';
$string['score'] = 'Score';
$string['scormattempts'] = 'SCORM attempts';
$string['scormattempts_help'] = 'Should existing SCORM attempts be deleted - if archive is selected, the old SCORM attempts will be archived in the local_recompletion_sst table.';
$string['starttime'] = 'Start time';
$string['status'] = 'Completion status';
$string['timecreated'] = 'Time created';
$string['timedout'] = 'Timed out';
$string['timemodified'] = 'Time modified';
$string['yearly'] = 'Yearly';
