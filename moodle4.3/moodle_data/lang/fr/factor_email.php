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
 * Strings for component 'factor_email', language 'fr', version '4.3'.
 *
 * @package     factor_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email:accident'] = 'Si vous n\'avez demandé ce message, cliquez continuer pour essayer d\'invalider la tentative de connexion. Si vous cliquez ce lien par accident, cliquez annuler et aucune action ne sera effectuée.';
$string['email:browseragent'] = 'Les détails du navigateur pour cette requête sont : « {$a} »';
$string['email:geoinfo'] = 'Cette requête semble provenir d\'environ :';
$string['email:greeting'] = 'Bonjour {$a} 👋';
$string['email:ipinfo'] = 'Détails de la requête de connexion :';
$string['email:link'] = 'lien de vérification';
$string['email:loginlink'] = 'Ou, si vous êtes sur le même appareil, utilisez ce {$a}.';
$string['email:message'] = 'Voici votre code de vérification pour {$a->sitename} ({$a->siteurl}).';
$string['email:originatingip'] = 'Cette demande de connexion a été faite depuis « {$a} »';
$string['email:revokelink'] = 'Si ce n\'était pas vous, vous pouvez {$a}.';
$string['email:revokesuccess'] = 'Ce code a été révoqué avec succès. Toutes les sessions pour {$a} ont été terminées. Le courriel ne sera pas être utilisé comme facteur jusqu\'à ce que la sécurité du compte ait été vérifiée.';
$string['email:stoploginlink'] = 'stopper cette tentative de connexion';
$string['email:subject'] = 'Voici votre code de vérification';
$string['email:uadescription'] = 'Identité du navigateur de cette requête :';
$string['email:validity'] = 'Le code ne peut être utilisé qu\'une seule fois et est valide pour {$a}.';
$string['error:badcode'] = 'Le code n\'a pas été trouvé. Il peut s\'agir d\'un lien périmé, ou un nouveau code a été envoyé, ou la tentative de connexion avec ce code a réussi.';
$string['error:parameters'] = 'Paramètres de page incorrects.';
$string['error:wrongverification'] = 'Mauvais code. Réessayé.';
$string['event:unauthemail'] = 'Courriel non autorisé reçu';
$string['info'] = 'Facteur intégré. Un code de vérification est envoyé à l\'utilisateur par courriel.';
$string['logindesc'] = 'Nous venons d\'envoyer un code à 6 chiffres à votre adresse de courriel : {$a}';
$string['loginoption'] = 'Vous faire envoyer un courriel';
$string['loginskip'] = 'Je n\'ai pas reçu de code';
$string['loginsubmit'] = 'Continuer';
$string['logintitle'] = 'Vérifier que c\'est bien vous par courriel';
$string['pluginname'] = 'Courriel';
$string['privacy:metadata'] = 'Le plugin Facteur courriel n\'enregistre aucune donnée personnelle';
$string['settings:duration'] = 'Durée de validité';
$string['settings:duration_help'] = 'Le temps durant lequel le code est valide.';
$string['settings:suspend'] = 'Suspendre les comptes non autorisés';
$string['settings:suspend_help'] = 'Cocher cette case pour suspendre les comptes utilisateur si une vérification par courriel non autorisée a été reçue.';
$string['setupfactor'] = 'Réglages du facteur courriel';
$string['summarycondition'] = 'a un réglage de courriel valide';
$string['unauthemail'] = 'Courriel non autorisé';
$string['unauthloginattempt'] = 'L\'utilisateur d\'identifiant {$a->userid} a fait une tentative de connexion non autorisée au moyen de la vérification par courriel depuis l\'adresse IP {$a->ip} avec l\'agent de navigateur {$a->useragent}';
$string['verificationcode'] = 'Saisir le code de vérification pour confirmation';
$string['verificationcode_help'] = 'Un code de vérification a été envoyé à votre adresse de courriel';
