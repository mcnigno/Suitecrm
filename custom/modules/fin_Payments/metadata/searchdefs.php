<?php
$module_name = 'fin_Payments';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
        'name' => 'current_user_only',
      ),
      'date_planned_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_DATE_PLANNED',
        'width' => '10%',
        'name' => 'date_planned_c',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'amount_c' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_AMOUNT',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'amount_c',
      ),
      'payments_type_c' => 
      array (
        'type' => 'radioenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PAYMENTS_TYPE',
        'width' => '10%',
        'name' => 'payments_type_c',
      ),
      'fin_cost_centers_fin_payments_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_FIN_COST_CENTERS_FIN_PAYMENTS_1_FROM_FIN_COST_CENTERS_TITLE',
        'id' => 'FIN_COST_CENTERS_FIN_PAYMENTS_1FIN_COST_CENTERS_IDA',
        'width' => '10%',
        'default' => true,
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
        'default' => true,
        'width' => '10%',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'payments_status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PAYMENTS_STATUS',
        'width' => '10%',
        'name' => 'payments_status_c',
      ),
      'aos_invoices_fin_payments_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AOS_INVOICES_FIN_PAYMENTS_1_FROM_AOS_INVOICES_TITLE',
        'id' => 'AOS_INVOICES_FIN_PAYMENTS_1AOS_INVOICES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'aos_invoices_fin_payments_1_name',
      ),
      'fin_vendor_invoice_fin_payments_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_FIN_VENDOR_INVOICE_FIN_PAYMENTS_1_FROM_FIN_VENDOR_INVOICE_TITLE',
        'id' => 'FIN_VENDOR_INVOICE_FIN_PAYMENTS_1FIN_VENDOR_INVOICE_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'fin_vendor_invoice_fin_payments_1_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
