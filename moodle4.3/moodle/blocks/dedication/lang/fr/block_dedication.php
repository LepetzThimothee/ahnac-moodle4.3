<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Fichier de langue pour block_dedication
 * @package block_dedication
 * @copyright 2022 University of Canterbury
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 ou version ultérieure
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_filter_courseid'] = 'Nom du cours';
$string['admin_filter_courseid_help'] = 'Filtrer le rapport par le nom du cours';
$string['admin_filter_form'] = 'Configuration de la dédicace du cours';
$string['admin_filter_form_help'] = 'Le temps est estimé en fonction des concepts de Session et de Durée de session appliqués aux entrées de journal.

<strong>Clic :</strong> Chaque fois qu\'un utilisateur accède à une page de Moodle, une entrée de journal est enregistrée.

<strong>Session :</strong> ensemble de deux clics consécutifs ou plus où le temps écoulé entre chaque paire de clics consécutifs ne dépasse pas un temps maximum établi.

<strong>Durée de session :</strong> temps écoulé entre le premier et le dernier clic de la session.

<strong>Temps de dédicace :</strong> la somme de toutes les durées de session pour un utilisateur.';

$string['admin_filter_form_text'] = 'Sélectionnez la période de dates et le temps maximum entre les clics de la même session.';
$string['admin_filter_mintime'] = 'Début de la période';
$string['admin_filter_mintime_help'] = 'Prendre en compte uniquement les entrées de journal après cette date';
$string['admin_filter_maxtime'] = 'Fin de la période';
$string['admin_filter_maxtime_help'] = 'Prendre en compte uniquement les entrées de journal avant cette date';
$string['admin_filter_submit'] = 'Calculer';
$string['collect_dedication'] = 'Collecter les données pour le bloc de dédicace';
$string['group'] = 'Groupe';
$string['groupentity'] = 'Groupe';
$string['sessionduration'] = 'Durée de la session';
$string['session_limit'] = 'Limite de session';
$string['session_limit_desc'] = 'Limite de session pour les filtres de la page de rapport';
$string['entity_dedication'] = 'Dédicace';
$string['ignore_sessions_limit'] = 'Ignorer la limite de session';
$string['ignore_sessions_limit_desc'] = 'Supprime les sessions plus courtes, tout ce qui est inférieur à cette valeur (en minutes) sera ignoré dans le rapport de dédicace';
$string['pluginname'] = 'Dédicace';
$string['privacy:metadata'] = 'Le plugin block_dedication stocke les temps que les utilisateurs ont consacrés aux cours.';
$string['privacy:metadata:block_dedication:userid'] = 'ID de l\'utilisateur pour la dédicace';
$string['privacy:metadata:block_dedication:courseid'] = 'ID du cours pour la dédicace de l\'utilisateur';
$string['privacy:metadata:block_dedication:timespent'] = 'Temps passé sur le cours';
$string['privacy:metadata:block_dedication:timestart'] = 'L\'heure de début des données collectées';
$string['report_dedication'] = 'Rapport de dédicace';
$string['report_timespent'] = 'Rapport du temps passé';
$string['user_dedication_datasource'] = 'Dédicace des utilisateurs';
$string['dedication:addinstance'] = 'Autoriser à ajouter un bloc de dédicace';
$string['dedication:myaddinstance'] = 'Autoriser à ajouter un bloc de dédicace au tableau de bord';
$string['dedication:viewreports'] = 'Autoriser à voir les rapports de dédicace';
$string['timespent_estimation'] = 'Votre temps estimé passé dans le cours est :';
$string['timespentreport'] = 'Rapport complet';
$string['period'] = 'Période depuis <em>{$a->mintime}</em> jusqu\'à <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Temps écoulé :</strong> {$a}';
$string['dedicationrow'] = 'Temps passé dans le cours';
$string['connectionratiorow'] = 'Connexions par jour';
$string['dedicationall'] = 'Dédicace de tous les membres du cours. Cliquez sur un nom pour voir une dédicace détaillée du cours.';
$string['totaltimespent'] = '<strong>Total du temps passé dans le cours :</strong> {$a}';
$string['averagetimespent'] = '<strong>Temps moyen passé dans le cours :</strong> {$a}';
$string['sessionstart'] = 'Début de la session';
$string['userdedication'] = 'Dédicace détaillée du cours de <em>{$a}</em>.';
$string['timespentincourse'] = 'Temps passé dans le cours';
$string['lastupdated'] = 'Dernière mise à jour : {$a}';
// Formulaire du bloc.
$string['showestimatedtime'] = 'Afficher le temps estimé passé aux utilisateurs';
$string['showestimatedtime_help'] = 'Ce paramètre permet aux utilisateurs de voir leur temps estimé passé dans le bloc.';
$string['cleanuptask'] = 'Tâche de nettoyage de l\'historique des sessions';
$string['allloglifetime'] = 'Conserver l\'historique des sessions pour';
$string['configallloglifetime'] = 'Cela spécifie la durée pendant laquelle vous souhaitez conserver les données sur la durée des sessions. Les sessions plus anciennes que cet âge sont automatiquement supprimées.';
$string['excludesessionslessthan'] = 'Exclut les sessions inférieures à {$a}';
$string['viewsessiondurationreport'] = 'Voir le rapport de durée de session';
$string['sessiondurationsum'] = 'Durée de la session (somme)';
$string['enrolmententity'] = 'Inscription';
$string['enrolmentmethod'] = 'Méthode d\'inscription';
$string['timespenttasknotrunning'] = 'La tâche de calcul du temps passé ne s\'est pas encore exécutée.';