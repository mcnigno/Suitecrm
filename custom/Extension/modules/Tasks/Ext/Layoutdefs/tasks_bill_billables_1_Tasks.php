<?php
 // created: 2018-01-01 13:00:36
$layout_defs["Tasks"]["subpanel_setup"]['tasks_bill_billables_1'] = array (
  'order' => 100,
  'module' => 'bill_Billables',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TASKS_BILL_BILLABLES_1_FROM_BILL_BILLABLES_TITLE',
  'get_subpanel_data' => 'tasks_bill_billables_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
