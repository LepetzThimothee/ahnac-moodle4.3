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
 * Strings for component 'block_spam_deletion', language 'en', version '4.3'.
 *
 * @package     block_spam_deletion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountsuspended'] = 'Your account has been suspended, as our spam prevention system has flagged it as possibly belonging to a spammer. If this is a mistake, please contact us via https://moodle.com/contact/support/?selection=community#form and copy and paste the error code \'{$a->errorcode}\' and your attempted post into the message field.';
$string['accountsuspendedtitle'] = 'Account suspended';
$string['akismetaccountage'] = 'Akismet user account age';
$string['akismetaccountagedesc'] = 'Skip akismet spam detection on posts from user accounts older than this value.';
$string['akismetkey'] = 'Akismet API key';
$string['akismetreports'] = 'Akismet reports: {$a}';
$string['akismetsettings'] = 'Akismet settings';
$string['alreadyreported'] = 'You\'ve already reported this content.';
$string['autosuspendcount'] = 'Suspension posts limit';
$string['autosuspendcount_desc'] = 'Number of posts which users are allowed to get blocked before their account is suspended.';
$string['autosuspendcountcomment'] = 'Suspension comments limit';
$string['autosuspendcountcomment_desc'] = 'Number of comments which users are allowed to get blocked before their account is suspended.';
$string['badwords'] = 'diet,viagra,football,soccer,live,match';
$string['badwordslist'] = 'Custom spam words list';
$string['badwordslistdesc'] = 'A comma separated list of words to use to identify spam.';
$string['blockedspamdescription'] = 'Account suspended {$a} after being blocked from posting.';
$string['blockedspamusersuspendedaccount'] = 'Account suspended {$a->datetime} after being blocked from posting (error code: {$a->errorcode}).';
$string['cannotdelete'] = 'Cannot delete content for this user.';
$string['commentblocked'] = 'Your comment has been blocked, as our spam prevention system has flagged it as possibly containing spam. If this is a mistake, please contact us via https://moodle.com/contact/support/?selection=community#form and copy and paste  your comment plus error code \'{$a->errorcode}\' into the message field.';
$string['commentlinkscount'] = 'Comment links limit';
$string['commentlinkscount_desc'] = 'Number of unique URLs which new users are allowed to have included in their first comments.';
$string['commentthrottlecount'] = 'Comments limit';
$string['commentthrottlecountdesc'] = 'Number of comments which new users are allowed to create in configured duration before they are blocked.';
$string['commentthrottleduration'] = 'Comments limit duration';
$string['commentthrottledurationdesc'] = 'Duration which to look for comments when blocking.';
$string['commonsettings'] = 'Common settings';
$string['commonsettings_desc'] = 'These settings apply for both forum posts and comments.';
$string['confirmdelete'] = 'Delete spammer';
$string['confirmdeletemsg'] = 'Warning! This will delete all the forums discussions, comments, messages and files submitted by <strong>{$a->firstname} {$a->lastname} ({$a->username})</strong>, suspend the user account and report the forum post to Akismet as a spam. Are you sure?';
$string['countcomment'] = 'Comments: {$a}';
$string['countforum'] = 'Forum posts: {$a}';
$string['countmessage'] = 'Messages: {$a}';
$string['counttags'] = 'Unique tags: {$a}';
$string['deleteandreporttoakismet'] = 'Delete user and save content for akismet report';
$string['deletebutton'] = 'Delete spammer';
$string['errorcodes'] = 'Error codes';
$string['eventspammerdeleted'] = 'Spammer deleted';
$string['firstcommentsduration'] = 'First comments filters duration';
$string['firstcommentsduration_desc'] = 'For how long since the first user\'s comments are the filters in this section applied.';
$string['firstcommentssettings'] = 'First comments settings';
$string['firstcommentssettings_desc'] = 'First comments until given period has elapsed since the first comment have certain filters applied. The behaviour of the filters is controlled by the settings in this section.';
$string['firstpostsduration'] = 'First posts filters duration';
$string['firstpostsduration_desc'] = 'For how long since the first user\'s post are the filters in this section applied.';
$string['firstpostssettings'] = 'First posts settings';
$string['firstpostssettings_desc'] = 'First posts and any subsequent posts until given period has elapsed since the first post have certain filters applied. The behaviour of the filters is controlled by the settings in this section.';
$string['invalidcharspercentage'] = 'Percentage invalid characters allowed';
$string['invalidcharspercentagedesc'] = 'If a post contains above percentage invalid characters (e.g. Korean characters in spanish course) it will be blocked.';
$string['linkscount'] = 'Post links limit';
$string['linkscount_desc'] = 'Number of unique URLs which new users are allowed to have included in their first forum posts.';
$string['linkscountcomment'] = 'Links limit (comments)';
$string['linkscountcomment_desc'] = 'Number of unique URLs which new users are allowed to have included in their first comments.';
$string['linkswhitelist'] = 'Links whitelist';
$string['linkswhitelist_desc'] = 'Links to these sites are not counted into the limit of allowed links when checking for new users\' spammy posts. Multiple values can be provided on separate lines.';
$string['messageblockederror'] = 'Your forum post has been blocked, as our spam prevention system has flagged it as possibly containing spam. If this is a mistake, please contact us via https://moodle.com/contact/support/?selection=community#form and copy and paste the error code \'{$a->errorcode}\' and your attempted post into the message field.';
$string['messageblockedtitle'] = 'Possible spam detected!';
$string['messageprovider:spamreport'] = 'Spam report';
$string['notrecentlyaccessed'] = 'Beware! The first access date of this account is more than 1 month ago. Make double sure it is really a spammer.';
$string['pluginname'] = 'Spam deletion';
$string['postthrottlecount'] = 'Posts limit';
$string['postthrottlecountdesc'] = 'Number of posts which new users are allowed to create in configured duration before they are blocked.';
$string['postthrottleduration'] = 'Post limit duration';
$string['postthrottledurationdesc'] = 'Duration which to look for posts when blocking.';
$string['privacy:metadata:db:votes'] = 'Reported votes for spam';
$string['privacy:metadata:db:votes:commentid'] = 'Internal identifier of the comment';
$string['privacy:metadata:db:votes:messageid'] = 'Internal identifier of the message';
$string['privacy:metadata:db:votes:postid'] = 'Internal identifier of the forum post';
$string['privacy:metadata:db:votes:spammerid'] = 'Identifier of the reported user account';
$string['privacy:metadata:db:votes:voterid'] = 'Identifier of the reporting user account';
$string['privacy:metadata:db:votes:weighting'] = 'The weighting of the vote';
$string['privacy:metadata:external:akismet'] = 'Submitted content can be shared with akismet.com service to detect spam.';
$string['privacy:metadata:external:akismet:blog'] = 'URL of this Moodle installation';
$string['privacy:metadata:external:akismet:blog_charset'] = 'Submitted content encoding';
$string['privacy:metadata:external:akismet:blog_lang'] = 'Submitted content language';
$string['privacy:metadata:external:akismet:comment_author'] = 'Full name of the content author';
$string['privacy:metadata:external:akismet:comment_author_email'] = 'Email address of the content author';
$string['privacy:metadata:external:akismet:comment_author_url'] = 'URL of the content author';
$string['privacy:metadata:external:akismet:comment_content'] = 'Posted content';
$string['privacy:metadata:external:akismet:comment_type'] = 'Type of submitted content';
$string['privacy:metadata:external:akismet:referrer'] = 'HTTP referrer';
$string['privacy:metadata:external:akismet:user_agent'] = 'Detected browser type';
$string['privacy:metadata:external:akismet:user_ip'] = 'Detected IP address';
$string['reason'] = 'Why are you reporting this?';
$string['reason0'] = 'Other';
$string['reason6'] = 'Spam';
$string['reason7'] = 'Duplicate post';
$string['reasondetails'] = 'More details (optional)';
$string['reportasspam'] = 'Report to moderator';
$string['reportcontentasspam'] = 'Report content to moderator';
$string['reporttomoderatorconfirm'] = 'Report to moderator?';
$string['spam_deletion:addinstance'] = 'Add delete spammer block';
$string['spam_deletion:spamdelete'] = 'Delete spam';
$string['spam_deletion:viewspamreport'] = 'View spam reports';
$string['spamdescription'] = 'Spammer - spam deleted and account blocked {$a}';
$string['spamreportmessage'] = '{$a->spammer} may be a spammer.
View spam reports at {$a->url}';
$string['spamreportmessagetitle'] = '{$a->spammer} may be a spammer.';
$string['spamreports'] = 'Spam reports: {$a}';
$string['thanksspamrecorded'] = 'Thank you. Your report has been recorded.';
$string['totalcount'] = 'Total records';
$string['unknowncomponent'] = 'Unsupported comment component: {$a}';
