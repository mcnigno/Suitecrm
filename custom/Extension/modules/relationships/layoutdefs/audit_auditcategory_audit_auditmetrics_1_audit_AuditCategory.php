<?php
 // created: 2018-07-22 14:27:25
$layout_defs["audit_AuditCategory"]["subpanel_setup"]['audit_auditcategory_audit_auditmetrics_1'] = array (
  'order' => 100,
  'module' => 'audit_AuditMetrics',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AUDIT_AUDITCATEGORY_AUDIT_AUDITMETRICS_1_FROM_AUDIT_AUDITMETRICS_TITLE',
  'get_subpanel_data' => 'audit_auditcategory_audit_auditmetrics_1',
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
