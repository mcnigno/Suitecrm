<?php
 // created: 2018-07-22 14:50:33
$layout_defs["audit_AuditMetrics"]["subpanel_setup"]['opportunities_audit_auditmetrics_1'] = array (
  'order' => 100,
  'module' => 'Opportunities',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_AUDIT_AUDITMETRICS_1_FROM_OPPORTUNITIES_TITLE',
  'get_subpanel_data' => 'opportunities_audit_auditmetrics_1',
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
