<?php
$module_name = 'bill_Billables';
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'quantity_c',
            'label' => 'LBL_QUANTITY',
          ),
          1 => 
          array (
            'name' => 'aos_products_bill_billables_1_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'doc_quantity_c',
            'label' => 'LBL_DOC_QUANTITY',
          ),
          1 => 
          array (
            'name' => 'hours_c',
            'label' => 'LBL_HOURS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cuo_c',
            'studio' => 'visible',
            'label' => 'LBL_CUO',
          ),
          1 => 'description',
        ),
      ),
      'default' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'b_date_c',
            'label' => 'LBL_B_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'bill_status_c',
            'studio' => 'visible',
            'label' => 'LBL_BILL_STATUS',
          ),
          1 => 'name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billami_c',
            'studio' => 'visible',
            'label' => 'LBL_BILLAMI',
          ),
          1 => 
          array (
            'name' => 'tot_est_time_c',
            'label' => 'LBL_TOT_EST_TIME',
          ),
        ),
      ),
    ),
  ),
);
;
?>
