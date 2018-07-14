<?php
$module_name = 'fin_Vendor_Invoice';
$listViewDefs [$module_name] = 
array (
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
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'V_INVOICE_NUM_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_V_INVOICE_NUM',
    'width' => '10%',
  ),
  'ACCOUNTS_FIN_VENDOR_INVOICE_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_FIN_VENDOR_INVOICE_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_FIN_VENDOR_INVOICE_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'V_INVOICE_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_V_INVOICE_DATE',
    'width' => '10%',
  ),
  'V_DUE_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_V_DUE_DATE',
    'width' => '10%',
  ),
  'V_TOTAL_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_V_TOTAL',
    'currency_format' => true,
    'width' => '10%',
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
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
  'CURRENCY_ID' => 
  array (
    'type' => 'currency_id',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
