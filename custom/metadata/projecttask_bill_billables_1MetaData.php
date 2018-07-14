<?php
// created: 2018-01-16 16:39:59
$dictionary["projecttask_bill_billables_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'projecttask_bill_billables_1' => 
    array (
      'lhs_module' => 'ProjectTask',
      'lhs_table' => 'project_task',
      'lhs_key' => 'id',
      'rhs_module' => 'bill_Billables',
      'rhs_table' => 'bill_billables',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'projecttask_bill_billables_1_c',
      'join_key_lhs' => 'projecttask_bill_billables_1projecttask_ida',
      'join_key_rhs' => 'projecttask_bill_billables_1bill_billables_idb',
    ),
  ),
  'table' => 'projecttask_bill_billables_1_c',
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
      'name' => 'projecttask_bill_billables_1projecttask_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'projecttask_bill_billables_1bill_billables_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'projecttask_bill_billables_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'projecttask_bill_billables_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'projecttask_bill_billables_1projecttask_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'projecttask_bill_billables_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'projecttask_bill_billables_1bill_billables_idb',
      ),
    ),
  ),
);