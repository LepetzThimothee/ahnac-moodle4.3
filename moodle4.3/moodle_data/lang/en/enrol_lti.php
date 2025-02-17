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
 * Strings for component 'enrol_lti', language 'en', version '4.3'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Add content';
$string['adddeployment:deploymentid'] = 'Deployment ID';
$string['adddeployment:deploymentid_help'] = 'Each deployment of the tool (this site) in a platform will be assigned a Deployment ID that is unique to the registration. The Deployment ID must be registered with the tool (this site) before launches from the respective tool deployment are allowed.';
$string['adddeployment:invaliddeploymentiderror'] = 'Invalid deployment ID. The deployment ID already exists for this app registration.';
$string['adddeployment:name'] = 'Deployment name';
$string['addtocourse'] = 'Add to course';
$string['addtogradebook'] = 'Add to gradebook';
$string['allowframeembedding'] = 'Note: It is recommended that the site administration setting \'Allow frame embedding\' is enabled, so that tools are displayed within a frame rather than in a new window.';
$string['authltimustbeenabled'] = 'Note: This plugin requires the LTI authentication plugin to be enabled too.';
$string['cartridgeurl'] = 'Cartridge URL';
$string['cookiesarerequired'] = 'Cookies are blocked by your browser';
$string['cookiesarerequiredinfo'] = 'This tool can\'t be launched because your browser seems to be blocking third-party cookies.
<br><br>
To use this tool, try changing your browser cookie settings or using a different browser.';
$string['copiedtoclipboard'] = '{$a} copied to clipboard';
$string['copytoclipboard'] = 'Copy to clipboard';
$string['couldnotestablishproxy'] = 'Could not establish proxy with consumer.';
$string['customproperties'] = 'Custom properties';
$string['deeplinkingurl'] = 'Deep linking URL';
$string['deletedactivity'] = 'Deleted activity';
$string['deletedactivityalt'] = 'The activity shared by this instance has been deleted';
$string['deletedactivitydescription'] = 'The activity shared by this instance has been deleted. You can select another activity to share by editing the instance or, if no longer required, you can simply delete the instance. Deleting the instance will remove any associated user enrolments.';
$string['deploymentadd'] = 'Add a deployment';
$string['deploymentaddnotice'] = 'Deployment added';
$string['deploymentdelete'] = 'Delete deployment';
$string['deploymentdeleteconfirm'] = 'Warning: Deleting a deployment will result in a loss of access for any users following resource links tied to this tool deployment in the platform. Member and grade sync services will also be removed for these resources. Are you sure you want to delete deployment ID \'{$a}\'?';
$string['deploymentdeletenotice'] = 'Deployment deleted';
$string['deploymentid'] = 'Deployment ID';
$string['deployments'] = 'Deployments';
$string['deploymentsinfo'] = 'A deployment ID is generated by the platform when the tool is made available in a context. This may occur at the time of registration, or later, when the tool is made available to a specific course or category. The deployment ID must be entered here before launches from the tool deployment are permitted.';
$string['details'] = 'Details';
$string['editplatformdetails'] = 'Edit platform details';
$string['endpointltiversionnotice'] = 'The tool endpoints below are for manual LTI 1.3 setup only. For earlier versions (1.1/2.0), details for consumers can be found on the \'Published as LTI tools\' page, accessible via course navigation.';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can access until this date only.';
$string['enrolenddateerror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolisdisabled'] = 'The \'Publish as LTI tool\' plugin is disabled.';
$string['enrolltiversionincorrect'] = 'The resource is not set up for use over legacy LTI (versions 1.1/2.0). Please contact the administrator of this tool.';
$string['enrolmentfinished'] = 'Enrolment finished.';
$string['enrolmentnotstarted'] = 'Enrolment has not started.';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user enrols themselves from the remote system. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can access from this date onward only.';
$string['existingregistrationerror'] = 'A registration already exists for this issuer and client ID.';
$string['failedrequest'] = 'Failed request. Reason: {$a->reason}';
$string['frameembeddingnotenabled'] = 'To access the tool, please follow the link below.';
$string['gradesync'] = 'Grade synchronisation';
$string['gradesync_help'] = 'Whether grades from the tool are sent to the remote system (LTI consumer).';
$string['incorrecttoken'] = 'The token was incorrect. Please check the URL and try again, or contact the administrator of this tool.';
$string['invalidexpiredregistrationurl'] = 'Invalid or expired registration URL. Please check the URL and try again.';
$string['invalidrequest'] = 'Invalid request';
$string['invalidtoolconsumer'] = 'Invalid tool consumer.';
$string['jwksurl'] = 'JWKS URL';
$string['launchdetails'] = 'Launch details';
$string['launchdetails_help'] = 'A cartridge URL (also called configuration URL) plus secret or a launch URL are required for configuring the tool.';
$string['launchurl'] = 'Launch URL';
$string['loginurl'] = 'Initiate login URL';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Launch details';
$string['lti13launchdetails_help'] = 'The launch URL and custom properties are only required when manually configuring a resource link in the platform. Where possible, teachers should favour the content selection (deep linking) process for the creation of resource links.';
$string['lti:config'] = 'Configure \'Publish as LTI tool\' instances';
$string['lti:unenrol'] = 'Unenrol users from the course';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'There was a problem fetching the OpenID configuration from the platform. The result was not valid JSON. This may also be caused by blocked hosts configuration. Please make sure your site is configured to connect to the platform domain and try again using a new registration URL.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Invalid launch data or tool configuration. The deployment could not be found (deployment ID: {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'Invalid launch data. The resource \'{$a}\' is unavailable or does not exist.';
$string['ltiadvlauncherror:invalidregistration'] = 'Invalid launch data or tool configuration. A platform registration could not be found (issuer: {$a->platform}, client ID: {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Invalid launch data. The custom claim field \'id\' is required to launch an activity or resource over LTI Advantage.';
$string['ltilegacy'] = 'Legacy LTI (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Legacy LTI (1.1/2.0) tools are deprecated. Content should now be shared using LTI Advantage.';
$string['ltiversion'] = 'LTI version';
$string['ltiversion_help'] = 'The version of LTI which will be used to access the published content.

LTI Advantage allows content to be published to pre-registered platforms without the need to make changes on the platform whenever new content is published. The security contract is between the platform and the tool.

Legacy versions (1.1 and 2.0), require that a new tool registration is created on the consumer for each piece of newly published content because each piece of published content has its own security contract with the consumer site and must be set up on a case by case basis.';
$string['managedeployments'] = 'Manage deployments';
$string['maxenrolled'] = 'Maximum enrolled users';
$string['maxenrolled_help'] = 'The maximum number of remote users who can access the tool. If set to zero, the number of enrolled users is unlimited.';
$string['maxenrolledreached'] = 'The maximum number of remote users allowed to access the tool has been reached.';
$string['membersync'] = 'User synchronisation';
$string['membersync_help'] = 'Whether a scheduled task synchronises enrolled users in the remote system with enrolments in this course, creating an account for each remote user as necessary, and enrolling or unenrolling them as required.

If set to no, at the moment when a remote user accesses the tool, an account will be created for them and they will be automatically enrolled.';
$string['membersyncmode'] = 'User synchronisation mode';
$string['membersyncmode_help'] = 'Whether remote users should be enrolled and/or unenrolled from this course.';
$string['membersyncmodeenrolandunenrol'] = 'Enrol new and unenrol missing users';
$string['membersyncmodeenrolnew'] = 'Enrol new users';
$string['membersyncmodeunenrolmissing'] = 'Unenrol missing users';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'No tool deployments found';
$string['nopublishedcontent'] = 'No resources or activities are published yet';
$string['noregisteredplatforms'] = 'No registered platforms';
$string['notoolsprovided'] = 'No tools provided';
$string['opensslconfiginvalid'] = 'LTI 1.3 requires a valid openssl.cnf to be configured and available to your web server. Please contact the site administrator to configure and enable openssl for this site.';
$string['opentool'] = 'Open tool';
$string['platformdetails'] = 'Platform details';
$string['platformdetailsinfo'] = 'Once the tool has been set up in the platform, details from the platform must be recorded here to complete the registration.
<ul>
<li>For dynamic registrations, this information will have been set automatically and no further changes are required.</li>
<li>For manual registrations, this information must be manually copied from the platform.</li>
</ul>';
$string['pluginname'] = 'Publish as LTI tool';
$string['pluginname_desc'] = 'The \'Publish as LTI tool\' plugin, together with the LTI authentication plugin, allows remote users to access selected courses and activities. In other words, Moodle functions as an LTI tool provider.';
$string['privacy:metadata:enrol_lti_users'] = 'The list of users enrolled via an LTI provider';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'The time when the user last accessed the course';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'The last grade the user was recorded of having';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'The time when the user was enrolled';
$string['privacy:metadata:enrol_lti_users:userid'] = 'The ID of the user';
$string['provisioningmode'] = 'Provisioning mode';
$string['provisioningmode_help'] = 'This setting determines how accounts are handled on first launch. Several modes are supported:
<ul>
<li>New accounts only (automatic). Accounts will be automatically created for users launching from the platform. This is the default for student launches.</li>
<li>Existing and new accounts (prompt). The user will be given a choice of what to do. They can decide to link an existing account, or have a new account created for them. This is the most flexible option and the default for teacher launches.</li>
<li>Existing accounts only (prompt). The user will be asked to link an existing account and cannot access the tool resources without doing so.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Student first launch provisioning mode';
$string['provisioningmodeteacherlaunch'] = 'Teacher first launch provisioning mode';
$string['publishedcontent'] = 'Published content';
$string['publishedcontent_help'] = 'A published resource or activity can be used in registered platforms via the content selection (deep linking) flow. Additionally, a resource link can be created manually in the platform by using the launch URL and the custom properties provided.';
$string['registeredplatforms'] = 'Registered platforms';
$string['registeredplatformsltiversionnotice'] = 'The platforms listed below are registered for LTI 1.3 communication. For earlier versions, consumer registration is not required.';
$string['registerplatform:accesstokenurl'] = 'Access token URL';
$string['registerplatform:accesstokenurl_help'] = 'The URL to which access token requests will be sent by the tool. Will be provided by the platform.';
$string['registerplatform:authrequesturl'] = 'Authentication request URL';
$string['registerplatform:authrequesturl_help'] = 'The URL to which OpenID Connect authentication requests will be sent by the tool. Will be provided by the platform.';
$string['registerplatform:clientid'] = 'Client ID';
$string['registerplatform:clientid_help'] = 'A string used to identify the tool registration on the platform. Will be provided by the platform.';
$string['registerplatform:duplicateregistrationerror'] = 'Invalid client ID. This client ID is already registered for the platform ID provided.';
$string['registerplatform:invalidurlerror'] = 'Invalid URL. Have you included http:// or https://?';
$string['registerplatform:jwksurl'] = 'Public keyset URL';
$string['registerplatform:jwksurl_help'] = 'The public keyset or JWKS URL, used to get the platform\'s public key. Will be provided by the platform.';
$string['registerplatform:name'] = 'Platform name';
$string['registerplatform:name_help'] = 'A short name describing the platform. This can be changed at any time.';
$string['registerplatform:platformid'] = 'Platform ID (issuer)';
$string['registerplatform:platformid_help'] = 'The URL identifying the third party learning platform. Will be provided by the platform.';
$string['registerplatformadd'] = 'Register a platform';
$string['registerplatformaddnotice'] = 'Platform registration added';
$string['registerplatformdelete'] = 'Delete platform registration';
$string['registerplatformdeleteconfirm'] = 'Are you sure you want to delete the registration for the platform \'{$a}\'? This will also remove all tool deployments stored against this registration.';
$string['registerplatformdeletenotice'] = 'Platform registration deleted';
$string['registerplatformedit'] = 'Edit registration';
$string['registerplatformeditnotice'] = 'Platform registration updated';
$string['registration'] = 'Published tool registration';
$string['registrationdeeplinklabel'] = 'Add content from {$a}';
$string['registrationdynamic'] = 'Dynamic registration';
$string['registrationmanual'] = 'Manual registration';
$string['registrationresourcelinklabel'] = 'Launch content from {$a}';
$string['registrationstatus'] = 'Status';
$string['registrationstatusactive'] = 'Active';
$string['registrationstatuspending'] = 'Pending';
$string['registrationurl'] = 'Registration URL';
$string['registrationurl_help'] = 'If a registration URL (also called proxy URL) is used, then the tool is automatically configured.';
$string['registrationurlinfomessage'] = 'If the platform supports dynamic registration, use the registration URL below. For further information on dynamic registration, see the documentation <a href="{$a}">Publish as LTI tool</a>.';
$string['remotesystem'] = 'Remote system';
$string['requirecompletion'] = 'Require course or activity completion prior to grade synchronisation';
$string['returnurlnotset'] = 'Return URL was not set.';
$string['roleinstructor'] = 'Role for teacher';
$string['roleinstructor_help'] = 'The role assigned in the tool to the remote teacher.';
$string['rolelearner'] = 'Role for student';
$string['rolelearner_help'] = 'The role assigned in the tool to the remote student.';
$string['secret'] = 'Secret';
$string['secret_help'] = 'A string of characters which is shared with the remote system (LTI consumer) to provide access to the tool.';
$string['sharedexternaltools'] = 'Published as LTI tools';
$string['successfulregistration'] = 'Successful registration';
$string['tasksyncgrades'] = 'Publish as LTI tool grade sync';
$string['tasksyncmembers'] = 'Publish as LTI tool users sync';
$string['tooldetails'] = 'Tool details';
$string['toolsprovided'] = 'Published tools';
$string['toolsprovided_help'] = 'A tool may be shared with another site by providing either launch details or a registration URL.';
$string['tooltobeprovided'] = 'Tool to be published';
$string['toolurl'] = 'Tool URL';
$string['userdefaultvalues'] = 'User default values';
$string['viewplatformdetails'] = 'View platform details';
$string['viewtoolendpoints'] = 'View tool endpoints';
