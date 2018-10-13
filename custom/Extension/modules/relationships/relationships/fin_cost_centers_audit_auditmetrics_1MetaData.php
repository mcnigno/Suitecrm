<?php
// created: 2018-07-22 14:47:52
$dictionary["fin_cost_centers_audit_auditmetrics_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'fin_cost_centers_audit_auditmetrics_1' => 
    array (
      'lhs_module' => 'fin_Cost_Centers',
      'lhs_table' => 'fin_cost_centers',
      'lhs_key' => 'id',
      'rhs_module' => 'audit_AuditMetrics',
      'rhs_table' => 'audit_auditmetrics',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'fin_cost_centers_audit_auditmetrics_1_c',
      'join_key_lhs' => 'fin_cost_centers_audit_auditmetrics_1fin_cost_centers_ida',
      'join_key_rhs' => 'fin_cost_centers_audit_auditmetrics_1audit_auditmetrics_idb',
    ),
  ),
  'table' => 'fin_cost_centers_audit_auditmetrics_1_c',
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
      'name' => 'fin_cost_centers_audit_auditmetrics_1fin_cost_centers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'fin_cost_centers_audit_auditmetrics_1audit_auditmetrics_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'fin_cost_centers_audit_auditmetrics_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'fin_cost_centers_audit_auditmetrics_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'fin_cost_centers_audit_auditmetrics_1fin_cost_centers_ida',
        1 => 'fin_cost_centers_audit_auditmetrics_1audit_auditmetrics_idb',
      ),
    ),
  ),
);