<?php
// created: 2018-02-17 11:45:50
$dictionary["fin_Payments"]["fields"]["fin_cost_centers_fin_payments_1"] = array (
  'name' => 'fin_cost_centers_fin_payments_1',
  'type' => 'link',
  'relationship' => 'fin_cost_centers_fin_payments_1',
  'source' => 'non-db',
  'module' => 'fin_Cost_Centers',
  'bean_name' => 'fin_Cost_Centers',
  'vname' => 'LBL_FIN_COST_CENTERS_FIN_PAYMENTS_1_FROM_FIN_COST_CENTERS_TITLE',
  'id_name' => 'fin_cost_centers_fin_payments_1fin_cost_centers_ida',
);
$dictionary["fin_Payments"]["fields"]["fin_cost_centers_fin_payments_1_name"] = array (
  'name' => 'fin_cost_centers_fin_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FIN_COST_CENTERS_FIN_PAYMENTS_1_FROM_FIN_COST_CENTERS_TITLE',
  'save' => true,
  'id_name' => 'fin_cost_centers_fin_payments_1fin_cost_centers_ida',
  'link' => 'fin_cost_centers_fin_payments_1',
  'table' => 'fin_cost_centers',
  'module' => 'fin_Cost_Centers',
  'rname' => 'name',
);
$dictionary["fin_Payments"]["fields"]["fin_cost_centers_fin_payments_1fin_cost_centers_ida"] = array (
  'name' => 'fin_cost_centers_fin_payments_1fin_cost_centers_ida',
  'type' => 'link',
  'relationship' => 'fin_cost_centers_fin_payments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_FIN_COST_CENTERS_FIN_PAYMENTS_1_FROM_FIN_PAYMENTS_TITLE',
);
