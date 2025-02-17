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
 * Strings for component 'panoptosubmission', language 'fr', version '4.3'.
 *
 * @package     panoptosubmission
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addvideo'] = 'Ajouter un Devoir Vidéo Panopto';
$string['all'] = 'Tous';
$string['allowdeleting'] = 'Autoriser la remise à nouveau';
$string['allowdeleting_help'] = 'Si cette option est activée, les étudiants peuvent remplacer les vidéos envoyées. La possibilité de déposer une vidéo après la date butoir est contrôlée par le paramètre « Empêcher les remises tardives ».';
$string['assignmentexpired'] = 'Remise annulée. La date butoir de remise est dépassée.';
$string['assignmentsubmitted'] = 'Succès, votre devoir a été remis';
$string['availabledate'] = 'Autoriser les remises de';
$string['availabledate_help'] = 'Si cette option est activée, les étudiants ne pourront pas déposer avant cette date. Si elle est désactivée, les étudiants pourront commencer à déposer leurs documents immédiatement.';
$string['cancel'] = 'Fermer';
$string['currentgrade'] = 'Note actuelle dans l’évaluation';
$string['deleteallsubmissions'] = 'Supprimer toutes les remises de vidéos';
$string['duedate'] = 'Date butoir';
$string['duedate_help'] = 'C’est la date à laquelle le devoir doit être rendu. Les remises seront toujours autorisées après cette date, mais tout devoir remis après cette date sera marqué comme étant en retard.
Définissez une date limite pour les devoirs afin d’empêcher les remises après une certaine date.';
$string['early'] = '{$a} tôt';
$string['emailteachers_help'] = 'Si cette option est activée, les enseignants reçoivent une notification par courriel chaque fois qu’un étudiant ajoute ou met à jour une remise.
Seuls les enseignants habilités à noter le devoir en question sont avertis. Ainsi, par exemple, si le cours utilise des groupes distincts, les enseignants limités à certains groupes ne recevront pas de notification concernant les étudiants d’autres groupes.';
$string['eventassignment_details_viewed'] = 'Détails de remise consultés';
$string['eventassignment_submitted'] = 'Devoir déposé';
$string['eventgrade_submissions_page_viewed'] = 'Page de remise de notes consultée';
$string['eventgrades_updated'] = 'Notes mises à jour';
$string['eventsingle_submission_page_viewed'] = 'Seule page de remise consultée';
$string['failedtoinsertsubmission'] = 'Échec de l’insertion de l’enregistrement de remise';
$string['feedback'] = 'Feedback';
$string['feedbackfromteacher'] = 'Feedback de l’enseignant';
$string['finalgrade'] = 'Note finale';
$string['fullname'] = 'Nom';
$string['grade_out_of'] = 'Points sur {$a} :';
$string['gradedby'] = 'Évalué par';
$string['gradedon'] = 'Évalué le';
$string['gradeitem:submissions'] = 'Remises';
$string['grademodified'] = 'Dernière modification (Note)';
$string['gradesubmission'] = 'Note';
$string['gradingsummary'] = 'Résumé de l’évaluation';
$string['group_filter'] = 'Filtre de groupe';
$string['has_grade'] = 'Evalué';
$string['hiddenfromstudents'] = 'Caché pour les étudiants';
$string['invalid_launch_parameters'] = 'Paramètres de lancement non valides';
$string['invalidid'] = 'ID non valide';
$string['invalidperpage'] = 'Saisir un nombre supérieur à zéro';
$string['late'] = '{$a} en retard';
$string['latesubmissions'] = 'Remises tardives';
$string['latesubmissionsaccepted'] = 'Permis jusqu’à {$a}';
$string['messageprovider:panoptosubmission_updates'] = 'Notifications de Dévoir Vidéo Panopto';
$string['modulename'] = 'Dévoir Vidéo Panopto';
$string['modulename_help'] = 'L’activité Dévoir Vidéo Panopto est un devoir à évaluer qui demande aux étudiants de créer et de déposer des vidéos Panopto. Les enseignants peuvent également fournir un feedback.';
$string['modulenameplural'] = 'Dévoirs Vidéo Panopto';
$string['name'] = 'Nom';
$string['needs_grade'] = 'Besoin d’une note';
$string['no'] = 'Non';
$string['no_existing_lti_tools'] = 'Un outil externe Panopto LTI préconfiguré avec le paramètre personnalisé « panopto_student_submission_tool » doit exister pour pouvoir utiliser l’activité Dévoir Vidéo Panopto. Veuillez consulter la documentation de configuration pour plus d’informations.';
$string['noassignments'] = 'Aucune activité de Dévoir Vidéo Panopto n’a été trouvée dans le cours.';
$string['noenrolledstudents'] = 'Aucun étudiant n’est inscrit au cours';
$string['nosubmission'] = 'Pas de remise';
$string['nosubmissions'] = 'Pas de remises';
$string['nosubmissionsforgrading'] = 'Il n’y a pas de remise disponible pour évaluation';
$string['not_submitted'] = 'Non déposé';
$string['notallowedtoreplacemedia'] = 'Vous n’êtes pas autorisé à remplacer le fichier.';
$string['numberofparticipants'] = 'Participants';
$string['numberofsubmissions'] = 'Nombre de remises : {$a}';
$string['numberofsubmissionsneedgrading'] = 'Nécessitant évaluation';
$string['numberofsubmittedassignments'] = 'Déposé';
$string['optionalsettings'] = 'Paramètres optionnels';
$string['pagesize'] = 'Les remises sont présentées par page';
$string['pagesize_help'] = 'Définissez le nombre de remise à afficher par page';
$string['panoptosubmission:addinstance'] = 'Ajouter une activité Dévoir Vidéo Panopto';
$string['panoptosubmission:gradesubmission'] = 'Notez les remises de vidéos';
$string['panoptosubmission:submit'] = 'Déposer';
$string['pluginadministration'] = 'Dévoir Vidéo Panopto';
$string['pluginname'] = 'Dévoir Vidéo Panopto';
$string['preventlate'] = 'Empêcher les remises tardives';
$string['preventlate_help'] = 'Si cette option est activée, elle empêchera les étudiants de déposer le devoir après la date butoir.';
$string['privacy:markedsubmissionspath'] = 'Remises évaluées';
$string['privacy:metadata:emailteachersexplanation'] = 'Des messages sont envoyés aux enseignants par le système de messagerie.';
$string['privacy:metadata:panoptosubmission_submission'] = 'Remises de Dévoir Vidéo Panopto';
$string['privacy:metadata:panoptosubmission_submission:grade'] = 'Note attribuée à la remise';
$string['privacy:metadata:panoptosubmission_submission:mailed'] = 'Si la notification de remise a été envoyée par émail à l’enseignant';
$string['privacy:metadata:panoptosubmission_submission:source'] = 'Le lien LTI qui ouvre le contenu remis';
$string['privacy:metadata:panoptosubmission_submission:submissioncomment'] = 'Commentaire de l’enseignant pour la remise';
$string['privacy:metadata:panoptosubmission_submission:teacher'] = 'Identifiant Moodle de l’enseignant qui a corrigé la remise';
$string['privacy:metadata:panoptosubmission_submission:timecreated'] = 'Date de création de l’enregistrement de la remise';
$string['privacy:metadata:panoptosubmission_submission:timemarked'] = 'Date à laquelle la remise a été évaluée';
$string['privacy:metadata:panoptosubmission_submission:timemodified'] = 'Date à laquelle la remise de la mission a été modifiée';
$string['privacy:metadata:panoptosubmission_submission:userid'] = 'Identifiant Moodle';
$string['privacy:metadata:panoptosubmissionfilter'] = 'Filtre de préférence des remises';
$string['privacy:metadata:panoptosubmissiongroupfilter'] = 'Préférence pour le filtre de groupe des remises';
$string['privacy:metadata:panoptosubmissionperpage'] = 'Préférence pour le nombre de remises par page';
$string['privacy:metadata:panoptosubmissionquickgrade'] = 'Préférence pour l’évaluation rapide';
$string['privacy:submissionpath'] = 'Remise';
$string['quickgrade'] = 'Activer l’évaluation rapide';
$string['quickgrade_help'] = 'Si cette option est activée, plusieurs devoirs peuvent être notés en même temps.
Mettez à jour les notes et les feedbacks, puis cliquez sur « Enregistrer tous les feedbacks ».';
$string['relativedatessubmissiontimeleft'] = 'Calculé pour chaque étudiant';
$string['replacevideo'] = 'Remplacer';
$string['reqgrading'] = 'Nécessitant évaluation';
$string['save'] = 'Enregistrer les modifications';
$string['savedchanges'] = 'Modifications enregistrées';
$string['savefeedback'] = 'Enregistrer le feedback';
$string['savepref'] = 'Enregistrer les préférences';
$string['select_submission'] = 'Selectionner le remises Panopto';
$string['sessionpreview_hide'] = 'Cacher l’aperçu vidéo';
$string['sessionpreview_show'] = 'Afficher l’aperçu vidéo';
$string['show'] = 'Afficher';
$string['show_help'] = 'Si le filtre est défini sur « Tous », toutes les remises des étudiants seront affichées, même si l’étudiant n’a rien déposé.
Si le filtre est défini sur « Nécessitant évaluation », seules les remises qui n’ont pas été notées ou les remises qui ont été mises à jour par l’étudiant après avoir été notées seront affichées.
Si le paramètre est défini sur « Déposé », seuls les étudiants qui ont déposé un travail vidéo seront affichés.';
$string['singlegrade'] = 'Ajouter un texte d’aide';
$string['singlegrade_help'] = 'Ajouter un texte d’aide';
$string['singlesubmissionheader'] = 'Remise des notes';
$string['status'] = 'Statut';
$string['submission'] = 'Remise';
$string['submissioncomment'] = 'Commentaire';
$string['submissioncommentfeedback'] = 'Feedback par commentaires';
$string['submissionisdue'] = 'Remise';
$string['submissions'] = 'Remises';
$string['submitted'] = 'Déposé';
$string['submitvideo'] = 'Déposer';
$string['timemodified'] = 'Dernière modification (remise)';
$string['timeremaining'] = 'Temps restant';
$string['useremail'] = 'Courriel';
$string['userpicture'] = 'Image de l’utilisateur';
$string['video_preview_header'] = 'Aperçu de la remise';
$string['viewsubmission'] = 'Visionner la remise';
$string['yes'] = 'Oui';
