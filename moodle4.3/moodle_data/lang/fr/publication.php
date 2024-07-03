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
 * Strings for component 'publication', language 'fr', version '4.3'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Ajouter des fichiers';
$string['allfiles'] = 'Fichiers déposés';
$string['allowedfiletypes'] = 'Types de fichiers acceptés';
$string['allowedfiletypes_err'] = 'Valeur incorrecte ! Extensions ou séparateurs non valides';
$string['allowedfiletypes_help'] = 'Les types de fichiers acceptés peuvent être limités en entrant une liste de mimetypes séparée par des virgules (par exemple : « video/mp4, audio/mp3, image/png, image/jpeg ») ou une liste d’extension de fichier avec le point (par exemple : « .png, .jpg »). Si le champs est laissé vide, tous les type sont autorisés.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Les détails et formulaire d’envoi du devoir seront disponibles depuis <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Date d’ouverture';
$string['allowsubmissionsfromdate_help'] = 'Si cette option est activée, les participants ne peuvent pas déposer leurs fichiers avant cette date. Si l\'option est désactivée, les participants peuvent commencer à déposer leurs fichiers dès maintenant.';
$string['allowsubmissionsfromdate_import'] = 'Approbation depuis';
$string['allowsubmissionsfromdate_upload'] = 'Possibilité de dépôt depuis';
$string['allowsubmissionsfromdateh'] = 'Intervalle de temps pour Dépôt/Approbation';
$string['allowsubmissionsfromdateh_help'] = 'Durant l\'intervalle de temps spécifié, les participants peuvent déposer des fichiers ou donner ou refuser leur accord pour la publication/visibilité des fichiers (en fonction du mode).';
$string['allowsubmissionsfromdatesummary'] = 'Le devoir acceptera des dépôts depuis <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Toujours montrer la description';
$string['alwaysshowdescription_help'] = 'Si désactivé, la Description du devoir ci-dessus ne deviendra visible que dès la date "Autoriser dépôts depuis".';
$string['approval_required'] = 'Décision en attente';
$string['approval_timeover'] = 'Vous ne pouvez modifier votre approbation que durant la période de modification';
$string['approvalchange'] = 'Statut d’approbation modifié';
$string['approved'] = 'Approuvé';
$string['approveusers'] = 'Approuver';
$string['assignment'] = 'Devoir';
$string['assignment_help'] = 'Choisissez le devoir (individuel ou en groupe) duquel importer les fichiers.';
$string['assignment_notfound'] = 'Le devoir depuis lequel les fichiers ont été importés ne peut plus être trouvé.';
$string['assignment_notset'] = 'Aucun devoir n’a été choisi';
$string['availability'] = 'Intervalle de temps pour le dépôt et l’approbation';
$string['choose'] = 'Veuillez sélectionner…';
$string['completiondetail:upload'] = 'Déposer un fichier';
$string['completionupload'] = 'L\'étudiant doit déposer un fichier';
$string['configautoimport'] = 'Si vous préférez que les nouveaux devoirs soient automatiquement importés dans les instances du Partage de fichiers. Cette fonctionnalité peut être activée/désactivée pour chaque instance de l’activité.';
$string['configmaxbytes'] = 'Taille maximale par défaut des fichiers dans un partage de fichiers.';
$string['configmaxfiles'] = 'Nombre maximal par défaut de fichiers permis par utilisateur.';
$string['configobtainstudentapproval'] = 'Les fichiers ne seront publiés (rendus visibles à tous) qu\'après approbation de l\'étudiant et de l\'enseignant.';
$string['configobtainteacherapproval'] = 'Les documents des étudiants sont par défaut visibles pour les autres participants.';
$string['configrequiremodintro'] = 'Désactivez cette option si vous ne voulez pas forcer les utilisateurs à entrer une description pour chaque activité';
$string['courseuploadlimit'] = 'Limite de dépôt pour le cours';
$string['currentlynotapproved'] = '* Pour l\'instant, la publication n\'a pas été approuvée ou rejetée.';
$string['cutoffdate'] = 'Date de fin';
$string['cutoffdate_help'] = 'Si défini, le devoir n’acceptera pas de fichiers après cette date sans une prolongation.';
$string['cutoffdate_import'] = 'Approbation possible jusqu’à';
$string['cutoffdate_upload'] = 'Dernier dépôt possible jusqu’à';
$string['cutoffdatefromdatevalidation'] = 'La date de fin doit être postérieure à la date depuis laquelle les envois sont autorisés.';
$string['cutoffdatevalidation'] = 'La date de fermeture ne peut être antérieure à la date d’échéance';
$string['details'] = 'Détails';
$string['downloadall'] = 'Télécharger tous les fichiers déposés';
$string['duedate'] = 'Date d’échéance';
$string['duedate_help'] = 'Les envois seront toujours acceptés après cette date, mais seront marqués comme en retard. Pour ne pas autoriser les envois après une certaine date, utilisez la date de fin.';
$string['duedate_import'] = 'Approbation jusqu’à';
$string['duedate_upload'] = 'Dépôt possible jusqu’à';
$string['duedatevalidation'] = 'La date d’échéance doit être postérieure à la date depuis laquelle les envois sont autorisés.';
$string['edit_timeover'] = 'Les fichiers ne peuvent être modifiés que durant la période de modification.';
$string['edit_uploads'] = 'Modifier/déposer des fichiers';
$string['emailstudentsmail'] = '{$a->username} a modifié le statut d’approbation de « {$a->filename} » pour « {$a->publication} » à {$a->apstatus}, le {$a->dayupdated} à {$a->timeupdated}. Disponible ici : {$a->url}';
$string['emailstudentsmailhtml'] = '{$a->username} a modifié le statut d’approbation de « {$a->filename} » pour <i>« {$a->publication} »</i> à <b>{$a->apstatus}</b> le {$a->dayupdated} à {$a->timeupdated}</i><br /><br /> Disponible ici : <a href="{$a->url}"></a>.';
$string['emailteachermail'] = '---------------------------------------------------------------------\\n{$a->username} a déposé le fichier « {$a->filename} » pour « {$a->publication} » le {$a->dayupdated} à {$a->timeupdated}.

Il est disponible ici :

{$a->url}---------------------------------------------------------------------\\n';
$string['emailteachermailhtml'] = '{$a->username} a déposé le fichier « {$a->filename} » pour <i> « {$a->publication} » le {$a->dayupdated} à {$a->timeupdated}</i><br /><br /> Il est <a href="{$a->url}">disponible ici</a>.';
$string['entiresperpage'] = 'Nombre de participants à afficher par page';
$string['eventpublicationapprovalchanged'] = 'L’approbation du fichier a changé';
$string['eventpublicationduedateextended'] = 'La date de rendu de la publication a été étendue';
$string['eventpublicationfiledeleted'] = 'Le fichier de la publication a été supprimé';
$string['eventpublicationfileimported'] = 'Un fichier a été importé';
$string['eventpublicationfileuploaded'] = 'Un fichier a été déposé';
$string['extensionduedate'] = 'Date de prolongation';
$string['extensionnotafterduedate'] = 'La date de prolongation doit être postérieure à la date d’échéance';
$string['extensionnotafterfromdate'] = 'La date de prolongation doit être postérieure à la date depuis laquelle les envois sont autorisés.';
$string['extensionto'] = 'Prolongation jusqu’à';
$string['filedetails'] = 'Détails';
$string['filesofthesetypes'] = 'Ces types de fichier sont autorisés :';
$string['filter'] = 'Filtrer';
$string['filter:allfiles'] = 'Tous les fichiers déposés';
$string['filter:approvalrequired'] = 'Décision en attente';
$string['filter:approved'] = 'Fichiers approuvés';
$string['filter:nofiles'] = 'Aucun fichier déposé';
$string['filter:nofilter'] = 'Aucun filtre';
$string['filter:rejected'] = 'Fichiers rejetés';
$string['giveapproval'] = 'Approuver';
$string['go'] = 'Envoyer';
$string['grantextension'] = 'Accorder/modifier une prolongation';
$string['groupapprovalmode'] = 'Mode d’approbation pour les groupes';
$string['groupapprovalmode_all'] = 'TOUS les membres du groupe doivent approuver';
$string['groupapprovalmode_help'] = 'Définit si l’approbation de tous les membres du groupe ou d’au moins un membre est nécessaire pour rendre les fichiers visibles.';
$string['groupapprovalmode_single'] = 'au moins UN membre doit approuver';
$string['groupapprovalmode_title'] = 'Approbation par le groupe';
$string['guideline'] = 'Publication des fichiers déposés';
$string['hidden'] = 'Non publié';
$string['importfrom_err'] = 'Vous devez choisir un devoir depuis lequel importer des fichiers';
$string['maxbytes'] = 'Taille maximale de chaque fichier';
$string['maxfiles'] = 'Nombre maximal de fichiers par utilisateur/groupe';
$string['messageprovider:publication_updates'] = 'Notifications de publication';
$string['mode'] = 'Mode de fonctionnement';
$string['mode_help'] = 'Définit si les étudiants déposent des fichiers dans l’activité, ou si les travaux rendus dans une activité Devoir sont utilisés.';
$string['modeimport'] = 'Utiliser les travaux rendus d’une activité Devoir';
$string['modeupload'] = 'Les étudiants déposent des fichiers directement';
$string['modulename'] = 'Partage de fichiers';
$string['modulename_help'] = 'Le partage de fichiers offre les fonctionnalités suivantes:<br><ul><li>Les étudiants peuvent déposer des fichiers, qui seront publiés automatiquement ou après que les enseignants les ont examinés et approuvés en vue de leur publication.</li><li>Un devoir peut être choisi comme base d\'un partage de fichiers. L\'enseignant peut décider quels fichiers du devoir sont publiés (visibles par tous les étudiants). L\'enseignant peut également laisser les étudiants décider eux-mêmes si leurs fichiers doivent être visibles par tous.</li></ul>';
$string['modulenameplural'] = 'Partages de fichiers';
$string['myfiles'] = 'Mes fichiers';
$string['mygroupfiles'] = 'Fichiers de mon groupe';
$string['name'] = 'Nom du partage de fichiers';
$string['noentries'] = 'Aucun élément';
$string['nofiles'] = 'Aucun fichier disponible';
$string['nofilestodisplay'] = 'Actuellement, il n\'y a pas de fichiers disponibles ou non encore publiés.';
$string['nofilestozip'] = 'Aucun fichier à zipper';
$string['nonexistentfiletypes'] = 'Les fichiers suivants n’ont pas été reconnus: {$a}';
$string['nopublicationsincourse'] = 'Il n’existe aucune instance de partage de fichiers dans ce cours.';
$string['nothing_to_show_groups'] = 'Rien à afficher - aucun groupe disponible';
$string['nothing_to_show_users'] = 'Rien à afficher - aucun étudiant disponible';
$string['nothingtodisplay'] = 'Aucun élément à afficher';
$string['notice'] = '<strong>Information: </strong>';
$string['notice_groupimportrequireallapproval'] = 'Les fichiers affichés proviennent d\'une activité Devoir en groupe. Les fichiers ne seront publiés pour tous les étudiants qu\'avec l\'approbation de TOUS les membres du groupe et des enseignants. Veuillez clarifier la publication au sein du groupe au préalable.<br>
Les modifications apportées aux fichiers existants ne sont possibles que dans le cadre de l\'activité Devoir d\'origine.';
$string['notice_groupimportrequireoneapproval'] = 'Les fichiers affichés proviennent d\'une activité Devoir en groupe. Les fichiers ne seront publiés pour tous les étudiants qu\'avec l\'approbation d\'au moins UN membre du groupe et des enseignants.. Veuillez clarifier la publication au sein du groupe au préalable.<br>
Les modifications apportées aux fichiers existants ne sont possibles que dans le cadre de l\'activité Devoir d\'origine.';
$string['notice_importnoapproval'] = 'Tous les fichiers que vous déposez ici ne seront publiés qu\'après approbation des enseignants.';
$string['notice_importrequireapproval'] = 'Tous les fichiers ne seront publiés qu\'après approbation de votre part et des enseignants.<br>Les modifications apportées aux fichiers existants ne sont possibles que dans le cadre de l\'activité Devoir d\'origine.';
$string['notice_obtainapproval_import_both'] = 'En tant qu\'enseignant, vous pouvez à tout moment refuser l\'approbation d\'une publication, si un fichier ne répond pas aux exigences définies.';
$string['notice_obtainapproval_import_studentonly'] = 'Dans l\'esprit de la législation sur les droits d\'auteur, nous vous demandons de demander l\'autorisation de publier les fichiers des étudiants d\'une façon distincte.<br>
En tant qu\'enseignant, vous pouvez à tout moment refuser l\'approbation d\'une publication, si un fichier ne répond pas aux exigences définies.';
$string['notice_obtainapproval_upload_automatic'] = 'Dans l\'esprit de la législation sur les droits d\'auteur, nous vous demandons de demander l\'autorisation de publier les fichiers des étudiants d\'une façon distincte.<br>
En tant qu\'enseignant, vous pouvez à tout moment refuser l\'approbation d\'une publication, si un fichier ne répond pas aux exigences définies.';
$string['notice_obtainapproval_upload_teacher'] = 'Dans l\'esprit de la législation sur les droits d\'auteur, nous vous demandons de demander l\'autorisation de publier les fichiers des étudiants d\'une façon distincte.<br>
En tant qu\'enseignant, vous pouvez à tout moment refuser l\'approbation d\'une publication, si un fichier ne répond pas aux exigences définies.';
$string['notice_obtainteacherapproval_studentsapproval'] = 'Dans l\'esprit de la législation sur les droits d\'auteur, nous vous demandons de demander l\'autorisation de publier les fichiers des étudiants d\'une façon distincte.';
$string['notice_uploadnoapproval'] = 'Tous les fichiers que vous déposez ici seront publiés immédiatement (visibles par tout le monde). Les enseignants se réservent le droit de refuser la publication de vos fichiers.';
$string['notice_uploadrequireapproval'] = 'Tous les fichiers que vous déposez ici ne seront publiés (visibles par tous) qu\'après avoir été approuvés par les enseignants. Les enseignants se réservent le droit de refuser la publication de vos fichiers à tout moment.';
$string['notifications'] = 'Notifications';
$string['notifystudents'] = 'Notifier les étudiants des changements approuvés';
$string['notifystudents_help'] = 'Si ce paramètre est activé, les étudiants recevront un message dès que le statut d’approbation d’un de leurs fichiers déposés est modifié.';
$string['notifyteacher'] = 'Notifier les évaluateurs des nouveaux fichiers déposés';
$string['notifyteacher_help'] = 'Si cette option est activée, les enseignants recevront une notification lorsque les étudiants déposent un fichier.';
$string['obtainstudentapproval'] = 'Publication des fichiers déposés';
$string['obtainstudentapproval_help'] = 'Cette option détermine le mode de publication (visibilité) des fichiers déposés : <br><ul><li><strong>Approbation des enseignants requise</strong> - Les fichiers soumis seront examinés et publiés par les enseignants</li><li><strong>Approbation des étudiants et des enseignants requise</strong> - Les étudiants et les enseignants doivent accepter la publication des contributions, sinon elles ne seront pas visibles</li></ul>.';
$string['obtainstudentapproval_participant'] = 'Approbation des étudiants et des enseignants requise';
$string['obtainstudentapproval_teacher'] = 'Approbation des enseignants requise';
$string['obtainstudentapproval_yes'] = 'Approbation des étudiants et des enseignants requise';
$string['obtainteacherapproval'] = 'Publication des fichiers déposés';
$string['obtainteacherapproval_help'] = 'Les fichiers seront-ils visibles immédiatement après leur téléchargement ou non : <br><ul><li>Oui - tous les fichiers seront visibles par tous immédiatement</li><li>Non - les fichiers ne seront publiés qu\'après l\'approbation de l\'enseignant</li></ul>';
$string['obtainteacherapproval_no'] = 'Approbation des enseignants requise';
$string['obtainteacherapproval_yes'] = 'Approuver automatiquement';
$string['optionalsettings'] = 'Options';
$string['overdue'] = 'Date limite de la période d\'édition dépassée';
$string['overview'] = 'Vue d\'ensemble';
$string['pending'] = 'En attente';
$string['pluginadministration'] = 'Administration du partage de fichiers';
$string['pluginname'] = 'Partage de fichiers';
$string['privacy:metadata:approval'] = 'Indique si le membre du groupe a approuvé ou rejeté la publication du fichier.';
$string['privacy:metadata:contenthash'] = 'Hachage SHA1 du contenu du fichier, utilisé pour déterminer si le fichier a changé';
$string['privacy:metadata:extduedates'] = 'Stocke des information sur des échéances modifiées/prolongées pour mod_publication.';
$string['privacy:metadata:extensionduedate'] = 'La date d’échéance effective pour l’utilisateur, par effet de l’octroi d’une exception/prolongation.';
$string['privacy:metadata:fileid'] = 'Identifiant du fichier';
$string['privacy:metadata:filename'] = 'Le nom du fichier';
$string['privacy:metadata:files'] = 'Stocke des informations (identifiant, propriétaire, provenance, hachage du contenu, nom du fichier et si approuvé par l’enseignant et/ou l’étudiant) sur les fichiers déposés ou importés dans mod_publication.';
$string['privacy:metadata:groupapproval'] = 'Stocke des informations sur les approbations/rejets par les membres de groupes de fichiers déposés par le groupe.';
$string['privacy:metadata:publicationfileexplanation'] = 'Les fichiers et textes en ligne convertis utilisés par ce module sont stockés par l’API de stockage de fichiers de Moodle.';
$string['privacy:metadata:publicationperpage'] = 'Combien d’entrées afficher par page';
$string['privacy:metadata:studentapproval'] = 'Indique si l’étudiant a approuvé ou rejeté la publication du fichier.';
$string['privacy:metadata:teacherapproval'] = 'Indique si l’enseignant a approuvé ou rejeté la publication du fichier.';
$string['privacy:metadata:timecreated'] = 'L’heure et la date de création de l’enregistrement de données.';
$string['privacy:metadata:timemodified'] = 'L’heure et la date de la modification la plus récente de l’enregistrement de données.';
$string['privacy:metadata:type'] = 'Indique l’origine du fichier (déposé par l’étudiant, importé depuis un devoir de type fichier ou de type texte en ligne).';
$string['privacy:metadata:userid'] = 'Identifiant de l’utilisateur.';
$string['privacy:path:files'] = 'Fichiers';
$string['privacy:path:resources'] = 'Ressources';
$string['privacy:type:import'] = 'Fichier importé';
$string['privacy:type:onlinetext'] = 'Texte en ligne importé';
$string['privacy:type:upload'] = 'Fichier déposé';
$string['publication:addinstance'] = 'Ajouter un nouveau partage de fichiers';
$string['publication:approve'] = 'Décider si les fichiers doivent être publiés (visibles par tous les étudiants)';
$string['publication:grantextension'] = 'Accorder une prolongation';
$string['publication:receiveteachernotification'] = 'Recevoir des notifications pour les enseignants';
$string['publication:upload'] = 'Déposer des fichiers dans un partage de fichiers';
$string['publication:view'] = 'Voir le partage de fichiers';
$string['publicationstatus'] = 'Publication';
$string['publicationstatus_help'] = 'Le statut de la publication représente l\'approbation de l\'enseignant et la publication finale : <ul><li><i class="fa fa-check text-success fa-fw"></i> Le fichier est publié et donc visible par tous les participants</li><li><i class="fa-times text-danger fa-fw"></i> Le fichier n\'est pas publié (l\'approbation n\'a pas encore été donnée ou a été rejetée) et n\'est donc pas visible</li></ul>.';
$string['publicfiles'] = 'Fichiers publiés';
$string['published_aftercheck'] = 'Approbation des enseignants requise';
$string['published_immediately'] = 'Approuver automatiquement';
$string['rejected'] = 'Rejeté';
$string['rejectusers'] = 'Rendre non visible pour tous';
$string['requiremodintro'] = 'Exiger une description de l’activité';
$string['reset'] = 'Annuler';
$string['reset_userdata'] = 'Toutes les données';
$string['resetstudentapproval'] = 'Annuler l\'approbation';
$string['save_changes'] = 'Enregistrer les modifications';
$string['saveapproval'] = 'Enregistrer les modifications';
$string['savestudentapprovalwarning'] = 'Voulez-vous vraiment enregistrer ces modifications ? L\'état de publication ne peut pas être modifié une fois qu\'il a été défini.';
$string['saveteacherapproval'] = 'Enregistrer les modifications';
$string['search:activity'] = 'Partage de fichiers - informations sur l’activité';
$string['show_details'] = 'Montrer détails';
$string['status'] = 'Statut';
$string['status:approved'] = 'Approuvé';
$string['status:approvednot'] = 'Rejeté';
$string['status:approvedrevoke'] = 'Révoqué';
$string['student_approve'] = 'Approuver';
$string['student_approved'] = 'Approuvé';
$string['student_pending'] = 'Décision en attente';
$string['student_reject'] = 'Rejeter';
$string['student_rejected'] = 'Rejeté';
$string['studentapproval'] = 'Approbation (étudiants)';
$string['studentapproval_help'] = 'Dans la colonne "Approbation (étudiants)", le feedback des étudiants est affiché:<br><ul><li><i class="fa-question fa-fw text-warning"></i> - Décision en attente</li><li><i class="fa-check text-success fa-fw"></i> - Approbation donnée</li><li><i class="fa-times text-danger fa-fw"></i> - Approbation rejetée</li></ul>';
$string['teacher_approve'] = 'Approuver';
$string['teacher_approved'] = 'Publié';
$string['teacher_pending'] = 'Décision en attente';
$string['teacher_reject'] = 'Rejeter';
$string['teacher_rejected'] = 'Non publié (rejeté)';
$string['teacherapproval'] = 'Approbation';
$string['teacherapproval_help'] = 'Approbation/refus actuel des fichiers, c\'est-à-dire sont-ils visibles par tous les participants : <br><ul><li><strong>Choisir...</strong> - décision en attente/aucune approbation donnée ou rejetée, ces fichiers ne sont pas visibles.</li><li><strong>Approuver</strong> - approbation accordée, ces fichiers sont publiés et donc visibles par tous.</li><li><strong>Rejeter</strong> - aucune approbation donnée, ces fichiers ne sont pas publiés et donc pas visibles.</li></ul>';
$string['total'] = 'Total';
$string['updatefiles'] = 'Mettre à jour les fichiers';
$string['updatefileswarning'] = 'Les fichiers déjà importés seront remplacés ou supprimés si les fichiers originaux du devoir ont été actualisés ou supprimés. Les paramètres de l\'étudiant, comme l\'approbation de la publication, restent inchangés.';
$string['uploaded'] = 'Déposé';
$string['visibility'] = 'Publié';
$string['visible'] = 'Publié';
$string['visibleforstudents'] = 'Publié';
$string['visibleforstudents_no'] = 'Ce fichier n\'est pas publié (pas visible par les étudiants).';
$string['visibleforstudents_yes'] = 'Ce fichier est publié (visible par les étudiants).';
$string['warning_changefromobtainstudentapproval'] = 'Si vous effectuez cette modifications, vous seul pourrez décider quels fichiers sont visibles par tous les étudiants. L’approbation des étudiants ne sera pas demandée. Tous les fichiers marqués comme approuvés deviendront visibles par tous les étudiants, sans prendre en compte les décisions des étudiants.';
$string['warning_changefromobtainteacherapproval'] = 'Après l’activation de ce réglage, tous les fichiers déposés seront visibles par les autres participants. Vous pourrez rendre les fichiers invisibles à certains étudiants manuellement.';
$string['warning_changetoobtainstudentapproval'] = 'Si vous effectuez cette modification, l’approbation des étudiants sera nécessaire pour tous les fichiers marqués comme visibles. Ces fichiers ne deviendront visibles qu’après l’approbation des étudiants.';
$string['warning_changetoobtainteacherapproval'] = 'Après désactivation de ce réglage, les fichiers déposés ne seront plus visibles par les autres participants automatiquement. Vous devrez déterminer quels fichiers doivent être visibles. Les fichiers déjà visibles ne le seront plus.';
$string['withselected'] = 'Avec la sélection :';
$string['zipusers'] = 'Télécharger les fichiers sélectionnés';
