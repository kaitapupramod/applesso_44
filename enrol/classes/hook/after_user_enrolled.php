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

namespace core_enrol\hook;

use stdClass;

/**
 * Hook after a user is enrolled in a course for an enrolment instance.
 *
 * @package    core_enrol
 * @copyright  2024 Safat Shahin <safat.shahin@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
#[\core\attribute\label('Allows plugins or features to perform actions after a user is enrolled in a course.')]
#[\core\attribute\tags('enrol', 'user')]
class after_user_enrolled {

    /**
     * Constructor for the hook.
     *
     * @param stdClass $enrolinstance The enrol instance.
     * @param stdClass $userenrolmentinstance The user enrolment instance.
     */
    public function __construct(
        public readonly stdClass $enrolinstance,
        public readonly stdClass $userenrolmentinstance,
    ) {
    }

    /**
     * Get the user id.
     *
     * @return int
     */
    public function get_userid(): int {
        return $this->userenrolmentinstance->userid;
    }
}
