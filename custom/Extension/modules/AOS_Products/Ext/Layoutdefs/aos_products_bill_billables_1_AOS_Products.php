<?php
 // created: 2018-01-01 13:03:02
$layout_defs["AOS_Products"]["subpanel_setup"]['aos_products_bill_billables_1'] = array (
  'order' => 100,
  'module' => 'bill_Billables',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AOS_PRODUCTS_BILL_BILLABLES_1_FROM_BILL_BILLABLES_TITLE',
  'get_subpanel_data' => 'aos_products_bill_billables_1',
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
