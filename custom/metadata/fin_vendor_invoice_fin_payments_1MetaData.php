<?php
// created: 2018-02-17 11:43:13
$dictionary["fin_vendor_invoice_fin_payments_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'fin_vendor_invoice_fin_payments_1' => 
    array (
      'lhs_module' => 'fin_Vendor_Invoice',
      'lhs_table' => 'fin_vendor_invoice',
      'lhs_key' => 'id',
      'rhs_module' => 'fin_Payments',
      'rhs_table' => 'fin_payments',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'fin_vendor_invoice_fin_payments_1_c',
      'join_key_lhs' => 'fin_vendor_invoice_fin_payments_1fin_vendor_invoice_ida',
      'join_key_rhs' => 'fin_vendor_invoice_fin_payments_1fin_payments_idb',
    ),
  ),
  'table' => 'fin_vendor_invoice_fin_payments_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'fin_vendor_invoice_fin_payments_1fin_vendor_invoice_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'fin_vendor_invoice_fin_payments_1fin_payments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'fin_vendor_invoice_fin_payments_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'fin_vendor_invoice_fin_payments_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'fin_vendor_invoice_fin_payments_1fin_vendor_invoice_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'fin_vendor_invoice_fin_payments_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'fin_vendor_invoice_fin_payments_1fin_payments_idb',
      ),
    ),
  ),
);