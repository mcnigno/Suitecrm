<?php
// created: 2018-07-22 15:11:28
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
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
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'modified_user_id',
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