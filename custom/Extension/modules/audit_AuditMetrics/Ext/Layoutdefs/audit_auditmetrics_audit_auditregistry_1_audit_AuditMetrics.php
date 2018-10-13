<?php
 // created: 2018-07-22 14:29:03
$layout_defs["audit_AuditMetrics"]["subpanel_setup"]['audit_auditmetrics_audit_auditregistry_1'] = array (
  'order' => 100,
  'module' => 'audit_AuditRegistry',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AUDIT_AUDITMETRICS_AUDIT_AUDITREGISTRY_1_FROM_AUDIT_AUDITREGISTRY_TITLE',
  'get_subpanel_data' => 'audit_auditmetrics_audit_auditregistry_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
