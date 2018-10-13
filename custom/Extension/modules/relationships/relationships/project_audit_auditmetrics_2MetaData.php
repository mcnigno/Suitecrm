<?php
// created: 2018-07-22 18:46:07
$dictionary["project_audit_auditmetrics_2"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'project_audit_auditmetrics_2' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'audit_AuditMetrics',
      'rhs_table' => 'audit_auditmetrics',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'project_audit_auditmetrics_2_c',
      'join_key_lhs' => 'project_audit_auditmetrics_2project_ida',
      'join_key_rhs' => 'project_audit_auditmetrics_2audit_auditmetrics_idb',
    ),
  ),
  'table' => 'project_audit_auditmetrics_2_c',
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
      'name' => 'project_audit_auditmetrics_2project_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'project_audit_auditmetrics_2audit_auditmetrics_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'project_audit_auditmetrics_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'project_audit_auditmetrics_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'project_audit_auditmetrics_2project_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'project_audit_auditmetrics_2_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'project_audit_auditmetrics_2audit_auditmetrics_idb',
      ),
    ),
  ),
);