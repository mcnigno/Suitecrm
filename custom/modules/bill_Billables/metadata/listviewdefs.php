<?php
$module_name = 'bill_Billables';
$listViewDefs [$module_name] = 
array (
  'B_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_B_DATE',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'QUANTITY_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_QUANTITY',
    'width' => '10%',
  ),
  'DOC_QUANTITY_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_DOC_QUANTITY',
    'width' => '10%',
  ),
  'HOURS_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_HOURS',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'AOS_PRODUCTS_BILL_BILLABLES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_PRODUCTS_BILL_BILLABLES_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AOS_PRODUCTS_BILL_BILLABLES_1AOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'TOT_EST_TIME_C' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_TOT_EST_TIME',
    'width' => '10%',
  ),
  'PROJECTTASK_BILL_BILLABLES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PROJECTTASK_BILL_BILLABLES_1_FROM_PROJECTTASK_TITLE',
    'id' => 'PROJECTTASK_BILL_BILLABLES_1PROJECTTASK_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'BILL_STATUS_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_BILL_STATUS',
    'width' => '10%',
  ),
  'STATUS_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'CUO_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CUO',
    'width' => '10%',
  ),
);
;
?>
