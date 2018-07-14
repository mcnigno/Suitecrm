<?php
// created: 2018-01-16 16:39:59
$dictionary["bill_Billables"]["fields"]["projecttask_bill_billables_1"] = array (
  'name' => 'projecttask_bill_billables_1',
  'type' => 'link',
  'relationship' => 'projecttask_bill_billables_1',
  'source' => 'non-db',
  'module' => 'ProjectTask',
  'bean_name' => 'ProjectTask',
  'vname' => 'LBL_PROJECTTASK_BILL_BILLABLES_1_FROM_PROJECTTASK_TITLE',
  'id_name' => 'projecttask_bill_billables_1projecttask_ida',
);
$dictionary["bill_Billables"]["fields"]["projecttask_bill_billables_1_name"] = array (
  'name' => 'projecttask_bill_billables_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECTTASK_BILL_BILLABLES_1_FROM_PROJECTTASK_TITLE',
  'save' => true,
  'id_name' => 'projecttask_bill_billables_1projecttask_ida',
  'link' => 'projecttask_bill_billables_1',
  'table' => 'project_task',
  'module' => 'ProjectTask',
  'rname' => 'name',
);
$dictionary["bill_Billables"]["fields"]["projecttask_bill_billables_1projecttask_ida"] = array (
  'name' => 'projecttask_bill_billables_1projecttask_ida',
  'type' => 'link',
  'relationship' => 'projecttask_bill_billables_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECTTASK_BILL_BILLABLES_1_FROM_BILL_BILLABLES_TITLE',
);
