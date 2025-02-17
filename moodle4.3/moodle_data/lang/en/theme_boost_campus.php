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
 * Strings for component 'theme_boost_campus', language 'en', version '4.3'.
 *
 * @package     theme_boost_campus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addablockpositionsetting'] = 'Position of "Add a block" widget';
$string['addablockpositionsetting_desc'] = 'With this setting you can manage where the "Add a block" widget should be displayed. If you select "At the bottom of the nav drawer" the widget to add new blocks is displayed in the left sliding navigation panel like in theme Boost. If you select "At the bottom of the default block region" the widget to add new blocks will be displayed in the default block region. Please note: This has the side effect that this block will also be shown in the block region on activity settings pages when editing mode is turned on.';
$string['addablockwidgetheadingsetting'] = 'Position of "Add a block" widget';
$string['additionallayoutsettings'] = 'Additional Layout Settings';
$string['additionalresourcesheadingsetting'] = 'Additional resources';
$string['additionalresourcessetting'] = 'Add additional resources';
$string['additionalresourcessetting_desc'] = 'With this setting you can upload additional resources to the theme. You can reference these resources by using a link. The url will look like this: "/pluginfile.php/1/theme_boost_campus/additionalresources/0/yourfilename.someextention"<br/>
The advantage of uploading files to this file area is that those files can be delivered without a check if the user is logged in. This is also why you should only add files that are uncritical and everyone should be allowed to access and don\'t need be protected with a valid login. <br/>
An example for a use case can be found in the README.md file.';
$string['backgroundimage_desc_note'] = '<br/> Please note: This will not override the setting "theme_boost_campus | loginbackgroundimage" which means that the pictures uploaded to the login page background will be displayed anyway.';
$string['backtotop'] = 'Back to top';
$string['bcbttbuttonheadingsetting'] = 'Boost Campus "Back to top" button';
$string['bcbttbuttonsetting'] = 'Boost Campus "Back to top" button';
$string['bcbttbuttonsetting_desc'] = 'Since Moodle 3.9, a "Go to top" button was integrated into theme Boost and usually that would make our provided solution obsolete.<br/>
However, the core solution has still some little itches and that is the reason why we would like to provide the Boost Campus "Back to top" button as an optional setting. <br/>
If you enable this setting, the core "Go to top" button will not be displayed and instead the Boost Campus "Back to top" button will occur. The differences are:<br/>
<ul>
<li>Smooth scolling: Boost Campus "Back to top" button uses smooth scrolling whilst the core "Go to top" button jumps directly to the top.</li>
<li>URL implications: Boost Campus "Back to top" button only uses Javascript and has no implication to the URL whilst the core "Go to top" button adds a "#" at the end of the URL by clicking the button. If you copy the URL the "#" will be copied along.</li>
<li>Styling: The styling of both buttons differ.</li>
<li>Accessibility: Boost Campus "Back to top" button is not improved in terms of accessibility whilst the core "Go to top" button is.</li>
</ul>
Please note:<br/>
This setting will be removed as soon a the core feature is improved so that no individual theme solution is needed anymore.';
$string['blockcolumnwidthdashboardsetting'] = 'Block column width on Dashboard';
$string['blockcolumnwidthdashboardsetting_desc'] = 'With this setting you can change the width (in pixels) of the block column on the Dashboard.';
$string['blockcolumnwidthdefault'] = 'The default width from Moodle 3.6 on is 360px, until Moodle 3.5 the width was 250px.';
$string['blockcolumnwidthsetting'] = 'Block column width on all other pages';
$string['blockcolumnwidthsetting_desc'] = 'With this setting you can change the width (in pixels) of the block column on all other pages except the Dashboard.';
$string['blockdesignheadingsetting'] = 'Blocks';
$string['blockiconsetting'] = 'Block icon';
$string['blockiconsetting_desc'] = 'With this setting you can add a default Font Awesome icon in front of the block title.  If checked, we additionally provide individual icon replacements for many Moodle core blocks and also some widely used blocks. You also can change the icons easily for each block individually in your raw SCSS via the change of the Font Awesome content. For all available icons please visit http://fontawesome.io/icons/ and use the Unicode value of the icon to replace the default one. <br/> The code to change the icon looks like this example change for the block "People": <br/>';
$string['blockiconsetting_desc_code'] = '.block_people .card-block .card-title::before { content: \'\\f0c0\' ; }';
$string['boost_campus:viewhintcourseselfenrol'] = 'To be able to see a hint for unrestricted self enrolment in a visible course.';
$string['boost_campus:viewhintinhiddencourse'] = 'To be able to see a hint in a hidden course.';
$string['bootstrapdangercolor'] = 'Danger color';
$string['bootstrapdarkcolor'] = 'Dark color';
$string['bootstrapinfocolor'] = 'Info color';
$string['bootstraplightcolor'] = 'Light color';
$string['bootstrapnone'] = 'No Bootstrap color';
$string['bootstrapprimarycolor'] = 'Primary color';
$string['bootstrapsecondarycolor'] = 'Secondary color';
$string['bootstrapsuccesscolor'] = 'Success color';
$string['bootstrapwarningcolor'] = 'Warning color';
$string['brandcolorheadingsetting'] = 'Brand colors';
$string['branddangercolorsetting'] = 'Brand danger color';
$string['branddangercolorsetting_desc'] = 'This color is used for example in regards to form validations.';
$string['brandinfocolorsetting'] = 'Brand info color';
$string['brandinfocolorsetting_desc'] = 'This color is used for example for availabiity information of course activities or resources.';
$string['brandsuccesscolorsetting'] = 'Brand success color';
$string['brandsuccesscolorsetting_desc'] = 'This color is used for example in regards to form validations.';
$string['brandwarningcolorsetting'] = 'Brand warning color';
$string['brandwarningcolorsetting_desc'] = 'This color is used for example for warning texts.';
$string['breakpointheadingsetting'] = 'Breakpoint';
$string['breakpointsetting'] = 'Change breakpoint';
$string['breakpointsetting_desc'] = 'In theme Boost, the right block column will break down even on devices with a width up to 1200 pixels (widescreen resolution of the iPad is 1024 pixels, for example).
This is because the breakpoint is set to <a href="https://getbootstrap.com/docs/4.5/layout/overview/#responsive-breakpoints">media-breakpoint-down(lg)</a>. <br/>
If you think there is enough space to show the content plus the blocks column side by side on a screen width of 992 pixels and up, then enable this setting. It will change the breakpoint to media-breakpoint-down(md). This will break the blocks column only on screens with widths of less than 992 pixels.';
$string['cachedef_imagearea'] = 'Cache for imagearea items';
$string['catchcmdarrowdownsetting'] = 'Cmd + Arrow down shortcut';
$string['catchcmdarrowdownsetting_desc'] = 'This setting will catch the "Cmd + Arrow down" shortcut (MAC),';
$string['catchctrlarrowdownsetting'] = 'Ctrl + Arrow down shortcut';
$string['catchctrlarrowdownsetting_desc'] = 'This setting will catch the "Ctrl + Arrow down" shortcut (Windows),';
$string['catchendkeysetting'] = 'End key';
$string['catchendkeysetting_desc'] = 'This setting will catch the "End" key (should work on all main browsers and operating systems),';
$string['catchkeyboardcommandsheadingsetting'] = 'Catch keyboard commands';
$string['catchkeyboardcommandsheadingsetting_desc'] = 'The following settings are intended to serve the needs for advanced users, especially if your Moodle instance has a large footer. Advanced users are likely to use keyboard shortcuts to navigate through the sites. They may use this for reaching the end of the page in the intention to get fast to the most recent topic in the course (for adding content or grading latest activities). If the footer is not quite small, they would need to scroll up again. With these settings you can enable that the following shortcuts are caught and would only scroll to the bottom of the main course content.';
$string['catchkeys_desc_addition'] = 'prevent the default scrolling to the bottom of the web page and changes the behavior to scroll only to the bottom of the main course content.';
$string['choosereadme'] = 'Theme Boost Campus is a child theme to be used on university campuses.';
$string['close'] = 'Close';
$string['closingperpetualinfobanner'] = 'Are you sure you want to dismiss this information? Once done it will not occur again!';
$string['configtitle'] = 'Boost Campus settings';
$string['confirmation'] = 'Confirmation';
$string['coursehintsheadingsetting'] = 'Course related hints.';
$string['courselayoutsettings'] = 'Course Layout Settings';
$string['coursesettingsheadingsetting'] = 'Course settings';
$string['darknavbarsetting'] = 'Dark navbar';
$string['darknavbarsetting_desc'] = 'By checking this setting you can invert the default light navbar to a dark one with white links.';
$string['dashboardontopsetting'] = 'Dashboard menu item on top';
$string['dashboardontopsetting_desc'] = 'By checking this setting the Dashboard menu item will always be located at the top of the nav drawer. By default, this is already the case on every Moodle page except for course pages. There, the current course and its contents are placed on top. This might break user\'s expectations for the placement of the default homepage link.';
$string['defaulthomepageontopsetting'] = 'Default homepage on top';
$string['defaulthomepageontopsetting_desc'] = 'By checking this setting the default homepage link (Dashboard or Site home) will always be located at the top of the nav drawer. By default, this is already the case on every Moodle page except for course pages. There, the current course and its contents are placed on top. This might break user\'s expectations for the placement of the default homepage link.';
$string['designsettings'] = 'Design Settings';
$string['faviconheadingsetting'] = 'Favicon';
$string['faviconsetting'] = 'Favicon';
$string['faviconsetting_desc'] = 'You can upload one image (.ico or .png format) that the browser will show as the favicon of your Moodle website.';
$string['fontdesignheadingsetting'] = 'Fonts';
$string['fontfilessetting'] = 'Font files';
$string['fontfilessetting_desc'] = 'With this dialogue you can upload own font files. The uplaod is resricted to the font files of type .eot, .woff, .woff2, .ttf and .svg. <br/>
Important: To be able to use the uploaded fonts within this theme, you have to add related code to your "Raw SCSS" area in the tab "Advanced Settings". A full example for this can be found in the README.md file.';
$string['footerblocks0columnssetting'] = 'No blocks in footer';
$string['footerblocks1columnssetting'] = 'One block columns in footer';
$string['footerblocks2columnssetting'] = 'Two block columns in footer';
$string['footerblocks3columnssetting'] = 'Three block columns in footer';
$string['footerblocksheadingsetting'] = 'Footer blocks';
$string['footerblockssetting'] = 'Footer blocks';
$string['footerblockssetting_desc'] = 'You can chose if you want to enable the possibility to place blocks into the footer. If enabled, you can choose between one, two or three block columns. These columns are only displayed on large screens. On small screens the columns will be automatically reduced to one column for better readability and layout.';
$string['footerhidehelplinksetting'] = 'Hide link to the Moodle docs';
$string['footerhidehomelinksetting'] = 'Hide link to the webpage start';
$string['footerhidelogininfosetting'] = 'Hide login information';
$string['footerhideusertourslinksetting'] = 'Hide link to reset the user tour';
$string['footerlayoutsettings'] = 'Footer Layout Settings';
$string['footerlinks_desc'] = 'If checked, the link will not be displayed in the footer. If not checked (default), it will be shown.';
$string['footerlinksheadingsetting'] = 'Default footer links';
$string['footerlinksheadingsetting_desc'] = 'Moodle provides some default links in the footer: Link to the Moodle docs, login information, and a link to the webpage start. <br/> With the following three settings you can decide if you want to hide specific links because you think that your users won\'t need them in your instance.';
$string['footnoteheadingsetting'] = 'Footnote';
$string['footnoteheadingsetting_desc'] = 'The following setting allows to add an additional region for displaying a footnote.';
$string['footnotesetting'] = 'Footnote';
$string['footnotesetting_desc'] = 'Whatever you add to this textarea will be displayed at the end of the footer on every page that renders the theme standard footer (for the layouts "columns2" and "login"). Content in this area could be for example the copyright, the terms of use and the name of your organisation. <br/> If you want to remove the footnote again, just empty the text area.';
$string['helptextheadingsetting'] = 'Help texts';
$string['helptextmodalsetting'] = 'Show help texts in a modal dialogue';
$string['helptextmodalsetting_desc'] = 'The default solution to display help texts in popover leads to different issues. For example popovers are not scrollable and they can reach over the viewport.<br/>
For this reason, with this setting you can decide that the help texts should be displayed in a dedicated text box (modal dialogue) that appears in the middle of the page with enough space to hold even long helping texts.';
$string['hidefooterheadingsetting'] = 'Hiding the footer';
$string['hidefooteronloginpagesetting'] = 'Hiding the footer on the login page';
$string['hidefooteronloginpagesetting_desc'] = 'By enabling this setting you can hide the footer on the login page. Please note, that this will only hide the footer section, not the footnote section (if used).';
$string['ibcsssetting_nobootstrap'] = 'If you choose the \'{$a->bootstrapnone}\' option, the information banner will be output without any particular Bootstrap color.';
$string['imageareaheadingsetting'] = 'Image area';
$string['imageareaheadingsetting_desc'] = 'The following settings allow adding an additional region for displaying images like logos. This region will be added beneath the standard footer and above the optional footnote region. If images are uploaded this area will be displayed on all sites that use the columns2 layout.';
$string['imageareaitemsattributessetting'] = 'Image area item additional attributes';
$string['imageareaitemsattributessetting_desc'] = 'With this optional setting you can add additional attributes to your uploaded images:
<ul>
<li>a link</li>
<li>an alt attribute which describes the image</li>
</ul>
Each line consists of the file identifier (the file name) the link URL and the alt-text, separated by pipe characters. Each link declaration needs to be written in a new line. <br/>
For example:<br/>
<code>moodle.jpg|https://moodle.org|Moodle logo</code><br/><br/>
You can declare the additional attributes for an arbitrary amount of your uploaded images. The attributes will be added only to those images that match their filename with the identifier declared in this setting.';
$string['imageareaitemsmaxheightsetting'] = 'Image area items maximal height';
$string['imageareaitemsmaxheightsetting_desc'] = 'With this setting you can change the height in pixels for your uploaded images. All images will have the same maximum height and their width will be resized proportionally. The default value is set to 100 pixels.';
$string['imageareaitemssetting'] = 'Image area items';
$string['imageareaitemssetting_desc'] = 'With this widget you can upload your images that will be displayed in the additional image area region. The images will be sorted and displayed alphabetically by the filename. To remove this region, simply delete all uploaded images.';
$string['incoursesettingsswitchtorolepositionsetting'] = '"Switch role to..." location(s)';
$string['incoursesettingsswitchtorolepositionsetting_desc'] = 'With this setting you can choose the place where the information to which role a user has switched is being displayed. If set to \'Just in the user menu\' (default value), the role information will be displayed right beneath the user\'s name in the user menu (like in theme Boost). If set to \'Just in the course settings\', this information - together with a link to switch back - will be displayed beneath the course, as this functionality is course related. If set to \'Both in the user menu and in the course settings\' it will be shown in both places.';
$string['incoursesettingsswitchtorolesettingboth'] = 'In both places: in the user menu and in the course settings';
$string['incoursesettingsswitchtorolesettingjustcourse'] = 'Just in the course settings';
$string['incoursesettingsswitchtorolesettingjustmenu'] = 'Just in the user menu';
$string['infobannersettings'] = 'Info Banner Settings';
$string['login_page'] = 'Login page';
$string['loginbackgroundimagesetting'] = 'Login page background images';
$string['loginbackgroundimagesetting_desc'] = 'Images uploaded in this setting will be randomly displayed on the login page as background images.';
$string['loginbackgroundimagetextsetting'] = 'Display text for login background images';
$string['loginbackgroundimagetextsetting_desc'] = 'With this optional setting you can add text, e.g. a copyright notice to your uploaded background images.<br/>
Each line consists of the file identifier (the file name) and the text that should be displayed, separated by a pipe character. Each declaration needs to be written in a new line. <br/>
For example:<br/>
background-image-1.jpg|Copyright: CC0<br/>
You can declare texts for a arbitrary amount of your uploaded background images. The texts will be added only to those images that match their filename with the identifier declared in this setting.';
$string['loginform'] = 'Login form';
$string['loginform_desc'] = 'With this setting you can optimize the login form to fit to a greater variety background images (if checked). This means that the login form will be moved to the left of the login page, will get smaller in width and will get a background that let the background image shine through. The login form will be placed on the left because many images have their main content rather in the center and so we keep this content visible. Note: You can also activate this setting if no background images are uploaded, of course.';
$string['loginpagedesignheadingsetting'] = 'Login page';
$string['navbardesignheadingsetting'] = 'Navbar';
$string['navdrawerfullwidthsetting'] = 'Nav drawer full width on small screens';
$string['navdrawerfullwidthsettings_desc'] = 'By checking this setting you can enlarge the opened nav drawer menu to the full page width on small screens. This may be wanted because on small screens only very few of the main content area in the background is visible. And a full width menu might serve the users\' expectations how menus are displayed on small screens.';
$string['navdrawerheadingsetting'] = 'Nav drawer menu';
$string['perpetualinfobannerheadingsetting'] = 'Perpetual information banner';
$string['perpetualinfobannerheadingsetting_desc'] = 'The following settings allow to show some important information within a prominent perpetual banner.';
$string['perpetualinfobannerresetvisiblitysetting'] = 'Reset visibility for perpetual info banner';
$string['perpetualinfobannerresetvisiblitysetting_desc'] = 'By enabling this checkbox, the visibility of the individually dismissed perpetual info banners will be set to visible again. You can use this setting if you made important content changes and want to show the info to all users again.<br/><br/>
Please note: <br/>
After saving this option, the database operations for resetting the visibility will be triggered and this checkbox will be unticked again. The next enabling and saving of this feature will trigger the database operations for resetting the visibility again.';
$string['perpibconfirmsetting'] = 'Confirmation dialogue';
$string['perpibconfirmsetting_desc'] = 'When you enable this setting you can show a confirmation dialogue to a user when he is dismissing the info banner.
<br/>The text is saved in the string with the name "closingperpetualinfobanner":<br/><br/>
Are you sure you want to dismiss this information? Once done it will not occur again!<br/><br/>
You can override this within your language customization if you need some other text in this dialogue.';
$string['perpibcontent'] = 'Perpetual information banner content';
$string['perpibcontent_desc'] = 'Enter your information which should be shown within the banner here.';
$string['perpibcsssetting'] = 'Bootstrap css class for the perpetual info banner';
$string['perpibcsssetting_desc'] = 'With this setting you can select the Bootstrap style with which the perpetual information banner should be displayed.';
$string['perpibdismisssetting'] = 'Perpetual info banner dismissible';
$string['perpibdismisssetting_desc'] = 'With this checkbox you can make the banner dismissible permanently. If the user clicks on the x-button a confirmation dialogue will appear and only after the user confirmed this dialogue the banner will be hidden for this user permanently.
<br/><br/>Please note: <br/> This setting has no effect for the banners shown on the login page. Because banners on the login page cannot be clicked away permanently, we do not offer the possibility to click the banner away at all on the login page.';
$string['perpibenablesetting'] = 'Enable perpetual info banner';
$string['perpibenablesetting_desc'] = 'With this checkbox you can decide if the perpetual information banner should be shown or hidden on the selected pages.';
$string['perpibshowonpagessetting'] = 'Page layouts to display the info banner on';
$string['perpibshowonpagessetting_desc'] = 'With this setting you can select the pages on which the perpetual information banner should be displayed.';
$string['pluginname'] = 'Boost Campus';
$string['presetheadingsetting'] = 'Theme presets';
$string['privacy:metadata:preference:infobanner_dismissed'] = 'The user preference for the status if the perpetual info banner has been dismissed.';
$string['privacy:metadata:request:infobanner_dismissed_no'] = 'Perpetual info banner has not been dismissed.';
$string['privacy:metadata:request:infobanner_dismissed_yes'] = 'Perpetual info banner has been dismissed.';
$string['region-footer-left'] = 'Footer (left)';
$string['region-footer-middle'] = 'Footer (middle)';
$string['region-footer-right'] = 'Footer (right)';
$string['region-side-pre'] = 'Right';
$string['resetperpetualinfobannersuccess'] = 'Success! All perpetual info banner instances are visible again.
<br/>The setting "Reset visibility for perpetual info banner" has been reset.';
$string['resetperpetualinfobannervisibilityerror'] = 'Oops... Something went wrong updating the database tables. The user preference "theme_boost_campus_infobanner_dismissed" should have been reset in the table "user_preferences".
<br/>Exception thrown: {$a->message}.
<br/>Stack Trace:
<br/>{$a->stacktrace}.
<br/>The setting "Reset visibility for perpetual info banner" has been reset nevertheless.';
$string['section0titlesetting'] = 'Section 0: Title';
$string['section0titlesetting_desc'] = 'This setting can change the behaviour Moodle displays the title for the first course section. Moodle does not display it as long as the default title for this section is set. As soon as a user changes the title, it will appear. With this setting (option is checked), you can achieve a consistent behaviour by always showing the title for section 0.';
$string['settingsaddablockpositionbottomblockregion'] = 'At the bottom of the default block region';
$string['settingsaddablockpositionbottomnavdrawer'] = 'At the bottom of the nav drawer';
$string['showhintcourseguestaccessgeneral'] = 'You are currently viewing this course as <strong>{$a->role}</strong>.';
$string['showhintcourseguestaccesslink'] = 'To have full access to the course, you can <a href="{$a->url}">self enrol into this course</a>.';
$string['showhintcourseguestaccesssetting_desc'] = 'With this setting a hint will appear in the course header when a user is accessing it with the guest access feature. If the course provides an active self enrolment, a link to that page is also presented to the user.';
$string['showhintcoursehiddengeneral'] = 'This course is currently <strong>hidden</strong>. Only enrolled teachers can access this course when hidden.';
$string['showhintcoursehiddensetting'] = 'Show hint in hidden courses';
$string['showhintcoursehiddensetting_desc'] = 'With this setting a hint will appear in the course header as long as the visibility of the course is hidden. This helps to identify the visibility state of a course at a glance without the need for looking at the course settings.';
$string['showhintcoursehiddensettingslink'] = 'You can change the visibility in the <a href="{$a->url}">course settings</a>.';
$string['showhintcourseselfenrolfrom'] = 'The <strong>{$a->name}</strong> enrolment instance allows unrestricted self enrolment from {$a->from} on.';
$string['showhintcourseselfenrolfromuntil'] = 'The <strong>{$a->name}</strong> enrolment instance allows unrestricted self enrolment from {$a->from} until {$a->until}.';
$string['showhintcourseselfenrolinstancecallforaction'] = 'If you don\'t want that any Moodle user can enrol into this course freely, please restrict the self enrolment settings.';
$string['showhintcourseselfenrolsetting'] = 'Show hint for self enrolment without enrolment key';
$string['showhintcourseselfenrolsetting_desc'] = 'With this setting a hint will appear in the course header if the course is visible and an enrolment without enrolment key is currently possible.';
$string['showhintcourseselfenrolsince'] = 'The <strong>{$a->name}</strong> enrolment instance allows unrestricted self enrolment currently.';
$string['showhintcourseselfenrolsinceuntil'] = 'The <strong>{$a->name}</strong> enrolment instance allows unrestricted self enrolment until {$a->until}.';
$string['showhintcourseselfenrolstartcurrently'] = 'This course is currently visible and <strong>self enrolment without enrolment key</strong> is currently possible.';
$string['showhintcourseselfenrolstartfuture'] = 'This course is currently visible and <strong>self enrolment without enrolment key</strong> is planned to become possible.';
$string['showhintcourseselfenrolunlimited'] = 'The <strong>{$a->name}</strong> enrolment instance allows unrestricted self enrolment infinitely.';
$string['showhintcourseselfenroluntil'] = 'The <strong>{$a->name}</strong> enrolment instance allows unrestricted self enrolment until {$a->until}.';
$string['showhintcoursguestaccesssetting'] = 'Show hint for guest access';
$string['showsettingsincoursesetting'] = 'In course settings menu';
$string['showsettingsincoursesetting_desc'] = 'With this setting you can change the displaying of the context menus. In Boost, there is a popup context menu right next to the cog icon. By enabling this setting the settings will occur directly beneath the course header. The settings are arranged in tabs, so it is easier for the user to get to the desired setting instead of scanning a long list of menu items. With this setting we also hide the settings icon on the participants page as the entries on this page are duplicated with the in-course course menu and therefore not necessary.<br/>
Please note that this change does not affect users who have switched off javascript in their browsers - they will still get the behaviour from Moodle core with a popup course context menu.';
$string['showswitchedroleincoursesetting'] = 'Position of switch role information';
$string['showswitchedroleincoursesetting_desc'] = 'With this setting you can choose the place where the information to which role a user has switched is being displayed. If not checked (default value), the role information will be displayed right beneath the user\'s name in the user menu (like in theme Boost). If checked, this information - together with a link to switch back - will be displayed beneath the course, as this functionality is course related.';
$string['sitehomeontopsetting'] = 'Site home menu item on top';
$string['sitehomeontopsetting_desc'] = 'By checking this setting the Site home menu item will always be located at the top of the nav drawer. By default, this is already the case on every Moodle page except for course pages. There, the current course and its contents are placed on top. This might break user\'s expectations for the placement of the default homepage link.';
$string['switchedroleto'] = 'You are viewing this course currently with the role:';
$string['switchroleto'] = 'Switch role to';
$string['timedibcontent'] = 'Time controlled information banner content';
$string['timedibcontent_desc'] = 'Enter your information which should be shown within the time controlled banner here.';
$string['timedibcsssetting'] = 'Bootstrap css class for the time controlled info banner';
$string['timedibcsssetting_desc'] = 'With this setting you can select the Bootstrap style with which the time controlled information banner should be displayed.';
$string['timedibenablesetting'] = 'Enable time controlled info banner';
$string['timedibenablesetting_desc'] = 'With this checkbox you can decide if the time controlled information banner should be shown or hidden on the selected pages.';
$string['timedibendsetting'] = 'End time for the time controlled info banner';
$string['timedibendsetting_desc'] = 'With this setting you can define when the time controlled information banner should be hidden on the selected pages.
<br/>Please enter a valid date in this format: YYYY-MM-DD HH:MM:SS. For example: "2020-01-07 08:00:00. The time zone will be the time zone you have defined in the setting "Default timezone".
<br/>If you leave this setting empty but entered a date in the for the start, the banner won\'t hide after the starting time has been reached.';
$string['timedibshowonpagessetting'] = 'Page layouts to display the info banner on';
$string['timedibshowonpagessetting_desc'] = 'With this setting you can select the pages on which the time controlled information banner should be displayed.
<br/> If both info banners are active on a selected layout, the time controlled info banner will always appear above the perpetual info banner!';
$string['timedibstartsetting'] = 'Start time for the time controlled info banner';
$string['timedibstartsetting_desc'] = 'With this setting you can define when the time controlled information banner should be displayed on the selected pages.
<br/>Please enter a valid in this format: YYYY-MM-DD HH:MM:SS. For example: "2020-01-01 08:00:00". The time zone will be the time zone you have defined in the setting "Default timezone".
<br/>If you leave this setting empty but entered a date in the for the end, it is the same as if you entered a date far in the past.';
$string['timedinfobannerheadingsetting'] = 'Time controlled information banner';
$string['timedinfobannerheadingsetting_desc'] = 'The following settings allow to show some important information within a prominent time controlled banner.';
$string['userdefinedontopsetting'] = 'User defined homepage on top';
$string['userdefinedontopsetting_desc'] = 'By checking this setting the Dashboard or Site home menu item (depends on the user\'s preferences) will always be located at the top of the nav drawer. By default, this is already the case on every Moodle page except for course pages. There, the current course and its contents are placed on top. This might break user\'s expectations for the placement of the default homepage link.';
$string['yes_close'] = 'Yes, close!';
