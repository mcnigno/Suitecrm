<?php
// created: 2018-07-22 18:46:07
$dictionary["audit_AuditMetrics"]["fields"]["project_audit_auditmetrics_2"] = array (
  'name' => 'project_audit_auditmetrics_2',
  'type' => 'link',
  'relationship' => 'project_audit_auditmetrics_2',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_PROJECT_AUDIT_AUDITMETRICS_2_FROM_PROJECT_TITLE',
  'id_name' => 'project_audit_auditmetrics_2project_ida',
);
$dictionary["audit_AuditMetrics"]["fields"]["project_audit_auditmetrics_2_name"] = array (
  'name' => 'project_audit_auditmetrics_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_AUDIT_AUDITMETRICS_2_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'project_audit_auditmetrics_2project_ida',
  'link' => 'project_audit_auditmetrics_2',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["audit_AuditMetrics"]["fields"]["project_audit_auditmetrics_2project_ida"] = array (
  'name' => 'project_audit_auditmetrics_2project_ida',
  'type' => 'link',
  'relationship' => 'project_audit_auditmetrics_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_PROJECT_AUDIT_AUDITMETRICS_2_FROM_PROJECT_TITLE',
);
