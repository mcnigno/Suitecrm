<?php
$popupMeta = array (
    'moduleMain' => 'fin_Payments',
    'varName' => 'fin_Payments',
    'orderBy' => 'fin_payments.name',
    'whereClauses' => array (
  'name' => 'fin_payments.name',
  'date_planned_c' => 'fin_payments_cstm.date_planned_c',
  'amount_c' => 'fin_payments_cstm.amount_c',
  'payments_status_c' => 'fin_payments_cstm.payments_status_c',
  'fin_cost_centers_fin_payments_1_name' => 'fin_payments.fin_cost_centers_fin_payments_1_name',
  'assigned_user_id' => 'fin_payments.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'date_planned_c',
  5 => 'amount_c',
  6 => 'payments_status_c',
  7 => 'fin_cost_centers_fin_payments_1_name',
  8 => 'assigned_user_id',
),
    'searchdefs' => array (
  'date_planned_c' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_PLANNED',
    'width' => '10%',
    'name' => 'date_planned_c',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'amount_c' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'amount_c',
  ),
  'payments_status_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAYMENTS_STATUS',
    'width' => '10%',
    'name' => 'payments_status_c',
  ),
  'fin_cost_centers_fin_payments_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_FIN_COST_CENTERS_FIN_PAYMENTS_1_FROM_FIN_COST_CENTERS_TITLE',
    'id' => 'FIN_COST_CENTERS_FIN_PAYMENTS_1FIN_COST_CENTERS_IDA',
    'width' => '10%',
    'name' => 'fin_cost_centers_fin_payments_1_name',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
);
