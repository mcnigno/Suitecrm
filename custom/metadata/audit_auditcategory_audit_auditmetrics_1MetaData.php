<?php
// created: 2018-07-22 14:27:25
$dictionary["audit_auditcategory_audit_auditmetrics_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'audit_auditcategory_audit_auditmetrics_1' => 
    array (
      'lhs_module' => 'audit_AuditCategory',
      'lhs_table' => 'audit_auditcategory',
      'lhs_key' => 'id',
      'rhs_module' => 'audit_AuditMetrics',
      'rhs_table' => 'audit_auditmetrics',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'audit_auditcategory_audit_auditmetrics_1_c',
      'join_key_lhs' => 'audit_auditcategory_audit_auditmetrics_1audit_auditcategory_ida',
      'join_key_rhs' => 'audit_auditcategory_audit_auditmetrics_1audit_auditmetrics_idb',
    ),
  ),
  'table' => 'audit_auditcategory_audit_auditmetrics_1_c',
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
      'name' => 'audit_auditcategory_audit_auditmetrics_1audit_auditcategory_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'audit_auditcategory_audit_auditmetrics_1audit_auditmetrics_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'audit_auditcategory_audit_auditmetrics_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'audit_auditcategory_audit_auditmetrics_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'audit_auditcategory_audit_auditmetrics_1audit_auditcategory_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'audit_auditcategory_audit_auditmetrics_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'audit_auditcategory_audit_auditmetrics_1audit_auditmetrics_idb',
      ),
    ),
  ),
);