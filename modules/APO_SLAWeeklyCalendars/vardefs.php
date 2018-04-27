<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */
global $app_strings, $mod_strings;

$dictionary['APO_SLAWeeklyCalendars'] = array(
    'table' => 'apo_slaweeklycalendars',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => 
    array (
       'dayoftheweek' => 
       array (
          'required' => true,
          'name' => 'dayoftheweek',
          'vname' => 'LBL_DAYOFTHEWEEK',
          'type' => 'enum',
          'massupdate' => 0,
          'no_default' => false,
          'comments' => '',
          'help' => 'Please select the day of the week',
          'importable' => 'true',
          'duplicate_merge' => 'disabled',
          'duplicate_merge_dom_value' => '0',
          'audited' => true,
          'inline_edit' => false,
          'reportable' => true,
          'unified_search' => false,
          'merge_filter' => 'disabled',
          'len' => 100,
          'size' => '20',
          'options' => 'dom_cal_day_long',
          'studio' => 'visible',
          'dependency' => false,
          'validation' => 
          array (
             'type' => 'callback',
             'callback' => 'function(formname,nameIndex){if($("#" + nameIndex).val()=="0"){add_error_style(formname,nameIndex,"'.$app_strings['ERR_MISSING_REQUIRED_FIELDS']." ".$mod_strings['LBL_DAYOFTHEWEEK'].'"); return false;}; return true;}',
          ),
       ),
       'apo_slacalendars_id_c' => 
       array (
          'required' => false,
          'name' => 'apo_slacalendars_id_c',
          'vname' => 'LBL_SLACALENDAR_APO_SLACALENDARS_ID',
          'type' => 'id',
          'massupdate' => 0,
          'no_default' => false,
          'comments' => '',
          'help' => '',
          'importable' => 'true',
          'duplicate_merge' => 'disabled',
          'duplicate_merge_dom_value' => 0,
          'audited' => false,
          'inline_edit' => false,
          'reportable' => false,
          'unified_search' => false,
          'merge_filter' => 'disabled',
          'len' => 36,
          'size' => '20',
       ),
       'slacalendar' => 
       array (
          'required' => true,
          'source' => 'non-db',
          'name' => 'slacalendar',
          'vname' => 'LBL_SLACALENDAR',
          'type' => 'relate',
          'massupdate' => 0,
          'no_default' => false,
          'comments' => '',
          'help' => 'Please select the SLA Calendar',
          'importable' => 'true',
          'duplicate_merge' => 'disabled',
          'duplicate_merge_dom_value' => '0',
          'audited' => true,
          'inline_edit' => false,
          'reportable' => true,
          'unified_search' => false,
          'merge_filter' => 'disabled',
          'len' => '255',
          'size' => '20',
          'id_name' => 'apo_slacalendars_id_c',
          'ext2' => 'APO_SLACalendars',
          'module' => 'APO_SLACalendars',
          'rname' => 'name',
          'quicksearch' => 'enabled',
          'studio' => 'visible',
       ),
       'daytimeslots' => 
       array(
          'required' => false,
          'name' => 'daytimeslots',
          'vname' => 'LBL_DAYTIMESLOTS',
          'type' => 'function',
          'source' => 'non-db',
          'massupdate' => 0,
          'studio' => 'visible',
          'importable' => 'false',
          'duplicate_merge' => 'disabled',
          'duplicate_merge_dom_value' => 0,
          'audited' => false,
          'inline_edit' => false,
          'reportable' => false,
          'link_target' => '150',
          'height' => '150',
          'function' => 
          array(
             'name' => 'displayDaytimeSlots',
             'returns' => 'html',
             'include' => 'modules/APO_SLAWeeklyCalendars/Display_DaytimeSlots.php',
          ),
       ),
    ),
    'indices' => 
    array(
       array(
          'name' => 'idx_day_cal',
          'type' => 'index',
          'fields' => 
          array(
             'dayoftheweek',
             'apo_slacalendars_id_c',
          ),
       ),
    ), 
    'relationships' => 
    array (
    ),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('APO_SLAWeeklyCalendars', 'APO_SLAWeeklyCalendars', array('basic','assignable','security_groups'));
