<?php
$module_name = 'fin_Payments';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'payments_type_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENTS_TYPE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fin_cost_centers_fin_payments_1_name',
          ),
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'amount_c',
            'label' => 'LBL_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'date_planned_c',
            'label' => 'LBL_DATE_PLANNED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'payments_status_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENTS_STATUS',
          ),
          1 => 'description',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'raw_amount_c',
            'label' => 'LBL_RAW_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'notes_c',
            'label' => 'LBL_NOTES',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'aos_invoices_fin_payments_1_name',
          ),
          1 => 
          array (
            'name' => 'fin_vendor_invoice_fin_payments_1_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
