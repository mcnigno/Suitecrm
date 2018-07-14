<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2018-02-21 12:36:01
$layout_defs["AOS_Invoices"]["subpanel_setup"]['aos_invoices_notes_1'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AOS_INVOICES_NOTES_1_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'aos_invoices_notes_1',
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


//auto-generated file DO NOT EDIT
$layout_defs['AOS_Invoices']['subpanel_setup']['aos_invoices_fin_payments_1']['override_subpanel_name'] = 'AOS_Invoices_subpanel_aos_invoices_fin_payments_1';

?>