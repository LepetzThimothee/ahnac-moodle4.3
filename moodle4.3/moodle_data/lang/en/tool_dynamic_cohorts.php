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
 * Strings for component 'tool_dynamic_cohorts', language 'en', version '4.3'.
 *
 * @package     tool_dynamic_cohorts
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_rule'] = 'Add new rule';
$string['addcondition'] = 'Add a condition';
$string['addrule'] = 'Add a new rule';
$string['backtolistofrules'] = 'Back to the list of rules';
$string['brokenruleswarning'] = 'There are some broken rules require your attention.  <br /> To fix a broken rule you should remove all broken conditions. <br />Sometimes a rule becomes broken when matching users SQL failed. In this case all condition are ok, but the rule is marked as broken. You should check Moodle logs for "Matching users failed" event and related SQL errors. <br />Please note, that in any case you have to re-save the rule to mark it as unbroken.';
$string['bulkprocessing'] = 'Bulk processing';
$string['bulkprocessing_help'] = 'If this option is enabled, users will be added and removed from cohort in bulk. This will significantly improve processing performance. However, using this option will suppress triggering events when users added or removed from cohort.';
$string['cachedef_conditionrecords'] = 'Conditions for a rule';
$string['cachedef_rulesconditions'] = 'Rules with a specific condition';
$string['cannotenablebrokenrule'] = 'A broken rule can\'t be enabled';
$string['cf_include_missing_data'] = 'Include cohorts with missing data.';
$string['cf_include_missing_data_help'] = 'Cohorts may not have a custom field data set yet. This option includes those cohorts in the final result.';
$string['cf_includingmissingdatadesc'] = '(including cohorts with missing data)';
$string['cohort'] = 'Cohort';
$string['cohortid'] = 'Cohort';
$string['cohortid_help'] = 'A cohort to manage as part of this rule. Only cohorts that are not managed by other plugins are displayed in this list.';
$string['cohortswith'] = 'Cohort(s) with field';
$string['condition'] = 'Condition';
$string['condition:auth_method'] = 'Authentication method';
$string['condition:cohort_field'] = 'Cohort field';
$string['condition:cohort_field_description'] = 'A user {$a->operator} cohorts with field \'{$a->field}\' {$a->fieldoperator} {$a->fieldvalue}';
$string['condition:cohort_membership'] = 'Cohort membership';
$string['condition:cohort_membership_broken_description'] = 'Condition is broken. Using the same cohort that the given rule is configured to manage to.';
$string['condition:cohort_membership_description'] = 'A user {$a->operator} {$a->cohorts}';
$string['condition:profile_field_description'] = '{$a->field} {$a->fieldoperator} {$a->fieldvalue}';
$string['condition:user_custom_profile'] = 'User custom profile field';
$string['condition:user_profile'] = 'User standard profile field';
$string['conditionchnagesnotapplied'] = 'Condition changes are not applied until you save the rule form';
$string['conditionformtitle'] = 'Rule condition';
$string['conditions'] = 'Conditions';
$string['conditionsformtitle'] = 'Rule conditions';
$string['conditionstext'] = '{$a->conditions} ( logical {$a->operator} )';
$string['delete_confirm'] = 'Are you sure you want to delete rule {$a}?';
$string['delete_confirm_condition'] = 'Are you sure you want to delete this condition?';
$string['delete_rule'] = 'Delete rule';
$string['description'] = 'Description';
$string['description_help'] = 'As short description of this rule';
$string['disable_confirm'] = 'Are you sure you want to disable rule {$a}?';
$string['disabled'] = 'Disabled';
$string['dynamic_cohorts:manage'] = 'Manage rules';
$string['edit_rule'] = 'Edit rule';
$string['enable_confirm'] = 'Are you sure you want to enable rule {$a}?';
$string['enabled'] = 'Enabled';
$string['event:conditioncreated'] = 'Condition created';
$string['event:conditiondeleted'] = 'Condition deleted';
$string['event:conditionupdated'] = 'Condition updated';
$string['event:matchingfailed'] = 'Matching users failed';
$string['event:rulecreated'] = 'Rule created';
$string['event:ruledeleted'] = 'Rule deleted';
$string['event:ruleupdated'] = 'Rule updated';
$string['include_missing_data'] = 'Include users with missing data.';
$string['include_missing_data_help'] = 'Some users may not have a custom field data set yet. This option includes those user in the final result.';
$string['includeusersmissingdata'] = 'include users with missing data';
$string['includingmissingdatadesc'] = '(including users with missing data)';
$string['invalidfieldvalue'] = 'Invalid field value';
$string['ismemberof'] = 'is member of';
$string['isnotempty'] = 'is not empty';
$string['isnotmemberof'] = 'is not member of';
$string['logical_operator'] = 'Logical operator';
$string['logical_operator_help'] = 'A logical operator to be applied to conditions for this rule. Operator "AND" means a user has to match all conditions to be added to a cohort. "OR" means a user has to match any of conditions to be added to a cohort.';
$string['managecohorts'] = 'Manage cohorts';
$string['managerules'] = 'Manage rules';
$string['matchingusers'] = 'Matching users';
$string['name'] = 'Rule name';
$string['name_help'] = 'A human readable name of this rule.';
$string['operator'] = 'Operator';
$string['or'] = 'OR';
$string['pleaseselectcohort'] = 'Please select a cohort';
$string['pleaseselectfield'] = 'Please select a field';
$string['pluginname'] = 'Dynamic cohorts';
$string['privacy:metadata:tool_dynamic_cohorts'] = 'Information about rules created or updated by a user';
$string['privacy:metadata:tool_dynamic_cohorts:name'] = 'Rule name';
$string['privacy:metadata:tool_dynamic_cohorts:usermodified'] = 'The ID of the user who created or updated a rule';
$string['privacy:metadata:tool_dynamic_cohorts_c'] = 'Information about conditions created or updated by a user';
$string['privacy:metadata:tool_dynamic_cohorts_c:ruleid'] = 'ID of the rule';
$string['privacy:metadata:tool_dynamic_cohorts_c:usermodified'] = 'The ID of the user who created or updated a condition';
$string['processrulestask'] = 'Process dynamic cohort rules';
$string['profilefield'] = 'Profile field';
$string['rule_entity'] = 'Dynamic cohort rule';
$string['rule_entity.bulkprocessing'] = 'Bulk processing';
$string['rule_entity.description'] = 'Description';
$string['rule_entity.id'] = 'ID';
$string['rule_entity.name'] = 'Name';
$string['rule_entity.status'] = 'Status';
$string['ruledeleted'] = 'Rule has been deleted';
$string['ruledisabled'] = 'Rule has been disabled';
$string['ruledisabledpleasereview'] = 'Newly created or updated rules are disabled by default. Please review the rule below and enable it when ready.';
$string['ruleenabled'] = 'Rule has been enabled';
$string['usersforrule'] = 'Users matching rule "{$a->rule}" for cohort "{$a->cohort}"';
