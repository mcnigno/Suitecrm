<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-01-02 17:40:12
$dictionary['Task']['fields']['name']['required']=false;
$dictionary['Task']['fields']['name']['inline_edit']=true;
$dictionary['Task']['fields']['name']['merge_filter']='disabled';
$dictionary['Task']['fields']['name']['unified_search']=false;
$dictionary['Task']['fields']['name']['full_text_search']=array (
);

 

 // created: 2017-12-26 16:56:47
$dictionary['Task']['fields']['actualeffort_c']['inline_edit']='1';
$dictionary['Task']['fields']['actualeffort_c']['labelValue']='Actual Effort (hrs)';

 

// created: 2018-01-01 13:00:36
$dictionary["Task"]["fields"]["tasks_bill_billables_1"] = array (
  'name' => 'tasks_bill_billables_1',
  'type' => 'link',
  'relationship' => 'tasks_bill_billables_1',
  'source' => 'non-db',
  'module' => 'bill_Billables',
  'bean_name' => 'bill_Billables',
  'side' => 'right',
  'vname' => 'LBL_TASKS_BILL_BILLABLES_1_FROM_BILL_BILLABLES_TITLE',
);


// created: 2018-01-02 17:36:26
$dictionary["Task"]["fields"]["aos_products_tasks_1"] = array (
  'name' => 'aos_products_tasks_1',
  'type' => 'link',
  'relationship' => 'aos_products_tasks_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_TASKS_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_tasks_1aos_products_ida',
);
$dictionary["Task"]["fields"]["aos_products_tasks_1_name"] = array (
  'name' => 'aos_products_tasks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_TASKS_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_products_tasks_1aos_products_ida',
  'link' => 'aos_products_tasks_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["aos_products_tasks_1aos_products_ida"] = array (
  'name' => 'aos_products_tasks_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_tasks_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_TASKS_1_FROM_TASKS_TITLE',
);


 // created: 2017-12-26 20:11:21
$dictionary['Task']['fields']['date_start_only_c']['inline_edit']='1';
$dictionary['Task']['fields']['date_start_only_c']['labelValue']='D-Date Start ';

 

 // created: 2017-12-26 22:29:29
$dictionary['Task']['fields']['date_due']['inline_edit']=true;
$dictionary['Task']['fields']['date_due']['merge_filter']='disabled';

 
?>