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
 * Strings for component 'local_ai_connector', language 'en', version '4.3'.
 *
 * @package     local_ai_connector
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['deepaiapikey'] = 'DeepAI API Key';
$string['deepaiapikey_desc'] = 'DeepAI API Key';
$string['deepaisettings'] = 'DeepAI settings';
$string['deepaisettings_help'] = 'Settings for DeepAI (deepai.org) services (Stable Diffusion)';
$string['frequency_penalty'] = 'Frequency penalty';
$string['frequency_penalty_desc'] = 'Reduces repetition of words that have already been generated. It counts how many times the word was already used.';
$string['max_length'] = 'Maximum length';
$string['model'] = 'Model';
$string['model_desc'] = 'The model used to generate the completion.';
$string['openaiapikey'] = 'OpenAI API Key';
$string['openaiapikey_desc'] = 'The API Key for your OpenAI account, from https://platform.openai.com/account/api-keys . Sample key looks like this: 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';
$string['openaisettings'] = 'OpenAI settings';
$string['openaisettings_help'] = 'Settings for OpenAI services (ChatGPT, DALL-E)';
$string['pluginname'] = 'AI Connector';
$string['presence_penalty'] = 'Presence penalty';
$string['presence_penalty_desc'] = 'Similar to frequency penalty, it reduces probability of using a that was already used.
The difference is that is does not matter how many times the word was used - just if it was or not.';
$string['privacy:metadata:ai_connector'] = 'In order to generate text or image, user needs to pass prompt text and/or image.';
$string['privacy:metadata:ai_connector:image'] = 'Image is an optional argument you can pass to make a base for generated image.';
$string['privacy:metadata:ai_connector:prompttext'] = 'User\'s prompt text is being sent to API services to generate response.';
$string['sourceoftruth'] = 'Source of truth';
$string['sourceoftruth_desc'] = 'Information that is specific for your organization. It will be passed to ChatGPT as facts that should be used when crafting the response.';
$string['temperature'] = 'Temperature';
$string['temperature_desc'] = 'In other words this is "randomness" or "creativity". Low temperature will generate more coherent but predictable text. The range is from 0 to 1.';
$string['top_p'] = 'Top P';
$string['top_p_desc'] = 'It\'s used for similar purpose as temperature - the lower the setting, the more correct and deterministic output. The range is also from 0 to 1.';
