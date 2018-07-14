<?php
$module_name = 'fin_Vendor_Invoice';
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
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accounts_fin_vendor_invoice_1_name',
          ),
          1 => 
          array (
            'name' => 'v_invoice_num_c',
            'label' => 'LBL_V_INVOICE_NUM',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'v_invoice_date_c',
            'label' => 'LBL_V_INVOICE_DATE',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'v_due_date_c',
            'label' => 'LBL_V_DUE_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'v_total_c',
            'label' => 'LBL_V_TOTAL',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
