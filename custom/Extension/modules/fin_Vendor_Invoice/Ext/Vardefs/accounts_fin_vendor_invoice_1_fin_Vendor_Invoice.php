<?php
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
