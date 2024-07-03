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
 * The mod_certificate course module viewed event.
 *
 * @package    mod_certificate
 * @copyright  2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_certificate\event;

defined('MOODLE_INTERNAL') || die();

/**
 * The mod_certificate course module viewed event class.
 *
 * @package    mod_certificate
 * @since      Moodle 4.3
 * @copyright  2024 Lepetz Thimothée <lepetz.timo@gmail.com>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class course_module_viewed extends \core\event\course_module_viewed {

    /**
     * Init method.
     */
    protected function init() {
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
        $this->data['objecttable'] = 'certificate';
    }

    /**
     * Get URL related to the action.
     *
     * @return \moodle_url
     */
    public function get_url() {
        $params = array('id' => $this->contextinstanceid);
        // Vous pouvez ajouter des paramètres supplémentaires si nécessaire.
        return new \moodle_url("/mod/{$this->objecttable}/view.php", $params);
    }

    /**
     * Définit la correspondance des identifiants d'objet pour la sauvegarde et la restauration.
     *
     * @return array
     */
    public static function get_objectid_mapping() {
        return array('db' => 'certificate', 'restore' => 'certificate');
    }

    /**
     * Définit la correspondance des autres données de l'événement.
     *
     * @return false|array
     */
    public static function get_other_mapping() {
        // Si vous avez d'autres données à mapper, vous pouvez les inclure ici.
        // Dans cet exemple, nous n'avons pas d'autres données à mapper.
        return false;
    }
}