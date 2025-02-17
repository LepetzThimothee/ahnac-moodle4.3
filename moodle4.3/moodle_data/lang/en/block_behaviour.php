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
 * Strings for component 'block_behaviour', language 'en', version '4.3'.
 *
 * @package     block_behaviour
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminheader'] = 'Grant or revoke researcher role to user by course';
$string['adminheadershownames'] = 'Show names or sequential numbers for students';
$string['adminheaderstudyid'] = 'Show or hide the student study ID';
$string['adminheaderuselord'] = 'Integrate with the LORD plugin';
$string['adminuselorddesc'] = 'This will give teachers the option to take the learning object graph from the Learning Object Relation Discovery (LORD) block plugin.';
$string['adminuselordlabel'] = 'Allow use of the graph from LORD?';
$string['alreadyexists'] = 'File {$a} already exists, please choose another file name.';
$string['badfile'] = 'Unknown file fields, got the right file?';
$string['behaviour'] = 'Behaviour Analytics';
$string['behaviour:addinstance'] = 'Add a new Behaviour Analytics block';
$string['behaviour:export'] = 'Export';
$string['behaviour:myaddinstance'] = 'Add a new Behaviour Analytics block to My Moodle page';
$string['behaviour:view'] = 'View Behaviour Analytics';
$string['close'] = 'Close';
$string['cluster'] = 'Cluster';
$string['clusteringname'] = 'Name this analysis';
$string['clusteringnamebutton'] = 'Save';
$string['clusterreplay'] = 'Cluster replay';
$string['convergence'] = 'Convergence';
$string['copy'] = 'Copy';
$string['decomposed'] = 'Decomposed centroids';
$string['delbutton'] = 'Delete selected data';
$string['delcluster'] = 'Delete clustering data';
$string['delclusterdesc'] = 'Deletes all clustering, manual clustering, cluster membership, and centroid comment data for all users in this course.';
$string['delconfirm'] = 'Are you sure you want to delete the selected clustering data? This action can not be undone.';
$string['deldata'] = 'Delete data';
$string['deleteall'] = 'Delete clustering, graph configuration, and/or student log data';
$string['delgraph'] = 'Delete graphing data';
$string['delgraphdesc'] = 'Deletes all graph configuration data for all users in this course.';
$string['deluser'] = 'Delete student data';
$string['deluserdesc'] = 'Deletes all student log data for this course. These logs are a duplicate of the Moodle logs that Behaviour Analytics extracts. No data is deleted from the Moodle logs.';
$string['disttocluster'] = 'Distance to cluster';
$string['docsanchor'] = 'Documentation';
$string['docsconfig1'] = 'The interface includes the graph of all course activities, a weight slider, and a hierarchical legend of the nodes. Researchers will also have a menu of the other user\'s graph configurations which they can view, but not alter. The weight slider controls the link weights where positive values produce nodes that pull together and the negative value will push the nodes apart. A value of zero causes all the nodes to remain stationary. The nodes can then be dragged into position. Unwanted nodes can be removed by right clicking and choosing the remove option or by unchecking the associated box in the hierarchical legend. Hovering over a node will show the type and name of the activity as well as bring up an interactive preview. Moving the mouse outside the preview makes it disappear.';
$string['docsdelete1'] = 'Administrators can delete course data stored by the plugin. This may be useful when teaching a course with a new group of students. Or you may just want to delete old data and start clean. The delete data page has 3 options to delete clustering, graph configuration, or student log data. The clustering data is what is made when viewing and clustering students. This includes the clustering and membership data, as well as comment data. The graph configuration data is made when positioning the graph nodes. Deleting this data removes all graph configurations for the course as well as student centroid data associated with those graph configurations. The student log data is extracted from the Moodle logs and copied into another database table. It is the duplicated data that is deleted, not the Moodle log data itself. Data for all users in the course is deleted.';
$string['docsdescription'] = 'Behaviour Analytics is a Moodle block plugin that is intended for extracting sequential behaviour patterns of students from course access logs. Behaviour Analytics considers all the activities on a course page as nodes in a graph. The links between nodes are the student accesses of those activities. Each student then has a centroid point derived from their accesses to activities and the coordinates of the nodes. The student centroids can be clustered to group students and find common access patterns. The nodes of the graph can be manually positioned and/or removed from the graph, which will affect the student centroids. When students create new data for the system, the clustering results get updated and can be replayed to visually verify the grouping remains correct with the addition of the new data. Incorrect groupings can be manually altered. The plugin is intended for teacher use and will not be seen by students.';
$string['docsexport'] = 'Teacher users will see an "Export" button to export a complete anonymized data set, which will export everything the plugin has, but change all student IDs to their study IDs. Additionally, administrator users will see export and import forms in the block which are used to export or import student resource access data. The export form has two check boxes, one for currently enrolled students and the other for previously enrolled students. Clicking the export button allows the data to be downloaded. Exporting can also be done through Moodle\'s reports interface by navigating to Site Administration -> Reports -> Logs. Pick the course to export for and set the actions to "View", then click the "Get these logs" button. Once the logs are retrieved, scroll down to the bottom of the page and download the logs as a JavaScript Object Notation (.json) file. Exporting from the command line is also possible by running the export-cli.php script located in the cli directory. Running the script without parameters will show a usage message.';
$string['docshowconfig'] = 'How to configure the resource nodes.';
$string['docshowdelete'] = 'How to delete data.';
$string['docshowimport'] = 'How to export and import data.';
$string['docshowlord'] = 'How to integrate with the Learning Object Relation Discovery (LORD) plugin.';
$string['docshowreplay'] = 'How to replay clustering results.';
$string['docshowset'] = 'How to change global settings.';
$string['docshowtask'] = 'How to use the scheduled task.';
$string['docshowview'] = 'How to view the student behaviour graph and run clustering.';
$string['docsimport'] = 'The import form can take a dragged and dropped file or a file can be chosen using the "Choose a file" button. Only JavaScript Object Notation (.json) file types are accepted. The file name must also contain the first word of the course short name to ensure that the user is importing the right data into the right course. Either a file exported through the export form or through Moodle\'s report interface can be imported.';
$string['docsissues'] = 'Report an issue.';
$string['docslord1'] = 'First, the LORD plugin must be installed in Moodle. Then, there is an administrator option to allow the integration. With the administrator option enabled, an extra link will appear in the block to configure the integration. There are 2 settings available from within the block. The first causes Behaviour Analytics to use the latest graph made in the LORD plugin. The second switches between using the system generated graph and the user manipulated graph. If there is no LORD graph to use, the graph made with Behaviour Analytics will be used instead.';
$string['docslord2'] = 'When using the LORD generated graph, it is possible to manipulate the nodes using the "Configure resource nodes" feature. The graph will appear slightly different, as it will have grouping nodes and their associated links. If a LORD graph is manipulated within Behaviour Analytics, it will cease to be a LORD graph. This means that LORD integration must be switched off to use the newly manipulated graph. Such a graph will have all the nodes in the correct positions, but the links will appear differently, as there will no longer be links between nodes.';
$string['docsreplay1'] = 'If no clustering has been done, only the interface is shown. The interface consists of a menu of clustering runs sorted by user, graph configuration, and clustering run. Selecting an item from the menu will bring up the same graph shown at the onset of clustering. The play and step buttons control the replay and determine which iteration is seen. The replay can be stepped through forward or back, but can only be played forward. Clicking a centroid will allow notes to be added or viewed if any comment was made for that centroid during clustering.';
$string['docsreplay2'] = 'When a clustering run has used the full time slice of the time slider and also run to convergence, that clustering run will be updated with new student data when it is available. This updating will change student centroids, add iterations to the replay, and can alter the cluster membership. Using decomposed centroids causes the centroid to align on a node and can make the student centroid highly mobile. Geometric centroids tend to move less as there is more data.';
$string['docsreplay3'] = 'Manual clustering is possible during the replay, but behaves slightly differently than during clustering. Once the replay has reached initial convergence, student centroids can be dragged and dropped to place them in another cluster. The manual clustering produces a second set of clustering centroids that are the same colour as the originals. The original set is unchanged while the manual clusters are more transparent and represent the changes the user has made. Both sets of clusters are updated with new data as it is available.';
$string['docssettings'] = 'The plugin contains some global settings that affect what a user sees when they use the program. There is an option to allow the students to see their study IDs and to show student names in the graphing menu rather than sequential numbers. If the LORD plugin is installed, there is an option to allow integration with it. The settings also give the option to grant or revoke the role of researcher to any non-student user enrolled in a course the plugin is installed in. The researcher role allows the user to see the current graph configurations and clustering results of other users in that course. The researcher can only see another user\'s data, they can not change it. The settings can be accessed as administrator from Site administration -> Plugins overview, then searching for "Behaviour Analytics" and clicking the associated settings link.';
$string['docstask'] = 'The block has a scheduled task that is, by default, set to run once a day. The frequency that the task runs can be changed by going to Site administration -> Server -> Scheduled tasks, then clicking the settings icon for "Update Behaviour Analytics." From here, it is also possible to run the task manually.';
$string['docsview1'] = 'If the resource nodes are not configured prior to viewing the graph, the nodes are given automatic positions. The view interface consists of the graph, a menu of student groups, a menu of students, and a time slider. The group and student menus allow selection of which students to view on the graph. The time slider allows selection of which links to view. All users have their time start at access 1, so not all students will have links at the far end of the time slider. The two handles control the slice of time that is viewed. Hovering over a node will produce the name of the associated resource and a preview of the activity in an interactive window. Moving the mouse outside the preview removes it.';
$string['docsview2'] = 'There is a button labelled "Cluster" above the student menu that moves from the graph viewing stage to the clustering stage. Clicking the button will show the same graph and student links, but with each student centroid denoted by a triangle. There are two radio buttons at the bottom left that determine the centroid type, which are weighted geometric (default) and decomposed. The slider in the clustering interface controls the stages of clustering. Moving the slider to the second position removes the graph and scales the student centroids to the edge of the viewing area. The third position on the slider allows clustering to be performed. A text box takes the number of clusters to use or the default of 3 will be used. The k-means clustering can then be stepped through one iteration at a time with the step button or it can be played to convergence by using the play button. The reset button will reset the clustering stage, clearing the current clustering results. All the clustering results are logged in the right side panel, which shows which cluster each student belongs to.';
$string['docsview3'] = 'During clustering, student centroids and clustering centroids can have comments added to them. Clicking a centroid will bring up a comment box to record any notes about the cluster or its members. Hovering over a student centroid will show that student\'s graph. Hovering over a clustering centroid will show a graph of common links among members of that cluster. Unlike the student graph, the common links graph will remain visible until the mouse is clicked outside the graph. While the common links graph is visible, hovering over a node will produce a preview of that node and hovering over a link will produce previews of both nodes attached to that link.';
$string['docsview4'] = 'During clustering, it is also possible to assist the clustering algorithm by dragging and dropping student centroids. When a student centroid is dragged away from its original location and dropped elsewhere, the clustering centroid closest to where the student was dropped will have that student included in the cluster. This feature can assist the clustering algorithm when its results are not quite what is desired based on the user\'s perception of the visualization. The clustering algorithm will still need to run again and may override the manual clustering at this point.';
$string['docswhatis'] = 'What is Behaviour Analytics?';
$string['dragoff'] = 'Drag students OFF';
$string['dragon'] = 'Drag students ON';
$string['eventbehaviourexported'] = 'Behaviour Analytics log file exported';
$string['eventbehaviourimported'] = 'Behaviour Analytics log file imported';
$string['eventbehaviourviewed'] = 'Behaviour Analytics viewed';
$string['exportall'] = '_all';
$string['exportbutlabel'] = 'Export';
$string['exportcliout'] = 'Exporting logs to {$a}';
$string['exportcliusage'] = 'Usage: ./export-cli.php courseid past(0|1) current(0|1) [filename]';
$string['exportcurlabel'] = 'Current';
$string['exportcurrent'] = '_current';
$string['exportdata'] = 'Export all data (anonymized)';
$string['exportdatafn'] = '{$a}_complete';
$string['exported'] = 'The user with id \'{$a->uid}\' exported a log file for the course with id \'{$a->cid}\'.';
$string['exportlogprefix'] = 'logs_';
$string['exportlogs'] = 'Export student logs';
$string['exportpast'] = '_past';
$string['exportpastlabel'] = 'Past';
$string['f1'] = 'F1';
$string['f2'] = 'F2';
$string['fhalf'] = 'F0.5';
$string['geometrics'] = 'Geometric centroids';
$string['goodfile'] = 'File import successful.';
$string['graph'] = 'Graph';
$string['hide'] = 'Hide';
$string['importbutlabel'] = 'Import';
$string['imported'] = 'The user with id \'{$a->uid}\' imported a log file for the course with id \'{$a->cid}\'.';
$string['importlogs'] = 'Import student logs';
$string['invalidcourse'] = 'Course id number {$a} is not valid. Course does not exist.';
$string['iteration'] = 'Iteration';
$string['launchconfiguration'] = 'Configure resource nodes';
$string['launchplugin'] = 'View student behaviour';
$string['launchreplay'] = 'Replay clustering';
$string['linksweight'] = 'Links weight';
$string['manualcluster'] = 'Manual clustering';
$string['members'] = 'members';
$string['nofile'] = 'No file selected, please choose a file.';
$string['nogroup'] = 'No group';
$string['nonodes'] = 'Import failed: need to configure resource nodes first.';
$string['nullexport'] = 'Nothing to export.';
$string['numclusters'] = 'Num clusters';
$string['numofclusters'] = 'Number of clusters';
$string['numstudents'] = 'Number of students';
$string['pluginname'] = 'Behaviour Analytics';
$string['precision'] = 'Precision';
$string['print'] = 'Print';
$string['privacy:metadata:block_behaviour:centroidx'] = 'The centroid x-coordinate value.';
$string['privacy:metadata:block_behaviour:centroidy'] = 'The centroid y-coordinate value.';
$string['privacy:metadata:block_behaviour:changed'] = 'The last time value that this graph node moved.';
$string['privacy:metadata:block_behaviour:clusterid'] = 'Unique identifier for clustering runs.';
$string['privacy:metadata:block_behaviour:clusternum'] = 'Identifier for different clusters.';
$string['privacy:metadata:block_behaviour:commentid'] = 'Unique identifier for the comment.';
$string['privacy:metadata:block_behaviour:coordsid'] = 'Unique identifier for graph node coordinate configurations.';
$string['privacy:metadata:block_behaviour:courseid'] = 'Unique identification number of the course this record belongs to.';
$string['privacy:metadata:block_behaviour:iteration'] = 'The clustering iteration number.';
$string['privacy:metadata:block_behaviour:moduleid'] = 'Unique identifier for course modules.';
$string['privacy:metadata:block_behaviour:numnodes'] = 'The number of resource accesses.';
$string['privacy:metadata:block_behaviour:remark'] = 'The comment text.';
$string['privacy:metadata:block_behaviour:scale'] = 'The scaling value for denormalizing the graph nodes.';
$string['privacy:metadata:block_behaviour:studentid'] = 'Unique identifier for students.';
$string['privacy:metadata:block_behaviour:studyid'] = 'A unique anonymized identifier for students.';
$string['privacy:metadata:block_behaviour:time'] = 'Value representing the time this record was created, which is used solely for sorting.';
$string['privacy:metadata:block_behaviour:totalx'] = 'Accumulated x-coordinate value.';
$string['privacy:metadata:block_behaviour:totaly'] = 'Accumulated y-coordinate value.';
$string['privacy:metadata:block_behaviour:usecustom'] = 'Flag to use the manipulated graph or not.';
$string['privacy:metadata:block_behaviour:usegeometric'] = 'Flag to use geometric or decomposed centroids.';
$string['privacy:metadata:block_behaviour:uselord'] = 'Flag to use the graph from LORD plugin or not.';
$string['privacy:metadata:block_behaviour:userid'] = 'Unique identification number of the student who left this record.';
$string['privacy:metadata:block_behaviour:visible'] = 'Whether or not the graph node is visible.';
$string['privacy:metadata:block_behaviour:xcoord'] = 'The x-coordinate value of the graph node.';
$string['privacy:metadata:block_behaviour:ycoord'] = 'The y-coordinate value of the graph node.';
$string['privacy:metadata:block_behaviour_centres'] = 'Decomposed student centroid values.';
$string['privacy:metadata:block_behaviour_centroids'] = 'Table for storing accumulated centroid information.';
$string['privacy:metadata:block_behaviour_clusters'] = 'Table for storing clustering data.';
$string['privacy:metadata:block_behaviour_comments'] = 'Comment data that teachers have entered for clusters and cluster members.';
$string['privacy:metadata:block_behaviour_coords'] = 'Coordinates for the nodes of each course module in the graph.';
$string['privacy:metadata:block_behaviour_imported'] = 'Table to store a copy of the access logs, which includes both Moodle generated logs and those that have been imported from elsewhere using the import feature of the plugin.';
$string['privacy:metadata:block_behaviour_lord_options'] = 'Stores the LORD plugin integration options.';
$string['privacy:metadata:block_behaviour_man_clusters'] = 'Data for clusters that have been manually altered during replay.';
$string['privacy:metadata:block_behaviour_man_members'] = 'Data for cluster members that have been manually altered during replay.';
$string['privacy:metadata:block_behaviour_members'] = 'Table for storing clustering membership data.';
$string['privacy:metadata:block_behaviour_scales'] = 'Scaling data for the graph configurations.';
$string['privacy:metadata:block_behaviour_studyids'] = 'A mapping of course and student ids to their respective study ids.';
$string['randcentroids'] = 'Random centroids';
$string['recall'] = 'Recall';
$string['removegraph'] = 'Remove graph';
$string['researchrole'] = 'Grant researcher role to {$a->username} for {$a->coursename}';
$string['reset'] = 'Reset';
$string['runkmeans'] = 'Run k-means';
$string['save'] = 'Save';
$string['section'] = 'Section';
$string['settings'] = 'LORD integration options';
$string['showcentroids'] = 'Show centroids';
$string['shownamesdesc'] = 'This will show first and last name or sequential ids for students.';
$string['shownameslabel'] = 'Show student names?';
$string['studyid'] = 'Your study ID: {$a}';
$string['studyiddesc'] = 'This will show the student study ID in all courses.';
$string['studyidlabel'] = 'Allow students to see their study ID?';
$string['title'] = 'Behaviour Analytics';
$string['totalmeasures'] = 'Total measures';
$string['update'] = 'Update Behaviour Analytics';
$string['uselordcustomdesc'] = 'This will use the graph from LORD that has been manipulated. Otherwise the system generated graph will be used.';
$string['uselordcustomlabel'] = 'Use the manipulated LORD graph?';
$string['uselorddesc'] = 'This will take the learning object graph from the Learning Object Relation Discovery (LORD) block plugin.';
$string['uselordlabel'] = 'Use the graph from LORD?';
$string['viewed'] = 'The user with id \'{$a->uid}\' viewed Behaviour Analytics for the course with id \'{$a->cid}\'.';
$string['wrongfile'] = 'Course name not in file name, got the right file?';
