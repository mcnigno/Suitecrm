<?php
// created: 2018-07-22 14:27:25
$dictionary["audit_AuditMetrics"]["fields"]["audit_auditcategory_audit_auditmetrics_1"] = array (
  'name' => 'audit_auditcategory_audit_auditmetrics_1',
  'type' => 'link',
  'relationship' => 'audit_auditcategory_audit_auditmetrics_1',
  'source' => 'non-db',
  'module' => 'audit_AuditCategory',
  'bean_name' => 'audit_AuditCategory',
  'vname' => 'LBL_AUDIT_AUDITCATEGORY_AUDIT_AUDITMETRICS_1_FROM_AUDIT_AUDITCATEGORY_TITLE',
  'id_name' => 'audit_auditcategory_audit_auditmetrics_1audit_auditcategory_ida',
);
$dictionary["audit_AuditMetrics"]["fields"]["audit_auditcategory_audit_auditmetrics_1_name"] = array (
  'name' => 'audit_auditcategory_audit_auditmetrics_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AUDIT_AUDITCATEGORY_AUDIT_AUDITMETRICS_1_FROM_AUDIT_AUDITCATEGORY_TITLE',
  'save' => true,
  'id_name' => 'audit_auditcategory_audit_auditmetrics_1audit_auditcategory_ida',
  'link' => 'audit_auditcategory_audit_auditmetrics_1',
  'table' => 'audit_auditcategory',
  'module' => 'audit_AuditCategory',
  'rname' => 'name',
);
$dictionary["audit_AuditMetrics"]["fields"]["audit_auditcategory_audit_auditmetrics_1audit_auditcategory_ida"] = array (
  'name' => 'audit_auditcategory_audit_auditmetrics_1audit_auditcategory_ida',
  'type' => 'link',
  'relationship' => 'audit_auditcategory_audit_auditmetrics_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AUDIT_AUDITCATEGORY_AUDIT_AUDITMETRICS_1_FROM_AUDIT_AUDITMETRICS_TITLE',
);
