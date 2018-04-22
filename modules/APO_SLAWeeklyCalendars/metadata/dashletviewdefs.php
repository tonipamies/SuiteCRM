<?php
$dashletData['APO_SLAWeeklyCalendarsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'dayoftheweek' => 
  array (
    'default' => '',
  ),
  'slacalendar' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['APO_SLAWeeklyCalendarsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'dayoftheweek' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DAYOFTHEWEEK',
    'width' => '10%',
    'default' => true,
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
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
