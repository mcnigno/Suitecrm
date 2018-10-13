<?php
 // created: 2018-07-22 14:47:52
$layout_defs["audit_AuditMetrics"]["subpanel_setup"]['fin_cost_centers_audit_auditmetrics_1'] = array (
  'order' => 100,
  'module' => 'fin_Cost_Centers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FIN_COST_CENTERS_AUDIT_AUDITMETRICS_1_FROM_FIN_COST_CENTERS_TITLE',
  'get_subpanel_data' => 'fin_cost_centers_audit_auditmetrics_1',
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
