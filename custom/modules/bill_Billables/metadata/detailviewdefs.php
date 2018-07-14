<?php
$module_name = 'bill_Billables';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
            'name' => 'bill_date_c',
            'label' => 'LBL_BILL_DATE',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        2 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'tasks_bill_billables_1_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'projecttask_bill_billables_1_name',
          ),
          1 => 
          array (
            'name' => 'cuo_c',
            'studio' => 'visible',
            'label' => 'LBL_CUO',
          ),
        ),
        4 => 
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
        5 => 
        array (
          0 => 
          array (
            'name' => 'doc_quantity_c',
            'label' => 'LBL_DOC_QUANTITY',
          ),
          1 => 'description',
        ),
      ),
    ),
  ),
);
;
?>