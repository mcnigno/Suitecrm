<?php
// created: 2018-07-22 18:46:07
$dictionary["Project"]["fields"]["project_audit_auditmetrics_2"] = array (
  'name' => 'project_audit_auditmetrics_2',
  'type' => 'link',
  'relationship' => 'project_audit_auditmetrics_2',
  'source' => 'non-db',
  'module' => 'audit_AuditMetrics',
  'bean_name' => 'audit_AuditMetrics',
  'vname' => 'LBL_PROJECT_AUDIT_AUDITMETRICS_2_FROM_AUDIT_AUDITMETRICS_TITLE',
  'id_name' => 'project_audit_auditmetrics_2audit_auditmetrics_idb',
);
$dictionary["Project"]["fields"]["project_audit_auditmetrics_2_name"] = array (
  'name' => 'project_audit_auditmetrics_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_AUDIT_AUDITMETRICS_2_FROM_AUDIT_AUDITMETRICS_TITLE',
  'save' => true,
  'id_name' => 'project_audit_auditmetrics_2audit_auditmetrics_idb',
  'link' => 'project_audit_auditmetrics_2',
  'table' => 'audit_auditmetrics',
  'module' => 'audit_AuditMetrics',
  'rname' => 'name',
);
$dictionary["Project"]["fields"]["project_audit_auditmetrics_2audit_auditmetrics_idb"] = array (
  'name' => 'project_audit_auditmetrics_2audit_auditmetrics_idb',
  'type' => 'link',
  'relationship' => 'project_audit_auditmetrics_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_PROJECT_AUDIT_AUDITMETRICS_2_FROM_AUDIT_AUDITMETRICS_TITLE',
);
