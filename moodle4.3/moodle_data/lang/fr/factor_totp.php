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
 * Strings for component 'factor_totp', language 'fr', version '4.3'.
 *
 * @package     factor_totp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:revoke'] = 'Révoquer le mot de passe à usage unique basé sur le temps (TOTP)';
$string['devicename'] = 'Nom de l\'appareil';
$string['devicename_help'] = 'Ceci est l\'appareil sur lequel votre application d\'authentification est installée. Puisque vous pouvez configurer plusieurs appareils, ce nom vous aide à identifier lesquels sont actuellement utilisés. Vous devriez configurer les différents appareils avec leur propre code unique, afin de pouvoir les révoquer séparément au besoin.';
$string['devicenameexample'] = 'p.ex. « iPhone 11 bureau »';
$string['error:alreadyregistered'] = 'Ce secret de mot de passe à usage unique basé sur le temps (TOTP) a déjà été enregistré.';
$string['error:codealreadyused'] = 'Ce code a déjà été utilisé pour l\'authentification. Veuillez attendre la génération d\'un nouveau code et réessayer.';
$string['error:futurecode'] = 'Ce code n\'est pas valable. Veuillez vérifier que la date et l\'heure de votre appareil sont corrects et réessayez. L\'heure actuelle est {$a}.';
$string['error:oldcode'] = 'Ce code est obsolète. Veuillez vérifier que la date et l\'heure de votre appareil sont corrects et réessayez. L\'heure actuelle est {$a}.';
$string['error:wrongverification'] = 'Code de vérification incorrect.';
$string['factorsetup'] = 'Configuration de l\'app';
$string['info'] = '<p>Utiliser n\'importe quelle app d\'authentification avec mot de passe à usage unique basé sur le temps (TOTP) sur votre appareil mobile pour générer un code de vérification, même hors ligne.</p>
<p>Par exemple, <a href="https://2fas.com/">2FAS Auth</a>, <a href="https://freeotp.github.io/">FreeOTP</a>, Google Authenticator, Microsoft Authenticator ou Twilio Authy.</p>
<p>Assurez-vous que l\'heure et la date de votre appareil est configurée sur « Auto » ou sur « Fournie par le réseau ».</p>';
$string['logindesc'] = 'Utiliser l\'app d\'authentification de votre appareil mobile pour générer un code.';
$string['loginoption'] = 'Utiliser une app d\'authentification';
$string['loginskip'] = 'Je n\'ai pas mon appareil';
$string['loginsubmit'] = 'Continuer';
$string['logintitle'] = 'Vérifier qu\'il s\'agit bien de vous grâce à une app mobile';
$string['pluginname'] = 'App d\'authentification';
$string['privacy:metadata'] = 'Le plugin Facteur application d\'authentification n\'enregistre aucune donnée personnelle.';
$string['settings:totplink'] = 'Afficher un lien de configuration pour mobiles';
$string['settings:totplink_help'] = 'Si ce réglage est activé, une 3e option de configuration sera affichée, avec un lien direct otpauth://';
$string['settings:window'] = 'Fenêtre de vérification TOTP';
$string['settings:window_help'] = 'Durée de validité de chaque code. Vous pouvez augmenter cette valeur pour éviter les problèmes de connexion avec les appareils dont les horloges sont souvent légèrement mal réglées. La valeur est arrondie aux 30 secondes, qui est la durée avant génération de nouveaux codes.';
$string['setupfactor'] = 'Configuration de l\'app d\'authentification TOTP';
$string['setupfactor:account'] = 'Compte :';
$string['setupfactor:enter'] = 'Saisir les détails manuellement :';
$string['setupfactor:key'] = 'Clef secrète :';
$string['setupfactor:link'] = '<b>ou bien</b> ouvrir l\'app mobile :';
$string['setupfactor:link_help'] = 'Si vous êtes sur un appareil mobile et avez déjà une app d\'authentification installée, ce lien devrait fonctionner. Il est à noter que l\'utilisation d\'un TOTP sur l\'appareil avec lequel vous vous connectez peut diminuer les bénéfices de l\'authentification multifacteur.';
$string['setupfactor:linklabel'] = 'Ouvrir l\'app déjà installé sur cet appareil';
$string['setupfactor:mode'] = 'Mode :';
$string['setupfactor:mode:timebased'] = 'Basé sur le temps';
$string['setupfactor:scan'] = 'Scanner le code QR :';
$string['setupfactor:scanfail'] = 'Impossible de scanner ?';
$string['setupfactor:scanwithapp'] = 'Scanner le code QR avec votre application d\'authentification.';
$string['summarycondition'] = 'à l\'aide d\'une app TOTP';
$string['systimeformat'] = '%H:%M:%S %Z';
$string['verificationcode'] = 'Saisir votre code de vérification à 6 chiffres';
$string['verificationcode_help'] = 'Ouvrez votre app d\'authentification, par exemple Google Authenticator, et cherchez le code à 6 chiffres correspondant à ce site et ce nom d\'utilisateur';
