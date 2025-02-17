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
 * Strings for component 'readaloud', language 'fr', version '4.3'.
 *
 * @package     readaloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accadjust'] = 'Réglage fixe.';
$string['accadjust_details'] = 'Il s’agit du nombre d’erreurs de lecture pour lesquelles il faut compenser les scores WPM (nombre de mots par minute). Si l’ajustement WPM est réglé sur « Fixe », cette valeur sera utilisée pour compenser les scores WPM. Il s’agit d’une méthode d’atténuation des erreurs de transcription automatique.';
$string['accadjust_help'] = 'Ce taux doit correspondre le plus possible à la moyenne estimée des erreurs de transcription automatique pour un passage.';
$string['accadjustmethod'] = 'Réglage WPM(AI)';
$string['accadjustmethod_details'] = 'Réglez le nombre de mots par minute en ignorant ou en déduisant certaines erreurs de lecture détectées par l’IA. La valeur par défaut « Aucun ajustement » soustrait toutes les erreurs de lecture du score WPM final.';
$string['accadjustmethod_help'] = 'Pour l’ajustement du nombre de mots par minute (WPM), nous pouvons : ne jamais ajuster, ajuster par un montant fixe, ou ignorer les erreurs lors du calcul du WPM.';
$string['accmethod_auto'] = 'Réglage automatique';
$string['accmethod_fixed'] = 'Régler avec un montant fixe';
$string['accmethod_noerrors'] = 'Ignorer toutes les erreurs';
$string['accmethod_none'] = 'Aucun réglage';
$string['accuracy'] = 'Précision';
$string['accuracy_p'] = 'Préc(%)';
$string['actions'] = 'Actions';
$string['activitydate:submissionsdue'] = 'Dû :';
$string['activitydate:submissionsopen'] = 'Ouvre :';
$string['activitydate:submissionsopened'] = 'Ouvert :';
$string['activityisclosed'] = 'Cette activité est fermée.';
$string['activityisnotopenyet'] = 'Cette activité n’est pas encore ouverte.';
$string['activitylink'] = 'Lien vers l’activité suivante';
$string['activitylink_help'] = 'Pour fournir un lien après la tentative vers une autre activité du cours, sélectionnez l’activité dans la liste déroulante.';
$string['activitylinkname'] = 'Aller à l’activité suivante : {$a}';
$string['activityopenscloses'] = 'Dates d’ouverture/de fermeture des activités';
$string['addingitem'] = 'Ajouter une nouvelle question';
$string['addnewitem'] = 'Ajouter une nouvelle question';
$string['addpassage'] = 'Réglage d’activité';
$string['addtextpromptshortitem'] = 'Ajouter un élément';
$string['adjustedaccuracy_p'] = 'Rég. Préc(%)';
$string['adjustedgrade_p'] = 'Rég. Note(%)';
$string['adjustedwpm'] = 'Rég. WPM';
$string['aigradenow'] = 'Note IA';
$string['allowearlyexit'] = 'Autoriser l’envoi avant la fin du temps imparti';
$string['allowearlyexit_defaultdetails'] = 'Définit le paramètre par défaut pour allow_early_exit. Il peut être remplacé au niveau de l’activité. Si cette option est activée, cela signifie que les étudiants peuvent terminer avant le temps imparti en appuyant sur un bouton de fin. Le nombre de mots par minute est calculé à partir de leur temps d’enregistrement.';
$string['allowearlyexit_details'] = 'Si sélectionné, donne la possibilité aux étudiants de finir avant le temps imparti en appuyant sur le bouton « fin ». Le nombre de mots par minute sera calculé en fonction du temps utilisé.';
$string['alternatives'] = 'Alternatives';
$string['alternatives_descr'] = 'Spécifier les options de correspondance pour des mots spécifiques du passage. 1 ensemble de mots par ligne. Par exemple, their|there|they’re Voir la <a href="https://support.poodll.com/support/solutions/articles/19000096937-tuning-your-read-aloud-activity">documentation</a> pour plus de détails.';
$string['alternatives_help'] = 'Spécifier les options de correspondance pour des mots spécifiques du passage. 1 ensemble de mots par ligne. Par exemple, their|there|they’re Voir la <a href="https://support.poodll.com/support/solutions/articles/19000096937-tuning-your-read-aloud-activity">documentation</a> pour plus de détails.';
$string['answer'] = 'Réponse';
$string['apisecret'] = 'Clé secrète de l’API Poodll';
$string['apisecret_details'] = 'La clé secrète de l’API Poodll. Voir <a href="https://support.poodll.com/support/solutions/articles/19000083076-cloud-poodll-api-secret">ici</a> pour plus de détails.';
$string['apiuser'] = 'Nom de l’utilisateur de l’API Poodll';
$string['apiuser_details'] = 'Le nom d’utilisateur du compte Poodll qui autorise Poodll sur ce site.';
$string['appauthorised'] = 'Poodll Read Aloud est autorisé pour ce site.';
$string['appnotauthorised'] = 'Poodll Read Aloud N’EST PAS autorisé pour ce site.';
$string['ar-ae'] = 'Arabe (Golfe)';
$string['ar-sa'] = 'Arabe (moderne)';
$string['attemptno'] = 'Tentative {$a}';
$string['attemptsheading'] = 'Résultat des tentatives';
$string['attemptsperpage'] = 'Tentatives à afficher par page :';
$string['attemptsreport'] = 'Rapport des tentatives';
$string['attemptssummaryheading'] = 'Rapport de synthèse des tentatives';
$string['attemptssummaryreport'] = 'Rapport de synthèse des tentatives';
$string['audiofile'] = 'Audio';
$string['audioitemfile'] = 'Élément Audio (MP3)';
$string['audioresponse'] = 'Réponse Audio';
$string['av_accuracy_p'] = 'Moy. Rég(%)';
$string['av_grade_p'] = 'Moy. Note(%)';
$string['av_wpm'] = 'Moy. WPM';
$string['averages'] = 'Moyenne';
$string['avgcorrect'] = 'Moy. Correct';
$string['avgtotaltime'] = 'Moy. Durée';
$string['awsregion'] = 'Région cloud AWS';
$string['awsregion_details'] = 'Choisissez la région la plus proche de vous. Vos données resteront dans cette région. La région du Cap ne prend en charge que l’anglais et l’allemand.';
$string['backtotop'] = 'Vérifier les résultats';
$string['bahrain'] = 'Bahrein';
$string['basicheading'] = 'Rapport simple';
$string['basicreport'] = 'Rapport simple';
$string['beginreading'] = 'Commencer à lire';
$string['cannotgradenow'] = '-';
$string['capetown'] = 'Le Cap, Afrique du Sud';
$string['chartexplainer'] = 'Le graphique ci-dessous montre votre progression au fil du temps dans la lecture de ce passage.';
$string['checking'] = '...vérification...';
$string['close'] = 'Fermer';
$string['confirmitemdelete'] = 'Êtes-vous sûr de vouloir <i>SUPPRIMER</i> l’élément ? : {$a}';
$string['confirmitemdeletetitle'] = 'Vraiment Supprimer l’élément ?';
$string['correct'] = 'Correct';
$string['correctanswer'] = 'Réponse correcte';
$string['correcttranslationtitle'] = 'Traduction correcte';
$string['createaitem'] = 'Créer une question';
$string['credentialsinvalid'] = 'L’utilisateur et la clé secrète de l’API saisis n’ont pas pu être utilisés pour obtenir l’accès. Veuillez les vérifier.';
$string['currenterrorestimate'] = 'Estimation de l’erreur actuelle : {$a}';
$string['da-dk'] = 'Danois (DK)';
$string['de-ch'] = 'Allemand (Suisse)';
$string['de-de'] = 'Allemand (DE)';
$string['defaultfeedback'] = 'Merci pour votre lecture.';
$string['defaultrecorder'] = 'Enregistreur par défaut';
$string['defaultrecorder_details'] = 'Choisissez l’enregistreur par défaut qui sera présenté aux étudiants.';
$string['defaultwelcome'] = 'Dans cette activité, vous devez lire un passage à voix haute. Vous devrez peut-être d’abord tester votre microphone. Vous devriez voir l’enregistreur audio ci-dessous. Une fois que vous aurez commencé à enregistrer, le passage à lire apparaîtra. Lisez le passage à voix haute aussi clairement que vous le pouvez.';
$string['deletealluserdata'] = 'Supprimer les données utilisateur';
$string['deleteattemptconfirm'] = 'Voulez-vous vraiment supprimer cette tentative ?';
$string['deleteitem'] = 'Effacer l’élément';
$string['developer'] = 'Développeur';
$string['disableshadowgrading'] = 'Désactiver l’étalonnage en mode ombrage';
$string['disableshadowgrading_details'] = 'Si cette case est cochée, les tentatives faites en mode caché seront évaluées, mais aucune entrée ne sera transmise au carnet de notes.';
$string['displaysubs'] = '{$a->subscriptionname} : termine {$a->expiredate}';
$string['doclear'] = 'Effacer tous les repères';
$string['done'] = 'Fin';
$string['dublin'] = 'Dublin, Irlande';
$string['edit'] = 'Modifier';
$string['editingitem'] = 'Modifier une question';
$string['edititem'] = 'Modifier un élément';
$string['en-ab'] = 'Anglais (Écosse)';
$string['en-au'] = 'Anglais (Aus.)';
$string['en-gb'] = 'Anglais (GB)';
$string['en-ie'] = 'Anglais (Irlande)';
$string['en-in'] = 'Anglais (Inde)';
$string['en-nz'] = 'Anglais (Nouvelle Zélande)';
$string['en-us'] = 'Anglais (US)';
$string['en-wl'] = 'Anglais (Galles)';
$string['en-za'] = 'Anglais (Afrique du sud)';
$string['enableai'] = 'Activer l’IA';
$string['enableai_details'] = 'Read Aloud peut évaluer les résultats d’une tentative de l’étudiant en utilisant l’IA. Cochez cette case pour l’activer.';
$string['enablelandr'] = 'Activer le mode d’entraînement (écoute et répétition)';
$string['enablelandr_details'] = 'Active le mode écoute et répétition. Ligne par ligne, l’étudiant écoute et lit alternativement.';
$string['enablepreview'] = 'Activer le mode écoute';
$string['enablepreview_details'] = 'Le mode écoute montre la lecture et le modèle audio à l’étudiant avant que l’activité ne commence.';
$string['enablesetuptab'] = 'Activer l’onglet de configuration';
$string['enablesetuptab_details'] = 'Affiche un onglet contenant les paramètres de l’instance d’activité pour les admins. Pas très utile dans la plupart des cas.';
$string['enableshadow'] = 'Activer le mode d’entraînement (Shadowing)';
$string['enableshadow_details'] = 'Active le mode d’ombrage. Cela permet de lire le modèle audio pendant que les étudiants lisent le passage entier à haute voix. Les étudiants auront besoin d’un casque pour cela.';
$string['enabletts'] = 'Activer TTS (expérimental)';
$string['enabletts_details'] = 'TTS n’est actuellement pas mis en œuvre';
$string['errorheader'] = 'Erreur';
$string['es-es'] = 'Espagnol (Espagne)';
$string['es-us'] = 'Espagnol (US)';
$string['eu-es'] = 'Basque';
$string['evaluatedmessage'] = 'Votre dernière tentative a été reçue et l’évaluation est indiquée ci-dessous.';
$string['evaluationview'] = 'Affichage de l’évaluation';
$string['evaluationview_details'] = 'Ce qu’il faut montrer aux étudiants après qu’ils ont tenté et reçu une évaluation';
$string['exceededallattempts'] = 'Vous avez utilisé toutes vos tentatives.';
$string['exceededattempts'] = 'Vous avez utilisé toutes vos {$a} tentatives.';
$string['expiredays'] = 'Jours de conservation du fichier';
$string['exportexcel'] = 'Exporter au format CSV';
$string['extraslowspeed'] = 'Extra lent';
$string['fa-ir'] = 'Persan';
$string['feedbacklabel'] = 'Instructions après la tentative';
$string['feedbacklabel_details'] = 'Le texte par défaut à afficher dans le champ de commentaires lors de la création d’une nouvelle activité Read Aloud.';
$string['fi-fi'] = 'Finnois';
$string['fil-ph'] = 'Philippin';
$string['fillcredentials'] = 'Définissez l’utilisateur et la clé secrète de l’API avec les informations d’identification existantes.';
$string['forever'] = 'N’expire jamais';
$string['fr-ca'] = 'Français (Can.)';
$string['fr-fr'] = 'Français (FR)';
$string['frankfurt'] = 'Francfort, Allemagne';
$string['freetrial'] = 'Obtenir les identifiants API de Cloud Poodll et un essai gratuit';
$string['freetrial_desc'] = 'Une boîte de dialogue devrait apparaître pour vous permettre de vous inscrire à un essai gratuit de Poodll. Après l’enregistrement, vous devez vous connecter au tableau de bord des membres pour obtenir votre utilisateur et votre clé secrète de l’API. Et enregistrer l’URL de votre site.';
$string['fullreport'] = 'Voir le rapport complet';
$string['gotnosound'] = 'Nous ne pouvions pas vous entendre. Veuillez vérifier les configurations et permissions de votre micro et essayer à nouveau.';
$string['grade'] = 'Note';
$string['grade_p'] = 'Note(%)';
$string['gradeaverage'] = 'Note moyenne de toutes les tentatives';
$string['gradehighest'] = 'Meilleure tentative';
$string['gradelatest'] = 'résultat de la dernière tentative';
$string['gradelowest'] = 'tentative la moins bonne';
$string['gradenone'] = 'Pas de note';
$string['gradenow'] = 'Évaluer maintenant';
$string['gradeoptions'] = 'Options des notes';
$string['gradeoptions_details'] = 'Note : Ceci détermine l’entrée du carnet de notes. La page de notation de ReadAloud n’est pas affectée et affichera la dernière tentative.';
$string['gradeoptions_help'] = 'Lorsqu’il y a plusieurs tentatives d’un utilisateur sur une lecture, ce paramètre détermine la tentative à utiliser lors de la notation.';
$string['grader'] = 'Noté par';
$string['grader_ai'] = 'IA';
$string['grader_human'] = 'Humain';
$string['grader_ungraded'] = 'Non noté';
$string['gradethisattempt'] = 'Noter cette tentative';
$string['grading'] = 'Notation';
$string['gradingbutton'] = 'Mode de notation';
$string['gradingbyuserheading'] = 'Noter toutes les tentatives pour : {$a}';
$string['gradingheading'] = 'Noter les dernières tentatives pour chaque utilisateur.';
$string['h_grade_p'] = 'Note Max(%)';
$string['h_wpm'] = 'WPM Max';
$string['he-il'] = 'Hébreu';
$string['hi-in'] = 'Hindi';
$string['highest'] = 'Le plus élevé';
$string['hu-hu'] = 'Hongrois';
$string['humanpostattempt'] = 'Affichage de l’évaluation (humain)';
$string['humanpostattempt_details'] = 'Ce qu’il faut montrer aux étudiants après qu’ils aient tenté et reçu une évaluation humaine';
$string['id'] = 'Identifiant';
$string['id-id'] = 'Indonésien';
$string['iscorrectlabel'] = 'Correct/Non correct';
$string['it-it'] = 'Italien (IT)';
$string['item'] = 'Élément';
$string['itemcontents'] = 'Description de la question';
$string['itemdetails'] = 'Détails de l’élément : {$a}';
$string['iteminuse'] = 'Cet élément fait partie de l’historique des tentatives des utilisateurs. Il ne peut pas être supprimé.';
$string['itemname'] = 'Nom de la question';
$string['itemorder'] = 'Ordre des éléments';
$string['itemsperpage'] = 'Élément par page';
$string['itemsperpage_details'] = 'Ceci définit le nombre de lignes à afficher sur les rapports ou les listes de tentatives.';
$string['itemsummary'] = 'Résumé de l’élément : {$a}';
$string['itemtitle'] = 'Titre de la question : {$a}';
$string['itemtype'] = 'Type de l’élément';
$string['ja-jp'] = 'Japonais';
$string['ko-kr'] = 'Coréen';
$string['landrhelp'] = 'Écoutez l’orateur. Répétez après chaque phrase et vérifiez votre prononciation.';
$string['landrreading'] = 'Entrainement';
$string['letsaddpassage'] = 'Il n’y a pas encore de passage de lecture pour cette activité. Ajoutons-en un.';
$string['london'] = 'Londres, GB';
$string['machinegradehybrid'] = 'Utiliser l’éval. humaine ou machine pour la note';
$string['machinegrademachineonly'] = 'Utilisez toujours l’éval. machine.';
$string['machinegrademethod'] = 'Notation Humaine/machine';
$string['machinegrademethod_details'] = 'Utiliser les évaluations de la machine ou les évaluations humaines comme notes dans le carnet de notes.';
$string['machinegrademethod_help'] = 'Utiliser les évaluations de la machine ou les évaluations humaines comme notes dans le carnet de notes.';
$string['machinegradenone'] = 'Ne jamais utiliser l’eval. machine pour noter';
$string['machinegradespushed'] = 'Les notes ont été transférées avec succès dans le carnet de notes';
$string['machinegrading'] = 'Évaluations par la machine';
$string['machinegradingbyuserheading'] = 'Tentatives évaluées par la machine pour : {$a}';
$string['machinegradingheading'] = 'La machine a évalué la dernière tentative pour chaque utilisateur.';
$string['machinepostattempt'] = 'Affichage de l’évaluation (machine)';
$string['machinepostattempt_details'] = 'Ce qu’il faut montrer aux étudiants après qu’ils aient tenté et reçu une évaluation par la machine';
$string['machineregradeall'] = 'Sauvegarder et réévaluer toutes les tentatives';
$string['machineregraded'] = 'A réussi à renoter {$a->done} tentatives. {$a->skipped} tentatives ignorées {$a->skipped}.';
$string['managersquestions'] = 'Gérer les quesitons';
$string['manualbreaktiming'] = 'Chronométrage manuel des pauses';
$string['masterinstance'] = 'Instance maître';
$string['masterinstance_details'] = 'L’instance maître permet à l’auteur de recopier les paramètres individuels d’une activité ReadAloud vers des copies existantes de la même activité. Elles doivent avoir exactement le même nom.';
$string['maxattempts'] = 'Nombre maximal de tentatives';
$string['mediumspeed'] = 'Médium';
$string['mingrade'] = 'Note minimum';
$string['mistakes'] = 'Erreurs';
$string['mistrans_count'] = 'Nombre';
$string['mistranscriptions'] = 'Erreurs de transcription';
$string['mistranscriptions_summary'] = 'Résumé des erreurs de transcription';
$string['modelaudio'] = 'Modèle Audio';
$string['modelaudio_breaksinstructions'] = 'Touchez des mots dans le passage ci-dessous pour ajouter une pause à ce moment-là dans la lecture audio en modes aperçu et pratique. Le système synchronisera automatiquement l’audio et le texte. Vérifiez le <i>timing des pauses manuelles</i> pour définir les pauses tapées à l’emplacement actuel de la lecture audio.';
$string['modelaudio_playerinstructions'] = 'L’audio du modèle actuel peut être écouté à l’aide du lecteur ci-dessous.';
$string['modulename'] = 'Poodll ReadAloud (Lecture à voix haute)';
$string['modulename_help'] = 'Lecture à voix haute est une activité conçue pour aider les enseignants à évaluer la fluidité de lecture de leurs étudiants. Les étudiants lisent un passage, défini par l’enseignant, dans un microphone. L’enseignant peut ensuite marquer les mots incorrects et obtenir les scores WCPM (Words Correct Per Minute, Mots corrects par minute) des étudiants.';
$string['modulenameplural'] = 'Lectures à voix haute';
$string['moveitemdown'] = 'Bas';
$string['moveitemup'] = 'Haut';
$string['ms-my'] = 'Malais';
$string['mumbai'] = 'Mumbai, Inde';
$string['myattemptssummary'] = 'Résumé des tentatives ({$a} tentatives)';
$string['name'] = 'Nom';
$string['nb-no'] = 'Norvégien';
$string['ng'] = 'Pas OK';
$string['nl-nl'] = 'Hollandais';
$string['noapisecret'] = 'Aucune clé secrète de l’API n’a été saisie. La lecture à haute voix ne fonctionnera pas correctement.';
$string['noapiuser'] = 'Aucune utilisateur de l’API n’a été saisi. La lecture à haute voix ne fonctionnera pas correctement.';
$string['noattemptsregrade'] = 'Aucune tentative à renoter';
$string['nocourseid'] = 'Vous devez spécifier un identifiant de module de cours ou un identifiant d’instance. Votre session a probablement expiré.';
$string['nocredentials'] = 'Utilisateur et clé secrète de l’API n’ont pas été saisis. Veuillez les saisir sur <a href="{$a}">la page des paramètres.</a> Vous pouvez les obtenir sur <a href="https://poodll.com/member">Poodll.com.</a>.';
$string['nodataavailable'] = 'Aucune donnée disponible';
$string['noitems'] = 'Ce test ne contient aucune question';
$string['nomistranscriptions'] = 'Aucune erreur de transcription';
$string['nopassage'] = 'Aucun passage en lecture';
$string['normalhelp'] = 'Lisez le passage à haute voix. Parlez à une vitesse qui vous est naturelle.';
$string['nosubscriptions'] = 'Il n’y a pas d’abonnement en cours pour ce site/plugin.';
$string['notgradedyet'] = 'Votre dernière tentative a été reçue, mais n’a pas encore été évaluée. Cela peut prendre quelques minutes.';
$string['notimelimit'] = 'Aucune limite de temps';
$string['notmasterinstance'] = 'Vous ne pouvez pas pousser le passage ou les alternatives si l’instance maître n’est pas cochée dans les paramètres de l’activité.';
$string['notok'] = 'Pas OK';
$string['notokenincache'] = 'Rafraîchissez pour voir les informations sur la licence. Contactez le support Poodll en cas de problème.';
$string['nottsvoice'] = 'Pas de voix TTS';
$string['novalidcredentials'] = 'L’utilisateur et la clé secrète de l’API ont été rejetés et l’accès n’a pas pu être obtenu. Veuillez les contrôler sur <a href="{$a}">la page des paramètres.</a> Vous pouvez les obtenir sur <a href="https://poodll.com/member">Poodll.com.</a>.';
$string['numeric'] = 'Doit être numérique';
$string['ok'] = 'OK';
$string['onemin'] = '1 minute';
$string['oneminxsecs'] = '1 minute {$a} secondes';
$string['open'] = 'Ouvert :';
$string['ottawa'] = 'Ottawa, Canada';
$string['overview'] = 'Vue d’ensemble';
$string['overview_help'] = 'Aide générale';
$string['passage'] = 'Passage à lire';
$string['passage_descr'] = 'Saisissez le passage à lire ci-dessus. Il ne doit pas dépasser 3000 caractères si vous souhaitez que le son soit généré pour ce passage.';
$string['passage_help'] = 'Le passage qui sera montré à l’étudiant pour qu’il le lise.';
$string['passageindex'] = 'Index des passages.';
$string['passagelabel'] = 'Passage à lire';
$string['passageword'] = 'Mot des passages';
$string['pl-pl'] = 'Polonais';
$string['playbutton'] = 'Jouer';
$string['pluginadministration'] = 'Administration de Lecture à voix haute';
$string['pluginname'] = 'Activité de Lecture à voix haute';
$string['postattempt_eval'] = 'Affciher le passage, et l’évaluation (WPM, Acc, Note)';
$string['postattempt_evalerrors'] = 'Afficher le passage, l’évaluation (WPM, Acc, Note) et les erreurs';
$string['postattempt_evalerrorsnograde'] = 'Montrer le passage, l’évaluation (WPM, Acc) et les erreurs';
$string['postattempt_none'] = 'Afficher le passage. Ne pas afficher l’évaluation ou les erreurs.';
$string['preview'] = 'Aperçu';
$string['previewhelp'] = 'Écoutez un orateur lire le passage à haute voix. Vous n’avez pas besoin de lire à haute voix.';
$string['previewitem'] = 'Prévisualiser l’élément';
$string['previewreading'] = 'Écouter';
$string['privacy:metadata'] = 'Le plugin Poodll Read Aloud stocke des données personnelles.';
$string['privacy:metadata:sessionscore'] = 'Le score de la session pour la tentative';
$string['privacy:metadata:timemodified'] = 'La dernière fois que cette tentative a été modifiée';
$string['privacy:metadata:transcriptpurpose'] = 'Les transcriptions courtes de l’enregistrement.';
$string['privacy:metadata:userid'] = 'L’identifiant de l’utilisateur pour la tentative de lecture à voix haute';
$string['privacy:metadata:wpm'] = 'Le nombre de mots par minute pour la tentative';
$string['processing'] = 'Envoi en cours';
$string['pt-br'] = 'Portugais (Br)';
$string['pt-pt'] = 'Portugais (P)';
$string['push'] = 'Transférer';
$string['pushalltogradebook'] = 'Re-transférer les notes dans le carnet de notes';
$string['pushgradesettings'] = 'Paramètres des notes';
$string['quiz'] = 'Test';
$string['rawgrade_p'] = 'Note(%)';
$string['readaloud:addinstance'] = 'Ajouter une nouvelle Lecture à voix haute';
$string['readaloud:itemedit'] = 'Modifier les questions';
$string['readaloud:itemview'] = 'Voir les questions';
$string['readaloud:view'] = 'Aperçu de Lecture à voix haute';
$string['readaloudname'] = 'Lecture à voix haute';
$string['reattempt'] = 'Nouvelle tentative';
$string['recorder'] = 'Type d’enregistreur audio';
$string['region'] = 'Région cloud AWS';
$string['regrade'] = 'Re-noter';
$string['reports'] = 'Rapports';
$string['returnmenu'] = 'Revenir au menu';
$string['returntomenu'] = 'Revenir au menu';
$string['returntoreports'] = 'Revenir aux rapports';
$string['ro-ro'] = 'Roumain';
$string['rsquestions'] = 'Questions';
$string['ru-ru'] = 'Russe';
$string['saopaulo'] = 'San Paolo, Brésil';
$string['saveandnext'] = 'Enregistrer… suivant';
$string['saveitem'] = 'Sauvegarder l’élément';
$string['savemodelaudio'] = 'Sauvegarder l’enregistrement';
$string['sessionscoremethod'] = 'Calcul des notes';
$string['showingattempt'] = 'Montrer les tentatives de : {$a}';
$string['singapore'] = 'Singapour';
$string['slowspeed'] = 'Lentement';
$string['startreading'] = 'Lire';
$string['stopbutton'] = 'Arrêter';
$string['submitted'] = 'envoyé';
$string['sv-se'] = 'Suédois';
$string['sydney'] = 'Sydney, Australie';
$string['ta-in'] = 'Tamoul';
$string['targetwpm'] = 'Objectif en MPM';
$string['te-in'] = 'Télégu';
$string['timecreated'] = 'Date de création';
$string['timelimit'] = 'Temps donné';
$string['tokyo'] = 'Tokyo, Japon';
$string['totalattempts'] = 'Tentatives';
$string['tr-tr'] = 'Turc';
$string['transcriber_details'] = 'Le moteur de transcription à utiliser pour la lecture ligne par ligne.';
$string['transcriber_strict'] = 'Utiliser STT strict';
$string['transcript'] = 'Transcrire';
$string['ttslanguage_details'] = 'Cette valeur est utilisée pour la reconnaissance vocale et la synthèse vocale.';
$string['ttslanguage_help'] = 'Cette valeur est utilisée pour la reconnaissance vocale et la synthèse vocale.';
$string['ttsspeed'] = 'Vitesse TTS';
$string['ttsspeed_help'] = 'La vitesse de lecture de la voix de la machine. Lent ou Extra Lent sont bons pour les apprenants, mais peuvent déformer l’audio.';
$string['ttsvoice'] = 'Voix TTS';
$string['uk-ua'] = 'Ukrainien';
$string['unlimited'] = 'illimitées';
$string['until'] = 'Jusqu’à :';
$string['uploadconverterror'] = 'Une erreur est survenue lors de l’envoi du fichier. Votre tentative n’a pas été enregistrée. Réactualiser la page et essayer à nouveau.';
$string['uploadmodelaudio'] = 'Déposer un fichier audio';
$string['useast1'] = 'USA côte Est';
$string['username'] = 'Utilisateur';
$string['view'] = 'Voir';
$string['viewend'] = 'Activité fermée';
$string['viewgrading'] = 'Voir les évaluations';
$string['viewreports'] = 'Voir les rapports';
$string['viewstart'] = 'Activité ouverte';
$string['waiting'] = '...attendre...';
$string['welcomelabel'] = 'Message d’accueil';
$string['welcomelabel_details'] = 'Les instructions par défaut. Elles peuvent être modifiées lors de la création d’une nouvelle activité de lecture à haute voix.';
$string['welcomemenu'] = 'Choisissez parmi les options ci-dessous.';
$string['whatdonow'] = 'Que voulez-vous faire ?';
$string['wpm'] = 'MPM';
$string['xmins'] = '{$a} minutes';
$string['xminsecs'] = '{$a->minutes} minutes {$a->seconds} secondes';
$string['xsecs'] = '{$a->seconds} secondes';
$string['zh-cn'] = 'Chinois (Mandarin)';
