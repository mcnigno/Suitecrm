<?php
// created: 2018-02-17 14:45:34
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
  'fin_cost_centers_fin_payments_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_FIN_COST_CENTERS_FIN_PAYMENTS_1_FROM_FIN_COST_CENTERS_TITLE',
    'id' => 'FIN_COST_CENTERS_FIN_PAYMENTS_1FIN_COST_CENTERS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'fin_Cost_Centers',
    'target_record_key' => 'fin_cost_centers_fin_payments_1fin_cost_centers_ida',
  ),
  'payments_type_c' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PAYMENTS_TYPE',
    'width' => '10%',
  ),
  'date_planned_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_DATE_PLANNED',
    'width' => '10%',
  ),
  'payments_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PAYMENTS_STATUS',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'fin_Payments',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'fin_Payments',
    'width' => '5%',
    'default' => true,
  ),
);