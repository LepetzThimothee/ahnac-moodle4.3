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
 * Generate html code for favorite list in block_dashboard
 *
 * @package    block_dashboard
 * @copyright  2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace block_dashboard\favorite_endpoint;

// Function to generate the HTML code for favorite course in "my list" section in block_dashboard
function generate_favorites_html($moodleurl, $courseid, $coursefullname, $categoryid, $categoryname, $hascategory)
{
    $favoritesHTML = '';
    if ($hascategory == "true") {
        $favoritesHTML .= '
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="' . $moodleurl . "course/view.php?id=$courseid" . '">' . $coursefullname . '</a>
                <a class="btn btn-remove-fav" href="#" data-course-id="' . $courseid . '">Remove from Favorites</a>
            </li>
        ';
    } else {
        $favoritesHTML .= '
            <tr>
                <td>
                    <div class="accordion" id="accordionCategory' . $categoryid . '">
                        <div class="card-header" id="headingCategory' . $categoryid . '">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseCategory' . $categoryid . '" aria-expanded="true" aria-controls="collapseCategory' . $categoryid . '">
                                    ' . $categoryname . ' <i class="fas fa-chevron-down float-right"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseCategory' . $categoryid . '" class="collapse" aria-labelledby="headingCategory' . $categoryid . '" data-parent="#accordionCategory' . $categoryid . '">
                            <div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="' . $moodleurl . "course/view.php?id=$courseid" . '">' . $coursefullname . '</a>
                                        <a class="btn btn-remove-fav" href="#" data-course-id="' . $courseid . '">Remove from Favorites</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        ';
    }

    return $favoritesHTML; // Retourner le HTML des favoris
}

// Vérifier si les données attendues sont présentes dans la requête.
if (isset($_GET['moodleurl'], $_GET['courseid'], $_GET['coursefullname'], $_GET['categoryid'], $_GET['categoryname'], $_GET['hascategory'])) {
    // Récupérer les données de la requête.
    $moodleurl = $_GET['moodleurl'];
    $courseid = $_GET['courseid'];
    $coursefullname = $_GET['coursefullname'];
    $categoryid = $_GET['categoryid'];
    $categoryname = $_GET['categoryname'];
    $hascategory = $_GET['hascategory'];

    // Appeler la fonction pour générer le HTML des favoris.
    $favoritesHTML = generate_favorites_html($moodleurl, $courseid, $coursefullname, $categoryid, $categoryname, $hascategory);

    // Envoyer le HTML généré en réponse à la requête AJAX.
    echo $favoritesHTML;
} else {
    // Si des données attendues sont manquantes, renvoyer une réponse d'erreur.
    http_response_code(400);
    echo 'Missing parameters in the request.';
}
