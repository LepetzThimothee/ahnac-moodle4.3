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
 * Strings for component 'cache_memcache', language 'en', version '4.3'.
 *
 * @package     cache_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Memcache';
$string['servers'] = 'Servers';
$string['servers_help'] = 'This sets the servers that should be utilised by this memcache adapter.
Servers should be defined one per line and consist of a server address and optionally a port and weight.
If no port is provided then the default port (11211) is used.

For example:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>';
$string['testservers'] = 'Test servers';
$string['testservers_desc'] = 'The test servers get used for unit tests and for performance tests. It is entirely optional to set up test servers. Servers should be defined one per line and consist of a server address and optionally a port and weight.
If no port is provided then the default port (11211) is used.';
