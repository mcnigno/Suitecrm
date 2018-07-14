<?php
$dashletData['bill_BillablesDashlet']['searchFields'] = array (
  'b_date_c' => 
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
  'aos_products_bill_billables_1_name' => 
  array (
    'default' => '',
  ),
  'projecttask_bill_billables_1_name' => 
  array (
    'default' => '',
  ),
  'cuo_c' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['bill_BillablesDashlet']['columns'] = array (
  'b_date_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_B_DATE',
    'width' => '10%',
    'name' => 'b_date_c',
  ),
  'quantity_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_QUANTITY',
    'width' => '10%',
    'name' => 'quantity_c',
  ),
  'aos_products_bill_billables_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_PRODUCTS_BILL_BILLABLES_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AOS_PRODUCTS_BILL_BILLABLES_1AOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'aos_products_bill_billables_1_name',
  ),
  'projecttask_bill_billables_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PROJECTTASK_BILL_BILLABLES_1_FROM_PROJECTTASK_TITLE',
    'id' => 'PROJECTTASK_BILL_BILLABLES_1PROJECTTASK_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'projecttask_bill_billables_1_name',
  ),
  'doc_quantity_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_DOC_QUANTITY',
    'width' => '10%',
    'name' => 'doc_quantity_c',
  ),
  'hours_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_HOURS',
    'width' => '10%',
    'name' => 'hours_c',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'name' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'part_number_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PART_NUMBER',
    'width' => '10%',
    'name' => 'part_number_c',
  ),
  'tasks_bill_billables_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TASKS_BILL_BILLABLES_1_FROM_TASKS_TITLE',
    'id' => 'TASKS_BILL_BILLABLES_1TASKS_IDA',
    'width' => '10%',
    'default' => false,
    'name' => 'tasks_bill_billables_1_name',
  ),
  'aos_quotes_bill_billables_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_QUOTES_BILL_BILLABLES_1_FROM_AOS_QUOTES_TITLE',
    'id' => 'AOS_QUOTES_BILL_BILLABLES_1AOS_QUOTES_IDA',
    'width' => '10%',
    'default' => false,
    'name' => 'aos_quotes_bill_billables_1_name',
  ),
  'status_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status_c',
  ),
  'cuo_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CUO',
    'width' => '10%',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
