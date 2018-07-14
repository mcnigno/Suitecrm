<?php
// created: 2018-01-01 13:00:36
$dictionary["tasks_bill_billables_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'tasks_bill_billables_1' => 
    array (
      'lhs_module' => 'Tasks',
      'lhs_table' => 'tasks',
      'lhs_key' => 'id',
      'rhs_module' => 'bill_Billables',
      'rhs_table' => 'bill_billables',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tasks_bill_billables_1_c',
      'join_key_lhs' => 'tasks_bill_billables_1tasks_ida',
      'join_key_rhs' => 'tasks_bill_billables_1bill_billables_idb',
    ),
  ),
  'table' => 'tasks_bill_billables_1_c',
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
      'name' => 'tasks_bill_billables_1tasks_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tasks_bill_billables_1bill_billables_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tasks_bill_billables_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tasks_bill_billables_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tasks_bill_billables_1tasks_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tasks_bill_billables_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tasks_bill_billables_1bill_billables_idb',
      ),
    ),
  ),
);