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
 * Strings for component 'factor_webauthn', language 'fr', version '4.3'.
 *
 * @package     factor_webauthn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:revoke'] = 'Révoquer l\'authentifiant';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = 'Hybride';
$string['authenticator:internal'] = 'Interne';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = 'Nom de la clef de sécurité';
$string['error'] = 'Échec d\'authentification';
$string['info'] = '<p>Utiliser une clef de sécurité</p>';
$string['logindesc'] = 'Cliquer continuer pour utiliser votre jeton d\'authentification ou une clef de sécurité.';
$string['loginoption'] = 'Utiliser un jeton de l\'app d\'authentification';
$string['loginskip'] = 'Je n\'ai pas ma clef de sécurité';
$string['loginsubmit'] = 'Continuer';
$string['logintitle'] = 'Vérifier qu\'il s\'agit bien de vous au moyen du jeton de l\'app d\'authentification';
$string['pluginname'] = 'Clef de sécurité';
$string['privacy:metadata'] = 'Le plugin Facteur clef de sécurité n\'enregistre aucune donnée personnelle.';
$string['register'] = 'Enregistrer l\'app d\'authentification';
$string['settings:authenticatortypes'] = 'Types d\'apps d\'authentification';
$string['settings:authenticatortypes_help'] = 'Activer certains types d\'apps d\'authentification';
$string['settings:userverification'] = 'Vérification utilisateur';
$string['settings:userverification_help'] = 'Permet de s\'assurer que la personne qui s\'authentifie est bien celle qu\'elle dit être. La vérification peut prendre plusieurs forme, comme un mot de passe, un NIP, une empreinte digitale, etc.';
$string['setupfactor'] = 'Configurer l\'app d\'authentification';
$string['summarycondition'] = 'à l\'aide d\'une app d\'authentification prenant en charge WebAuthn';
$string['userverification:discouraged'] = 'La vérification utilisateur ne doit pas être employée, par exemple pour minimiser l\'interaction';
$string['userverification:preferred'] = 'La vérification utilisateur est préférée. L\'authentification n\'échouera pas si la vérification est manquante';
$string['userverification:required'] = 'La vérification utilisateur est requise (par exemple au moyen d\'un NIP). L\'authentification échouera si la vérification est manquante';
