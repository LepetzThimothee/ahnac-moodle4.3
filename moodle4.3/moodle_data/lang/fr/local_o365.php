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
 * Strings for component 'local_o365', language 'fr', version '4.3'.
 *
 * @package     local_o365
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acp_coursesynccustom'] = 'Personnalisation de la synchronisation des cours';
$string['acp_coursesynccustom_bulk'] = 'Opérations en masse';
$string['acp_coursesynccustom_bulk_disable'] = 'Désactiver la synchronisation des cours sur cette page';
$string['acp_coursesynccustom_bulk_enable'] = 'Activer la synchronisation des cours sur les cours de cette page';
$string['acp_coursesynccustom_confirm_all_action'] = 'Voulez-vous vraiment changer le statut de synchronisation de tous les cours ? L’action ne peut pas être annulée.';
$string['acp_coursesynccustom_controlled_per_course'] = 'Permettre de configurer la synchronisation des cours dans le cours';
$string['acp_coursesynccustom_controlled_per_course_desc'] = 'Si cette option est activée, les utilisateurs inscrits aux cours Moodle qui sont éligibles pour agir en tant que propriétaires d’équipe (ayant la capacité « Propriétaire d’équipe » [local/o365:teamowner]) pourront contrôler la synchronisation des cours à partir du bloc Microsoft dans le cours.';
$string['acp_coursesynccustom_disable_all'] = 'Désactiver la synchronisation des cours sur tous les cours';
$string['acp_coursesynccustom_enable_all'] = 'Activer la synchronisation des cours sur tous les cours';
$string['acp_coursesynccustom_enabled'] = 'Activé';
$string['acp_coursesynccustom_new_course'] = 'Activé par défaut pour les nouveaux cours';
$string['acp_coursesynccustom_new_course_desc'] = 'Si ce régalge est activé, la synchronisation sera activée par défaut pour tous les cours nouvellement créés.';
$string['acp_coursesynccustom_off'] = 'Désactivé<br />Désactiver la création d’équipes pour tous les cours.';
$string['acp_coursesynccustom_onall'] = 'Toutes les fonctionnalités activées<br />Permet la création d’équipes pour tous les cours.';
$string['acp_coursesynccustom_oncustom'] = 'Personnaliser<br />Permet aux utilisateurs autorisés de sélectionner les cours pour lesquels créer des équipes.<br> <span id="adminsetting_coursesync" style="font-weight: bold"><a href="{$a}">Personnaliser le cours synchroniser</a></span>';
$string['acp_coursesynccustom_savemessage'] = 'Vos modifications ont été enregistrées.';
$string['acp_coursesynccustom_sds_course'] = 'Verrouillé pour le cours SDS';
$string['acp_coursesynccustom_searchwarning'] = 'Remarque : les recherches perdront toute progression non sauvegardée. Appuyez sur « Enregistrer les modifications » pour vous assurer que vos modifications sont enregistrées.';
$string['acp_coursesynccustom_settings_header'] = 'Options de synchronisation';
$string['acp_healthcheck'] = 'Bilan de santé';
$string['acp_maintenance'] = 'Outils de maintenance';
$string['acp_maintenance_cleandeltatoken'] = 'Nettoyer les jetons delta de synchronisation utilisateur';
$string['acp_maintenance_cleandeltatoken_completed'] = 'Le jeton delta de synchronisation de l’utilisateur et le jeton delta de saut ont été nettoyés.';
$string['acp_maintenance_cleandeltatoken_desc'] = 'Si la synchronisation utilisateur ne fonctionne pas complètement après la mise à jour des paramètres de synchronisation utilisateur, cela peut être dû à un ancien jeton de synchronisation delta. Le nettoyage du jeton supprimera la force d’une resynchronisation complète la prochaine fois que la synchronisation utilisateur sera exécutée.';
$string['acp_maintenance_debugdata'] = 'Générer un package de données de débogage';
$string['acp_maintenance_debugdata_desc'] = 'Cela générera un package contenant diverses informations sur votre environnement Moodle et Office 365 pour aider les développeurs à résoudre les problèmes que vous pourriez rencontrer. Si demandé par un développeur, exécutez cet outil et envoyez le téléchargement du fichier résultant. Remarque : bien que ce package ne contienne pas de données de jetons sensibles, nous vous demandons de ne pas publier ce fichier publiquement ou de ne pas l’envoyer à une partie non approuvée.';
$string['acp_maintenance_desc'] = 'Ces outils peuvent vous aider à résoudre certains problèmes courants.';
$string['acp_maintenance_recreatedeletedgroups'] = 'Recréer les groupes Microsoft 365 supprimés';
$string['acp_maintenance_recreatedeletedgroups_all_groups_exist'] = 'Tous les groupes connectés au cours Moodle et les groupes de cours existent.';
$string['acp_maintenance_recreatedeletedgroups_course'] = 'Cours';
$string['acp_maintenance_recreatedeletedgroups_course_group'] = 'Groupe de cours';
$string['acp_maintenance_recreatedeletedgroups_desc'] = 'Cela vérifiera toutes les équipes Microsoft qui pourraient avoir été supprimées manuellement et les recréera.';
$string['acp_maintenance_recreatedeletedgroups_group_type'] = 'Type d’objet Moodle';
$string['acp_maintenance_recreatedeletedgroups_group_type_course'] = 'Cours';
$string['acp_maintenance_recreatedeletedgroups_group_type_course_group'] = 'Groupe de cours';
$string['acp_maintenance_recreatedeletedgroups_status'] = 'Statut';
$string['acp_maintenance_recreatedeletedgroups_status_created_fail'] = 'Échec de la recréation de groupe';
$string['acp_maintenance_recreatedeletedgroups_status_created_success'] = 'Le groupe a été recréé';
$string['acp_maintenance_recreatedeletedgroups_status_sync_disabled'] = 'La synchronisation des cours est désactivée';
$string['acp_maintenance_resyncgroupusers'] = 'Resynchronisation des utilisateurs dans les groupes Microsoft 365 pour les cours';
$string['acp_maintenance_resyncgroupusers_course_output'] = 'Sortie de resynchronisation';
$string['acp_maintenance_resyncgroupusers_desc'] = 'Cela resynchronisera l’adhésion des utilisateurs pour tous les groupes Microsoft 365 créés pour tous les cours Moodle. Cela garantira que tous les utilisateurs inscrits au cours Moodle, et uniquement ceux-ci, font partie du groupe Microsoft 365. <br /><b>Remarque : </b> Si vous avez ajouté des utilisateurs supplémentaires à un groupe Microsoft 365 qui ne sont pas inscrits au cours Moodle associé, ils seront supprimés.';
$string['acp_maintenance_resyncgroupusers_no_course'] = 'Aucun cours connecté à Microsoft 365';
$string['acp_maintenance_warning'] = 'Attention : ce sont des outils avancés. Veuillez les utiliser uniquement si vous comprenez ce que vous faites.';
$string['acp_parentsite_desc'] = 'Site pour les données de cours Moodle partagées.';
$string['acp_parentsite_name'] = 'Moodle';
$string['acp_teamconnection'] = 'Gérer la connexion de l’équipe';
$string['acp_teamconnections'] = 'Connexions à une équipe';
$string['acp_teamconnections_actions'] = 'Actions';
$string['acp_teamconnections_cache_last_updated'] = 'Le cache Teams a été mis à jour pour la dernière fois à {$a->lastupdated}. Cliquez <a href="{$a->updateurl}">ici</a> pour mettre à jour le cache.';
$string['acp_teamconnections_cache_never_updated'] = 'Le cache Teams n’a jamais été mis à jour. Cliquez <a href="{$a->updateurl}">ici</a> pour mettre à jour.';
$string['acp_teamconnections_connected_team'] = 'Équipe connectée';
$string['acp_teamconnections_connection_completed'] = 'Le cours a été connecté avec succès à l’équipe';
$string['acp_teamconnections_course_connected'] = 'Le cours a été connecté avec succès à l’équipe.';
$string['acp_teamconnections_current_connection'] = 'Connexion courante';
$string['acp_teamconnections_exception_course_not_exist'] = 'Le cours à connecter n’existe pas.';
$string['acp_teamconnections_exception_invalid_team_id'] = 'ID de l’équipe invalide';
$string['acp_teamconnections_exception_no_unified_token'] = 'Échec de l’obtention du jeton unifié pour effectuer des appels d’API.';
$string['acp_teamconnections_exception_not_configured'] = 'Microsoft 365 n’est pas entièrement configuré.';
$string['acp_teamconnections_exception_team_already_connected'] = 'L’équipe est déjà connectée à un autre cours';
$string['acp_teamconnections_exception_team_creation'] = 'Une erreur s’est produite lors de la tentative de création d’une équipe. Détails : {$a}';
$string['acp_teamconnections_exception_team_no_owner'] = 'Impossible de trouver le propriétaire de l’équipe approprié.';
$string['acp_teamconnections_form_connect_course'] = 'Gérer la connexion de l’équipe pour le cours {$a}';
$string['acp_teamconnections_form_sds_warning'] = 'REMARQUE : connecter manuellement un cours Moodle à une équipe créée par Student Data Sync (SDS) peut entraîner un comportement inattendu à la fois dans la synchronisation des cours Moodle et dans la synchronisation SDS, il devrait donc être interdit.';
$string['acp_teamconnections_form_team'] = 'Choisissez une équipe';
$string['acp_teamconnections_group_only'] = '(Groupe uniquement)';
$string['acp_teamconnections_invalid_connection'] = 'Connexion invalide';
$string['acp_teamconnections_no_owner'] = 'Ajouter un propriétaire pour se connecter à Teams.';
$string['acp_teamconnections_not_connected'] = 'Non connecté';
$string['acp_teamconnections_sync_disabled'] = 'La synchronisation des cours doit être activée avant de gérer les connexions Teams.';
$string['acp_teamconnections_table_cannot_create_team_from_group'] = 'Impossible de créer une équipe à partir du groupe - pas de propriétaire';
$string['acp_teamconnections_table_connect'] = 'Connecter';
$string['acp_teamconnections_table_connect_to_different_team'] = 'Connectez-vous à une autre équipe';
$string['acp_teamconnections_table_missing_team'] = 'Le cours est relié à une équipe inexistante. Essayez de mettre à jour le cache Teams.';
$string['acp_teamconnections_table_update'] = 'Mise à jour';
$string['acp_teamconnections_team_already_connected'] = 'Le cours est déjà connecté à une équipe.';
$string['acp_teamconnections_team_created'] = 'L’équipe a été créée avec succès pour le cours.';
$string['acp_teamconnections_team_exists_but_not_connected'] = 'Le cours est configuré pour être connecté à un groupe uniquement, cependant une équipe connectée au groupe existe.';
$string['acp_teamconnections_team_missing'] = '(équipe manquante)';
$string['acp_teamconnections_teams_cache_updated'] = 'Le cache des équipes a été mis à jour avec succès.';
$string['acp_tenants_actions'] = 'Actions';
$string['acp_tenants_add'] = 'Ajouter un nouvel utilisateur';
$string['acp_tenants_additional_tenants'] = 'Locataires supplémentaires';
$string['acp_tenants_delete'] = 'Supprimer';
$string['acp_tenants_errornotsetup'] = 'Veuillez terminer le processus de configuration du plugin avant d’ajouter des utilisateurs supplémentaires.';
$string['acp_tenants_hosttenant'] = 'Utilisateur hôte : {$a}';
$string['acp_tenants_intro'] = '<b> Fonctionnement de l’architecture mutualisée : </b> <br /> La mutualisation permet à plusieurs utilisateurs Office 365 d’accéder à votre site Moodle. <br /> <br />
    Voici comment l’installer :
    <ol>
        <li> Connectez-vous à Moodle en tant qu’utilisateur administrateur qui n’utilise pas le plug-in d’authentification OpenID Connect. </li>
        <li> Désactivez le plug-in d’authentification OpenID Connect dans Moodle. (Utilisez <a href="{$a}/admin/settings.php?section=manageauths"> la page d’administration des plugins d’authentification </a>.) </li>
        <li> Accédez à Azure AD et recherchez l’application que vous avez configurée pour Moodle. </li>
        <li> Activez la mutualisation dans l’application Azure AD et enregistrez les modifications. </li>
        <li> Pour chaque utilisateur que vous souhaitez activer, cliquez sur « Ajouter un nouvel utilisateur » et connectez-vous avec un compte administrateur de l’utilisateur que vous souhaitez activer. </li>
        <li> Une fois que vous avez ajouté tous les utilisateurs souhaités, réactivez le plug-in d’authentification OpenID Connect dans Moodle. </li>
        <li> Vous avez terminé ! Pour ajouter des utilisateurs supplémentaires à l’avenir, cliquez simplement sur le bouton « Ajouter un nouvel utilisateur » et connectez-vous avec un compte administrateur de cet utilisateur. </li>
    </ol>
    <b> Remarque importante : </b> La mutualisation Azure AD permet à tous les utilisateurs Office 365 d’accéder à votre application lorsqu’elle est activée. L’ajout des utilisateurs ici nous permet de restreindre l’accès à Moodle aux utilisateurs que vous configurez. <b> Si vous supprimez tous les utilisateurs de cette liste avant de désactiver la multi-location dans Azure AD, ou si vous activez l’authentification OpenID Connect dans Moodle avec une liste vide, votre site Moodle sera ouvert à tous les utilisateurs Office 365. </b>';
$string['acp_tenants_legacy_tenants'] = 'Locataires hérités (action requise)';
$string['acp_tenants_legacy_tenants_help'] = 'Les locataires supplémentaires ci-dessous ajoutés précédemment peuvent ne pas fonctionner dans le flux de travail multilocataire mis à jour et doivent être corrigés.<br/> Veuillez utiliser le bouton « Ajouter un nouveau locataire » ci-dessus pour ajouter à nouveau.';
$string['acp_tenants_none'] = 'Vous n’avez configuré aucun utilisateur. Si vous avez activé la mutualisation dans Azure AD, votre site Moodle peut être ouvert à tous les utilisateurs d’Office 365.';
$string['acp_tenants_revokeaccess'] = 'Accès supprimé';
$string['acp_tenants_tenant'] = 'Utilisateur';
$string['acp_tenants_title'] = 'Utilisateurs multiples';
$string['acp_tenants_title_desc'] = 'Cette page vous aide à configurer l’accès mutualisé à Moodle à partir d’Office 365.';
$string['acp_tenantsadd_desc'] = 'Pour accorder l’accès à un client supplémentaire, cliquez sur le bouton ci-dessous et connectez-vous à Office 365 à l’aide d’un compte d’administrateur du nouveau client. Vous serez redirigé vers la liste des utilisateurs supplémentaires où le nouvel utilisateur sera répertorié. Vous pourrez alors utiliser Moodle avec le nouvel utilisateur.';
$string['acp_tenantsadd_linktext'] = 'Accéder à la page de connexion Office 365';
$string['acp_userconnections'] = 'Connexions utilisateur';
$string['acp_userconnections_column_actions'] = 'Actions';
$string['acp_userconnections_column_muser'] = 'Utilisateur Moodle';
$string['acp_userconnections_column_o365user'] = 'Utilisateur Office 365';
$string['acp_userconnections_column_status'] = 'Statut de connexion';
$string['acp_userconnections_column_usinglogin'] = 'Utiliser le login';
$string['acp_userconnections_filtering_muserfullname'] = 'Nom complet de l’utilisateur Moodle';
$string['acp_userconnections_filtering_musername'] = 'Nom d’utilisateur Moodle';
$string['acp_userconnections_filtering_o365username'] = 'Nom d’utilisateur Office 365';
$string['acp_userconnections_manualmatch_details'] = 'Cette page vous permet de faire correspondre un utilisateur Moodle unique avec un utilisateur Office 365 unique.';
$string['acp_userconnections_manualmatch_error_muserconnected'] = 'L’utilisateur Moodle est déjà connecté à un utilisateur Office 365';
$string['acp_userconnections_manualmatch_error_muserconnected2'] = 'L’utilisateur Moodle est déjà connecté à un utilisateur Office 365 (2)';
$string['acp_userconnections_manualmatch_error_musermatched'] = 'L’utilisateur Moodle est déjà associé à un utilisateur Office 365';
$string['acp_userconnections_manualmatch_error_o365userconnected'] = 'L’utilisateur Office 365 est déjà connecté à un autre utilisateur Moodle';
$string['acp_userconnections_manualmatch_error_o365usermatched'] = 'L’utilisateur Office 365 est déjà associé à un autre utilisateur Moodle';
$string['acp_userconnections_manualmatch_musername'] = 'Utilisateur Moodle';
$string['acp_userconnections_manualmatch_o365username'] = 'Nom d’utilisateur Office 365';
$string['acp_userconnections_manualmatch_title'] = 'Correspondance utilisateur manuelle';
$string['acp_userconnections_manualmatch_uselogin'] = 'Connectez-vous avec Office 365';
$string['acp_userconnections_resync_nodata'] = 'Impossible de trouver les informations Office 365 stockées pour cet utilisateur.';
$string['acp_userconnections_resync_notconnected'] = 'Cet utilisateur n’est pas connecté à Office 365';
$string['acp_userconnections_table_connected'] = 'connecté';
$string['acp_userconnections_table_disconnect'] = 'Déconnecter';
$string['acp_userconnections_table_disconnect_confirmmsg'] = 'Cela déconnectera l’utilisateur Moodle « {$a} » d’Office 365. Cliquez sur le lien ci-dessous pour continuer.';
$string['acp_userconnections_table_match'] = 'Correspondance';
$string['acp_userconnections_table_matched'] = 'Correspond à l’utilisateur existant. <br /> En attente d’achèvement.';
$string['acp_userconnections_table_noconnection'] = 'Pas de connexion';
$string['acp_userconnections_table_resync'] = 'Resynchroniser';
$string['acp_userconnections_table_synced'] = 'Synchronisé depuis Azure AD. <br /> En attente de connexion initiale.';
$string['acp_userconnections_table_unmatch'] = 'Supprimer la correspondance';
$string['acp_userconnections_table_unmatch_confirmmsg'] = 'Cela supprimera la correspondance l’utilisateur Moodle « {$a} » d’Office 365. Cliquez sur le lien ci-dessous pour continuer.';
$string['acp_usermatch'] = 'Correspondance d’utilisateurs';
$string['acp_usermatch_desc'] = 'Cet outil vous permet de faire correspondre les utilisateurs Moodle aux utilisateurs d’Office 365. Vous téléchargerez un fichier contenant les utilisateurs Moodle et les utilisateurs Office 365 associés, et une tâche périodique vérifiera les données et configurera la correspondance.';
$string['acp_usermatch_matchqueue'] = 'Étape 2 : Liste de correspondance';
$string['acp_usermatch_matchqueue_clearall'] = 'Tout supprimer';
$string['acp_usermatch_matchqueue_clearerrors'] = 'Supprimer les erreurs';
$string['acp_usermatch_matchqueue_clearqueued'] = 'Supprimer la liste d’attente';
$string['acp_usermatch_matchqueue_clearsuccess'] = 'Supprimer les correspondances réussies';
$string['acp_usermatch_matchqueue_column_muser'] = 'Nom d’utilisateur Moodle';
$string['acp_usermatch_matchqueue_column_o365user'] = 'Nom d’utilisateur Office 365';
$string['acp_usermatch_matchqueue_column_openidconnect'] = 'OpenID Connect';
$string['acp_usermatch_matchqueue_column_status'] = 'Statut';
$string['acp_usermatch_matchqueue_desc'] = 'Ce tableau montre l’état actuel de l’opération de correspondance. Chaque fois que le travail cron correspondant s’exécute, un lot des utilisateurs suivants sera traité. <br /> <b> Remarque : </b> Cette page ne sera pas mise à jour dynamiquement, actualisez cette page pour afficher l’état actuel.';
$string['acp_usermatch_matchqueue_empty'] = 'La file d’attente des correspondances est actuellement vide. Téléchargez un fichier de données à l’aide du sélecteur de fichiers ci-dessus pour ajouter des utilisateurs à la file d’attente.';
$string['acp_usermatch_matchqueue_status_error'] = 'Erreur : {$a}';
$string['acp_usermatch_matchqueue_status_queued'] = 'En file d’attente';
$string['acp_usermatch_matchqueue_status_success'] = 'Réussi';
$string['acp_usermatch_upload'] = 'Étape 1 : télécharger de nouvelles correspondances';
$string['acp_usermatch_upload_desc'] = 'Téléchargez un fichier de données contenant les noms d’utilisateur Moodle et Office 365 pour faire correspondre les utilisateurs Moodle aux utilisateurs d’Office 365. <br /> <br /> Ce fichier doit être un simple fichier CSV en texte brut contenant trois éléments par ligne : le nom d’utilisateur Moodle, le nom d’utilisateur Office 365 et 1 ou 0 pour changer la méthode d’authentification des utilisateurs respectivement en OpenID Connect ou un compte lié. N’incluez aucun en-tête ni aucune donnée supplémentaire. <br /> Par exemple : <pre> moodleuser1, bob.smith@example.onmicrosoft.com, 1 <br /> moodleuser2, john.doe@example.onmicrosoft.com , 0 </pre>';
$string['acp_usermatch_upload_err_badmime'] = 'Le type {$a} n’est pas pris en charge. Veuillez télécharger un fichier CSV en texte brut.';
$string['acp_usermatch_upload_err_data'] = 'La ligne n°{$a} contenait des données non valides. Chaque ligne du fichier CSV doit contenir deux éléments : le nom d’utilisateur Moodle et le nom d’utilisateur Office 365.';
$string['acp_usermatch_upload_err_fileopen'] = 'Impossible d’ouvrir le fichier pour le traitement. Les autorisations sont-elles correctes dans votre répertoire Moodledata ?';
$string['acp_usermatch_upload_err_nofile'] = 'Aucun fichier n’a été reçu à ajouter à la file d’attente.';
$string['acp_usermatch_upload_submit'] = 'Ajouter un fichier de données à la file d’attente';
$string['cachedef_groups'] = 'Stocke les données de groupe Office 365.';
$string['calendar_event'] = 'Voir les détails';
$string['calendar_setting'] = 'Activer la synchronisation du calendrier Outlook';
$string['calendar_site'] = 'Calendrier à l’échelle du site';
$string['calendar_user'] = 'Calendrier personnel (utilisateur)';
$string['cohortsync_addmapping'] = 'Ajouter une connexion';
$string['cohortsync_connectionnotcohortsync'] = 'Demande invalide : type de connexion incompatible.';
$string['cohortsync_connectionnotfound'] = 'Demande invalide : connexion non trouvée.';
$string['cohortsync_deletemapping'] = 'Supprimer la connexion';
$string['cohortsync_desc'] = 'Cette page permet une synchronisation unidirectionnelle des groupes Microsoft vers les cohortes Moodle au niveau du système. L\'ajout d\'une nouvelle connexion lancera le processus de synchronisation - les utilisateurs du groupe Microsoft sélectionné qui sont connectés à Microsoft seront ajoutés à la cohorte Moodle sélectionnée.';
$string['cohortsync_emptycohorts'] = 'Aucune cohorte Moodle disponible';
$string['cohortsync_emptygroups'] = 'Aucun groupe Microsoft disponible';
$string['cohortsync_emptymatchings'] = 'Aucune connexion trouvée';
$string['cohortsync_mappingadded'] = 'Une nouvelle connexion a été ajoutée avec succès';
$string['cohortsync_mappingdeleted'] = 'Connexion supprimée avec succès';
$string['cohortsync_mappingfailed'] = 'Erreur lors de l\'ajout d\'une cohorte et d\'une connexion de groupe. Raisons possibles : le groupe ou la cohorte n\'existe pas, le groupe est déjà connecté à une autre cohorte, le groupe est déjà connecté à cette cohorte.';
$string['cohortsync_select_cohort'] = 'Cohorte Moodle';
$string['cohortsync_select_group'] = 'Groupe Microsoft';
$string['cohortsync_tabledesc'] = 'Connexions actuelles entre les groupes Microsoft et les cohortes Moodle';
$string['cohortsync_tablehead_actions'] = 'Actions';
$string['cohortsync_tablehead_cohort'] = 'Cohorte Moodle';
$string['cohortsync_tablehead_group'] = 'Groupe Microsoft';
$string['cohortsync_taskname'] = 'Synchronisation de cohorte';
$string['cohortsync_title'] = 'Synchronisation de cohorte';
$string['cohortsync_unifiedapierror'] = 'Erreur lors de l\'obtention de la liste des groupes de Microsoft.';
$string['course_selector_label'] = 'Sélectionnez un cours existant';
$string['courserequest_customrequestnote'] = '| Cette demande est effectuée à partir de la page de demande de cours Microsoft Teams et sera connectée à l\'équipe : "{$a->name}" avec l\'URL {$a->url} lors de l\'approbation.';
$string['courserequest_duplicate'] = 'Une demande de cours en attente ou approuvée de la même équipe existe déjà.';
$string['courserequest_emptyteams'] = 'Microsoft Teams n\'est pas disponible';
$string['courserequest_graphapi_disabled'] = 'La connexion Microsoft Teams n\'est pas disponible. Merci de contacter l\'administrateur de votre site.';
$string['courserequest_invalid_team'] = 'Équipe invalide utilisée dans la demande de cours.';
$string['courserequest_teams'] = 'Équipe Microsoft';
$string['courserequest_teams_help'] = 'Sélectionnez l\'équipe Microsoft qui sera connectée au cours. Les propriétaires et membres de l\'équipe existants seront inscrits au cours créé une fois la demande de cours approuvée.';
$string['courserequest_title'] = 'Demander un cours auprès des équipes';
$string['courserequest_updatecourserequeststatus_taskname'] = 'Mettre à jour le statut de la demande de cours';
$string['erroracpapcantgettenant'] = 'Impossible d’obtenir l’utilisateur Entra ID, veuillez le saisir manuellement.';
$string['erroracpauthoidcnotconfig'] = 'Veuillez d’abord définir les informations d’identification de l’application dans auth_oidc.';
$string['erroracpcantgettenant'] = 'Impossible d’obtenir l’URL OneDrive, veuillez la saisir manuellement.';
$string['erroracplocalo365notconfig'] = 'Veuillez d’abord configurer local_o365.';
$string['errorcannotgetapiclient'] = 'Impossible d\'obtenir le client API Graph.';
$string['errorcannotgettoken'] = 'Impossible d\'obtenir le jeton d\'application ou de système.';
$string['errorcouldnotgettoken'] = 'Impossible d\'obtenir le jeton utilisateur de l\'application ou de l\'API système. Si vous n\'avez pas encore fourni le consentement de l\'administrateur, veuillez d\'abord le faire.';
$string['errorcouldnotrefreshtoken'] = 'Impossible d’actualiser le jeton';
$string['errorgetapplicationtoken'] = 'Impossible d\'obtenir le jeton d\'application. Veuillez vérifier votre configuration d\'intégration.';
$string['errorhttpclientbadtempfileloc'] = 'Impossible d’ouvrir l’emplacement temporaire pour stocker le fichier.';
$string['errorhttpclientnofileinput'] = 'Aucun paramètre de fichier dans httpclient::put';
$string['errornoapifound'] = 'Aucune API avec l\'identifiant {$a} n\'a été trouvée.';
$string['errornodirectaccess'] = 'L’accès direct à la page est interdit';
$string['errornoresponsesavailable'] = 'Aucune réponse disponible';
$string['errornotoken'] = 'Aucun jeton disponible pour l\'utilisateur #{$a}';
$string['errornotokenforsysmemuser'] = 'Aucun jeton disponible pour l\'utilisateur du système. Veuillez exécuter le contrôle de santé local_o365.';
$string['errornotokenforusersync'] = 'Aucun jeton disponible pour usersync.';
$string['erroro365apibadcall'] = 'Erreur lors de l’appel d’API.';
$string['erroro365apibadcall_message'] = 'Erreur lors de l’appel d’API : {$a}';
$string['erroro365apibadpermission'] = 'Autorisation introuvable';
$string['erroro365apicouldnotcreatesite'] = 'Problème lors de la création du site.';
$string['erroro365apicoursenotfound'] = 'Cours non trouvé.';
$string['erroro365apiinvalidmethod'] = 'Méthode http non valide transmise à l’appel de l’API';
$string['erroro365apiinvalidtoken'] = 'Jeton non valide ou expiré.';
$string['erroro365apinoparentinfo'] = 'Impossible de trouver les informations sur le dossier parent';
$string['erroro365apinotimplemented'] = 'Cela devrait être annulé.';
$string['erroro365apinotoken'] = 'N’avait pas de jeton pour la ressource et l’utilisateur donnés, et n’a pas pu en obtenir un. Le jeton d’actualisation de l’utilisateur a-t-il expiré ?';
$string['erroro365apisiteexistsnolocal'] = 'Le site existe déjà, mais n’a pas pu trouver d’enregistrement local.';
$string['erroro365badphoto'] = 'Photo de profil non valide reçue de Microsoft 365.';
$string['erroro365nophoto'] = 'Cet utilisateur n’a pas de photo dans Microsoft 365.';
$string['errorprovisioningapp'] = 'Impossible de provisionner l’application Moodle dans l’équipe.';
$string['errortenantvaluenotstring'] = 'La valeur de l\'utilisateur doit être une chaîne';
$string['errorunabletofindgraphapi'] = 'Impossible de trouver l\'API graphique dans l\'application.';
$string['errorupnchangeisnotsupported'] = 'Le UPN de votre compte Microsoft a changé. Veuillez contacter votre administrateur pour mettre à jour votre compte Moodle.';
$string['errorusermatched'] = 'Le compte Microsoft 365 "{$a->entraidupn}" correspond déjà à l’utilisateur Moodle "{$a->username}". Pour terminer la connexion, veuillez d’abord vous connecter en tant qu’utilisateur Moodle et suivez les instructions du bloc Microsoft.';
$string['eventapifail'] = 'Échec de l’API';
$string['eventcalendarsubscribed'] = 'Utilisateur abonné à un calendrier';
$string['eventcalendarunsubscribed'] = 'Utilisateur désabonné à un calendrier';
$string['healthcheck_fixlink'] = 'Cliquez ici pour y remédier.';
$string['healthcheck_ratelimit_result_disabled'] = 'Les fonctionnalités de limitation de débit ont été désactivées.';
$string['healthcheck_ratelimit_result_notice'] = 'Une légère limitation a été activée pour gérer l’augmentation de la charge du site Moodle. <br /> <br /> Toutes les fonctionnalités d’Office 365 sont fonctionnelles, cela ne fait qu’espacer légèrement les demandes pour éviter l’interruption des services Office 365. Une fois l’activité de Moodle diminuée, tout reviendra à la normale. <br /> (Niveau {$a->level} / commencé {$a->timestart})';
$string['healthcheck_ratelimit_result_passed'] = 'Les appels d’API Office 365 s’exécutent à pleine vitesse.';
$string['healthcheck_ratelimit_result_warning'] = 'La limitation accrue a été activée pour gérer une charge importante du site Moodle. <br /> <br /> Toutes les fonctionnalités d’Office 365 sont toujours fonctionnelles, mais les demandes Office 365 peuvent prendre plus de temps. Une fois que l’activité du site Moodle aura diminué, tout redeviendra normal. <br /> (Niveau {$a->level} / commencé {$a->timestart})';
$string['healthcheck_ratelimit_title'] = 'Limitation des API';
$string['help_user_appassign'] = 'Attribuer des utilisateurs à l’aide de l’application';
$string['help_user_appassign_help'] = 'Cela entraînera l’attribution de tous les comptes Microsoft Entra ID avec des comptes Moodle correspondants à l’application Azure créée pour cette installation Moodle, si ce n’est déjà fait.';
$string['help_user_create'] = 'Aide sur la création de comptes';
$string['help_user_create_help'] = 'Cela créera des utilisateurs dans Moodle à partir de chaque utilisateur dans l\'ID Microsoft Entra lié. Seuls les utilisateurs qui n\'ont pas actuellement de compte Moodle auront un compte créé. Les nouveaux comptes seront configurés à l\'aide de la méthode d\'authentification OpenID Connect à l\'aide de leur profil Microsoft Entra ID et pourront utiliser toutes les fonctionnalités d\'intégration Microsoft 365/Moodle.';
$string['help_user_delete'] = 'Aide sur la suppression des comptes';
$string['help_user_delete_help'] = 'Cela supprimera les utilisateurs de Moodle s\'ils sont marqués comme supprimés dans Microsoft Entra ID. Cela ne fonctionnera que si l\'option de suspension de l\'utilisateur est activée. Le compte Moodle sera supprimé et toutes les informations utilisateur associées seront supprimées de Moodle. Faites attention !';
$string['help_user_disabledsync'] = 'Aide sur l’état de la synchronisation désactivée';
$string['help_user_disabledsync_help'] = 'Cela suspendra/relèvera la suspension des utilisateurs dans Moodle si leurs comptes connectés dans Microsoft Entra ID sont marqués comme interdits/autorisés à se connecter.';
$string['help_user_emailsync'] = 'Aide pour la synchronisation des noms d’utilisateur Microsoft Entra ID avec les courriels Moodle';
$string['help_user_emailsync_help'] = 'L’activation de cette option fera correspondre les noms d’utilisateur Microsoft Entra ID aux courriels Moodle, au lieu du comportement par défaut qui est les noms d’utilisateur azure aux noms d’utilisateur moodle.';
$string['help_user_guestsync'] = 'Aide sur la synchronisation des utilisateurs invités';
$string['help_user_guestsync_help'] = 'Si activé, les utilisateurs invités dans Microsoft Entra ID seront synchronisés avec Moodle dans la tâche de synchronisation des utilisateurs.';
$string['help_user_match'] = 'Aide sur la correspondance des comptes';
$string['help_user_match_help'] = 'Cela examinera la liaison de chaque utilisateur à Microsoft Entra ID et essaiera de les faire correspondre avec un utilisateur dans Moodle. Cette correspondance est basée sur les noms d’utilisateur dans Microsoft Entra ID et Moodle. Les correspondances ne respectent pas la casse et ignorent le client Microsoft Entra ID. Par exemple, "BoB.SmiTh" dans Moodle correspondrait à "bob.smith@example.onmicrosoft.com". Les utilisateurs qui sont jumelés verront leurs comptes Moodle et Microsoft Entra ID connectés et pourront utiliser toutes les fonctionnalités d’intégration Microsoft 365 / Moodle. La méthode d’authentification de l’utilisateur ne changera que si le paramètre ci-dessous est activé.';
$string['help_user_matchswitchauth'] = 'Aide sur le changement des comptes correspondants';
$string['help_user_matchswitchauth_help'] = 'Cela nécessite l’activation du paramètre « Faire correspondre les utilisateurs Moodle préexistants » ci-dessus. Lorsqu’un utilisateur est mis en correspondance, l’activation de ce paramètre fait basculer sa méthode d’authentification sur OpenID Connect. Ils pourront ensuite se connecter à Moodle avec leurs informations d’identification Office 365. Remarque : veuillez vous assurer que le plug-in d’authentification OpenID Connect est activé si vous souhaitez utiliser ce paramètre.';
$string['help_user_nodelta'] = 'Aide pour effectuer une synchronisation complète';
$string['help_user_nodelta_help'] = 'Par défaut, la synchronisation des utilisateurs synchronisera uniquement les modifications à partir d’e Microsoft Entra ID. Cocher cette option forcera une synchronisation complète de l’utilisateur à chaque fois.';
$string['help_user_photosync'] = 'Aide sur la synchronisation des photos de profil Microsoft 365 (Cron)';
$string['help_user_photosync_help'] = 'Cela entraînera la synchronisation des photos de profil Moodle de tous les utilisateurs avec leurs photos de profil Microsoft 365.';
$string['help_user_photosynconlogin'] = 'Aide sur la synchronisation des photos de profil Microsoft 365 (connexion)';
$string['help_user_photosynconlogin_help'] = 'Cela entraînera la synchronisation de la photo de profil Moodle d’un utilisateur avec sa photo de profil Office 365 lorsque cet utilisateur se connectera.';
$string['help_user_reenable'] = 'Réactiver l’aide des comptes';
$string['help_user_reenable_help'] = 'Cela réactivera les comptes Moodle suspendus s’ils sont renvoyés depuis Microsoft Entra ID.';
$string['help_user_suspend'] = 'Aide sur la suspension des comptes';
$string['help_user_suspend_help'] = 'Cela suspendra les utilisateurs de Moodle s’ils sont marqués comme supprimés dans Microsoft Entra ID.';
$string['help_user_tzsync'] = 'Aide sur la synchronisation du fuseau horaire Outlook (Cron)';
$string['help_user_tzsync_help'] = 'Cela entraînera la synchronisation du fuseau horaire Moodle de tous les utilisateurs avec leur préférence de fuseau horaire Outlook.';
$string['help_user_tzsynconlogin'] = 'Aide sur la synchronisation du fuseau horaire Outlook (Connexion)';
$string['help_user_tzsynconlogin_help'] = 'Cela entraînera la synchronisation du fuseau horaire Moodle d’un utilisateur avec sa préférence de fuseau horaire Outlook. Notez que cela nécessite que l’utilisateur visite une page contenant le bloc Microsoft dans Moodle.';
$string['help_user_update'] = 'Aide sur la mise à jour de tous les comptes';
$string['help_user_update_help'] = 'Cela mettra à jour tous les utilisateurs dans Moodle de chaque utilisateur dans la liaison avec Microsoft Entra ID.';
$string['multi_tenants_settings_needs_update'] = 'Les paramètres multilocataires doivent être mis à jour. Veuillez accéder à la <a href="{$a}">page de configuration multilocataires</a>.';
$string['notification_content_invalid_secret'] = 'Cher administrateur du site,

Le secret de l’application Azure utilisé dans votre intégration Moodle et Microsoft 365 semble invalide. Cela peut être dû soit à l’expiration du secret, soit à sa suppression.
Veuillez vérifier le secret pour vous assurer que l’intégration fonctionne comme prévu.';
$string['notification_content_secret_almost_expired'] = 'Cher administrateur du site,

Le secret de l’application Azure utilisé dans votre intégration Moodle et Microsoft 365 expirera dans {$a}.
Veuillez créer un nouveau secret dans le portail Azure et le mettre à jour dans la configuration d’intégration afin d’éviter toute interruption de l’intégration.';
$string['notification_content_secret_expired'] = 'Cher administrateur du site,

Le secret de l’application Azure utilisé dans votre intégration Moodle et Microsoft 365 a expiré.
Veuillez créer un nouveau secret dans le portail Azure et le mettre à jour dans la configuration d’intégration afin de restaurer l’intégration.';
$string['notification_days_days'] = '{$a} jours';
$string['notification_days_less_than_one_day'] = 'moins d’un jour';
$string['notification_days_one_day'] = '1 jour';
$string['notification_subject_invalid_secret'] = 'Action requise : secret d’application Azure non valide trouvé';
$string['notification_subject_secret_almost_expired'] = 'Action requise : le secret de l’application Azure expire bientôt';
$string['notification_subject_secret_expired'] = 'Action requise : le secret de l’application Azure a expiré';
$string['o365:manageconnectionlink'] = 'Gérer le lien de connexion';
$string['o365:manageconnectionunlink'] = 'Gérer la dissociation de la connexion';
$string['o365:managegroups'] = 'Afficher les liens vers les services Microsoft 365 et les options de gestion dans le bloc Microsoft dans les cours avec la synchronisation activée';
$string['o365:teammember'] = 'Membre de l’équipe';
$string['o365:teamowner'] = 'Propriétaire de l’équipe';
$string['o365:viewgroups'] = 'Afficher les liens vers les services Microsoft 365 dans le bloc Microsoft dans les cours avec la synchronisation activée';
$string['other_login'] = 'Connexion manuelle';
$string['personal_calendar'] = 'Personnel';
$string['pluginname'] = 'Intégration Microsoft 365';
$string['privacy:metadata:local_o365'] = 'Plugin local Microsoft 365';
$string['privacy:metadata:local_o365_appassign'] = 'Informations sur les attributions de rôle de l’application Office 365';
$string['privacy:metadata:local_o365_appassign:assigned'] = 'Si l’utilisateur a été affecté à l’application';
$string['privacy:metadata:local_o365_appassign:muserid'] = 'L’ID de l’utilisateur Moodle';
$string['privacy:metadata:local_o365_appassign:photoid'] = 'L’ID de la photo de l’utilisateur dans Office 365';
$string['privacy:metadata:local_o365_appassign:photoupdated'] = 'Date de la dernière mise à jour de la photo de l’utilisateur à partir d’Office 365';
$string['privacy:metadata:local_o365_calidmap'] = 'Informations sur les liens entre les événements de calendrier Microsoft 365 et les événements de calendrier Moodle';
$string['privacy:metadata:local_o365_calidmap:eventid'] = 'L’ID de l’événement dans Moodle.';
$string['privacy:metadata:local_o365_calidmap:origin'] = 'L’origine de l’événement. Soit Moodle, soit Office 365.';
$string['privacy:metadata:local_o365_calidmap:outlookeventid'] = 'L’ID de l’événement dans Outlook.';
$string['privacy:metadata:local_o365_calidmap:userid'] = 'L’ID de l’utilisateur à l’origine de l’événement.';
$string['privacy:metadata:local_o365_calsettings'] = 'Informations sur les paramètres de synchronisation du calendrier';
$string['privacy:metadata:local_o365_calsettings:o365calid'] = 'L’ID du calendrier dans Office 365';
$string['privacy:metadata:local_o365_calsettings:timecreated'] = 'L’heure à laquelle l’enregistrement a été créé.';
$string['privacy:metadata:local_o365_calsettings:user_id'] = 'L’ID de l’utilisateur Moodle';
$string['privacy:metadata:local_o365_calsub'] = 'Informations sur la synchronisation des abonnements entre les calendriers Moodle et Outlook';
$string['privacy:metadata:local_o365_calsub:caltype'] = 'Le type de calendrier Moodle (site, cours, utilisateur)';
$string['privacy:metadata:local_o365_calsub:caltypeid'] = 'L’ID associé du calendrier Moodle';
$string['privacy:metadata:local_o365_calsub:isprimary'] = 'S’il s’agit du calendrier principal';
$string['privacy:metadata:local_o365_calsub:o365calid'] = 'L’ID du calendrier Office 365';
$string['privacy:metadata:local_o365_calsub:syncbehav'] = 'Le mode de synchronisation (c’est-à-dire Moodle vers Outlook ou Outlook vers Moodle)';
$string['privacy:metadata:local_o365_calsub:timecreated'] = 'L’heure de création de l’abonnement.';
$string['privacy:metadata:local_o365_calsub:user_id'] = 'L’ID de l’utilisateur Moodle auquel l’abonnement est destiné';
$string['privacy:metadata:local_o365_connections'] = 'Informations sur les connexions entre les utilisateurs de Moodle et Office 365 qui n’ont pas encore été confirmées';
$string['privacy:metadata:local_o365_connections:entraidupn'] = 'UPN de l’utilisateur Microsoft Entra ID.';
$string['privacy:metadata:local_o365_connections:muserid'] = 'L’ID de l’utilisateur Moodle';
$string['privacy:metadata:local_o365_connections:uselogin'] = 'S’il faut changer la méthode d’authentification de l’utilisateur une fois terminé.';
$string['privacy:metadata:local_o365_matchqueue'] = 'Correspondance entre les utilisateurs Moodle et les utilisateurs Microsoft 365';
$string['privacy:metadata:local_o365_matchqueue:completed'] = 'Si l’enregistrement a été traité';
$string['privacy:metadata:local_o365_matchqueue:errormessage'] = 'Le message d’erreur (le cas échéant)';
$string['privacy:metadata:local_o365_matchqueue:musername'] = 'Le nom d’utilisateur de l’utilisateur Moodle.';
$string['privacy:metadata:local_o365_matchqueue:o365username'] = 'Le nom d’utilisateur de l’utilisateur Office 365.';
$string['privacy:metadata:local_o365_matchqueue:openidconnect'] = 'Indique si l’utilisateur doit passer à l’authentification OpenID Connect lorsque la correspondance est établie';
$string['privacy:metadata:local_o365_objects'] = 'Informations sur la relation entre les objets Moodle et Microsoft 365';
$string['privacy:metadata:local_o365_objects:metadata'] = 'Toutes les métadonnées associées';
$string['privacy:metadata:local_o365_objects:moodleid'] = 'L’ID de l’objet dans Moodle';
$string['privacy:metadata:local_o365_objects:o365name'] = 'Le nom lisible par l’homme de l’objet dans Office 365';
$string['privacy:metadata:local_o365_objects:objectid'] = 'L’ID d’objet Office 365';
$string['privacy:metadata:local_o365_objects:subtype'] = 'Le sous-type d’objet.';
$string['privacy:metadata:local_o365_objects:tenant'] = 'L’utilisateur auquel appartient l’objet (dans les environnements mutualisés)';
$string['privacy:metadata:local_o365_objects:timecreated'] = 'L’heure à laquelle l’enregistrement a été créé.';
$string['privacy:metadata:local_o365_objects:timemodified'] = 'L’heure à laquelle l’enregistrement a été modifié.';
$string['privacy:metadata:local_o365_objects:type'] = 'Le type d’objet (groupe, utilisateur, cours, etc.)';
$string['privacy:metadata:local_o365_token'] = 'Informations sur les jetons d’API Office 365 pour les utilisateurs';
$string['privacy:metadata:local_o365_token:expiry'] = 'L’heure d’expiration du jeton.';
$string['privacy:metadata:local_o365_token:refreshtoken'] = 'Le jeton d’actualisation.';
$string['privacy:metadata:local_o365_token:scope'] = 'La portée du jeton.';
$string['privacy:metadata:local_o365_token:token'] = 'Le jeton.';
$string['privacy:metadata:local_o365_token:tokenresource'] = 'La ressource de jeton.';
$string['privacy:metadata:local_o365_token:user_id'] = 'L’ID de l’utilisateur Moodle';
$string['settings_addsync_tzsync'] = 'Synchroniser le fuseau horaire Outlook avec Moodle dans la tâche programmée';
$string['settings_addsync_tzsynconlogin'] = 'Synchroniser le fuseau horaire Outlook avec Moodle lors de la connexion';
$string['settings_adminconsent'] = 'Consentement de l’administrateur';
$string['settings_adminconsent_btn'] = 'Fournir le consentement de l’administrateur';
$string['settings_adminconsent_details'] = 'Pour autoriser l’accès à certaines des autorisations nécessaires, un administrateur devra fournir le consentement de l’administrateur. Cliquez sur ce bouton, puis connectez-vous avec un compte administrateur Azure pour donner votre consentement. Cette opération doit être effectuée chaque fois que vous modifiez les autorisations « Admin » dans Azure.';
$string['settings_check_moodle_settings'] = 'Vérifier les paramètres de Moodle';
$string['settings_cohortsync'] = 'Synchronisation des cohortes';
$string['settings_cohortsync_details'] = 'Examinez et gérez la synchronisation entre les cohortes Moodle et les groupes Microsoft.';
$string['settings_cohortsync_linktext'] = 'Gérer la synchronisation des cohortes';
$string['settings_cohortsync_title'] = 'Synchronisation des cohortes';
$string['settings_course_request_enrolment_member_role'] = 'Rôle du membre de l\'équipe';
$string['settings_course_request_enrolment_member_role_desc'] = 'Le rôle qui sera attribué aux membres de l\'équipe lorsque la demande de cours sera approuvée.';
$string['settings_course_request_enrolment_owner_role'] = 'Rôle du propriétaire d\'équipe';
$string['settings_course_request_enrolment_owner_role_desc'] = 'Rôle qui sera attribué au propriétaire de l\'équipe lorsque la demande de cours sera approuvée.';
$string['settings_course_reset_teams'] = 'Réinitialisation du cours Actions d’équipe/de groupe';
$string['settings_course_reset_teams_details'] = 'Actions à effectuer sur une équipe ou un groupe connecté à un parcours lorsque le parcours est réinitialisé.';
$string['settings_course_reset_teams_option_archive_only'] = 'Déconnecter le cours avec l’équipe ou le groupe uniquement<br />L’équipe ou le groupe existant connecté au cours sera renommé tel que configuré. Si une équipe est connectée, elle sera archivée. Aucune nouvelle équipe ou groupe ne sera créé.';
$string['settings_course_reset_teams_option_do_nothing'] = 'Ne rien faire<br/>L’équipe ou le groupe est toujours connecté au cours. Les désinscriptions des utilisateurs entraîneront la suppression de l’adhésion à l’équipe ou au groupe de l’utilisateur.';
$string['settings_course_reset_teams_option_force_archive'] = 'Déconnectez le cours avec l’équipe ou le groupe et créez-en un nouveau<br/>L’équipe ou le groupe existant connecté au cours sera renommé tel que configuré. Si une équipe est connectée, elle sera archivée. Une nouvelle équipe ou un nouveau groupe sera créé et connecté au cours.';
$string['settings_course_reset_teams_option_per_course'] = 'Autoriser les paramètres par cours<br/>Cela nécessite que le bloc Microsoft soit ajouté au cours. Les utilisateurs ayant la capacité de réinitialiser le parcours peuvent choisir quoi faire pendant la réinitialisation du parcours dans le bloc.';
$string['settings_coursesync'] = 'Synchronisation des cours';
$string['settings_coursesync_courses_per_task'] = 'Cours à synchroniser par exécution de tâche';
$string['settings_coursesync_courses_per_task_details'] = 'Le nombre de cours dont le statut de synchronisation d’équipe/de groupe doit être traité à chaque exécution de tâche.';
$string['settings_coursesync_delete_group_on_course_deletion'] = 'Supprimer les groupes Microsoft 365 lorsque le cours Moodle connecté est supprimé';
$string['settings_coursesync_delete_group_on_course_deletion_details'] = 'Si activé, Moodle essaiera de supprimer le groupe Microsoft 365 (et l’équipe associée) lorsque le cours connecté sera supprimé de Moodle. Notez que cela ne s’applique pas aux cours créés à partir de la synchronisation SDS.';
$string['settings_coursesync_delete_group_on_course_sync_disabled'] = 'Supprimer les groupes Microsoft 365 lorsque la synchronisation des cours est désactivée';
$string['settings_coursesync_delete_group_on_course_sync_disabled_details'] = 'Si activé, Moodle essaiera de supprimer le groupe Microsoft 365 connecté (et l’équipe associée) lorsque la synchronisation des cours est désactivée pour un cours Moodle.';
$string['settings_coursesync_details'] = 'Si activé, cela crée et maintient des équipes pour les cours sur le site Moodle (par défaut : désactivé). Cela créera toutes les équipes nécessaires à chaque exécution cron et ajoutera tous les utilisateurs actuellement inscrits en tant que propriétaires ou membres de l’équipe, en fonction de la vérification des capacités. Après cela, l’adhésion à l’équipe sera maintenue au fur et à mesure que les utilisateurs seront inscrits ou désinscrits des cours Moodle.';
$string['settings_coursesync_enrolment_member_role'] = 'Rôle du membre de l\'équipe';
$string['settings_coursesync_enrolment_member_role_desc'] = 'Rôle qui sera attribué aux membres de l\'équipe lors de la synchronisation.';
$string['settings_coursesync_enrolment_owner_role'] = 'Rôle du propriétaire d\'équipe';
$string['settings_coursesync_enrolment_owner_role_desc'] = 'Rôle qui sera attribué au propriétaire de l\'équipe lors de la synchronisation.';
$string['settings_coursesync_sync_both'] = 'Mettre à jour Teams et Moodle';
$string['settings_coursesync_sync_direction'] = 'Comportement de synchronisation des utilisateurs du cours';
$string['settings_coursesync_sync_direction_details'] = 'Sélectionnez le sens vers lequel les utilisateurs doivent être synchronisés entre Moodle et Microsoft Teams.';
$string['settings_coursesync_sync_moodle_to_teams'] = 'De Moodle vers Teams';
$string['settings_coursesync_sync_teams_to_moodle'] = 'De Teams vers Moodle';
$string['settings_customtheme'] = 'Thème personnalisé (Avancé)';
$string['settings_customtheme_desc'] = 'Le thème recommandé est « boost_o365teams ». Cependant, vous pouvez sélectionner un thème différent si vous avez un thème personnalisé qui est adapté pour être utilisé dans l’onglet Équipes.<br/>
Veuillez noter qu’un thème personnalisé défini au niveau du cours ou de la catégorie aurait priorité sur les paramètres indiqués ici, c’est-à-dire qu’un cours utiliserait le thème du cours ou de la catégorie dans l’application Moodle dans Teams par défaut. Cela peut être corrigé en mettant à jour $CFG->themeorder dans config.php pour qu’il soit "array(\'session\', \'cours\', \'categorie\', \'utilisateur\', \'cohorte\', \'site\');".';
$string['settings_debugmode'] = 'Enregistrer les messages de débogage';
$string['settings_debugmode_details'] = 'Si cette option est activée, les informations seront enregistrées dans le journal Moodle qui peut aider à identifier les problèmes. <a href="{$a}"> Afficher les messages de journal enregistrés. </a>';
$string['settings_detectoidc'] = 'Informations d’identification de l’application';
$string['settings_detectoidc_credsinvalid'] = 'Les informations d’identification n’ont pas été définies ou sont incomplètes.';
$string['settings_detectoidc_credsinvalid_link'] = 'Définir les informations d’identification';
$string['settings_detectoidc_credsvalid'] = 'Les informations d’identification ont été définies.';
$string['settings_detectoidc_credsvalid_link'] = 'Modification';
$string['settings_detectoidc_details'] = 'Pour communiquer avec Office 365, Moodle a besoin d’informations d’identification pour s’identifier. Ceux-ci sont définis dans le plugin d’authentification « OpenID Connect ».';
$string['settings_detectperms'] = 'Permissions de l’application';
$string['settings_detectperms_details'] = 'Pour utiliser les fonctionnalités du plug-in, des autorisations correctes doivent être configurées pour l’application dans Azure AD.';
$string['settings_detectperms_errorfix'] = 'Une erreur s’est produite lors de la tentative de correction des autorisations. Veuillez la définir manuellement dans Azure AD.';
$string['settings_detectperms_fixperms'] = 'Autorisations de correctifs';
$string['settings_detectperms_invalid'] = 'Vérifiez les autorisations dans Azure AD';
$string['settings_detectperms_missing'] = 'Manquant :';
$string['settings_detectperms_nocreds'] = 'Les informations d’identification de l’application doivent d’abord être définies. Voir le réglage ci-dessus.';
$string['settings_detectperms_nounified'] = 'L’API Microsoft Graph n’est pas présente, certaines nouvelles fonctionnalités peuvent ne pas fonctionner.';
$string['settings_detectperms_unifiednomissing'] = 'Toutes les autorisations unifiées sont présentes.';
$string['settings_detectperms_update'] = 'Mettre à jour';
$string['settings_detectperms_valid'] = 'Les autorisations ont été définies.';
$string['settings_download_teams_tab_app_manifest'] = 'Télécharger le fichier manifeste';
$string['settings_download_teams_tab_app_manifest_reminder'] = 'Veuillez enregistrer toutes vos modifications avant de télécharger le manifeste.';
$string['settings_entratenant'] = 'Utilisateur Microsoft Entra';
$string['settings_entratenant_details'] = 'Utilisé pour identifier votre organisation au sein de Microsoft. Par exemple : « contoso.onmicrosoft.com ».';
$string['settings_fieldmap'] = 'Mappage des champs utilisateur';
$string['settings_fieldmap_details'] = 'Disponible dans le <a href="{$a}">plugin d’authentification Open ID Connect</a>.';
$string['settings_group_mail_alias_course'] = 'Cours faisant partie de l’alias de messagerie du groupe';
$string['settings_group_mail_alias_course_desc'] = '';
$string['settings_group_mail_alias_prefix'] = 'Préfixe d’alias de messagerie de groupe';
$string['settings_group_mail_alias_suffix'] = 'Suffixe d’alias de messagerie de groupe';
$string['settings_header_advanced'] = 'Avancé';
$string['settings_header_moodle_app'] = 'Application Teams Moodle';
$string['settings_header_sds'] = 'Synchronisation des données scolaires (prévisualisation)';
$string['settings_header_setup'] = 'Installation';
$string['settings_header_syncsettings'] = 'Paramètres de synchronisation';
$string['settings_header_teams'] = 'Paramètres Teams';
$string['settings_header_tools'] = 'Outils';
$string['settings_healthcheck'] = 'Vérifier l’état';
$string['settings_healthcheck_details'] = 'Si quelque chose ne fonctionne pas correctement, effectuer une vérification de l’état peut généralement identifier le problème et proposer des solutions';
$string['settings_healthcheck_linktext'] = 'Effectuer un contrôle de l’état';
$string['settings_main_name_option_full_name'] = 'Nom complet';
$string['settings_main_name_option_id'] = 'Identifiant créé par Moodle';
$string['settings_main_name_option_id_number'] = 'numéro d’identification';
$string['settings_main_name_option_short_name'] = 'Nom court';
$string['settings_maintenance'] = 'Maintenance';
$string['settings_maintenance_details'] = 'Diverses tâches de maintenance sont disponibles pour résoudre certains problèmes courants.';
$string['settings_maintenance_linktext'] = 'Voir les outils de maintenance';
$string['settings_moodle_app_id'] = 'ID de l’application Moodle';
$string['settings_moodle_app_id_desc'] = 'ID de l’application Moodle téléchargée dans les catalogues d’applications Teams.<br/>
S’il est configuré, Moodle essaiera de créer un onglet Moodle reliant au cours Moodle dans le canal « Général » de l’équipe créée/connectée.';
$string['settings_moodle_app_id_desc_auto_id'] = '<br/>
La valeur détectée automatiquement est "<span class="local_o365_settings_moodle_app_id">{$a}</span>".';
$string['settings_moodlesettingssetup'] = 'Configurer Moodle';
$string['settings_moodlesettingssetup_details'] = 'Cela garantira que :
<ul class="local_o365_settings_teams_horizontal_spacer">
<li>Open ID est activé.</li>
<li>L’intégration de cadre est activée.</li>
<li>Les services Web sont activés.</li>
<li>Le protocole de repos est activé.</li>
<li>Les services Web Microsoft 365 sont activés.</li>
<li>L’utilisateur authentifié est autorisé à créer un jeton de service Web.</li>
<li>L’utilisateur authentifié est autorisé à utiliser le protocole Rest.</li>
</ul>';
$string['settings_moodlesetup_checking'] = 'Vérification...';
$string['settings_notice_createtokenallowed'] = 'Autorisation de créer un jeton de service Web accordée';
$string['settings_notice_createtokenalreadyallowed'] = 'L’autorisation de créer un jeton de service Web a déjà été accordée';
$string['settings_notice_createtokennotallowed'] = 'Un problème est survenu lors de l’autorisation de créer un jeton de service Web';
$string['settings_notice_o365servicealreadyenabled'] = 'Les Webservices O365 étaient déjà activés';
$string['settings_notice_o365serviceenabled'] = 'Webservices O365 activés avec succès';
$string['settings_notice_oidcalreadyenabled'] = 'Open ID Connect était déjà activé';
$string['settings_notice_oidcenabled'] = 'Open ID Connect activé avec succès';
$string['settings_notice_oidcnotenabled'] = 'Open ID Connect n’a pas pu être activé';
$string['settings_notice_restalreadyenabled'] = 'Le protocole REST était déjà activé';
$string['settings_notice_restenabled'] = 'Le protocole REST activé avec succès';
$string['settings_notice_restnotenabled'] = 'Le protocole REST n’a pas pu être activé';
$string['settings_notice_restusageallowed'] = 'Autorisation d’utiliser le protocole REST accordée';
$string['settings_notice_restusagealreadyallowed'] = 'L’autorisation d’utiliser le protocole REST a déjà été accordée';
$string['settings_notice_restusagenotallowed'] = 'Un problème est survenu lors de l’autorisation d’utiliser le protocole REST';
$string['settings_notice_webservicesframealreadyenabled'] = 'Les services Web étaient déjà activés et l’intégration de cadres est également autorisée';
$string['settings_notice_webservicesframeenabled'] = 'Les services Web ont été activés avec succès et l’intégration de cadres est également autorisée maintenant';
$string['settings_o365china'] = 'Office 365 pour la Chine';
$string['settings_o365china_details'] = 'Vérifiez si vous utilisez Office 365 pour la Chine.';
$string['settings_odburl'] = 'URL OneDrive Entreprise';
$string['settings_odburl_details'] = 'L’URL utilisée pour accéder à OneDrive Entreprise. Cela peut généralement être déterminé par votre locataire Azure AD. Par exemple, si votre locataire Azure AD est « contoso.onmicrosoft.com », il s’agit probablement de « contoso-my.sharepoint.com ». Saisissez uniquement le nom de domaine, n’incluez pas http:// ou https://';
$string['settings_odburl_error'] = 'Nous n’avons pas pu déterminer votre URL OneDrive Entreprise. <br /> Veuillez vous assurer que « Office 365 SharePoint Online » a été ajouté à votre application enregistrée dans Azure AD.';
$string['settings_odburl_error_graph'] = 'Nous n’avons pas pu déterminer votre URL OneDrive Entreprise, veuillez la saisir manuellement. Cela peut généralement être déterminé à l’aide de l’URL que vous utilisez pour accéder à OneDrive.';
$string['settings_options_usersync'] = 'Synchronisation utilisateur';
$string['settings_options_usersync_desc'] = 'Les paramètres suivants contrôlent la synchronisation des utilisateurs entre Office 365 et Moodle.';
$string['settings_photoexpire'] = 'Temps de rafraîchissement de la photo de profil';
$string['settings_photoexpire_details'] = 'Le nombre d’heures à attendre avant d’actualiser les photos de profil. Des durées plus longues peuvent augmenter les performances.';
$string['settings_publish_manifest_instruction'] = '<a href="https://docs.microsoft.com/en-us/microsoftteams/platform/concepts/apps/apps-upload" target="_blank"> Cliquez ici </a> pour savoir comment publier votre Fichier manifeste de l’application Moodle à tous les utilisateurs de Teams.';
$string['settings_reset_group_name_prefix'] = 'Réinitialiser le préfixe du nom du groupe';
$string['settings_reset_group_name_prefix_details'] = 'Lors de la réinitialisation d’un cours connecté à un groupe, le nom du groupe existant sera précédé de celui-ci.';
$string['settings_reset_team_name_prefix'] = 'Réinitialiser le préfixe du nom de l’équipe';
$string['settings_reset_team_name_prefix_details'] = 'Lors de la réinitialisation d’un parcours connecté à une équipe, le nom de l’équipe connectée existante sera précédé de celui-ci.';
$string['settings_sds_coursecreation'] = 'Création de cours';
$string['settings_sds_coursecreation_desc'] = 'Ces options contrôlent la création de cours dans Moodle en fonction des informations contenues dans le SDS.';
$string['settings_sds_coursecreation_enabled'] = 'Crée des cours';
$string['settings_sds_coursecreation_enabled_desc'] = 'Crée des cours pour ces écoles.';
$string['settings_sds_enrolment_enabled'] = 'Inscrit des utilisateurs';
$string['settings_sds_enrolment_enabled_desc'] = 'Inscrivez les enseignants et les membres de la classe SDS aux cours Moodle créés à partir des classes.<br />
Notez que pour synchroniser les changements de rôle d’enseignant/membre de la classe SDS avec les classes Moodle, l’option <b>Synchronisation avancée des inscriptions avec les classes SDS</b> doit être activée, et <b>Rôle d’enseignant</b> et <b>Membre les paramètres du rôle</b> doivent être configurés.';
$string['settings_sds_enrolment_student_role'] = 'Rôle de membre';
$string['settings_sds_enrolment_student_role_desc'] = 'Si l’option « Inscrire les utilisateurs » est activée, les étudiants de la classe SDS seront inscrits au cours Moodle connecté avec ce rôle.';
$string['settings_sds_enrolment_teacher_role'] = 'Rôle enseignant';
$string['settings_sds_enrolment_teacher_role_desc'] = 'Si l’option « Inscrire les utilisateurs » est activée, les enseignants de la classe SDS seront inscrits au cours Moodle connecté avec ce rôle.';
$string['settings_sds_get_schools_error'] = '<div class="alert alert-info error">Échec de l’obtention des écoles SDS. Vérifiez que l’application Azure dispose de l’autorisation requise.</div>';
$string['settings_sds_intro_desc'] = 'L’outil de synchronisation des données scolaires (« SDS ») vous permet de synchroniser les informations importées dans Azure AD à partir de systèmes SIS externes vers Moodle. <a href="https://sis.microsoft.com/" target="_blank"> En savoir plus </a> <br /> <br /> Le processus de synchronisation des données de l’école se déroule dans le cron Moodle, à 3 heures du matin, heure locale du serveur. Pour modifier ce calendrier, veuillez visiter la <a href="{$a}"> page de gestion des tâches programmées. </a> <br /> <br />';
$string['settings_sds_intro_previewwarning'] = '<div class="alert"> <b> Ceci est une fonctionnalité de prévisualisation </b> <br /> Les fonctionnalités de prévisualisation peuvent ne pas fonctionner comme prévu ou être interrompues sans avertissement. Veuillez procéder avec prudence. </div>';
$string['settings_sds_noschools'] = '<div class="alert alert-info"> Aucune école n’est disponible dans la synchronisation des données scolaires. </div>';
$string['settings_sds_profilesync'] = 'Synchronisation des données de profil';
$string['settings_sds_profilesync_desc'] = 'Ces options contrôlent la synchronisation des données de profil entre les données SDS et Moodle.';
$string['settings_sds_profilesync_disabled'] = 'Désactivé';
$string['settings_sds_profilesync_header'] = 'Synchronisation des données de profil';
$string['settings_sds_profilesync_header_desc'] = 'Ces options contrôlent la synchronisation des données de profil entre les données SDS et Moodle.';
$string['settings_sds_school_disabled_action'] = 'Action de synchronisation scolaire désactivée';
$string['settings_sds_school_disabled_action_desc'] = 'Action sur les cours Moodle déjà connectés lorsque la synchronisation est désactivée sur une école SDS.';
$string['settings_sds_school_disabled_action_disconnect'] = 'Déconnecter le cours Moodle avec l’équipe';
$string['settings_sds_school_disabled_action_keep_connected'] = 'Gardez le cours Moodle connecté à l’équipe';
$string['settings_sds_sync_enrolment_to_sds'] = 'Les inscriptions avancées se synchronisent avec les cours SDS';
$string['settings_sds_sync_enrolment_to_sds_desc'] = 'Cette option nécessite que l’option <b>Enrôler les utilisateurs</b> soit activée pour fonctionner.<br />
Si ce paramètre est activé, la synchronisation de classe SDS effectuera les opérations suivantes :
<ul>
<li>Les changements dans la propriété de la classe SDS / le statut d’adhésion seront synchronisés avec le cours Moodle et reflétés dans les changements de rôle d’utilisateur Moodle.</li>
<li>Les modifications d’inscription des utilisateurs, telles que les inscriptions et les désinscriptions, qui sont effectuées dans le cours Moodle connecté aux cours SDS seront synchronisées avec les cours SDS. Le statut de propriété / d’adhésion de l’utilisateur dépendra des capacités « local/o365:teamowner » et « local/o365:teammember » dans le contexte du cours.</li>
</ul>';
$string['settings_sds_teams_enabled'] = 'Création des équipes activée';
$string['settings_sds_teams_enabled_desc'] = 'Cela contrôle si les cours Moodle créés à partir de la synchronisation des classes SDS sont automatiquement connectés à l’équipe Microsoft de la classe SDS. Cela ne doit être activé que si les équipes sont automatiquement créées à partir des classes SDS.';
$string['settings_secthead_advanced'] = 'Paramètres avancés';
$string['settings_secthead_advanced_desc'] = 'Ces paramètres contrôlent d’autres fonctionnalités de la suite de plugins. Faites attention ! Ceux-ci peuvent provoquer des effets indésirables.';
$string['settings_secthead_coursesync'] = 'Synchronisation Teams';
$string['settings_secthead_coursesync_desc'] = 'Ces paramètres suivants contrôlent la synchronisation des cours entre Microsoft Teams et Moodle.';
$string['settings_secthead_team_group_name'] = 'Noms d’équipe/de groupe';
$string['settings_secthead_team_group_name_desc'] = 'Si un cours est configuré pour être synchronisé, le nom de l’équipe et du groupe sera construit comme suit.<br/>
<ul>
<li>Les alias de messagerie de groupe et les noms d’équipe peuvent être définis.</li>
<li>Le groupe Microsoft 365 sera d’abord créé à l’aide du groupe mailNickname et du nom d’affichage de l’équipe configuré en premier, et une équipe sera créée à partir du groupe.</li> <li>Si des stratégies de nommage de groupe Azure AD sont utilisées, les groupes ne seront pas créés si le nom d’affichage créé selon la configuration ne correspond pas aux stratégies.</li> <li>Les modifications apportées ici n’affecteront que la création future de l’équipe, et non celles existantes.</li>
<li>Tous les espaces seront supprimés de l’alias de messagerie du groupe.</li>
<li>Seules les lettres majuscules et minuscules, les chiffres, — et _ sont autorisés dans l’alias de messagerie du groupe.</li>
<li>L’alias de messagerie de groupe, y compris le préfixe et le suffixe, ne peut pas dépasser 64 caractères.</li>
<li>L’alias de messagerie du groupe doit être unique, sinon un numéro aléatoire à 4 chiffres sera ajouté pour garantir l’unicité.</li>
</ul>';
$string['settings_serviceresourceabstract_detect'] = 'Détecter';
$string['settings_serviceresourceabstract_detecting'] = 'Détection ...';
$string['settings_serviceresourceabstract_empty'] = 'Veuillez saisir une valeur ou cliquez sur « Détecter ­» pour tenter de détecter la valeur correcte.';
$string['settings_serviceresourceabstract_error'] = 'Une erreur s’est produite lors de la détection du paramètre. Veuillez régler manuellement.';
$string['settings_serviceresourceabstract_invalid'] = 'Cette valeur ne semble pas utilisable.';
$string['settings_serviceresourceabstract_nocreds'] = 'Veuillez d’abord définir les informations d’identification de l’application.';
$string['settings_serviceresourceabstract_valid'] = '{$a} est utilisable.';
$string['settings_set_moodle_app_id_instruction'] = 'Pour trouver manuellement l’ID d’application Moodle, procédez comme suit :
<ol>
<li> Importez le fichier manifeste téléchargé dans le catalogue d’applications Teams de votre locataire. </li>
<li> Dans le catalogue d’applications Teams, recherchez l’application. </li>
<li> Cliquez sur l’icône d’option de l’application, qui se trouve dans le coin supérieur droit de l’image de l’application. </li>
<li> Cliquez sur « Copier le lien ». </li>
<li> Dans un éditeur de texte, collez le contenu copié. Il doit contenir une URL telle que https://teams.microsoft.com/l/app/00112233-4455-6677-8899-aabbccddeeff. </li>
</ol>
La dernière partie de l’URL, c’est-à-dire <span class="local_o365_settings_moodle_app_id"> 00112233-4455-6677-8899-aabbccddeeff </span>, est l’ID de l’application.';
$string['settings_setup_step1'] = 'Étape 1/3 : enregistrer Moodle avec Azure AD';
$string['settings_setup_step1_continue'] = '<b> Une fois que vous avez saisi votre ID et votre clé d’application, cliquez sur « Enregistrer les modifications » en bas de la page pour continuer. </b><br /><br /><br /><br /><br />';
$string['settings_setup_step1_credentials_end'] = 'Si vous ne parvenez pas à configurer l’application AzureAD via PowerShell, <a href="https://aka.ms/MoodleTeamsManualSetup" target="_blank"> cliquez ici </a> pour obtenir des instructions de configuration manuelle.';
$string['settings_setup_step1_desc'] = 'Inscrivez une nouvelle application AzureAD pour votre client Office 365 à l’aide de Windows PowerShell :

<a href="{$a}/local/o365/scripts/Moodle-AzureAD-Powershell.zip" class="btn btn-primary" target="_blank"> Télécharger le script PowerShell </a>

<p style = "margin-top: 10px"> <a href="https://aka.ms/MoodleTeamsPowerShellReadMe" target="_blank"> Cliquez ici </a> pour lire les instructions d’exécution du script. Lorsque vous y êtes invité, utilisez le lien suivant comme URL Moodle: </p><h5><b>{$a}</b></h5>';
$string['settings_setup_step1_existing_settings'] = '<h5>Paramètres existants</h5>';
$string['settings_setup_step1clientcreds'] = '<br />Une fois le script exécuté avec succès, copiez l’ID d’application et le secret renvoyés par le script dans la <a href="{$a}">page de configuration de l’Authentification OpenID Connect</a>.';
$string['settings_setup_step2'] = 'Étape 2/3 : Choisissez la méthode de connexion';
$string['settings_setup_step2_desc'] = 'Cette section vous permet de choisir comment la suite d’intégration Microsoft 365 se connecte aux services Microsoft 365.<br />
Historiquement, l’intégration peut se connecter aux services Microsoft 365 via « Application Access », ou au nom d’un utilisateur que vous avez dédié en tant qu’utilisateur « système ».<br />
<b>À partir de mars 2022, seul l’accès aux applications est pris en charge. Toutes les nouvelles fonctions futures seront implémentées et testées uniquement en utilisant la méthode de connexion « Application Access ».</b>';
$string['settings_setup_step3'] = 'Étape 3/3 : consentement de l’administrateur & Information additionnelle';
$string['settings_setup_step3_desc'] = 'Cette dernière étape vous permet de donner le consentement de l’administrateur pour utiliser certaines autorisations Azure et rassemble des informations supplémentaires sur votre environnement Office 365. <br /><br />';
$string['settings_suspend_delete_running_time'] = 'Durée de suspension/suppression de l’utilisateur';
$string['settings_suspend_delete_running_time_desc'] = 'Si l’option est activée, la fonction de suspension/suppression de la fonction de synchronisation des utilisateurs s’exécutera une fois par jour, à l’heure configurée dans le fuseau horaire par défaut de l’instance Moodle.';
$string['settings_switchauthminupnsplit0'] = 'Longueur minimale du nom d’utilisateur inexacte pour passer à Office 365';
$string['settings_switchauthminupnsplit0_details'] = 'Si vous activez le paramètre « Basculer les utilisateurs correspondants vers l’authentification Office 365 », cela définit la longueur minimale des noms d’utilisateur sans nom de domaine (la partie @example.onmicrosoft.com) qui sera ajoutée. Cela permet d’éviter de changer de compte avec des noms génériques, tels que « admin », qui ne sont pas nécessairement les mêmes dans Moodle et Azure AD.';
$string['settings_team_name_course'] = 'Cours faisant partie du nom des équipes';
$string['settings_team_name_prefix'] = 'Préfixe du nom des équipes';
$string['settings_team_name_sample'] = 'Supposons qu’un cours a :
<ul>
<li>Nom complet : <b>Exemple de cours</b>
<li>Nom abrégé : <b>échantillon 15</b></li>
<li>ID créé par Moodle : <b>2</b></li>
<li>Numéro d’identification : <b>Exemple d’ID 15</b></li>
</ul>
Votre paramètre actuel utilisera le nom "<b>{$a}</b>" pour créer une équipe. Cliquez sur le bouton « Enregistrer les modifications » ci-dessous pour voir comment vos paramètres vont changer cela.';
$string['settings_team_name_suffix'] = 'Suffixe du nom des équipes';
$string['settings_team_name_sync'] = 'Mettre à jour le nom des équipes lors de la mise à jour du cours';
$string['settings_team_name_sync_desc'] = 'Si activé, lorsque le cours Moodle est mis à jour, le nom de l’équipe sera mis à jour en fonction des derniers paramètres de nom des équipes.';
$string['settings_teamconnections'] = 'Connexions d’équipe';
$string['settings_teamconnections_details'] = 'Examinez et gérez les connexions entre le cours Moodle et Microsoft Teams.';
$string['settings_teamconnections_linktext'] = 'Gestion des connexions d’équipe';
$string['settings_teams_moodle_app_external_id'] = 'ID d’application Microsoft pour l’application Moodle Teams';
$string['settings_teams_moodle_app_external_id_desc'] = 'Cela doit être défini sur la valeur par défaut, sauf si plusieurs applications Moodle Teams sont requises dans votre locataire pour se connecter à différents sites Moodle.';
$string['settings_teams_moodle_app_short_name'] = 'Nom de l’application Teams';
$string['settings_teams_moodle_app_short_name_desc'] = 'Cela peut être défini par défaut, sauf si plusieurs applications Moodle Teams sont requises dans votre client pour se connecter à différents sites Moodle.';
$string['settings_teams_moodle_setup_heading'] = '<h4 class="local_o365_settings_teams_h4_spacer">Configurez votre application Moodle pour Microsoft Teams</h4>';
$string['settings_tools_tenants'] = 'Utilisateurs';
$string['settings_tools_tenants_details'] = 'Gérez l’accès à des clients Office 365 supplémentaires.';
$string['settings_tools_tenants_linktext'] = 'Configurer les utilisateurs additionnels';
$string['settings_userconnections'] = 'Connexions';
$string['settings_userconnections_details'] = 'Vérifiez et gérez les connexions entre les utilisateurs de Moodle et d’Office 365.';
$string['settings_userconnections_linktext'] = 'Gérer les connexions utilisateur';
$string['settings_usermatch'] = 'Correspondance utilisateur';
$string['settings_usermatch_details'] = 'Cet outil vous permet de faire correspondre les utilisateurs Moodle avec les utilisateurs d’Office 365 en fonction d’un fichier de données téléchargé personnalisé.';
$string['settings_usersynccreationrestriction'] = 'Restriction de création d’utilisateur';
$string['settings_usersynccreationrestriction_details'] = 'Si activé, seuls les utilisateurs qui ont la valeur spécifiée pour le champ Azure AD spécifié seront créés lors de la synchronisation des utilisateurs.';
$string['settings_usersynccreationrestriction_fieldval'] = 'Valeur du champ';
$string['settings_usersynccreationrestriction_o365group'] = 'Membre de groupe Office 365';
$string['settings_usersynccreationrestriction_regex'] = 'La valeur est une expression régulière';
$string['spsite_group_contributors_desc'] = 'Tous les utilisateurs qui ont accès à la gestion des fichiers pour le cours {$a}';
$string['sso_login'] = 'Se connecter à Office 365';
$string['tab_moodle'] = 'Moodle';
$string['tab_name'] = 'Nom de l’onglet';
$string['task_calendarsyncin'] = 'Synchroniser les événements o365 dans Moodle';
$string['task_coursesync'] = 'Synchroniser les cours Moodle avec Microsoft Teams';
$string['task_notifysecretexpiry'] = 'Informer l’administrateur du site de l’expiration du secret de l’application Azure';
$string['task_processmatchqueue'] = 'Opération de correspondance en cours';
$string['task_processmatchqueue_err_museralreadymatched'] = 'L’utilisateur Moodle est déjà associé à un utilisateur Office 365.';
$string['task_processmatchqueue_err_museralreadyo365'] = 'L’utilisateur Moodle est déjà connecté à Office 365.';
$string['task_processmatchqueue_err_nomuser'] = 'Aucun utilisateur Moodle trouvé avec ce nom d’utilisateur.';
$string['task_processmatchqueue_err_noo365user'] = 'Aucun utilisateur Office 365 trouvé avec ce nom d’utilisateur.';
$string['task_processmatchqueue_err_o365useralreadyconnected'] = 'L’utilisateur Office 365 est déjà connecté à un utilisateur Moodle.';
$string['task_processmatchqueue_err_o365useralreadymatched'] = 'L’utilisateur Office 365 est déjà associé à un utilisateur Moodle.';
$string['task_sds_sync'] = 'Synchroniser avec SDS';
$string['task_syncusers'] = 'Synchronisez les utilisateurs avec Azure AD.';
$string['teams_no_course'] = 'Vous n’avez aucun cours à ajouter.';
$string['ucp_calsync_availcal'] = 'Calendriers Moodle disponibles';
$string['ucp_calsync_desc'] = 'Les calendriers de Moodle cochés seront synchronisés avec votre calendrier Outlook.';
$string['ucp_calsync_title'] = 'Paramètres de synchronisation du calendrier Outlook';
$string['ucp_connection_desc'] = 'Ici, vous pouvez configurer la façon dont vous vous connectez à Office 365. Pour utiliser les fonctionnalités d’Office 365, vous devez être connecté à un compte Office 365. Ceci peut être accompli comme indiqué ci-dessous.';
$string['ucp_connection_disconnected'] = 'Vous n’êtes pas connecté à Office 365.';
$string['ucp_connection_entraidlogin'] = 'Utilisez vos identifiants Microsoft 365 pour vous connecter à Moodle<br />';
$string['ucp_connection_entraidlogin_active'] = 'Vous utilisez le compte Microsoft 365 « {$a} » pour vous connecter à Moodle.';
$string['ucp_connection_entraidlogin_desc_authcode'] = 'Au lieu de saisir un nom d\'utilisateur et un mot de passe sur la page de connexion Moodle, vous verrez une section indiquant « Connectez-vous en utilisant votre compte sur {$a} » sur la page de connexion. Vous cliquerez sur le lien et serez redirigé vers Microsoft 365 pour vous connecter. Après vous être connecté avec succès à Microsoft 365, vous serez renvoyé sur Moodle et connecté à votre compte.';
$string['ucp_connection_entraidlogin_desc_rocreds'] = 'Au lieu de votre nom d\'utilisateur et de votre mot de passe Moodle, vous entrerez votre nom d\'utilisateur et votre mot de passe Microsoft 365 sur la page de connexion Moodle.';
$string['ucp_connection_entraidlogin_start'] = 'Commencez à utiliser Microsoft 365 pour vous connecter à Moodle.';
$string['ucp_connection_entraidlogin_stop'] = 'Arrêtez d\'utiliser Microsoft 365 pour vous connecter à Moodle.';
$string['ucp_connection_linked'] = 'Lier vos comptes Moodle et Microsoft 365';
$string['ucp_connection_linked_active'] = 'Vous compte est lié au compte « {$a} » Office 365.';
$string['ucp_connection_linked_desc'] = 'Lier vos comptes Moodle et Office 365 vous permet d’utiliser les fonctionnalités d’Office 365 Moodle sans changer la façon dont vous vous connectez à Moodle. <br /> En cliquant sur le lien ci-dessous, vous serez redirigé vers Office 365 pour effectuer une connexion unique, après quoi vous serez renvoyé ici. Vous pourrez utiliser toutes les fonctionnalités d’Office 365 sans apporter d’autres modifications à votre compte Moodle - vous vous connecterez à Moodle comme vous l’avez toujours fait.';
$string['ucp_connection_linked_migrate'] = 'Passer au compte associé.';
$string['ucp_connection_linked_start'] = 'Lier votre compte Moodle à un compte Microsoft 365.';
$string['ucp_connection_linked_stop'] = 'Délier votre compte Moodle de votre compte Microsoft 365.';
$string['ucp_connection_options'] = 'Options de connexion :';
$string['ucp_connection_start'] = 'Connectez-vous à Microsoft 365';
$string['ucp_connection_status'] = 'La connexion Office 365 est :';
$string['ucp_connection_stop'] = 'Se déconnecter d’Office 365';
$string['ucp_connectionstatus'] = 'Statut de connexion';
$string['ucp_features'] = 'Fonctionnalités Microsoft 365';
$string['ucp_features_intro'] = 'Vous trouverez ci-dessous une liste des fonctionnalités que vous pouvez utiliser pour améliorer Moodle avec Microsoft 365.';
$string['ucp_features_intro_notconnected'] = 'Certains d’entre eux peuvent ne pas être disponibles tant que vous n’êtes pas connecté à Office 365.';
$string['ucp_general_intro'] = 'Ici, vous pouvez gérer votre connexion à Microsoft 365.';
$string['ucp_general_intro_notconnected_nopermissions'] = 'Pour vous connecter à Office 365, vous devrez contacter l’administrateur de votre site.';
$string['ucp_index_calendar_desc'] = 'Ici, vous pouvez configurer la synchronisation entre vos calendriers Moodle et Outlook. Vous pouvez exporter des événements de calendrier Moodle vers Outlook et importer des événements Outlook dans Moodle.';
$string['ucp_index_calendar_title'] = 'Paramètres de synchronisation du calendrier Outlook';
$string['ucp_index_connection_desc'] = 'Configurer comment vous connecter à Microsoft 365.';
$string['ucp_index_connection_title'] = 'Paramètres de connexion à Microsoft 365';
$string['ucp_index_connectionstatus_connect'] = 'Cliquez ici pour se connecter.';
$string['ucp_index_connectionstatus_connected'] = 'Vous êtes actuellement connecté à Microsoft 365.';
$string['ucp_index_connectionstatus_disconnect'] = 'Déconnecter';
$string['ucp_index_connectionstatus_login'] = 'Cliquez ici pour vous connecter.';
$string['ucp_index_connectionstatus_manage'] = 'Gérer la connexion';
$string['ucp_index_connectionstatus_matched'] = 'Votre compte est associé à l’utilisateur Office 365 <small>« {$a} »</small>. Pour finaliser l’association de vos comptes, cliquez sur le lien ci-dessous pour vous connecter à Office 365.';
$string['ucp_index_connectionstatus_notconnected'] = 'Vous n’êtes pas connecté à Office 365.';
$string['ucp_index_connectionstatus_reconnect'] = 'Actualiser la connexion';
$string['ucp_index_connectionstatus_title'] = 'Statut de la connexion';
$string['ucp_index_connectionstatus_usinglinked'] = 'Votre compte est lié à un compte Microsoft 365.';
$string['ucp_index_connectionstatus_usinglogin'] = 'Vous utilisez actuellement Microsoft 365 pour vous connecter à Moodle.';
$string['ucp_index_entraidlogin_active'] = 'Vous utilisez actuellement Microsoft 365 pour vous connecter à Moodle.';
$string['ucp_index_entraidlogin_desc'] = 'Vous pouvez utiliser vos informations d\'identification Microsoft 365 pour vous connecter à Moodle.';
$string['ucp_index_entraidlogin_inactive'] = 'Actuellement, vous n\'utilisez pas Microsoft 365 pour vous connecter à Moodle';
$string['ucp_index_entraidlogin_title'] = 'Connexion à Microsoft 365';
$string['ucp_index_onenote_desc'] = 'L’intégration OneNote vous permet d’utiliser Office 365 OneNote avec Moodle. Vous pouvez effectuer des devoirs à l’aide de OneNote et prendre facilement des notes pour vos cours.';
$string['ucp_index_onenote_title'] = 'OneNote';
$string['ucp_notconnected'] = 'Veuillez vous connecter à Microsoft 365 avant de visiter ici.';
$string['ucp_o365accountconnected'] = 'Ce compte Microsoft 365 est déjà connecté à un autre compte Moodle.';
$string['ucp_options'] = 'Options';
$string['ucp_status_disabled'] = 'Non connecté';
$string['ucp_status_enabled'] = 'Actif';
$string['ucp_syncdir_both'] = 'Mettez à jour Outlook et Moodle';
$string['ucp_syncdir_in'] = 'De Outlook à Moodle';
$string['ucp_syncdir_out'] = 'De Moodle à Outlook';
$string['ucp_syncdir_title'] = 'Synchronisation des comportements';
$string['ucp_syncwith_title'] = 'Nom du calendrier Outlook avec lequel synchroniser :';
$string['ucp_title'] = 'Panneau de configuration Microsoft 365 / Moodle';
$string['webservices_error_assignnotfound'] = 'L’enregistrement d’attribution du module reçu est introuvable.';
$string['webservices_error_couldnotsavegrade'] = 'Impossible d’enregistrer la note.';
$string['webservices_error_invalidassignment'] = 'L’ID d’attribution reçu ne peut pas être utilisé avec cette fonction de services Web.';
$string['webservices_error_modulenotfound'] = 'L’ID de module reçu est introuvable.';
$string['webservices_error_sectionnotfound'] = 'La section du cours est introuvable.';
