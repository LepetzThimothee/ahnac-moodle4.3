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
 * JavaScript module for managing favorite courses.
 *
 * @module theme_ahnac/main
 * @copyright   2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import $ from 'jquery';
import * as Notification from 'core/notification';
import * as Ajax from 'core/ajax';

/**
 * Set the favourite state on a list of courses.
 *
 * @param {Object} args Arguments send to the webservice.
 * @return {Promise} Resolve with warnings.
 */
const setFavouriteCourses = args => {
    const request = {
        methodname: 'core_course_set_favourite_courses',
        args: args
    };

    return Ajax.call([request])[0];
};

/**
 * Set the courses favourite status.
 *
 * @param {Number} courseId Course id to favourite.
 * @param {boolean} status New favourite status.
 * @return {Promise} Repository promise.
 */
const setCourseFavouriteState = (courseId, status) => {
    return setFavouriteCourses({
        courses: [
            {
                'id': courseId,
                'favourite': status
            }
        ]
    }).then(result => {
        if (result.warnings.length === 0) {
            return true;
        } else {
            return false;
        }
    }).catch(Notification.exception);
};

/**
 * Handle click event on favorite icon.
 *
 * @param {Event} event Click event object.
 */
const handleFavoriteIconClick = (event) => {
    event.preventDefault(); // Prevent default link behavior
    const courseId = event.currentTarget.dataset.courseId;
    const isFavorite = $(event.currentTarget).hasClass('text-yellow'); // Check if the icon has the 'text-yellow' class
    setCourseFavouriteState(parseInt(courseId), !isFavorite).then(success => {
        if (success) {
            $(event.currentTarget).toggleClass('text-yellow text-primary'); // Toggle the classes 'text-yellow' and 'text-primary'
        } else {
            Notification.alert('Failed to update course favorite status.');
        }
        return;
    }).catch(Notification.exception);
};

/**
 * Filters the courses based on the selected tags in the dropdown menus.
 *
 * This function iterates through each course element and determines whether
 * it should be displayed or hidden based on the currently selected filters.
 */
const filterCourses = () => {
    const filters = getSelectedFilters();
    $('.coursebox').each(function() {
        const courseId = $(this).data('courseid').toString();
        const showCourse = shouldShowCourse(courseId, filters);
        $(this).toggle(showCourse);
    });
};

/**
 * Retrieves the selected filters from the dropdown menus.
 *
 * This function gathers the selected options from all dropdown menus with the
 * class 'custom-select' and creates an object mapping keywords to arrays of
 * selected course IDs.
 *
 * @returns {Object} filters - An object where each key is a keyword and each value is an array of course IDs.
 */
const getSelectedFilters = () => {
    const filters = {};
    $('.custom-select').each(function() {
        const keyword = $(this).attr('name');
        const selectedOption = $(this).find('option:selected');
        const courseIds = selectedOption.data('course-ids');
        if (courseIds) {
            filters[keyword] = courseIds.toString().split(',');
        }
    });
    return filters;
};

/**
 * Determines if a course should be displayed based on the selected filters.
 *
 * This function checks if a given course ID is included in all of the selected
 * filters. If the course ID is not included in any filter, the course will be
 * hidden.
 *
 * @param {string} courseId - The ID of the course to check.
 * @param {Object} filters - An object where each key is a keyword and each value is an array of course IDs.
 * @returns {boolean} - Returns true if the course should be displayed, false otherwise.
 */
const shouldShowCourse = (courseId, filters) => {
    for (const keyword in filters) {
        if (!filters[keyword].includes(courseId)) {
            return false;
        }
    }
    return true;
};

/**
 * Initialize the functionality of our theme.
 *
 * @method init
 */
export const init = () => {
    $('.favorite-icon').on('click', (event) => handleFavoriteIconClick(event));
    $('.custom-select').on('change', () => filterCourses());
    $(function() {
        filterCourses();
    });
};