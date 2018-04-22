<?php
$module_name = 'APO_SLAWeeklyCalendars';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DAYOFTHEWEEK' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DAYOFTHEWEEK',
    'width' => '10%',
    'default' => true,
  ),
  'SLACALENDAR' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_SLACALENDAR',
    'id' => 'APO_SLACALENDARS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
