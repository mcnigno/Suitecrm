<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-12-22 18:29:57
$dictionary['Project']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2018-02-20 16:22:35
$dictionary['Project']['fields']['cuo_c']['inline_edit']='1';
$dictionary['Project']['fields']['cuo_c']['options']='numeric_range_search_dom';
$dictionary['Project']['fields']['cuo_c']['labelValue']='Cuo';
$dictionary['Project']['fields']['cuo_c']['enable_range_search']='1';

 

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


// created: 2018-07-22 16:10:50
$dictionary["Project"]["fields"]["project_audit_auditregistry_1"] = array (
  'name' => 'project_audit_auditregistry_1',
  'type' => 'link',
  'relationship' => 'project_audit_auditregistry_1',
  'source' => 'non-db',
  'module' => 'audit_AuditRegistry',
  'bean_name' => 'audit_AuditRegistry',
  'side' => 'right',
  'vname' => 'LBL_PROJECT_AUDIT_AUDITREGISTRY_1_FROM_AUDIT_AUDITREGISTRY_TITLE',
);


 // created: 2018-07-22 18:22:26
$dictionary['Project']['fields']['audit_status_c']['inline_edit']='1';
$dictionary['Project']['fields']['audit_status_c']['labelValue']='audit status';

 

 // created: 2018-09-08 18:35:02
$dictionary['Project']['fields']['prj_email_c']['inline_edit']='1';
$dictionary['Project']['fields']['prj_email_c']['labelValue']='PRJ Email';

 

 // created: 2017-12-22 18:29:57
$dictionary['Project']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

// created: 2018-07-22 14:45:17
$dictionary["Project"]["fields"]["project_audit_auditmetrics_1"] = array (
  'name' => 'project_audit_auditmetrics_1',
  'type' => 'link',
  'relationship' => 'project_audit_auditmetrics_1',
  'source' => 'non-db',
  'module' => 'audit_AuditMetrics',
  'bean_name' => 'audit_AuditMetrics',
  'vname' => 'LBL_PROJECT_AUDIT_AUDITMETRICS_1_FROM_AUDIT_AUDITMETRICS_TITLE',
);


 // created: 2017-12-22 18:29:57
$dictionary['Project']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

// created: 2018-02-23 09:25:32
$dictionary["Project"]["fields"]["project_documents_1"] = array (
  'name' => 'project_documents_1',
  'type' => 'link',
  'relationship' => 'project_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'side' => 'right',
  'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


 // created: 2017-12-22 18:29:57
$dictionary['Project']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>