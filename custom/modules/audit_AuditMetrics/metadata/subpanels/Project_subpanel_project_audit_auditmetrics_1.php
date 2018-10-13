<?php
// created: 2018-07-22 19:31:39
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'audit_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_AUDIT_STATUS',
    'width' => '10%',
  ),
  'tmp_module_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_TMP_MODULE',
    'width' => '10%',
  ),
  'value_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_VALUE',
    'width' => '10%',
  ),
  'audit_auditcategory_audit_auditmetrics_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_AUDIT_AUDITCATEGORY_AUDIT_AUDITMETRICS_1_FROM_AUDIT_AUDITCATEGORY_TITLE',
    'id' => 'AUDIT_AUDITCATEGORY_AUDIT_AUDITMETRICS_1AUDIT_AUDITCATEGORY_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'audit_AuditCategory',
    'target_record_key' => 'audit_auditcategory_audit_auditmetrics_1audit_auditcategory_ida',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'audit_AuditMetrics',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'audit_AuditMetrics',
    'width' => '5%',
    'default' => true,
  ),
);