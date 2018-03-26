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
 * This file processes AJAX enrolment actions and returns JSON for the manual enrolments plugin
 *
 * The general idea behind this file is that any errors should throw exceptions
 * which will be returned and acted upon by the calling AJAX script.
 */
defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/enrol/cohortrestricted/lib.php');

function enrol_manual_get_potential_cohorts_filtered($context, $enrolid, $search, $page, $perpage, $addedenrollment) {
    global $COURSE;

    $systemcontext = context_system::instance();

    $restrict = true;

    if (has_capability('moodle/site:config', $systemcontext)) {
        $restrict = false;
    }

    if (!enrol_is_enabled('restrictedcohort')) {
        $restrict = false;
    }


    $config = get_config('enrol_cohortrestricted');
    if ($config->restrictionmode == NO_RESTRICTION) {
        $restrict = false;
    }

    if ($forcefiltering = optional_param('force', false, PARAM_BOOL)) {
        $restrict = true;
    }

    $enrolplugin = enrol_get_plugin('cohortrestricted');

    if (!$restrict) {
        return enrol_manual_get_potential_cohorts($context, $enrolid, $search, $page, $perpage, $addedenrollment);
    } else {
        return $enrolplugin->static_get_cohort_options($context);
    }
}