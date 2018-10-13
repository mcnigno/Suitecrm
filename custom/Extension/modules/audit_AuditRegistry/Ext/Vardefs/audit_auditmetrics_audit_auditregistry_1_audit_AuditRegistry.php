<?php
// created: 2018-07-22 14:29:03
$dictionary["audit_AuditRegistry"]["fields"]["audit_auditmetrics_audit_auditregistry_1"] = array (
  'name' => 'audit_auditmetrics_audit_auditregistry_1',
  'type' => 'link',
  'relationship' => 'audit_auditmetrics_audit_auditregistry_1',
  'source' => 'non-db',
  'module' => 'audit_AuditMetrics',
  'bean_name' => 'audit_AuditMetrics',
  'vname' => 'LBL_AUDIT_AUDITMETRICS_AUDIT_AUDITREGISTRY_1_FROM_AUDIT_AUDITMETRICS_TITLE',
  'id_name' => 'audit_auditmetrics_audit_auditregistry_1audit_auditmetrics_ida',
);
$dictionary["audit_AuditRegistry"]["fields"]["audit_auditmetrics_audit_auditregistry_1_name"] = array (
  'name' => 'audit_auditmetrics_audit_auditregistry_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AUDIT_AUDITMETRICS_AUDIT_AUDITREGISTRY_1_FROM_AUDIT_AUDITMETRICS_TITLE',
  'save' => true,
  'id_name' => 'audit_auditmetrics_audit_auditregistry_1audit_auditmetrics_ida',
  'link' => 'audit_auditmetrics_audit_auditregistry_1',
  'table' => 'audit_auditmetrics',
  'module' => 'audit_AuditMetrics',
  'rname' => 'name',
);
$dictionary["audit_AuditRegistry"]["fields"]["audit_auditmetrics_audit_auditregistry_1audit_auditmetrics_ida"] = array (
  'name' => 'audit_auditmetrics_audit_auditregistry_1audit_auditmetrics_ida',
  'type' => 'link',
  'relationship' => 'audit_auditmetrics_audit_auditregistry_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AUDIT_AUDITMETRICS_AUDIT_AUDITREGISTRY_1_FROM_AUDIT_AUDITREGISTRY_TITLE',
);
