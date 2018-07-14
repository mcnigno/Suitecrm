<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-01-01 13:07:53
$dictionary['bill_Billables']['fields']['price_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['price_c']['labelValue']='price';

 

 // created: 2018-01-17 20:13:59
$dictionary['bill_Billables']['fields']['hours_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['hours_c']['labelValue']='Hours';

 

 // created: 2018-02-14 18:41:36
$dictionary['bill_Billables']['fields']['tot_est_time_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['tot_est_time_c']['labelValue']='Estimated Time';

 

 // created: 2018-06-26 15:58:26
$dictionary['bill_Billables']['fields']['cuo_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['cuo_c']['labelValue']='CUO';

 

// created: 2018-01-01 13:00:36
$dictionary["bill_Billables"]["fields"]["tasks_bill_billables_1"] = array (
  'name' => 'tasks_bill_billables_1',
  'type' => 'link',
  'relationship' => 'tasks_bill_billables_1',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_TASKS_BILL_BILLABLES_1_FROM_TASKS_TITLE',
  'id_name' => 'tasks_bill_billables_1tasks_ida',
);
$dictionary["bill_Billables"]["fields"]["tasks_bill_billables_1_name"] = array (
  'name' => 'tasks_bill_billables_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TASKS_BILL_BILLABLES_1_FROM_TASKS_TITLE',
  'save' => true,
  'id_name' => 'tasks_bill_billables_1tasks_ida',
  'link' => 'tasks_bill_billables_1',
  'table' => 'tasks',
  'module' => 'Tasks',
  'rname' => 'name',
);
$dictionary["bill_Billables"]["fields"]["tasks_bill_billables_1tasks_ida"] = array (
  'name' => 'tasks_bill_billables_1tasks_ida',
  'type' => 'link',
  'relationship' => 'tasks_bill_billables_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TASKS_BILL_BILLABLES_1_FROM_BILL_BILLABLES_TITLE',
);


// created: 2018-01-16 16:39:59
$dictionary["bill_Billables"]["fields"]["projecttask_bill_billables_1"] = array (
  'name' => 'projecttask_bill_billables_1',
  'type' => 'link',
  'relationship' => 'projecttask_bill_billables_1',
  'source' => 'non-db',
  'module' => 'ProjectTask',
  'bean_name' => 'ProjectTask',
  'vname' => 'LBL_PROJECTTASK_BILL_BILLABLES_1_FROM_PROJECTTASK_TITLE',
  'id_name' => 'projecttask_bill_billables_1projecttask_ida',
);
$dictionary["bill_Billables"]["fields"]["projecttask_bill_billables_1_name"] = array (
  'name' => 'projecttask_bill_billables_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECTTASK_BILL_BILLABLES_1_FROM_PROJECTTASK_TITLE',
  'save' => true,
  'id_name' => 'projecttask_bill_billables_1projecttask_ida',
  'link' => 'projecttask_bill_billables_1',
  'table' => 'project_task',
  'module' => 'ProjectTask',
  'rname' => 'name',
);
$dictionary["bill_Billables"]["fields"]["projecttask_bill_billables_1projecttask_ida"] = array (
  'name' => 'projecttask_bill_billables_1projecttask_ida',
  'type' => 'link',
  'relationship' => 'projecttask_bill_billables_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECTTASK_BILL_BILLABLES_1_FROM_BILL_BILLABLES_TITLE',
);


 // created: 2018-01-01 13:05:50
$dictionary['bill_Billables']['fields']['status_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['status_c']['labelValue']='Status';

 

 // created: 2018-01-17 17:03:05
$dictionary['bill_Billables']['fields']['doc_quantity_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['doc_quantity_c']['labelValue']='Doc. Quantity';

 

 // created: 2018-01-19 23:55:38
$dictionary['bill_Billables']['fields']['bill_date_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['bill_date_c']['labelValue']='Bill Date';

 

// created: 2018-01-01 15:22:38
$dictionary["bill_Billables"]["fields"]["aos_quotes_bill_billables_1"] = array (
  'name' => 'aos_quotes_bill_billables_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_bill_billables_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_AOS_QUOTES_BILL_BILLABLES_1_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'aos_quotes_bill_billables_1aos_quotes_ida',
);
$dictionary["bill_Billables"]["fields"]["aos_quotes_bill_billables_1_name"] = array (
  'name' => 'aos_quotes_bill_billables_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_QUOTES_BILL_BILLABLES_1_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'aos_quotes_bill_billables_1aos_quotes_ida',
  'link' => 'aos_quotes_bill_billables_1',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["bill_Billables"]["fields"]["aos_quotes_bill_billables_1aos_quotes_ida"] = array (
  'name' => 'aos_quotes_bill_billables_1aos_quotes_ida',
  'type' => 'link',
  'relationship' => 'aos_quotes_bill_billables_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_QUOTES_BILL_BILLABLES_1_FROM_BILL_BILLABLES_TITLE',
);


 // created: 2018-02-09 21:52:17
$dictionary['bill_Billables']['fields']['bill_status_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['bill_status_c']['labelValue']='Bill Status';

 

 // created: 2018-01-02 18:07:34
$dictionary['bill_Billables']['fields']['name']['required']=false;
$dictionary['bill_Billables']['fields']['name']['inline_edit']=true;
$dictionary['bill_Billables']['fields']['name']['importable']='true';
$dictionary['bill_Billables']['fields']['name']['duplicate_merge']='disabled';
$dictionary['bill_Billables']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['bill_Billables']['fields']['name']['merge_filter']='disabled';
$dictionary['bill_Billables']['fields']['name']['unified_search']=false;

 

 // created: 2018-01-01 13:06:41
$dictionary['bill_Billables']['fields']['product_id_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['product_id_c']['labelValue']='product id';

 

 // created: 2018-02-12 12:22:44
$dictionary['bill_Billables']['fields']['quantity_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['quantity_c']['labelValue']='Quantity';

 

 // created: 2018-07-03 18:59:13
$dictionary['bill_Billables']['fields']['billami_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['billami_c']['labelValue']='BillaMi';

 

 // created: 2018-01-01 13:06:16
$dictionary['bill_Billables']['fields']['part_number_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['part_number_c']['labelValue']='part number';

 

 // created: 2018-01-17 20:04:45
$dictionary['bill_Billables']['fields']['b_date_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['b_date_c']['options']='date_range_search_dom';
$dictionary['bill_Billables']['fields']['b_date_c']['labelValue']='Date';
$dictionary['bill_Billables']['fields']['b_date_c']['enable_range_search']='1';

 

// created: 2018-01-01 13:03:02
$dictionary["bill_Billables"]["fields"]["aos_products_bill_billables_1"] = array (
  'name' => 'aos_products_bill_billables_1',
  'type' => 'link',
  'relationship' => 'aos_products_bill_billables_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_BILL_BILLABLES_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_bill_billables_1aos_products_ida',
);
$dictionary["bill_Billables"]["fields"]["aos_products_bill_billables_1_name"] = array (
  'name' => 'aos_products_bill_billables_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_BILL_BILLABLES_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_products_bill_billables_1aos_products_ida',
  'link' => 'aos_products_bill_billables_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["bill_Billables"]["fields"]["aos_products_bill_billables_1aos_products_ida"] = array (
  'name' => 'aos_products_bill_billables_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_bill_billables_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_BILL_BILLABLES_1_FROM_BILL_BILLABLES_TITLE',
);


 // created: 2018-01-01 15:21:15
$dictionary['bill_Billables']['fields']['parent_type']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['parent_type']['labelValue']='Parent Type';

 

 // created: 2018-01-01 15:07:39
$dictionary['bill_Billables']['fields']['cost_c']['inline_edit']='1';
$dictionary['bill_Billables']['fields']['cost_c']['labelValue']='Cost';

 

 // created: 2018-01-01 13:07:53
$dictionary['bill_Billables']['fields']['currency_id']['inline_edit']=1;

 
?>