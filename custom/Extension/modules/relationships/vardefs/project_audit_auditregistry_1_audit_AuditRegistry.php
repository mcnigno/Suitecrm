<?php
// created: 2018-07-22 16:10:50
$dictionary["audit_AuditRegistry"]["fields"]["project_audit_auditregistry_1"] = array (
  'name' => 'project_audit_auditregistry_1',
  'type' => 'link',
  'relationship' => 'project_audit_auditregistry_1',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_PROJECT_AUDIT_AUDITREGISTRY_1_FROM_PROJECT_TITLE',
  'id_name' => 'project_audit_auditregistry_1project_ida',
);
$dictionary["audit_AuditRegistry"]["fields"]["project_audit_auditregistry_1_name"] = array (
  'name' => 'project_audit_auditregistry_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_AUDIT_AUDITREGISTRY_1_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'project_audit_auditregistry_1project_ida',
  'link' => 'project_audit_auditregistry_1',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["audit_AuditRegistry"]["fields"]["project_audit_auditregistry_1project_ida"] = array (
  'name' => 'project_audit_auditregistry_1project_ida',
  'type' => 'link',
  'relationship' => 'project_audit_auditregistry_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECT_AUDIT_AUDITREGISTRY_1_FROM_AUDIT_AUDITREGISTRY_TITLE',
);
