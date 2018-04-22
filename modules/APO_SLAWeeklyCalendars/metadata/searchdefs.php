<?php
$module_name = 'APO_SLAWeeklyCalendars';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'dayoftheweek' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_DAYOFTHEWEEK',
        'width' => '10%',
        'default' => true,
        'name' => 'dayoftheweek',
      ),
      'slacalendar' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_SLACALENDAR',
        'id' => 'APO_SLACALENDARS_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'slacalendar',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'dayoftheweek' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_DAYOFTHEWEEK',
        'width' => '10%',
        'default' => true,
        'name' => 'dayoftheweek',
      ),
      'slacalendar' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_SLACALENDAR',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'APO_SLACALENDARS_ID_C',
        'name' => 'slacalendar',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
