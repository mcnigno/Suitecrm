<?php
 // created: 2018-02-17 11:43:47
$layout_defs["AOS_Invoices"]["subpanel_setup"]['aos_invoices_fin_payments_1'] = array (
  'order' => 100,
  'module' => 'fin_Payments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AOS_INVOICES_FIN_PAYMENTS_1_FROM_FIN_PAYMENTS_TITLE',
  'get_subpanel_data' => 'aos_invoices_fin_payments_1',
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
