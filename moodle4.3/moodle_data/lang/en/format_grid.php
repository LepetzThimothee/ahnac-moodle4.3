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
 * Strings for component 'format_grid', language 'en', version '4.3'.
 *
 * @package     format_grid
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsection'] = 'Add section';
$string['addsections'] = 'Add section';
$string['cannotconvertuploadedimagetodisplayedimage'] = 'Cannot convert uploaded image to displayed image - {$a}.  Please report error details and the information contained in the php.log file to developer.';
$string['cannotgetmanagesectionimagelock'] = 'Cannot get manage section image lock.  This can happen if two people are editing the settinsg of the same section on the same course at the same time.';
$string['centre'] = 'Centre';
$string['crop'] = 'Crop';
$string['currentsection'] = 'This section';
$string['default'] = 'Default - {$a}';
$string['defaultdisplayedimagefiletype'] = 'Displayed image type';
$string['defaultdisplayedimagefiletype_desc'] = '\'Original\' or \'WebP\'.';
$string['defaultgridjustification'] = 'Default justification of the grid';
$string['defaultgridjustification_desc'] = 'One of: Start, Centre, End, Space around, Space between or Space evenly.';
$string['defaultimagecontainerratio'] = 'Default ratio of the image container relative to the width';
$string['defaultimagecontainerratio_desc'] = 'One of: 3-2, 3-1, 3-3, 2-3, 1-3, 4-3 or 3-4.';
$string['defaultimagecontainerwidth'] = 'Default width of the image container';
$string['defaultimagecontainerwidth_desc'] = 'One of: 128, 192, 210, 256, 320, 384, 448, 512, 576, 640, 704 or 768.';
$string['defaultimageresizemethod'] = 'Default image resize method';
$string['defaultimageresizemethod_desc'] = 'Set to: \'Scale\' or \'Crop\' when resizing the image to fit the container.';
$string['defaultpopup'] = 'Use a popup';
$string['defaultpopup_desc'] = 'Display the section in a popup instead of navigating to a single section page.';
$string['defaultshowcompletion'] = 'Show completion';
$string['defaultshowcompletion_desc'] = 'Show the completion of the section on the grid.';
$string['defaultsinglepagesummaryimage'] = 'Show the grid image in the section summary';
$string['defaultsinglepagesummaryimage_desc'] = 'When there is a summary in the section.';
$string['deletesection'] = 'Delete section';
$string['editsection'] = 'Edit section';
$string['editsectionname'] = 'Edit section name';
$string['end'] = 'End';
$string['formatnotsupported'] = 'Format is not supported at this server, please fix the system configuration to have the GD PHP extension installed - {$a}.';
$string['functionfailed'] = 'Function failed on image - {$a}.';
$string['gridjustification'] = 'Set the justification of the grid';
$string['gridjustification_help'] = 'Set the justification to one of: Start, Centre, End, Space around, Space between or Space evenly';
$string['hidefromothers'] = 'Hide section';
$string['imagecontainerratio'] = 'Set the image container ratio relative to the width';
$string['imagecontainerratio_help'] = 'One of: 3-2, 3-1, 3-3, 2-3, 1-3, 4-3 or 3-4';
$string['imagecontainerwidth'] = 'Set the image container width';
$string['imagecontainerwidth_help'] = 'One of: 128, 192, 210, 256, 320, 384, 448, 512, 576, 640, 704 or 768';
$string['imageresizemethod'] = 'Set the image resize method';
$string['imageresizemethod_help'] = 'Set to: \'Scale\' or \'Crop\' when resizing the image to fit the container';
$string['information'] = 'Information';
$string['informationchanges'] = 'Changes';
$string['informationsettings'] = 'Information settings';
$string['informationsettingsdesc'] = 'Grid format information';
$string['left'] = 'Left';
$string['love'] = 'love';
$string['markedthissection'] = 'This section is highlighted as the current section';
$string['markthissection'] = 'Highlight this section as the current section';
$string['mimetypenotsupported'] = 'Mime type is not supported as an image format in the Grid format - {$a}.';
$string['newsectionname'] = 'New name for section {$a}';
$string['noimageinformation'] = 'Image information is empty - {$a}.';
$string['numbersections'] = 'Number of sections';
$string['off'] = 'Off';
$string['original'] = 'Original';
$string['originalheightempty'] = 'Original height is empty - {$a}.';
$string['originalwidthempty'] = 'Original width is empty - {$a}.';
$string['page-course-view-grid'] = 'Any course main page in the grid format';
$string['page-course-view-grid-x'] = 'Any course page in the grid format';
$string['pluginname'] = 'Grid';
$string['popup'] = 'Use a popup';
$string['popup_help'] = 'Display the section in a popup instead of navigating to a single section page';
$string['privacy:nop'] = 'The Grid format stores lots of settings that pertain to its configuration.  None of the settings are related to a specific user.  It is your responsibilty to ensure that no user data is entered in any of the free text fields.  Setting a setting will result in that action being logged within the core Moodle logging system against the user whom changed it, this is outside of the formats control, please see the core logging system for privacy compliance for this.  When uploading images, you should avoid uploading images with embedded location data (EXIF GPS) included or other such personal data.  It would be possible to extract any location / personal data from the images.  Please examine the code carefully to be sure that it complies with your interpretation of your privacy laws.  I am not a lawyer and my analysis is based on my interpretation.  If you have any doubt then remove the format forthwith.';
$string['reporterror'] = 'Please report error details and the information contained in the php.log file to developer';
$string['right'] = 'Right';
$string['scale'] = 'Scale';
$string['section0name'] = 'General';
$string['sectionbreak'] = 'Section break';
$string['sectionbreak_help'] = 'Break the grid at this section';
$string['sectionbreakheading'] = 'Section break heading';
$string['sectionbreakheading_help'] = 'Show this heading at the point this section breaks in the grid.  HTML can be used.';
$string['sectionimage'] = 'Section image';
$string['sectionimage_help'] = 'The section image';
$string['sectionimagealttext'] = 'Image alt text';
$string['sectionimagealttext_help'] = 'This text will be set as the image \'alt\', being \'alternative\' attribute.';
$string['sectionname'] = 'Section';
$string['settings'] = 'Settings';
$string['settingssettings'] = 'Settings settings';
$string['settingssettingsdesc'] = 'Grid format settings';
$string['showcompletion'] = 'Show completion';
$string['showcompletion_help'] = 'Show the completion of the section on the grid';
$string['showfromothers'] = 'Show section';
$string['singlepagesummaryimage'] = 'Show the grid image in the section summary';
$string['singlepagesummaryimage_help'] = 'When there is a summary in the section';
$string['spacearound'] = 'Space around';
$string['spacebetween'] = 'Space between';
$string['spaceevenly'] = 'Space evenly';
$string['start'] = 'Start';
$string['topic'] = 'Section';
$string['topic0'] = 'General';
$string['versionalpha'] = 'Alpha version - Almost certainly contains bugs.  This is a development version for developers \'only\'!  Don\'t even think of installing on a production server!';
$string['versionbeta'] = 'Beta version - Likely to contain bugs.  Ready for testing by administrators on a test server only.';
$string['versioninfo'] = 'Release {$a->release}, version {$a->version} on Moodle {$a->moodle}.  Made with {$a->love} in Great Britain.';
$string['versionrc'] = 'Release candidate version - May contain bugs.  Check completely on a test server before considering on a production server.';
$string['versionstable'] = 'Stable version - Could contain bugs.  Check on a test server before installing on your production server.';
$string['webp'] = 'WebP';
