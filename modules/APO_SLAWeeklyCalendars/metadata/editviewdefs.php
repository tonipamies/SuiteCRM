<?php
global $app_strings;

$module_name = 'APO_SLAWeeklyCalendars';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' =>
      array (
        'buttons' =>
        array (
          0 => 
          array (
            'customCode' => '<input title="'.$app_strings['LBL_SAVE_BUTTON_TITLE'].' [Alt+'.$app_strings['LBL_SAVE_BUTTON_KEY'].']" 
                                    accessKey="'.$app_strings['LBL_SAVE_BUTTON_KEY'].'" class="button primary" type="submit" name="save" 
                                    onclick="var _form = document.getElementById(\'EditView\'); _form.action.value=\'Save\'; if(check_formWeeklyCalendar(\'EditView\'))SUGAR.ajaxUI.submitForm(_form);return false;" value="'.$app_strings['LBL_SAVE_BUTTON_LABEL'].'">',
          ),
         'CANCEL',
        ),
      ),
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'dayoftheweek',
            'studio' => 'visible',
            'label' => 'LBL_DAYOFTHEWEEK',
          ),
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'slacalendar',
            'studio' => 'visible',
            'label' => 'LBL_SLACALENDAR',
          ),
        ),
      ),
    ),
  ),
);
?>
