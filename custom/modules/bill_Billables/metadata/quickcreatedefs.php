<?php
$module_name = 'bill_Billables';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
        'LBL_QUICKCREATE_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
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
            'name' => 'quantity_c',
            'label' => 'LBL_QUANTITY',
          ),
          1 => 
          array (
            'name' => 'aos_products_bill_billables_1_name',
            'label' => 'LBL_AOS_PRODUCTS_BILL_BILLABLES_1_FROM_AOS_PRODUCTS_TITLE',
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
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_quickcreate_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'b_date_c',
            'label' => 'LBL_B_DATE',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'bill_status_c',
            'studio' => 'visible',
            'label' => 'LBL_BILL_STATUS',
          ),
          1 => 
          array (
            'name' => 'projecttask_bill_billables_1_name',
            'label' => 'LBL_PROJECTTASK_BILL_BILLABLES_1_FROM_PROJECTTASK_TITLE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
