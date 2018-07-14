<?php
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
