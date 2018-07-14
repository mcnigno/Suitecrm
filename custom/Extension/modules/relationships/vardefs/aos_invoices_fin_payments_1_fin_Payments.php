<?php
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
