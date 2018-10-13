<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-07-22 21:01:24
$dictionary['audit_AuditRegistry']['fields']['value_c']['inline_edit']='1';
$dictionary['audit_AuditRegistry']['fields']['value_c']['options']='numeric_range_search_dom';
$dictionary['audit_AuditRegistry']['fields']['value_c']['labelValue']='Value';
$dictionary['audit_AuditRegistry']['fields']['value_c']['enable_range_search']='1';

 

 // created: 2018-07-22 21:03:24
$dictionary['audit_AuditRegistry']['fields']['status_c']['inline_edit']='1';
$dictionary['audit_AuditRegistry']['fields']['status_c']['labelValue']='Status';

 

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


 // created: 2018-07-22 18:55:39
$dictionary['audit_AuditRegistry']['fields']['entity_id_c']['inline_edit']='1';
$dictionary['audit_AuditRegistry']['fields']['entity_id_c']['labelValue']='entity id';

 

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

?>