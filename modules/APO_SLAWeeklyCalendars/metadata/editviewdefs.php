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
         'SAVE',
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
