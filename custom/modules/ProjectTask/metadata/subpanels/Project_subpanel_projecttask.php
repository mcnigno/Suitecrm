<?php
// created: 2018-01-20 15:00:14
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '70%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ASSIGNED_USER_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
  'workload_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_WORKLOAD',
    'width' => '10%',
  ),
  'date_start' => 
  array (
    'vname' => 'LBL_DATE_START',
    'width' => '15%',
    'default' => true,
  ),
  'date_finish' => 
  array (
    'vname' => 'LBL_DATE_FINISH',
    'width' => '15%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
);