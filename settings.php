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
 * Cohort enrolment plugin settings and presets.
 *
 * @package    enrol_cohortrestricted
 * @copyright  2010 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    //--- general settings -----------------------------------------------------------------------------------
    $settings->add(new admin_setting_heading('enrol_cohortrestricted_settings', '', get_string('pluginname_desc', 'enrol_cohortrestricted')));

    //--- enrol instance defaults ----------------------------------------------------------------------------
    if (!during_initial_install()) {
        $options = get_default_enrol_roles(context_system::instance());
        $student = get_archetype_roles('student');
        $student = reset($student);
        $settings->add(new admin_setting_configselect('enrol_cohortrestricted/roleid',
            get_string('defaultrole', 'role'), '', $student->id, $options));

        $options = array(
            ENROL_EXT_REMOVED_UNENROL        => get_string('extremovedunenrol', 'enrol'),
            ENROL_EXT_REMOVED_SUSPENDNOROLES => get_string('extremovedsuspendnoroles', 'enrol'));
        $settings->add(new admin_setting_configselect('enrol_cohortrestricted/unenrolaction', get_string('extremovedaction', 'enrol'), get_string('extremovedaction_help', 'enrol'), ENROL_EXT_REMOVED_UNENROL, $options));
    }

    $key = 'enrol_cohortrestricted/restrictionmode';
    $label = get_string('configrestrictionmode', 'enrol_cohortrestricted');
    $desc = get_string('configrestrictionmode_desc', 'enrol_cohortrestricted');
    $default = 0;
    $options = array(
        0 => get_string('norestriction', 'enrol_cohortrestricted'),
        1 => get_string('restrictionbysql', 'enrol_cohortrestricted'),
        2 => get_string('restrictionbyfield', 'enrol_cohortrestricted'),
    );
    $settings->add(new admin_setting_configselect($key, $label, $desc, $default, $options));

    $key = 'enrol_cohortrestricted/restrictionsql';
    $label = get_string('configrestrictionsql', 'enrol_cohortrestricted');
    $desc = get_string('configrestrictionsql_desc', 'enrol_cohortrestricted');
    $default = '';
    $settings->add(new admin_setting_configtext($key, $label, $desc, $default));

    $key = 'enrol_cohortrestricted/restrictioncohortfield';
    $label = get_string('configrestrictioncohortfield', 'enrol_cohortrestricted');
    $desc = get_string('configrestrictioncohortfield_desc', 'enrol_cohortrestricted');
    $default = '';
    $options = array(
        'name' => get_string('name'),
        'idnumber' => get_string('idnumber'),
    );
    $settings->add(new admin_setting_configselect($key, $label, $desc, $default, $options));

    $key = 'enrol_cohortrestricted/restrictionfieldpattern';
    $label = get_string('configrestrictionpattern', 'enrol_cohortrestricted');
    $desc = get_string('configrestrictionpattern_desc', 'enrol_cohortrestricted');
    $default = '';
    $settings->add(new admin_setting_configtext($key, $label, $desc, $default));
}
