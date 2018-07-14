<?php
// created: 2018-02-09 20:39:37
$subpanel_layout['list_fields'] = array (
  'b_date_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_B_DATE',
    'width' => '10%',
  ),
  'quantity_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_QUANTITY',
    'width' => '10%',
  ),
  'aos_products_bill_billables_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_AOS_PRODUCTS_BILL_BILLABLES_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AOS_PRODUCTS_BILL_BILLABLES_1AOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'AOS_Products',
    'target_record_key' => 'aos_products_bill_billables_1aos_products_ida',
  ),
  'projecttask_bill_billables_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_PROJECTTASK_BILL_BILLABLES_1_FROM_PROJECTTASK_TITLE',
    'id' => 'PROJECTTASK_BILL_BILLABLES_1PROJECTTASK_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ProjectTask',
    'target_record_key' => 'projecttask_bill_billables_1projecttask_ida',
  ),
  'doc_quantity_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_DOC_QUANTITY',
    'width' => '10%',
  ),
  'hours_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_HOURS',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'bill_Billables',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'bill_Billables',
    'width' => '5%',
    'default' => true,
  ),
);