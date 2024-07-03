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
 * Language file.
 *
 * @package   theme_ahnac
 * @copyright 2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Cette ligne protège le fichier contre un accès direct par URL.
defined('MOODLE_INTERNAL') || die();

// Le nom du deuxième onglet dans les paramètres du thème.
$string['advancedsettings'] = 'Paramètres avancés';
// Le paramètre de couleur de marque.
$string['brandcolor'] = 'Couleur de marque';
// La description du paramètre de couleur de marque.
$string['brandcolor_desc'] = 'La couleur d\'accentuation.';
// Une description affichée dans le sélecteur de thème d'administration.
$string['choosereadme'] = 'Le thème Ahnac est un thème enfant de Boost. Il ajoute la possibilité de télécharger des photos d\'arrière-plan.';
// Nom des pages de paramètres.
$string['configtitle'] = 'Paramètres Ahnac';
// Nom du premier onglet des paramètres.
$string['generalsettings'] = 'Paramètres généraux';
// Le nom de notre plugin.
$string['pluginname'] = 'Ahnac';
// Paramètres des fichiers de préréglage.
$string['presetfiles'] = 'Fichiers de préréglage de thème supplémentaires';
// Texte d'aide des fichiers de préréglage.
$string['presetfiles_desc'] = 'Les fichiers de préréglage peuvent être utilisés pour modifier radicalement l\'apparence du thème. Voir <a href=https://docs.moodle.org/dev/Boost_Presets>Boost presets</a> pour des informations sur la création et le partage de vos propres fichiers de préréglage, et voir le <a href=http://moodle.net/boost>Presets repository</a> pour des préréglages partagés par d\'autres.';
// Paramètre de préréglage.
$string['preset'] = 'Préréglage de thème';
// Texte d'aide de préréglage.
$string['preset_desc'] = 'Choisissez un préréglage pour changer largement l\'apparence du thème.';
// Paramètre SCSS brut.
$string['rawscss'] = 'SCSS brut';
// Texte d'aide du paramètre SCSS brut.
$string['rawscss_desc'] = 'Utilisez ce champ pour fournir du code SCSS ou CSS qui sera injecté à la fin de la feuille de style.';
// Paramètre SCSS initial brut.
$string['rawscsspre'] = 'SCSS initial brut';
// Texte d'aide du paramètre SCSS initial brut.
$string['rawscsspre_desc'] = 'Dans ce champ, vous pouvez fournir du code SCSS d\'initialisation, il sera injecté avant tout le reste. La plupart du temps, vous utiliserez ce paramètre pour définir des variables.';
// Nous devons inclure une chaîne de langage pour chaque région de bloc.
$string['region-side-pre'] = 'Droite';

// Toutes les chaînes de caractères de footer.mustache
$string['ahnacinfo1'] = 'Le campus AHNAC est dédié à soutenir votre développement professionnel grâce à des cours en ligne disponibles à tout moment.';
$string['ahnacinfo2'] = 'Si vous avez des besoins de support plus spécifiques, demandez à votre manager de créer un cours en ligne.';
$string['ahnacinfo3'] = 'Si vous rencontrez des problèmes, n\'hésitez pas à contacter votre département de formation.';
$string['sitemaptitle'] = 'Plan du site';
$string['homeurl'] = new moodle_url('/my');
$string['home'] = 'Accueil';
$string['coursesurl'] = new moodle_url('/course/index.php', ['categoryid' => 1]);
$string['courses'] = 'Cours';
$string['tutorialsurl'] = new moodle_url('/course/index.php', ['categoryid' => 3]);
$string['tutorials'] = 'Tutoriels';
$string['followus'] = 'Suivez-nous';
$string['facebook'] = 'Facebook';
$string['instagram'] = 'Instagram';
$string['twitter'] = 'Twitter';
$string['youtube'] = 'YouTube';
$string['linkedin'] = 'LinkedIn';
$string['otherlinks'] = 'Autres';
$string['podcasts'] = 'Podcasts Bonne Mine';
$string['myahnac'] = 'MyAhnac';
$string['bluekango'] = 'BlueKanGo';
