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
 * Strings for component 'tool_lala', language 'en', version '4.3'.
 *
 * @package     tool_lala
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcontexts'] = 'all contexts';
$string['analysable'] = 'analysable';
$string['analysisinterval'] = 'analysis interval';
$string['automatically'] = 'automatically';
$string['configid'] = 'config-id';
$string['contexts'] = 'contexts';
$string['contexts_help'] = 'The gathered data will be limited to this set of contexts. No context restrictions will be applied if no contexts are selected.';
$string['continueversion'] = 'continue version';
$string['continueversionlabel'] = 'continue version automatically or manually';
$string['createmodelversiontitle'] = 'Manual settings for creating a new version for model configuration {$a->name}';
$string['createversion'] = 'create new version';
$string['createversionlabel'] = 'create version automatically or manually';
$string['datagatheringdonthavedataset'] = 'Want to use a Moodle course backup file (.mbz)?';
$string['datagatheringexplanation'] = 'Choose which data should be used for the new model version.';
$string['datagatheringfromthisinstance'] = 'Option A: Gather data from this Moodle instance';
$string['datagatheringinforestorebackup'] = 'If you have admin privileges, you may upload a Moodle course using <a href=\'/backup/restorefile.php?contextid=1\' target=\'_blank\'>Moodle\'s course restore feature</a>. Your data can then be gathered from this Moodle instance. We recommend that you give the restored course a meaningful name, so you can easily select this data to be gathered. Furthermore, adding the course to <a href=\'http://localhost/course/editcategory.php?parent=0\' target=\'_blank\'>a new category</a>, e.g. \'lala\', can help differentiate it from actual courses on this Moodle instance.';
$string['datagatheringowndata'] = 'Option B: Skip data gathering and upload dataset';
$string['datagatheringtitle'] = 'Data gathering';
$string['defaultcontexts'] = 'default contexts used for data gathering';
$string['error'] = 'error';
$string['eventmodelversioncreated'] = 'Model version created';
$string['finished'] = 'finished';
$string['indicators'] = 'indicators';
$string['lala:createmodelversion'] = 'Trigger the creation of a new model version';
$string['lala:downloadevidence'] = 'Download the evidence produced for model versions';
$string['lala:viewpagecontent'] = 'View the content of the plugin page';
$string['learnaboutauditing'] = 'Learn about model auditing';
$string['learnmore'] = 'Learn more about using LaLA in the <a href=\'https://github.com/LiFaytheGoblin/moodle-tool_lala/wiki/Quick-Start\' target=\'_blank\'>Quick Start guide</a>.';
$string['manually'] = 'manually';
$string['model'] = 'model';
$string['modelid'] = 'model-id';
$string['moodleanalyticsnote'] = 'Model configurations continue to be managed by Moodle administrators on the <a href=\'../analytics/index.php\' target=\'_blank\'>Learning Analytics page</a>.';
$string['name'] = 'name';
$string['nomodelconfigurations'] = 'No model configurations found. Create some models using the Learning Analytics functionality, before you can train them and collect evidence for auditing them.';
$string['nomodelversions'] = 'You have not created any models for this configuration yet. Thus, no evidence for auditing is available.';
$string['plugindescription'] = '"Let(\')s audit Learning Analytics" (LaLA) enables the retrieval of <a href=\'https://github.com/LiFaytheGoblin/moodle-tool_lala/wiki/Evidence\' target=\'_blank\'>evidence</a> for your <a href=\'https://github.com/LiFaytheGoblin/moodle-tool_lala/wiki/Auditing\' target=\'_blank\'>audit</a> of a <a href=\'https://github.com/LiFaytheGoblin/moodle-tool_lala/wiki/Moodle-Learning-Analytics\' target=\'_blank\'>Moodle Learning Analytics</a> model.';
$string['pluginname'] = 'Let(\')s audit Learning Analytics';
$string['predictionsprocessor'] = 'predictions processor (ML backend)';
$string['privacy:metadata'] = 'This plugin only creates database tables concerning model configuration, version and evidence meta data. Some data is gathered from the Moodle instance during the model version creation, and provided to admins and auditors as evidence. This data is anonymized BEFORE storing it permanently a file.';
$string['savefile'] = 'Save file';
$string['saveselection'] = 'Save selection';
$string['serializedfilelocation'] = 'location of file containing serialized data';
$string['started'] = 'started';
$string['target'] = 'target';
$string['traintest'] = 'Train: {$a->trainsize}%, Test: {$a->testsize}%';
$string['traintestsplit'] = 'train-test-split';
$string['unfinished'] = 'not finished yet';
$string['version'] = 'version';
$string['versionid'] = 'version-id';
$string['versions'] = 'versions';
