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
 * A javascript module for the dashboard block.
 *
 * @module block_dashboard/manage_favorite_dashboard
 * @copyright   2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
import $ from 'jquery';
import * as Str from 'core/str';
import * as Notification from 'core/notification';
import * as Ajax from 'core/ajax';

/**
 * Update dashboard text.
 *
 * @param {String} text Text to update.
 * @param {String} head Head to update.
 */
const updateDashboardText = (text, head) => {
    const nbMyCoursesContent = document.getElementById("nb-my-courses").textContent.trim();
    const nbMyTrainingCoursesContent = document.getElementById("nb-my-training-courses").textContent.trim();
    const nbMyListContent = document.getElementById("nb-my-list").textContent.trim();

    $('#dashboard-text').text(text);
    $('#t-head-text').text(head);
    $('#dashboard-container').show();

    const $tElements = {
        default: $('#t-head-default, #t-body-default'),
        myCourses: $('#t-head-my-courses, #t-body-my-courses'),
        myTrainingCourses: $('#t-head-my-training-courses, #t-body-my-training-courses'),
        myList: $('#t-body-my-list')
    };

    if ($('#my-courses .active').length > 0 && nbMyCoursesContent > 0) {
        toggleElementsVisibility($tElements, "myCourses");
    } else if ($('#my-training-courses .active').length > 0 && nbMyTrainingCoursesContent > 0) {
        toggleElementsVisibility($tElements, "myTrainingCourses");
    } else if ($('#my-list .active').length > 0 && nbMyListContent > 0) {
        toggleElementsVisibility($tElements, "myList");
    } else {
        toggleElementsVisibility($tElements, "default");
    }
};

/**
 * Toggle visibility of elements.
 *
 * @param {Object} $elements Object containing jQuery elements.
 * @param {String} target Target element key.
 */
const toggleElementsVisibility = ($elements, target) => {
    Object.keys($elements).forEach(key => {
        if (key === target) {
            if (key === 'myList') {
                $('#t-head-default').show();
            }
            $elements[key].show();
        } else {
            $elements[key].hide();
        }
    });
};

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
        return result.warnings.length === 0;
    }).catch(Notification.exception);
};

/**
 * Retrieve strings for dashboard.
 *
 * @return {Promise<Array>} Array of strings.
 */
const getStrings = async () => {
    const stringKeys = [
        { key: 'no_course_text', component: 'block_dashboard' },
        { key: 'no_session_text', component: 'block_dashboard' },
        { key: 'no_training_course_text', component: 'block_dashboard' },
        { key: 'nothing_in_my_list_text', component: 'block_dashboard' },
        { key: 'your_course', component: 'block_dashboard' },
        { key: 'your_upcoming_sessions', component: 'block_dashboard' },
        { key: 'your_training_courses', component: 'block_dashboard' },
        { key: 'my_list', component: 'block_dashboard' },
        { key: 'moodle_url', component: 'block_dashboard' }
    ];
    return Str.get_strings(stringKeys).catch(error => {
        Notification.exception(error);
        return [];
    });
};

/**
 * Handle click event on dashboard buttons.
 *
 * @param {Event} event Click event object.
 */
const handleDashboardButtonClick = (event) => {
    $('.dashboard-button').removeClass('active');
    $(event.currentTarget).addClass('active');
};

/**
 * Handle click event on dashboard item.
 *
 * @param {Array} strings Array of strings.
 * @param {number} index1 Index of the first string.
 * @param {number} index2 Index of the second string.
 */
const handleDashboardItemClick = (strings, index1, index2) => {
    updateDashboardText(strings[index1], strings[index2]);
};

/**
 * Update the display after removing a course from favorites.
 * @param {HTMLElement} removedCourseElement The HTML element of the removed course.
 */
const updateDisplayAfterRemoveFavorite = (removedCourseElement) => {
    updateNbMyListDisplay('remove');
    removedCourseElement.remove(); // Remove the course from the HTML
};

/**
 * Update the display of the number of items in "My List".
 * @param {string} action Action to perform: 'add' to add 1, 'remove' to remove 1.
 */
const updateNbMyListDisplay = (action) => {
    let nbMyListContent = parseInt(document.getElementById("nb-my-list").textContent.trim(), 10); // Parse to integer
    nbMyListContent += (action === 'add') ? 1 : -1;
    $('#t-body-default').toggle(nbMyListContent === 0);
    $('#t-body-my-list').toggle(nbMyListContent !== 0);
    document.getElementById("nb-my-list").textContent = nbMyListContent.toString().padStart(3, '0');
};

/**
 * Handle click event on remove favorite button.
 *
 * @param {Event} event Click event object.
 */
const handleRemoveFavoriteButtonClick = (event) => {
    event.preventDefault();
    const courseId = event.currentTarget.dataset.courseId;
    const removedCourseElement = event.currentTarget.closest('.list-group-item'); // Get the HTML element of the removed course
    setCourseFavouriteState(parseInt(courseId), false).then(success => {
        if (success) {
            updateDisplayAfterRemoveFavorite(removedCourseElement);
            const removeFavoritEvent = new CustomEvent('removeFavoriteCourse', {
                detail: {
                    courseId: parseInt(courseId)
                }
            });
            document.dispatchEvent(removeFavoritEvent);
        } else {
            Notification.alert('Failed to remove course from favorites.');
        }
        return;
    }).catch(Notification.exception);
};

/**
 * Update favorites by either removing the course from the favorite list or fetching updated HTML via AJAX.
 *
 * If the course has a remove button, it removes the course from the list.
 * Otherwise, it sends an AJAX request to fetch updated HTML code for the course.
 *
 * @param {number} courseId - The ID of the course to update.
 * @param {string} moodleUrl - The base URL of the Moodle site.
 */
const updateFavorites = (courseId, moodleUrl) => {
    const removeButton = document.querySelector('.btn-remove-fav[data-course-id="' + courseId + '"]');
    if (removeButton) {
        const removedCourseElement = removeButton.closest('.list-group-item');
        updateDisplayAfterRemoveFavorite(removedCourseElement);
    } else {
        updateNbMyListDisplay('add');
        const element = document.querySelector('.favorite-icon[data-course-id="' + courseId + '"]');
        const hasCategory = document.getElementById('accordionCategory' + element.dataset.courseCategoryId) !== null;
        $.ajax({
            url: moodleUrl + "blocks/dashboard/favorite_endpoint.php",
            type: 'GET',
            data: {
                moodleurl: moodleUrl,
                courseid: courseId,
                coursefullname: element.dataset.courseFullname,
                categoryid: element.dataset.courseCategoryId,
                categoryname: element.dataset.courseCategoryName,
                hascategory: hasCategory
            },
            success: function(data) {
                if (hasCategory) {
                    const container = document.getElementById('collapseCategory' + element.dataset.courseCategoryId);
                    const ulElement = container.querySelector('ul.list-group');
                    ulElement.innerHTML += data;
                } else {
                    document.getElementById('t-body-my-list').innerHTML += data;
                }
            },
            error: function(xhr, status, error) {
                Notification.alert(error);
            }
        });
    }
};

/**
 * Handle the 'favoriteCourseChanged' event.
 *
 * @param {Event} event - The favoriteCourseChanged event object.
 * @param {string} moodleUrl - The base URL of the Moodle site.
 */
const handleFavoriteCourseChanged = (event, moodleUrl) => {
    const data = event.detail;
    updateFavorites(data.courseId, moodleUrl);
};

/**
 * Toggle the chevron icon class.
 *
 * @param {Event} event Click event object.
 */
const toggleChevronIcon = (event) => {
    $(event.currentTarget).find('i').toggleClass('fa-chevron-down fa-chevron-up');
};

/**
 * Initialize dashboard functionality.
 *
 * @method init
 */
export const init = async () => {
    document.addEventListener('favoriteCourseChanged', (event) => handleFavoriteCourseChanged(event, strings[8]));
    $('.dashboard-button').on('click', (event) => handleDashboardButtonClick(event));
    const strings = await getStrings();
    $('#my-courses').on('click', () => handleDashboardItemClick(strings, 0, 4));
    $('#my-sessions').on('click', () => handleDashboardItemClick(strings, 1, 5));
    $('#my-training-courses').on('click', () => handleDashboardItemClick(strings, 2, 6));
    $('#my-list').on('click', () => handleDashboardItemClick(strings, 3, 7));
    $('.accordion button[data-toggle="collapse"].text-left').on('click', (event) => toggleChevronIcon(event));
    $('#t-body-my-list').on('click', '.btn-remove-fav', (event) => handleRemoveFavoriteButtonClick(event));
};