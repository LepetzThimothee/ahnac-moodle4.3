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
 * Strings for component 'block_quickmail', language 'en', version '4.3'.
 *
 * @package     block_quickmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['additional_emails'] = 'Additional emails';
$string['additional_emails_help'] = 'Other email addresses you would like the message sent to, in a comma or semicolon separated list. Example:

 email1@example.com, email2@example.com';
$string['additionalemail'] = 'Allow emails to external email addresses';
$string['additionalemail_desc'] = 'If this option is enabled, the sender will have the ability to send messages to additional emails outside of Moodle';
$string['all_in_course'] = 'All In Course';
$string['allow_mentor_copy'] = 'Allow senders to automatically message a recipient\'s mentors when sending';
$string['allow_mentor_copy_help'] = 'If no, this option will not be visible to senders and mentors will never be copied. If yes, the sender will have the option to choose per message. If forced, this option will be forced with no option for de-selecting.';
$string['allowstudents'] = 'Allow students to use Quickmail';
$string['allowstudents_desc'] = 'Allow students to use Quickmail. If you choose "Never", the block cannot be configured to allow students access at the course level.';
$string['alternate'] = 'Alternate Email';
$string['alternate_activated'] = 'Alternate email {$a} can now be used!';
$string['alternate_already_confirmed'] = 'That email has already been confirmed.';
$string['alternate_availability'] = 'Who can send from this email?';
$string['alternate_availability_course'] = 'All allowed roles in {$a->courseshortname}';
$string['alternate_availability_only'] = 'Only me, in {$a->courseshortname} only';
$string['alternate_availability_user'] = 'Only me, in any course';
$string['alternate_body'] = '<p>
{$a->fullname} added {$a->email} as an alternate sending address for {$a->plugin_name}.
</p>

<p>
The purpose of this email was to verify that this address exists, and the owner
of this address has the appropriate permissions in Moodle.
</p>

<p>
If you wish to complete the verification process, please continue by directing
your browser to the following url: {$a->url}.
</p>

<p>
If the description of this email does not make any sense to you, then you may have
received it by mistake. Simply discard this message.
</p>

Thank you.';
$string['alternate_confirmation_email_resent'] = 'The confirmation email has been resent!';
$string['alternate_confirmed'] = 'Confirmed';
$string['alternate_created'] = 'Alternate sending email successfully created!';
$string['alternate_delete'] = 'Delete Alternate Address';
$string['alternate_delete_confirm'] = 'This will permanently delete your alternate email, are you sure?';
$string['alternate_deleted'] = 'Your alternate sending email has been deleted.';
$string['alternate_email_not_found'] = 'Could not find that alternate email.';
$string['alternate_invalid_token'] = 'Invalid confirmation token.';
$string['alternate_new'] = 'Add Alternate Address';
$string['alternate_owner_must_confirm'] = 'Must be the owner of the email to confirm.';
$string['alternate_owner_must_delete'] = 'Must be the owner of the email to delete.';
$string['alternate_resend_confirmation'] = 'Re-send confirm email';
$string['alternate_subject'] = 'Alternate email address verification';
$string['alternate_waiting'] = 'Waiting';
$string['altsendfrom'] = 'Allow alt from emails';
$string['altsendfrom_desc'] = 'Allow alternate from emails (needs a core change for this).';
$string['attached_files'] = 'Attached Files ({$a})';
$string['attachments'] = 'Attachments';
$string['back_to_course'] = 'Back to course';
$string['back_to_mypage'] = 'Back to My page';
$string['backup_block_configuration'] = 'Backup Quickmail Block Level Configuration Settings (Such as [Allow Students to use Quickmail])';
$string['backup_history'] = 'Include Quickmail History';
$string['body'] = 'Body';
$string['broadcast'] = 'Compose Admin Message';
$string['cachedef_qm_controller_store'] = 'Cache store for controller instances.';
$string['cachedef_qm_event_notif_last_fired_at'] = 'Cache store for timestamps when event notification was last fired.';
$string['cachedef_qm_msg_addl_email_count'] = 'Cached message additional email counts.';
$string['cachedef_qm_msg_attach_count'] = 'Cached message attachment counts.';
$string['cachedef_qm_msg_deliv_count'] = 'Cached message delievered counts.';
$string['cachedef_qm_msg_recip_count'] = 'Cached message recipient counts.';
$string['compose'] = 'Compose Course Message';
$string['condition_grade_greater_than'] = 'Grade greater than';
$string['condition_grade_less_than'] = 'Grade less than';
$string['condition_summary_reminder_course_grade_range'] = 'All who have a grade between {$a->grade_greater_than} and {$a->grade_less_than}';
$string['condition_summary_reminder_course_non_participation'] = 'All who have not accessed the course in {$a->time_amount} {$a->time_unit}';
$string['could_not_duplicate'] = 'Could not duplicate this draft. Please try again.';
$string['course_required'] = 'A course is required.';
$string['coursealternate_not_allowed'] = 'You are not able to share this alternate email is this course.';
$string['courseferpa'] = 'Respect Course Mode';
$string['courseneveraccessed'] = 'Never Accessed';
$string['create_new'] = 'Create New';
$string['create_notification'] = 'Create Notification';
$string['create_notification_message'] = 'Create {$a->model} {$a->type} Notification Message';
$string['create_notification_message_description'] = 'Now create the message that you\'d like to be sent when this notification goes out.';
$string['created'] = 'Created';
$string['critical_error'] = 'Critical error';
$string['default_message_type'] = 'Preferred message sending method';
$string['default_message_type_configuration'] = 'This setting will be the default sending method for anyone composing a message in this course. The sender will be able to override when composing the message.';
$string['default_message_type_configuration_help'] = 'This setting will be the default sending method for anyone composing a message in this course. The sender will be able to override when composing the message.';
$string['default_message_type_desc'] = 'Send your messages as Moodle Messages or traditional email.';
$string['delete_draft_confirm_message'] = 'This will permanently delete your draft message, are you sure?';
$string['delete_draft_modal_title'] = 'Delete Message Draft';
$string['delete_signature'] = 'Delete Signature';
$string['delete_signature_confirm_message'] = 'This will permanently delete your signature, are you sure?';
$string['delete_signature_modal_title'] = 'Delete Signature';
$string['deleted'] = 'Deleted';
$string['download_file_content'] = 'Download File Content';
$string['downloads'] = 'Require login for attachments';
$string['downloads_desc'] = 'This setting determines if attachments are available only to logged in Moodle users';
$string['draft_no_record'] = 'Could not find that draft message.';
$string['drafted'] = 'Drafted';
$string['drafts'] = 'Drafts';
$string['duplicate'] = 'Duplicate';
$string['duplicate_draft_confirm_message'] = 'This will make a copy of the draft, are you sure?';
$string['duplicate_draft_modal_title'] = 'Duplicate Message Draft';
$string['edit'] = 'Edit';
$string['edit_conditions'] = 'Edit Conditions';
$string['edit_event_details'] = 'Edit Event Details';
$string['edit_message'] = 'Edit Message';
$string['edit_messages'] = 'Edit Messages';
$string['edit_notification'] = 'Edit Notification';
$string['edit_schedule'] = 'Edit Schedule';
$string['email_profile_fields'] = 'Email profile fields';
$string['email_profile_fields_desc'] = 'These profile fields will be automatically emailed if they are set for the recipient user.';
$string['enable_notification'] = 'Enable Notification';
$string['eventalternateemailadded'] = 'Alternate email added';
$string['eventalternateemailadded_desc'] = 'The user with id {$a->user_id} has added an alternate email: {$a->email}';
$string['excluded_ids_label'] = 'Exclude';
$string['excluded_recipients_desc'] = 'Who should NOT receive this message?';
$string['failed_recipients'] = 'Failed or Pending Recipients';
$string['failed_recipients_promise'] = 'We will continue attempting to send to these recipients until the message has been successfully sent.';
$string['ferpa'] = 'FERPA Mode';
$string['ferpa_desc'] = 'Allows the system to behave either according to the course groupmode setting, ignoring the groupmode setting but separating groups, or ignoring groups altogether.';
$string['found_filtered_users'] = 'Found {$a} user(s)';
$string['from_email'] = 'Sender email address';
$string['from_email_help'] = 'The email address that this message will be sent from. You may add additional alternate addresses through the block menu on the course page.';
$string['here'] = 'here';
$string['included_ids_label'] = 'To';
$string['included_recipients_desc'] = 'Who should receive this message?';
$string['invalid_additional_email'] = 'The additional email "{$a}" you entered is invalid';
$string['invalid_additional_emails_validation'] = 'Some of the additional emails you entered were invalid.';
$string['invalid_availability'] = 'Invalid availability value.';
$string['invalid_condition_grade_greater_than'] = 'Invalid grade greater than value.';
$string['invalid_condition_grade_less_than'] = 'Invalid grade less than value.';
$string['invalid_condition_time_amount'] = 'Invalid amount of time for condition.';
$string['invalid_condition_time_unit'] = 'Invalid unit of time for condition.';
$string['invalid_custom_data_delimiters'] = 'Message body substitution codes not formatted properly.';
$string['invalid_custom_data_key'] = 'Custom data key "{$a}" is not allowed.';
$string['invalid_custom_data_not_allowed'] = 'Custom substitution codes are not allowed for this message.';
$string['invalid_email'] = 'Invalid email address.';
$string['invalid_notification_model'] = 'Invalid notification model selection.';
$string['invalid_notification_type'] = 'Notification type must be "Reminder" or "Event".';
$string['invalid_schedule_time_amount'] = 'Invalid amount of time for schedule.';
$string['invalid_schedule_time_unit'] = 'Invalid unit of time for schedule.';
$string['invalid_send_method'] = 'That send method is not allowed.';
$string['invalid_time_amount'] = 'Invalid amount of time.';
$string['invalid_time_relation'] = 'Must be "before" or "after".';
$string['invalid_time_unit'] = 'Invalid unit of time.';
$string['is_enabled'] = 'Enabled';
$string['last_run_at'] = 'Last Run';
$string['last_updated'] = 'Last Updated';
$string['manage_alternates'] = 'Alternate Emails';
$string['manage_drafts'] = 'View Drafts';
$string['manage_signatures'] = 'My Signatures';
$string['mentor_copy'] = 'Send copies to mentors of recipients?';
$string['mentor_copy_help'] = 'If selected, any mentors of your recipients will receive a copy of the message.';
$string['mentor_copy_message_prefix'] = '<p><strong>You are receiving this message because you are assigned as the mentor of</strong>: {$a}. The following is a copy of the message that was also sent to your mentee.</p>';
$string['mentor_copy_subject_prefix'] = '[Mentor Copy]';
$string['mentors_copied'] = 'Send copies to mentors';
$string['message_deleted'] = 'Message deleted';
$string['message_details'] = 'Message Details';
$string['message_no_record'] = 'Could not find that message.';
$string['message_not_found'] = 'Could not find that message';
$string['message_preview'] = 'Message Preview';
$string['message_queued'] = 'Message scheduled to be sent';
$string['message_sent_asap'] = 'Message will be sent shortly';
$string['message_sent_now'] = 'Message sent';
$string['message_type'] = 'Send Quickmail messages as';
$string['message_type_available_all'] = 'No restrictions, sender preference';
$string['message_type_available_email'] = 'Restrict to traditional email only';
$string['message_type_available_message'] = 'Restrict to Moodle messages only';
$string['message_type_desc'] = 'Allows Quickmail messages to be sent as a Moodle message, traditional email, or sender preference.';
$string['message_type_email'] = 'Email';
$string['message_type_message'] = 'Moodle Message';
$string['message_types_available'] = 'Message message type restrictions';
$string['message_types_available_desc'] = 'Restrict Quickmail messages to be sent as Moodle Messages, traditional emails, or sender preference.';
$string['message_unqueued'] = 'Message unscheduled';
$string['messageprovider:quickmessage'] = 'Quickmail message';
$string['migrate'] = 'Migrate Data';
$string['migrate_legacy_data_task'] = 'Migrate historical data from Quickmail v1 to v2';
$string['migration_chunk_size'] = 'Migration Chunk Size';
$string['migration_chunk_size_desc'] = 'Number of records that should be processed by the legacy data migration task each time it is run, if enabled.';
$string['missing_body'] = 'Missing message body.';
$string['missing_email'] = 'Missing email address.';
$string['missing_firstname'] = 'Missing first name.';
$string['missing_lastname'] = 'Missing last name.';
$string['missing_notification_name'] = 'Missing notification name.';
$string['missing_subject'] = 'Missing subject line.';
$string['ms_alternate'] = 'Alternate Emails';
$string['ms_compose'] = 'Compose';
$string['ms_config'] = 'Configure';
$string['ms_create_notification'] = 'Create Notification';
$string['ms_drafts'] = 'Drafts';
$string['ms_notifications'] = 'Notifications';
$string['ms_queued'] = 'Scheduled';
$string['ms_sent'] = 'Sent Emails';
$string['ms_signatures'] = 'My Signatures';
$string['must_be_draft_to_duplicate'] = 'Message must be a draft to duplicate.';
$string['must_be_owner_to_duplicate'] = 'Sorry, that draft does not belong to you and cannot be duplicated.';
$string['mute_time_summary'] = 'Mute Time';
$string['mute_time_unit'] = 'Mute Time';
$string['mute_time_unit_help'] = 'An optional amount of time that must pass in between this notification being automatically sent.';
$string['never'] = 'Never';
$string['next_run_at'] = 'Next Run';
$string['no_alternates'] = 'You have no alternate emails. Create a new one now!';
$string['no_drafts'] = 'You have no message drafts.';
$string['no_excluded_recipients'] = 'No excluded recipients';
$string['no_included_recipients'] = 'No included recipients';
$string['no_included_recipients_validation'] = 'You must select at least one recipient.';
$string['no_notifications'] = 'You have no created notifications.';
$string['no_queued'] = 'You have no scheduled messages.';
$string['no_sents'] = 'You have no sent message history.';
$string['no_signatures_create'] = 'You have no signatures. {$a}.';
$string['noferpa'] = 'No Group Respect';
$string['notification_already_sent'] = 'This notification has already been sent at least once.';
$string['notification_conditions'] = 'Conditions';
$string['notification_conditions_description'] = 'Specify this notifications conditions. Any recipients that meets these conditions will be notified.';
$string['notification_created'] = 'Notification created.';
$string['notification_deleted'] = 'Notification deleted.';
$string['notification_is_enabled'] = 'Notification Enabled';
$string['notification_is_enabled_help'] = 'If enabled, this notification will be active, otherwise, the notification will be disabled until you enable it.';
$string['notification_model'] = 'Notification Model';
$string['notification_model_event_course_entered'] = 'Course Entered';
$string['notification_model_event_course_entered_description'] = 'Notify a course participant when they access the course for the first time.';
$string['notification_model_reminder_course_grade_range'] = 'Course Grade Range';
$string['notification_model_reminder_course_grade_range_condition_description'] = 'Specify the grade range. If a course participant currently has within this range, they will be notified.';
$string['notification_model_reminder_course_grade_range_description'] = 'Notify course participants which currently have a grade within the given range.';
$string['notification_model_reminder_course_non_participation'] = 'Course Non-Participation';
$string['notification_model_reminder_course_non_participation_condition_description'] = 'Specify the amount of time since last course access. If a course participant has not accessed the course in this amount of time, they will be notified.';
$string['notification_model_reminder_course_non_participation_description'] = 'Notify course participants that have not accessed the course in a given amount of time.';
$string['notification_name'] = 'Title';
$string['notification_name_help'] = 'A short description of this notification to help you easily identify this from other notifications you may have set up.';
$string['notification_name_too_long'] = 'Notification name must be 40 characters or less.';
$string['notification_not_found'] = 'Could not find that notification.';
$string['notification_not_updated'] = 'Notification updated.';
$string['notification_review'] = 'Review Your Notification';
$string['notification_schedule'] = 'Schedule';
$string['notification_type'] = 'Notification Type';
$string['notification_type_event'] = 'Event';
$string['notification_type_event_description'] = 'An automated message that is sent as a reaction to a specific event. Events can be used to alert recipients that activities have been completed, assignments have been submitted or graded, and more.';
$string['notification_type_reminder'] = 'Reminder';
$string['notification_type_reminder_description'] = 'A recurring message that will automatically be sent on a scheduled basis. Reminders can be used to alert recipients of upcoming activities, due dates, class participation, and more.';
$string['notification_updated'] = 'Notification updated.';
$string['notifications'] = 'Notifications';
$string['notifications_enabled'] = 'Enable Quickmail Notifications';
$string['notifications_enabled_desc'] = 'Allow courses to create automated notifications including reminders and event responses.';
$string['notified_by'] = 'Notified By';
$string['open'] = 'Open';
$string['open_broadcast'] = 'Compose Message';
$string['open_compose'] = 'Compose Message';
$string['overwrite_history'] = 'Overwrite Quickmail History';
$string['pending_recipients'] = 'Pending Recipients';
$string['pending_recipients_promise'] = 'These recipients are currently being messaged, check back later to view any failures.';
$string['picker_style_autocomplete'] = 'Autocomplete';
$string['picker_style_multiselect'] = 'Multiselect';
$string['picker_style_option_title'] = 'My Preferred Recipient Picker Style';
$string['picker_style_option_title_help'] = 'Your personally preferred interface for selecting recipients when composing a message.';
$string['pluginname'] = 'Quickmail';
$string['prepend_class'] = 'Prepend Course name';
$string['prepend_class_configuration'] = 'Prepend course identifying information to the subject of the message.';
$string['prepend_class_configuration_help'] = 'Prepend course identifying information to the subject of the message.';
$string['prepend_class_desc'] = 'Prepend course identifying information to the subject of the message. This setting is overridable by course configuration.';
$string['preview_no_body'] = '(No content)';
$string['preview_no_subject'] = '(No subject)';
$string['profile_mentor_copy_message_prefix'] = '<p><strong>You are receiving this message because you are assigned as {$a} of the intended recipient</strong>. The following is a copy of what was sent to the recipient.</p>';
$string['queue_scheduled_notifications_task'] = 'Queue any scheduled Quickmail notifications to be sent';
$string['queued'] = 'Scheduled';
$string['queued_no_record'] = 'Could not find that queued message.';
$string['quickmail:addinstance'] = 'Add a new Quickmail block to a course page';
$string['quickmail:allowalternate'] = 'Create alternate email addresses to send from';
$string['quickmail:allowcoursealternate'] = 'Create alternate email addresses to share with other course instructors';
$string['quickmail:canconfig'] = 'Configure Quickmail settings in a course';
$string['quickmail:cansend'] = 'Send Quickmail messages in a course';
$string['quickmail:createnotifications'] = 'Create auto notifications in Quickmail';
$string['quickmail:myaddinstance'] = 'Add a new Quickmail block to the /my page';
$string['quickmail:viewgroupusers'] = 'View all users in every group';
$string['receipt'] = 'Receive a send report';
$string['receipt_configuration'] = 'Send a confirmation email to the message sender when the message has been sent. This setting will be the default preference for the sender.';
$string['receipt_configuration_help'] = 'Send a confirmation email to the message sender when the message has been sent. This setting will be the default preference for the sender.';
$string['receipt_email_body'] = '<p>Your message has been sent! You can view further details of this sent message {$a->sent_message_link}.</p>

<p>
    <strong>Message details summary:</strong><br><br>
    <strong>Course:</strong> {$a->course_name}<br><br>
    <strong>Message Subject:</strong> {$a->subject}<br><br>
    <strong>Recipients:</strong> {$a->recipient_count}<br><br>
    <strong>Additional Recipient Emails:</strong> {$a->addition_emails_string}<br><br>
    <strong>Sent To Mentors:</strong> {$a->sent_to_mentors}<br><br>
    <strong>File Attachment Count:</strong> {$a->attachment_count}<br><br>
    <strong>Message Body:</strong>
</p>

{$a->message_body}';
$string['receipt_help'] = 'Send a confirmation email to the message sender when the message has been sent by default. This setting is overridable by course configuration.';
$string['recipients'] = 'Recipients';
$string['redirect_back_from_message_detail_message_deleted'] = 'The message you are attempting to view has been deleted.';
$string['redirect_back_from_message_detail_no_access'] = 'You are not able to view this message.';
$string['redirect_back_to_course_from_message_after_duplicate'] = 'Your message has been successfully duplicated.';
$string['redirect_back_to_course_from_message_after_save'] = 'Your draft has been saved.';
$string['redirect_back_to_course_from_notifications_not_enabled'] = 'Quickmail notifications are disabled for your site.';
$string['reset_success_message'] = 'Quickmail default settings have been restored!';
$string['restore_default_confirm_message'] = 'This will restore this course\'s Quickmail settings to default, are you sure?';
$string['restore_default_modal_title'] = 'Restore Default Configuration';
$string['restore_history'] = 'Restore Quickmail History';
$string['save'] = 'Save';
$string['save_draft'] = 'Save Draft';
$string['save_signature'] = 'Save Signature';
$string['schedule_begin_at'] = 'Begin date';
$string['schedule_end_at'] = 'End date';
$string['scheduled_time'] = 'Scheduled Time';
$string['select_allowed_user_fields'] = 'Supported user data fields';
$string['select_allowed_user_fields_desc'] = 'Senders will be able to reference the selected fields to make message content dynamic and specific to the recipient. Ex: "[:firstname:]"';
$string['select_message_type'] = 'Send message as';
$string['select_notification_model'] = 'Select {$a} Notification Model';
$string['select_signature_for_edit'] = 'Select Signature To Edit';
$string['selectable_roles'] = 'Selectable roles';
$string['selectable_roles_configuration'] = 'These roles will be available for selection when composing a message.';
$string['selectable_roles_configuration_help'] = 'These roles will be available for selection when composing a message.';
$string['selectable_roles_desc'] = 'These roles will be available for selection when composing a message. This setting is overridable by course configuration.';
$string['send_all_ready_messages_task'] = 'Send all scheduled Quickmail messages';
$string['send_as_tasks'] = 'Send all messages as background tasks.';
$string['send_as_tasks_help'] = 'If selected, will send all messages asynchronously as cron tasks. Otherwise, will send immediately.';
$string['send_at'] = 'Send at';
$string['send_message'] = 'Send Message';
$string['send_now'] = 'Send Now';
$string['send_now_scheduled_confirm_message'] = 'This will forget the schedule and send the message now, are you sure?';
$string['send_now_scheduled_modal_title'] = 'Send Message Now';
$string['send_now_threshold'] = 'Send Now Threshold';
$string['send_now_threshold_desc'] = 'Force a non-scheduled message to be sent immediately if the number of recipients is this number or less, even if the block is configured to send messages as background tasks. Setting of 0 will ignore this setting.';
$string['send_receipt_subject_addendage'] = 'Sent Message';
$string['send_schedule'] = 'Send Schedule';
$string['sending'] = 'Sending';
$string['sent'] = 'Sent';
$string['sent_at'] = 'Sent At';
$string['sent_messages'] = 'Sent Message History';
$string['set_event_details'] = 'Set {$a->model} Event Notification Details';
$string['set_event_details_description'] = 'Specify additional options about the event.';
$string['set_notification_conditions'] = 'Set {$a->model} {$a->type} Notification Conditions';
$string['set_notification_schedule'] = 'Set {$a->model} {$a->type} Notification Schedule';
$string['set_notification_schedule_description'] = 'Specify how often this notification should be sent, when it should start, and when it should end. If no end date is specified, this notification will continue to be sent until it is disabled or deleted.';
$string['signature'] = 'Signature';
$string['signature_signature_required'] = 'A signature is required.';
$string['signature_title_must_be_unique'] = 'The signature title must be unique.';
$string['signature_title_required'] = 'A signature title is required.';
$string['signatures'] = 'Signatures';
$string['status'] = 'Status';
$string['strictferpa'] = 'Always Separate Groups';
$string['subject'] = 'Subject';
$string['success_recipients_promise'] = 'These recipients were all successfully messaged by the system.';
$string['time_amount'] = 'Amount of time';
$string['time_beginning'] = 'Beginning';
$string['time_delay_summary'] = 'Time Delay';
$string['time_delay_unit'] = 'Time Delay';
$string['time_delay_unit_help'] = 'An optional amount of time to wait before the notification is sent.';
$string['time_ending'] = 'Ending';
$string['time_every'] = 'Every';
$string['time_once_a'] = 'Once a';
$string['time_relation'] = 'Before or After';
$string['time_unit'] = 'Unit of time';
$string['time_unit_day'] = 'Day';
$string['time_unit_days'] = 'Days';
$string['time_unit_month'] = 'Month';
$string['time_unit_months'] = 'Months';
$string['time_unit_week'] = 'Week';
$string['time_unit_weeks'] = 'Weeks';
$string['title'] = 'Title';
$string['unqueue'] = 'Unqueue';
$string['unqueue_scheduled_confirm_message'] = 'This will unschedule this message to be sent and save the message as a draft, are you sure?';
$string['unqueue_scheduled_modal_title'] = 'Unqueue Scheduled Message';
$string['user_signature_deleted'] = 'Your signature has been deleted.';
$string['validation_exception_message'] = 'Validation exception!';
$string['view'] = 'View';
$string['view_message_detail'] = 'View Message Details';
$string['view_queued'] = 'View Scheduled';
$string['view_sent'] = 'View Sent Messages';
