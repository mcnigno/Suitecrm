<?php
// created: 2018-01-01 13:00:36
$dictionary["bill_Billables"]["fields"]["tasks_bill_billables_1"] = array (
  'name' => 'tasks_bill_billables_1',
  'type' => 'link',
  'relationship' => 'tasks_bill_billables_1',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_TASKS_BILL_BILLABLES_1_FROM_TASKS_TITLE',
  'id_name' => 'tasks_bill_billables_1tasks_ida',
);
$dictionary["bill_Billables"]["fields"]["tasks_bill_billables_1_name"] = array (
  'name' => 'tasks_bill_billables_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TASKS_BILL_BILLABLES_1_FROM_TASKS_TITLE',
  'save' => true,
  'id_name' => 'tasks_bill_billables_1tasks_ida',
  'link' => 'tasks_bill_billables_1',
  'table' => 'tasks',
  'module' => 'Tasks',
  'rname' => 'name',
);
$dictionary["bill_Billables"]["fields"]["tasks_bill_billables_1tasks_ida"] = array (
  'name' => 'tasks_bill_billables_1tasks_ida',
  'type' => 'link',
  'relationship' => 'tasks_bill_billables_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TASKS_BILL_BILLABLES_1_FROM_BILL_BILLABLES_TITLE',
);
