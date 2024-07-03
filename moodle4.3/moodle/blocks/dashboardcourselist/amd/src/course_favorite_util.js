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
 * @copyright   2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
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
export const setCourseFavouriteState = (courseId, status) => {
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