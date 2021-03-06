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
 * Strings for component 'enrol_cohortrestricted', language 'en'.
 *
 * @package    enrol_cohortrestricted
 * @copyright  2010 Petr Skoda  {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['privacy:metadata'] = "The Cohort Restricted Enrol do not store any data belonging to users";

$string['cohortrestricted:config'] = 'Can configure the restricted cohort enrol';
$string['cohortrestricted:unenrol'] = 'Can unenrol';
$string['cohortrestricted:isrestricted'] = 'Has cohort list restrictions';

$string['addgroup'] = 'Add to group';
$string['assignrole'] = 'Assign role';
$string['cohort:config'] = 'Configure cohort instances';
$string['cohort:unenrol'] = 'Unenrol suspended users';
$string['defaultgroupnametext'] = '{$a->name} cohort {$a->increment}';
$string['instanceexists'] = 'Cohort is already synchronised with selected role';
$string['pluginname'] = 'Filtered Cohort sync';
$string['pluginname_desc'] = 'Cohort enrolment plugin synchronises cohort members with course participants.';
$string['filter'] = 'Filter';
$string['status'] = 'Active';
$string['creategroup'] = 'Create new group';
$string['cohortfilter'] = 'Filter on name';
$string['configrestructionsql'] = 'Restriction query';
$string['norestriction'] = 'No restriction';
$string['restrictionbysql'] = 'Restriction by sql';
$string['restrictionbyfield'] = 'Restriction by field';
$string['configrestrictionmode'] = 'Restriction mode';
$string['configrestrictionsql'] = 'Restriction SQL query';
$string['configrestrictioncohortfield'] = 'Cohort field to analyse';
$string['configrestrictionpattern'] = 'Pattern to apply on cohort field';

$string['configrestrictionmode_desc'] = 'The way the restriction is calculated';

$string['configrestrictionsql_desc'] = '
<p>A SQL query that gives for the current user the cohort list he can assign to the enrol method.
The query admits some dynamic placehodlers to make results depending on current user </p>

<ul>
     <li>%ID% : the user id</li>
     <li>%USERNAME% : the user name</li>
     <li>%IDNUMER% : the user idnumber</li>
     <li>%PROFILE_FIELD_&lt;profilefieldshortname&gt;% : injects value of the corresponding user\'s profile field. If the field shortname is not
     found in custom profile fields, then it will be search for in the standard user record. Thus %PROFILE_FIELD_lang% will actually
     inject the current language code for the current user.</li>
</ul>

<p>The cohort request MUST select 2 fields \'id\' and \'name\' in the cohort table for a get_records_menu call.</p>
';
$string['configrestrictioncohortfield_desc'] = 'A cohort record field on which a match / nomatch pattern can be applied.';

$string['configrestrictionpattern_desc'] = 'the pattern that extracts match (not empty result) / nomatch (empty result)';

$string['filter_help'] = 'Enter a substring that should be contained by option labels to reduce the list';
