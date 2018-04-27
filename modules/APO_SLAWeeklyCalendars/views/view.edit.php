<?php

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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
 ********************************************************************************/

require_once('include/MVC/View/views/view.edit.php');

class APO_SLAWeeklyCalendarsViewEdit extends ViewEdit 
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * @deprecated deprecated since version 7.6, PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code, use __construct instead
     */
    function APO_SLAWeeklyCalendarsViewEdit()
    {
        $deprecatedMessage = 'PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code';
        if(isset($GLOBALS['log'])) {
            $GLOBALS['log']->deprecated($deprecatedMessage);
        }
        else {
            trigger_error($deprecatedMessage, E_USER_DEPRECATED);
        }
        self::__construct();
    }

    function preDisplay()
    {
        global $mod_strings;
        parent::preDisplay();
        $out = "
          <script>
            function check_formWeeklyCalendar(form_name) {
              var dayoftheweek = $('#dayoftheweek').val();
              var record = $('input[name=record]').val();
              var sel=document.getElementById('dayoftheweek');
              var day=sel.options[dayoftheweek].innerHTML;
              var slacalendar = $('#slacalendar').val();
              var retform = check_form(form_name);
              if (!retform) return false;
              var id_slacalendar = $('#apo_slacalendars_id_c').val();
              var ret = false;
              $.ajax({async: false,
                      url: 'index.php?entryPoint=uniqueCheck',
                      type: 'POST',
                      data: {module: '{$this->module}',dayoftheweek: dayoftheweek, id_slacalendar:id_slacalendar, record:record},
                      timeout: 1000,
                      error: function(xhr,status,error){ 
                               add_error_style(form_name,'dayoftheweek','{$mod_strings['LBL_DAYOFTHEWEEK']}: {$mod_strings['ERR_IMPOSSIBLE_TO_CHECK']} Error: ' + error.message);
                               add_error_style(form_name,'slacalendar','{$mod_strings['LBL_SLACALENDAR']}: {$mod_strings['ERR_IMPOSSIBLE_TO_CHECK']} Error: ' + error.message);
                               ret = false; 
                             },
                      success: function(data,status){
                                 switch(data){
                                   case 'notunique':
                                     add_error_style(form_name,'dayoftheweek','{$mod_strings['LBL_DAYOFTHEWEEK']}: <b><i>'+day+'</i></b> {$mod_strings['LBL_DOTW_ALREADY_CREATED']} <b><i>'+slacalendar+ '</i></b> {$mod_strings['LBL_MODULE_TITLE']}');
                                     add_error_style(form_name,'slacalendar','{$mod_strings['LBL_SLACALENDAR']}: <b><i>'+day+'</i></b> {$mod_strings['LBL_DOTW_ALREADY_CREATED']} <b><i>'+slacalendar+ '</i></b> {$mod_strings['LBL_MODULE_TITLE']}'); 
                                     ret = false;
                                     return false;
                                   case 'ok':
                                     ret = true;
                                     return true;
                                   default:
                                     add_error_style(form_name,'dayoftheweek','{$mod_strings['LBL_DAYOFTHEWEEK']}: {$mod_strings['ERR_IMPOSSIBLE_TO_CHECK']}');
                                     add_error_style(form_name,'slacalendar','{$mod_strings['LBL_SLACALENDAR']}: {$mod_strings['ERR_IMPOSSIBLE_TO_CHECK']}');
                                     ret = false;
                                     return false; 
                                 }
                             }
                     });
              return ret;
            }
          </script>";
        echo $out;
    }

    function display() 
    {
        $this->ev->showVCRControl=0;
        parent::display();
    }
}

