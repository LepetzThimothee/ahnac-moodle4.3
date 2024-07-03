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
 * Strings for component 'enrol_poasdatabase', language 'en', version '4.3'.
 *
 * @package     enrol_poasdatabase
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allow_reenabling_teachers'] = 'Keep teachers enrolled';
$string['allow_reenabling_teachers_desc'] = 'If enabled, users with the "editingteacher" role will have active enrollment in their courses, even if the enrollment information is no longer in the external database. Applies to nightly sync and when teachers log in to the site. This setting does not apply to manual and other methods of enrollment that this plugin does not manage.';
$string['allow_unenrol_2nd_teachers'] = 'Unenroll irrelevant teachers';
$string['allow_unenrol_2nd_teachers_desc'] = 'If enabled, teachers who are not in the lead on their course (by matching the teacher idnumber in the course) will be blocked (as long as the lead teacher remains on the course). This setting does not apply to manual and other enrollment methods that this plugin does not manage.';
$string['course_idnumber_regex_capturing_teacher'] = 'Lecturer regex-pattern in the course idnumber';
$string['course_idnumber_regex_capturing_teacher_desc'] = 'If there is a convention that the instructor idnumber is included in the course idnumber, then specifying a regular expression in this field will allow instructors who are head in their course (by matching the instructor idnumber in the course) to be activated in any case (even if they are not in the enrollment table). The regular expression must include one capture group (parentheses), which must contain the instructor\'s idnumber.';
$string['dbencoding'] = 'Database encoding';
$string['dbhost'] = 'Database host';
$string['dbhost_desc'] = 'Type database server IP address or host name. Use a system DSN name if using ODBC. Use a PDO DSN if using PDO.';
$string['dbname'] = 'Database name';
$string['dbname_desc'] = 'Leave empty if using a DSN name in database host.';
$string['dbpass'] = 'Database password';
$string['dbsetupsql'] = 'Database setup command';
$string['dbsetupsql_desc'] = 'SQL command for special database setup, often used to setup communication encoding - example for MySQL and PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Use sybase quotes';
$string['dbsybasequoting_desc'] = 'Sybase style single quote escaping - needed for Oracle, MS SQL and some other databases. Do not use for MySQL!';
$string['dbtype'] = 'Database driver';
$string['dbtype_desc'] = 'ADOdb database driver name, type of the external database engine.';
$string['dbuser'] = 'Database user';
$string['debugdb'] = 'Debug ADOdb';
$string['debugdb_desc'] = 'Debug ADOdb connection to external database - use when getting empty page during login. Not suitable for production sites!';
$string['defaultcategory'] = 'Default new course category';
$string['defaultcategory_desc'] = 'The default category for auto-created courses. Used when no new category id specified or not found.';
$string['defaultrole'] = 'Default role';
$string['defaultrole_desc'] = 'The role that will be assigned by default if no role is specified in external table.';
$string['enableremovingduplicatecohorts'] = 'Enable deletion of duplicate cohorts abnormally generated due to name/idnumber changes in the external source';
$string['enableremovingduplicatecohorts_desc'] = 'Verification and cleanup if necessary will be performed each time the cohorts are synchronised.';
$string['enableupdatingcohorts'] = 'If enabled, existing cohorts will be updated if changed in the external source';
$string['enableupdatingcohorts_desc'] = 'The update will be performed each time on cohorts synchronization.';
$string['extremovedcohortaction_desc'] = 'Select the action to be performed when the cohort disappears from the external database. Please note that  unsubscription of a cohort causes removal from the course of some settings and data of users who were in this global group.';
$string['extuserremovedfromcohortaction'] = 'Action when user removed from cohort in the external database';
$string['extuserremovedfromcohortaction_desc'] = 'Select the action to be performed when the user disappears from a cohort in the external database. Please note that disabling or unenrolment of a student is managed by cohort sync plugin (Plugins / Enrolments / Cohort sync).';
$string['ignorehiddencourses'] = 'Ignore hidden courses';
$string['ignorehiddencourses_desc'] = 'If enabled users will not be enrolled on courses that are set to be unavailable to students.';
$string['keepenrolledcohorts'] = 'Keep cohorts having any enrolment';
$string['keepenrolledcohorts_desc'] = 'This setting is used if cohort deletion mode is selected when they disappear from an external source. If enabled, cohorts enrolled in at least one course will not be deleted.';
$string['laggingcourseidnumberpattern'] = 'Column to match course idnumber by pattern';
$string['laggingcourseidnumberpattern_desc'] = 'If exact course idnumber (the previous field) is empty, this field should contain an pattern of course idnumber in SQL-LIKE notation (using percent char "%" in place of arbitrary text).';
$string['laggingexactcourseidnumber'] = 'Column to match course idnumber';
$string['laggingexactcourseidnumber_desc'] = 'If the student\'s course is not known exactly, this field in a such row should be empty, otherwise the exact matching is done only and the pattern (see below) is ignored.';
$string['laggingstudentlogin'] = 'Column to match student\'s user login';
$string['laggingstudentlogin_desc'] = 'Student`s user login column name in the external database.';
$string['laggingstudentstable'] = 'Lagging students table';
$string['laggingstudentstable_desc'] = 'Lagging students are students that haven`t completed a course which has finished and still need access to it (to view the material and/or submit answers to assignments) but were automatically unenrolled with their group. Leave the table name empty to turn the feature off.';
$string['localcategoryfield'] = 'Local category field';
$string['localcoursefield'] = 'Local course field';
$string['localrolefield'] = 'Local role field';
$string['localuserfield'] = 'Local user field';
$string['newcoursecategory'] = 'New course category field';
$string['newcoursefullname'] = 'New course full name field';
$string['newcourseidnumber'] = 'New course ID number field';
$string['newcourseshortname'] = 'New course short name field';
$string['newcoursetable'] = 'Remote new courses table';
$string['newcoursetable_desc'] = 'Specify of the name of the table that contains list of courses that should be created automatically. Empty means no courses are created.';
$string['option_cohortextremovedkeep'] = 'Keep cohort enrolled';
$string['option_cohortextremovedsuspend'] = 'Suspend course enrolment (keep user data)';
$string['option_cohortextremovedunenrol'] = 'Remove cohort & unenroll from courses completely';
$string['option_usercohortextremovedkeep'] = 'Keep in cohort (keep enrolled)';
$string['option_usercohortextremovedsuspend'] = 'Suspend on all courses (refedined by cohort enrollment plugin)';
$string['option_usercohortextremovedunenrol'] = 'Remove from cohort';
$string['pluginname'] = 'POAS External database';
$string['pluginname_desc'] = 'You can use an external database (of nearly any kind) to control your enrolments. It is assumed your external database contains at least a field containing a course ID, and a field containing a user ID. These are compared against fields that you choose in the local course and user tables. Enhanced by Software Engineering (POAS) Department of Volgograd State Technical University.';
$string['poasdatabase:config'] = 'Configure POAS database enrol instances';
$string['poasdatabase:unenrol'] = 'Unenrol suspended users';
$string['privacy:metadata'] = 'The External database enrolment plugin does not store any personal data.';
$string['remotecategoriestable'] = 'Remote categories table';
$string['remotecategoriestable_desc'] = 'Specify of the name of the table that contains list of categories that should be created automatically. Empty means no categories are created.';
$string['remotecategoryidnumberfield'] = 'Remote category idnumber field';
$string['remotecategorynamefield'] = 'Remote category full name field';
$string['remotecohortdescriptionfield'] = 'Remote cohort description field';
$string['remotecohortidnumberfield'] = 'Remote cohort idnumber field';
$string['remotecohortmemberrole'] = 'Remote cohort role field';
$string['remotecohortmemberrole_desc'] = 'The role for the cohort when enrolling in a course: the name of the field in remote table. Values are used to compare records in the role table (by role name).';
$string['remotecohortnamefield'] = 'Remote cohort full name field';
$string['remotecohortstable'] = 'Remote cohorts table';
$string['remotecohortstable_desc'] = 'Specify of the name of the table that contains list of cohorts that should be created automatically. Empty means no cohorts are created.';
$string['remotecoursecohorttable'] = 'Remote cohort-course mapping table';
$string['remotecoursecohorttable_desc'] = 'Specify of the name of the table that contains list of cohort-course relations that ulitized for automatic enrolment.';
$string['remotecoursefield'] = 'Remote course field';
$string['remotecoursefield_desc'] = 'The name of the field in the remote table that we are using to match entries in the course table.';
$string['remotecourseidnumberfield'] = 'Remote course idnumber field';
$string['remoteenroltable'] = 'Remote user enrolment table';
$string['remoteenroltable_desc'] = 'Specify the name of the table that contains list of user enrolments. Empty means no user enrolment sync.';
$string['remotegroupnamefield'] = 'Remote group name field';
$string['remoteotheruserfield'] = 'Remote Other User field';
$string['remoteotheruserfield_desc'] = 'The name of the field in the remote table that we are using to flag "Other User" role assignments.';
$string['remoterolefield'] = 'Remote role field';
$string['remoterolefield_desc'] = 'The name of the field in the remote table that we are using to match entries in the roles table.';
$string['remotetagcourseidnumberfield'] = 'Course idnumber field in tag table';
$string['remotetagtable'] = 'Remote tag table';
$string['remotetagtagnamefield'] = 'Tag name field in tag table';
$string['remoteusercohortcohortidnumberfield'] = 'Cohort idnumber field in the table';
$string['remoteusercohorttable'] = 'Remote user-cohort mapping table';
$string['remoteusercohorttable_desc'] = 'Specify the name of the table that contains list of user-cohort relations. Empty means no user-cohort sync.';
$string['remoteusercohortuserloginfield'] = 'User login field in the table';
$string['remoteuserfield'] = 'Remote user field';
$string['remoteuserfield_desc'] = 'The name of the field in the remote table that we are using to match entries in the user table.';
$string['settingsheadercoursecohort'] = 'Cohort-based enrolment to courses';
$string['settingsheaderdb'] = 'External database connection';
$string['settingsheaderlaggingstudents'] = 'Enrolling lagging students';
$string['settingsheaderlocal'] = 'Local field mapping';
$string['settingsheadernewcategories'] = 'Creation of new categories';
$string['settingsheadernewcohorts'] = 'Creation of new cohorts';
$string['settingsheadernewcourses'] = 'Creation of new courses';
$string['settingsheaderremote'] = 'Remote enrolment sync';
$string['settingsheaderusercohort'] = 'Adding users to cohorts';
$string['synccohortcoursesstask'] = 'Synchronise external database cohorts groups in courses task';
$string['synccohortstask'] = 'Synchronise external database cohorts task';
$string['syncenrolmentstask'] = 'Synchronise external database enrolments task';
$string['synclaggingstudents'] = 'Enrol lagging students back to courses they (may) need';
$string['templatecourse'] = 'New course template';
$string['templatecourse_desc'] = 'Optional: auto-created courses can copy their settings from a template course. Type here the shortname of the template course.';
$string['updatecohortsmappingfield'] = 'Column to match external cohorts with existing ones';
$string['updatecohortsmappingfield_desc'] = 'Existing and external records will be mapped by this column, so the remaining columns may change.';
