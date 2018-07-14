<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-03-22 16:20:17
$dictionary['fin_Vendor_Invoice']['fields']['v_due_date_c']['inline_edit']='1';
$dictionary['fin_Vendor_Invoice']['fields']['v_due_date_c']['options']='date_range_search_dom';
$dictionary['fin_Vendor_Invoice']['fields']['v_due_date_c']['labelValue']='Due Date';
$dictionary['fin_Vendor_Invoice']['fields']['v_due_date_c']['enable_range_search']='1';

 

 // created: 2018-03-22 16:22:57
$dictionary['fin_Vendor_Invoice']['fields']['v_total_c']['inline_edit']='1';
$dictionary['fin_Vendor_Invoice']['fields']['v_total_c']['labelValue']='Total';

 

// created: 2018-02-17 11:43:13
$dictionary["fin_Vendor_Invoice"]["fields"]["fin_vendor_invoice_fin_payments_1"] = array (
  'name' => 'fin_vendor_invoice_fin_payments_1',
  'type' => 'link',
  'relationship' => 'fin_vendor_invoice_fin_payments_1',
  'source' => 'non-db',
  'module' => 'fin_Payments',
  'bean_name' => 'fin_Payments',
  'side' => 'right',
  'vname' => 'LBL_FIN_VENDOR_INVOICE_FIN_PAYMENTS_1_FROM_FIN_PAYMENTS_TITLE',
);


 // created: 2018-06-22 18:03:09
$dictionary['fin_Vendor_Invoice']['fields']['status_c']['inline_edit']='1';
$dictionary['fin_Vendor_Invoice']['fields']['status_c']['labelValue']='Status';

 

// created: 2018-02-17 11:39:12
$dictionary["fin_Vendor_Invoice"]["fields"]["accounts_fin_vendor_invoice_1"] = array (
  'name' => 'accounts_fin_vendor_invoice_1',
  'type' => 'link',
  'relationship' => 'accounts_fin_vendor_invoice_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_FIN_VENDOR_INVOICE_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_fin_vendor_invoice_1accounts_ida',
);
$dictionary["fin_Vendor_Invoice"]["fields"]["accounts_fin_vendor_invoice_1_name"] = array (
  'name' => 'accounts_fin_vendor_invoice_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_FIN_VENDOR_INVOICE_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_fin_vendor_invoice_1accounts_ida',
  'link' => 'accounts_fin_vendor_invoice_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["fin_Vendor_Invoice"]["fields"]["accounts_fin_vendor_invoice_1accounts_ida"] = array (
  'name' => 'accounts_fin_vendor_invoice_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_fin_vendor_invoice_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_FIN_VENDOR_INVOICE_1_FROM_FIN_VENDOR_INVOICE_TITLE',
);


 // created: 2018-03-22 16:19:41
$dictionary['fin_Vendor_Invoice']['fields']['v_invoice_date_c']['inline_edit']='1';
$dictionary['fin_Vendor_Invoice']['fields']['v_invoice_date_c']['options']='date_range_search_dom';
$dictionary['fin_Vendor_Invoice']['fields']['v_invoice_date_c']['labelValue']='Invoice Date';
$dictionary['fin_Vendor_Invoice']['fields']['v_invoice_date_c']['enable_range_search']='1';

 

 // created: 2018-03-22 17:20:57
$dictionary['fin_Vendor_Invoice']['fields']['v_invoice_num_c']['inline_edit']='1';
$dictionary['fin_Vendor_Invoice']['fields']['v_invoice_num_c']['labelValue']='Invoice Number';

 

 // created: 2018-03-22 16:22:58
$dictionary['fin_Vendor_Invoice']['fields']['currency_id']['inline_edit']=1;

 
?>