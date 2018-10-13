<?php
// created: 2018-07-22 14:52:44
$dictionary["aor_reports_audit_auditmetrics_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'aor_reports_audit_auditmetrics_1' => 
    array (
      'lhs_module' => 'AOR_Reports',
      'lhs_table' => 'aor_reports',
      'lhs_key' => 'id',
      'rhs_module' => 'audit_AuditMetrics',
      'rhs_table' => 'audit_auditmetrics',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'aor_reports_audit_auditmetrics_1_c',
      'join_key_lhs' => 'aor_reports_audit_auditmetrics_1aor_reports_ida',
      'join_key_rhs' => 'aor_reports_audit_auditmetrics_1audit_auditmetrics_idb',
    ),
  ),
  'table' => 'aor_reports_audit_auditmetrics_1_c',
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
      'name' => 'aor_reports_audit_auditmetrics_1aor_reports_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'aor_reports_audit_auditmetrics_1audit_auditmetrics_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'aor_reports_audit_auditmetrics_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'aor_reports_audit_auditmetrics_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'aor_reports_audit_auditmetrics_1aor_reports_ida',
        1 => 'aor_reports_audit_auditmetrics_1audit_auditmetrics_idb',
      ),
    ),
  ),
);