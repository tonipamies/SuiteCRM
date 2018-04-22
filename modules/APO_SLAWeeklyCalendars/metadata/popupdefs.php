<?php
$popupMeta = array (
    'moduleMain' => 'APO_SLAWeeklyCalendars',
    'varName' => 'APO_SLAWeeklyCalendars',
    'orderBy' => 'apo_slaweeklycalendars.name',
    'whereClauses' => array (
  'name' => 'apo_slaweeklycalendars.name',
  'dayoftheweek' => 'apo_slaweeklycalendars.dayoftheweek',
  'slacalendar' => 'apo_slaweeklycalendars.slacalendar',
  'assigned_user_id' => 'apo_slaweeklycalendars.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'dayoftheweek',
  5 => 'slacalendar',
  6 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'dayoftheweek' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DAYOFTHEWEEK',
    'width' => '10%',
    'name' => 'dayoftheweek',
  ),
  'slacalendar' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_SLACALENDAR',
    'link' => true,
    'width' => '10%',
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
    'width' => '10%',
  ),
),
);
