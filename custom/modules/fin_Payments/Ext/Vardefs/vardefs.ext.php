<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-02-17 12:08:32
$dictionary['fin_Payments']['fields']['date_planned_c']['inline_edit']='1';
$dictionary['fin_Payments']['fields']['date_planned_c']['options']='date_range_search_dom';
$dictionary['fin_Payments']['fields']['date_planned_c']['labelValue']='Planned Date';
$dictionary['fin_Payments']['fields']['date_planned_c']['enable_range_search']='1';

 

// created: 2018-02-17 11:45:50
$dictionary["fin_Payments"]["fields"]["fin_cost_centers_fin_payments_1"] = array (
  'name' => 'fin_cost_centers_fin_payments_1',
  'type' => 'link',
  'relationship' => 'fin_cost_centers_fin_payments_1',
  'source' => 'non-db',
  'module' => 'fin_Cost_Centers',
  'bean_name' => 'fin_Cost_Centers',
  'vname' => 'LBL_FIN_COST_CENTERS_FIN_PAYMENTS_1_FROM_FIN_COST_CENTERS_TITLE',
  'id_name' => 'fin_cost_centers_fin_payments_1fin_cost_centers_ida',
);
$dictionary["fin_Payments"]["fields"]["fin_cost_centers_fin_payments_1_name"] = array (
  'name' => 'fin_cost_centers_fin_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FIN_COST_CENTERS_FIN_PAYMENTS_1_FROM_FIN_COST_CENTERS_TITLE',
  'save' => true,
  'id_name' => 'fin_cost_centers_fin_payments_1fin_cost_centers_ida',
  'link' => 'fin_cost_centers_fin_payments_1',
  'table' => 'fin_cost_centers',
  'module' => 'fin_Cost_Centers',
  'rname' => 'name',
);
$dictionary["fin_Payments"]["fields"]["fin_cost_centers_fin_payments_1fin_cost_centers_ida"] = array (
  'name' => 'fin_cost_centers_fin_payments_1fin_cost_centers_ida',
  'type' => 'link',
  'relationship' => 'fin_cost_centers_fin_payments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_FIN_COST_CENTERS_FIN_PAYMENTS_1_FROM_FIN_PAYMENTS_TITLE',
);


 // created: 2018-02-17 14:22:36
$dictionary['fin_Payments']['fields']['payments_type_c']['inline_edit']='1';
$dictionary['fin_Payments']['fields']['payments_type_c']['labelValue']='Payments Type:';

 

 // created: 2018-02-18 17:28:58
$dictionary['fin_Payments']['fields']['notes_c']['inline_edit']='1';
$dictionary['fin_Payments']['fields']['notes_c']['labelValue']='Notes';

 

 // created: 2018-02-18 17:30:07
$dictionary['fin_Payments']['fields']['name']['required']=false;
$dictionary['fin_Payments']['fields']['name']['inline_edit']=true;
$dictionary['fin_Payments']['fields']['name']['duplicate_merge']='disabled';
$dictionary['fin_Payments']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['fin_Payments']['fields']['name']['merge_filter']='disabled';
$dictionary['fin_Payments']['fields']['name']['unified_search']=false;

 

// created: 2018-02-17 11:43:47
$dictionary["fin_Payments"]["fields"]["aos_invoices_fin_payments_1"] = array (
  'name' => 'aos_invoices_fin_payments_1',
  'type' => 'link',
  'relationship' => 'aos_invoices_fin_payments_1',
  'source' => 'non-db',
  'module' => 'AOS_Invoices',
  'bean_name' => 'AOS_Invoices',
  'vname' => 'LBL_AOS_INVOICES_FIN_PAYMENTS_1_FROM_AOS_INVOICES_TITLE',
  'id_name' => 'aos_invoices_fin_payments_1aos_invoices_ida',
);
$dictionary["fin_Payments"]["fields"]["aos_invoices_fin_payments_1_name"] = array (
  'name' => 'aos_invoices_fin_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_INVOICES_FIN_PAYMENTS_1_FROM_AOS_INVOICES_TITLE',
  'save' => true,
  'id_name' => 'aos_invoices_fin_payments_1aos_invoices_ida',
  'link' => 'aos_invoices_fin_payments_1',
  'table' => 'aos_invoices',
  'module' => 'AOS_Invoices',
  'rname' => 'name',
);
$dictionary["fin_Payments"]["fields"]["aos_invoices_fin_payments_1aos_invoices_ida"] = array (
  'name' => 'aos_invoices_fin_payments_1aos_invoices_ida',
  'type' => 'link',
  'relationship' => 'aos_invoices_fin_payments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_INVOICES_FIN_PAYMENTS_1_FROM_FIN_PAYMENTS_TITLE',
);


 // created: 2018-02-17 12:03:06
$dictionary['fin_Payments']['fields']['payments_status_c']['inline_edit']='1';
$dictionary['fin_Payments']['fields']['payments_status_c']['labelValue']='Status';

 

 // created: 2018-02-18 18:18:34
$dictionary['fin_Payments']['fields']['raw_amount_c']['inline_edit']='1';
$dictionary['fin_Payments']['fields']['raw_amount_c']['options']='numeric_range_search_dom';
$dictionary['fin_Payments']['fields']['raw_amount_c']['labelValue']='Raw Amount';
$dictionary['fin_Payments']['fields']['raw_amount_c']['enable_range_search']='1';

 

 // created: 2018-02-17 19:47:20
$dictionary['fin_Payments']['fields']['amount_c']['inline_edit']='1';
$dictionary['fin_Payments']['fields']['amount_c']['labelValue']='Amount';

 

 // created: 2018-02-17 19:47:20
$dictionary['fin_Payments']['fields']['currency_id']['inline_edit']=1;

 

// created: 2018-02-17 11:43:13
$dictionary["fin_Payments"]["fields"]["fin_vendor_invoice_fin_payments_1"] = array (
  'name' => 'fin_vendor_invoice_fin_payments_1',
  'type' => 'link',
  'relationship' => 'fin_vendor_invoice_fin_payments_1',
  'source' => 'non-db',
  'module' => 'fin_Vendor_Invoice',
  'bean_name' => 'fin_Vendor_Invoice',
  'vname' => 'LBL_FIN_VENDOR_INVOICE_FIN_PAYMENTS_1_FROM_FIN_VENDOR_INVOICE_TITLE',
  'id_name' => 'fin_vendor_invoice_fin_payments_1fin_vendor_invoice_ida',
);
$dictionary["fin_Payments"]["fields"]["fin_vendor_invoice_fin_payments_1_name"] = array (
  'name' => 'fin_vendor_invoice_fin_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FIN_VENDOR_INVOICE_FIN_PAYMENTS_1_FROM_FIN_VENDOR_INVOICE_TITLE',
  'save' => true,
  'id_name' => 'fin_vendor_invoice_fin_payments_1fin_vendor_invoice_ida',
  'link' => 'fin_vendor_invoice_fin_payments_1',
  'table' => 'fin_vendor_invoice',
  'module' => 'fin_Vendor_Invoice',
  'rname' => 'name',
);
$dictionary["fin_Payments"]["fields"]["fin_vendor_invoice_fin_payments_1fin_vendor_invoice_ida"] = array (
  'name' => 'fin_vendor_invoice_fin_payments_1fin_vendor_invoice_ida',
  'type' => 'link',
  'relationship' => 'fin_vendor_invoice_fin_payments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_FIN_VENDOR_INVOICE_FIN_PAYMENTS_1_FROM_FIN_PAYMENTS_TITLE',
);

?>