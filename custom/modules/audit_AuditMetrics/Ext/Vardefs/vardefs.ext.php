<?php 
 //WARNING: The contents of this file are auto-generated


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


// created: 2018-07-22 14:53:40
$dictionary["audit_AuditMetrics"]["fields"]["users_audit_auditmetrics_1"] = array (
  'name' => 'users_audit_auditmetrics_1',
  'type' => 'link',
  'relationship' => 'users_audit_auditmetrics_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_USERS_AUDIT_AUDITMETRICS_1_FROM_USERS_TITLE',
);


 // created: 2018-07-22 14:34:53
$dictionary['audit_AuditMetrics']['fields']['value_c']['inline_edit']='1';
$dictionary['audit_AuditMetrics']['fields']['value_c']['labelValue']='Value';

 

// created: 2018-07-22 14:52:44
$dictionary["audit_AuditMetrics"]["fields"]["aor_reports_audit_auditmetrics_1"] = array (
  'name' => 'aor_reports_audit_auditmetrics_1',
  'type' => 'link',
  'relationship' => 'aor_reports_audit_auditmetrics_1',
  'source' => 'non-db',
  'module' => 'AOR_Reports',
  'bean_name' => 'AOR_Report',
  'vname' => 'LBL_AOR_REPORTS_AUDIT_AUDITMETRICS_1_FROM_AOR_REPORTS_TITLE',
);


// created: 2018-07-22 14:49:01
$dictionary["audit_AuditMetrics"]["fields"]["aok_knowledge_base_categories_audit_auditmetrics_1"] = array (
  'name' => 'aok_knowledge_base_categories_audit_auditmetrics_1',
  'type' => 'link',
  'relationship' => 'aok_knowledge_base_categories_audit_auditmetrics_1',
  'source' => 'non-db',
  'module' => 'AOK_Knowledge_Base_Categories',
  'bean_name' => 'AOK_Knowledge_Base_Categories',
  'vname' => 'LBL_AOK_KNOWLEDGE_BASE_CATEGORIES_AUDIT_AUDITMETRICS_1_FROM_AOK_KNOWLEDGE_BASE_CATEGORIES_TITLE',
);


// created: 2018-07-22 14:46:39
$dictionary["audit_AuditMetrics"]["fields"]["accounts_audit_auditmetrics_1"] = array (
  'name' => 'accounts_audit_auditmetrics_1',
  'type' => 'link',
  'relationship' => 'accounts_audit_auditmetrics_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_AUDIT_AUDITMETRICS_1_FROM_ACCOUNTS_TITLE',
);


// created: 2018-07-22 14:45:17
$dictionary["audit_AuditMetrics"]["fields"]["project_audit_auditmetrics_1"] = array (
  'name' => 'project_audit_auditmetrics_1',
  'type' => 'link',
  'relationship' => 'project_audit_auditmetrics_1',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_PROJECT_AUDIT_AUDITMETRICS_1_FROM_PROJECT_TITLE',
);


// created: 2018-07-22 14:47:52
$dictionary["audit_AuditMetrics"]["fields"]["fin_cost_centers_audit_auditmetrics_1"] = array (
  'name' => 'fin_cost_centers_audit_auditmetrics_1',
  'type' => 'link',
  'relationship' => 'fin_cost_centers_audit_auditmetrics_1',
  'source' => 'non-db',
  'module' => 'fin_Cost_Centers',
  'bean_name' => 'fin_Cost_Centers',
  'vname' => 'LBL_FIN_COST_CENTERS_AUDIT_AUDITMETRICS_1_FROM_FIN_COST_CENTERS_TITLE',
);


// created: 2018-07-22 14:29:03
$dictionary["audit_AuditMetrics"]["fields"]["audit_auditmetrics_audit_auditregistry_1"] = array (
  'name' => 'audit_auditmetrics_audit_auditregistry_1',
  'type' => 'link',
  'relationship' => 'audit_auditmetrics_audit_auditregistry_1',
  'source' => 'non-db',
  'module' => 'audit_AuditRegistry',
  'bean_name' => 'audit_AuditRegistry',
  'side' => 'right',
  'vname' => 'LBL_AUDIT_AUDITMETRICS_AUDIT_AUDITREGISTRY_1_FROM_AUDIT_AUDITREGISTRY_TITLE',
);


 // created: 2018-07-22 18:20:02
$dictionary['audit_AuditMetrics']['fields']['audit_status_c']['inline_edit']='1';
$dictionary['audit_AuditMetrics']['fields']['audit_status_c']['labelValue']='Audit Status';

 

// created: 2018-07-22 14:50:33
$dictionary["audit_AuditMetrics"]["fields"]["opportunities_audit_auditmetrics_1"] = array (
  'name' => 'opportunities_audit_auditmetrics_1',
  'type' => 'link',
  'relationship' => 'opportunities_audit_auditmetrics_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_AUDIT_AUDITMETRICS_1_FROM_OPPORTUNITIES_TITLE',
);


 // created: 2018-07-22 16:52:01
$dictionary['audit_AuditMetrics']['fields']['tmp_module_c']['inline_edit']='';
$dictionary['audit_AuditMetrics']['fields']['tmp_module_c']['labelValue']='tmp module';

 

// created: 2018-07-22 14:51:59
$dictionary["audit_AuditMetrics"]["fields"]["aos_products_audit_auditmetrics_1"] = array (
  'name' => 'aos_products_audit_auditmetrics_1',
  'type' => 'link',
  'relationship' => 'aos_products_audit_auditmetrics_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_AUDIT_AUDITMETRICS_1_FROM_AOS_PRODUCTS_TITLE',
);

?>