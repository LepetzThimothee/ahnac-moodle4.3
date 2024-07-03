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
 * JavaScript module for managing favorite courses in the dashboardcourselist block.
 *
 * @module block_dashboardcourselist/manage_favorite_dashboardcourselist
 * @copyright   2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
import $ from 'jquery';
import * as Notification from 'core/notification';
import * as util from 'block_dashboardcourselist/course_favorite_util';

/**
 * Handle click event on favorite icon.
 *
 * @param {Event} event Click event object.
 */
const handleFavoriteIconClick = (event) => {
    event.preventDefault(); // Prevent default link behavior
    const courseId = event.currentTarget.dataset.courseId;
    const isFavorite = $(event.currentTarget).hasClass('text-yellow'); // Check if the icon has the 'text-yellow' class
    util.setCourseFavouriteState(parseInt(courseId), !isFavorite).then(success => {
        if (success) {
            $(event.currentTarget).toggleClass('text-yellow text-primary'); // Toggle the classes 'text-yellow' and 'text-primary'
            // Create and dispatch custom event
            const favoriteChangedEvent = new CustomEvent('favoriteCourseChanged', {
                detail: {
                    courseId: courseId
                }
            });
            document.dispatchEvent(favoriteChangedEvent);
        } else {
            Notification.alert('Failed to update course favorite status.');
        }
        return;
    }).catch(Notification.exception);
};

/**
 * Handle removeFavoriteCourse event.
 *
 * @param {Event} event removeFavoriteCourse event object.
 */
const handleRemoveFavoriteCourse = (event) => {
    const data = event.detail;
    // Update the display based on favorite changes
    // and accordingly update the display in the bloc_dashboardcourselist
    const element = document.querySelector('.favorite-icon[data-course-id="' + data.courseId + '"]');
    if (element) {
        element.classList.toggle('text-yellow');
        element.classList.toggle('text-primary');
    }
};

/**
 * Initialize the favorite course functionality.
 *
 * @method init
 */
export const init = () => {
    // Event listener for clicking on favorite icon
    $('.favorite-icon').on('click', (event) => handleFavoriteIconClick(event));
    // Event listener to detect favorite changes
    document.addEventListener('removeFavoriteCourse', handleRemoveFavoriteCourse);
};