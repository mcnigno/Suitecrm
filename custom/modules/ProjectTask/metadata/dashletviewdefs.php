<?php
$dashletData['ProjectTaskDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'priority' => 
  array (
    'default' => '',
  ),
  'project_name' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
  'date_start' => 
  array (
    'default' => '',
  ),
  'date_finish' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['ProjectTaskDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '30%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'project_name' => 
  array (
    'width' => '30%',
    'label' => 'LBL_PROJECT_NAME',
    'related_fields' => 
    array (
      0 => 'project_id',
    ),
    'name' => 'project_name',
    'default' => true,
  ),
  'date_start' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_START',
    'default' => true,
    'name' => 'date_start',
  ),
  'date_finish' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_FINISH',
    'default' => true,
    'name' => 'date_finish',
  ),
  'billed_effort_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_BILLED_EFFORT',
    'width' => '10%',
    'name' => 'billed_effort_c',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
    'name' => 'status',
  ),
  'time_start' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TIME_START',
    'name' => 'time_start',
    'default' => false,
  ),
  'priority' => 
  array (
    'width' => '15%',
    'label' => 'LBL_PRIORITY',
    'default' => false,
    'name' => 'priority',
  ),
  'time_finish' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TIME_FINISH',
    'name' => 'time_finish',
    'default' => false,
  ),
  'milestone_flag' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MILESTONE_FLAG',
    'name' => 'milestone_flag',
    'default' => false,
  ),
  'percent_complete' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PERCENT_COMPLETE',
    'default' => false,
    'name' => 'percent_complete',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'utilization' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_UTILIZATION',
    'width' => '10%',
    'name' => 'utilization',
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
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'description',
  ),
);
