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

$string['cohortrestricted:config'] = 'Configurer une instance de synchronisation de cohorte restreinte';
$string['cohortrestricted:unenrol'] = 'Désinscrire les participants';
$string['cohortrestricted:isrestricted'] = 'Subit les restrictions de choix de cohorte';

$string['addgroup'] = 'Ajouter au groupe';
$string['assignrole'] = 'Assigner le rôle';
$string['defaultgroupnametext'] = 'Cohorte {$a->name} {$a->increment}';
$string['instanceexists'] = 'La cohorte est déjà synchronisée pour ce rôle';
$string['pluginname'] = 'Synchronisation des cohortes (filtrées)';
$string['pluginname_desc'] = 'Ce plugin synchronise les membres d\'une cohorte comme participants du cours. Les cohortes éligibles sont filtrées.';
$string['status'] = 'Actif';
$string['creategroup'] = 'Creer un nouveau groupe';

$string['norestriction'] = 'Pas de restriction';
$string['restrictionbysql'] = 'Restriction par sql';
$string['restrictionbyfield'] = 'Restriction par champ';
$string['configrestrictionmode'] = 'Mode de restriction';
$string['configrestrictionsql'] = 'Requête SQL de restriction';
$string['configrestrictioncohortfield'] = 'Champ de cohorte à examiner';
$string['configrestrictionpattern'] = 'Motif à appliquer sur le champ de cohort';

$string['configrestrictionmode_desc'] = 'The way the restriction is calculated';

$string['configrestrictionsql_desc'] = '
<p>Une requpete SQL donnant la liste de cohortes éligibles  pour l\'utilisateur courant.
La requête admet des emplacements remplaçables fonction de l\'utilisateur courant :</p>

<ul>
     <li>%ID% : L\'id utilisateur</li>
     <li>%USERNAME% : L\'identifiant utilisateur</li>
     <li>%IDNUMER% : Le numéro d\'identification de l\'utilisateur</li>
     <li>%PROFILE_FIELD_&lt;profilefieldshortname&gt;% : Injecte la valeur du champ correspondant de profil. Si le champ
     n\'est pas trouvé dans les champs personnalisés, alors le nom de champ est recherché dans les attributs standard
     de l\'utilisateur. Ainsi, %PROFILE_FIELD_lang% injectera la valeur de langue du profil standard.</li>
</ul>

<p>La requête de cohorte DOIT selectionner 2 champs \'id\' et \'name\' dans la table \'cohort\' pour une invocation de get_records_menu().</p>
';
$string['configrestrictioncohortfield_desc'] = 'A cohort record field on which a match / nomatch pattern can be applied.';

$string['configrestrictionpattern_desc'] = 'the pattern that extracts match (not empty result) / nomatch (empty result)';
