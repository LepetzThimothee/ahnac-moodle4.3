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
 * Strings for component 'antivirus_clamav', language 'en', version '4.3'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'There is a problem with AntiVirus scanning at the moment. Your file {$a->item} has not been uploaded. Please try again later.';
$string['clamfailed'] = 'ClamAV has failed to run.  The return error message was "{$a}". Here is the output from ClamAV:';
$string['clamfailureonupload'] = 'On ClamAV failure';
$string['configclamactlikevirus'] = 'Treat files like viruses';
$string['configclamdonothing'] = 'Treat files as OK';
$string['configclamfailureonupload'] = 'If \'Treat files as OK\' is selected, files will be moved to the destination directory. If \'Refuse upload, try again\' is selected, the user will be prompted to try again later. If \'Treat files like viruses\' is selected, files will be moved into the quarantine area, or deleted. Warning: With this option, if for some reason clam fails to run (usually because of an invalid pathtoclam), then ALL uploaded files will be moved to the given quarantine area, or deleted.';
$string['configclamtryagain'] = 'Refuse upload, try again';
$string['errorcantopensocket'] = 'Connecting to Unix domain socket resulted in error {$a}';
$string['errorclamavnoresponse'] = 'ClamAV does not respond; check daemon running state.';
$string['errornounixsocketssupported'] = 'Unix domain socket transport is not supported on this system. Please use the command line option instead.';
$string['invalidpathtoclam'] = 'Path to ClamAV, {$a}, is invalid.';
$string['pathtoclam'] = 'Command line';
$string['pathtoclamdesc'] = 'If the running method is set to "command line", enter the path to ClamAV here. On Linux this will be /usr/bin/clamscan or /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Unix domain socket';
$string['pathtounixsocketdesc'] = 'If the running method is set to "Unix domain socket", enter the path to ClamAV Unix socket here. On Debian Linux this will be /var/run/clamav/clamd.ctl. Please make sure that clamav daemon has read access to uploaded files, the easiest way to ensure that is to add \'clamav\' user to your webserver group (\'www-data\' on Debian Linux).';
$string['pluginname'] = 'ClamAV antivirus';
$string['privacy:metadata'] = 'The ClamAV antivirus plugin does not store any personal data.';
$string['quarantinedir'] = 'Quarantine directory';
$string['runningmethod'] = 'Running method';
$string['runningmethodcommandline'] = 'Command line';
$string['runningmethoddesc'] = 'Method of running ClamAV. Command line is used by default, however on Unix systems better performance can be obtained by using system sockets.';
$string['runningmethodtcpsocket'] = 'TCP socket';
$string['runningmethodunixsocket'] = 'Unix domain socket';
$string['tcpsockethost'] = 'TCP socket hostname';
$string['tcpsockethostdesc'] = 'Domain name of the ClamAV server';
$string['tcpsocketport'] = 'TCP socket port';
$string['tcpsocketportdesc'] = 'The port to use when connecting to ClamAV';
$string['tries'] = 'Scanning attempts';
$string['tries_desc'] = 'Number of attempts made by ClamAV if there is an error during the scanning process.';
$string['tries_notice'] = 'Clamav scanning has tried {$a->tries} time(s).
{$a->notice}';
$string['unknownerror'] = 'There was an unknown error with ClamAV.';
