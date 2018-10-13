<?php
 // created: 2018-07-22 14:45:17
$layout_defs["audit_AuditMetrics"]["subpanel_setup"]['project_audit_auditmetrics_1'] = array (
  'order' => 100,
  'module' => 'Project',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PROJECT_AUDIT_AUDITMETRICS_1_FROM_PROJECT_TITLE',
  'get_subpanel_data' => 'project_audit_auditmetrics_1',
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
