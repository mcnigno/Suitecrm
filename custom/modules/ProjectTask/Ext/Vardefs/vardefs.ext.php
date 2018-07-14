<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-02-13 21:46:10
$dictionary['ProjectTask']['fields']['percent_complete']['default']='5';
$dictionary['ProjectTask']['fields']['percent_complete']['inline_edit']=true;
$dictionary['ProjectTask']['fields']['percent_complete']['merge_filter']='disabled';
$dictionary['ProjectTask']['fields']['percent_complete']['enable_range_search']=false;
$dictionary['ProjectTask']['fields']['percent_complete']['min']=false;
$dictionary['ProjectTask']['fields']['percent_complete']['max']=false;
$dictionary['ProjectTask']['fields']['percent_complete']['disable_num_format']='';

 

 // created: 2018-02-16 12:20:25
$dictionary['ProjectTask']['fields']['date_start']['display_default']='now';
$dictionary['ProjectTask']['fields']['date_start']['inline_edit']=true;
$dictionary['ProjectTask']['fields']['date_start']['options']='date_range_search_dom';
$dictionary['ProjectTask']['fields']['date_start']['merge_filter']='disabled';

 

 // created: 2018-01-19 21:36:30
$dictionary['ProjectTask']['fields']['utilization']['inline_edit']=true;
$dictionary['ProjectTask']['fields']['utilization']['merge_filter']='disabled';
$dictionary['ProjectTask']['fields']['utilization']['enable_range_search']=false;
$dictionary['ProjectTask']['fields']['utilization']['min']=0;
$dictionary['ProjectTask']['fields']['utilization']['max']=100;
$dictionary['ProjectTask']['fields']['utilization']['disable_num_format']='1';

 

 // created: 2018-01-02 15:18:36
$dictionary['ProjectTask']['fields']['name']['required']=false;
$dictionary['ProjectTask']['fields']['name']['inline_edit']=true;
$dictionary['ProjectTask']['fields']['name']['merge_filter']='disabled';
$dictionary['ProjectTask']['fields']['name']['unified_search']=false;
$dictionary['ProjectTask']['fields']['name']['full_text_search']=array (
);

 

 // created: 2018-01-20 12:01:34
$dictionary['ProjectTask']['fields']['billed_effort_c']['inline_edit']='1';
$dictionary['ProjectTask']['fields']['billed_effort_c']['labelValue']='Billed Effort (hrs)';

 

 // created: 2018-02-11 12:03:53
$dictionary['ProjectTask']['fields']['duration']['required']=false;
$dictionary['ProjectTask']['fields']['duration']['inline_edit']=true;
$dictionary['ProjectTask']['fields']['duration']['merge_filter']='disabled';
$dictionary['ProjectTask']['fields']['duration']['enable_range_search']=false;
$dictionary['ProjectTask']['fields']['duration']['min']=false;
$dictionary['ProjectTask']['fields']['duration']['max']=false;
$dictionary['ProjectTask']['fields']['duration']['disable_num_format']='';

 

// created: 2018-01-16 16:39:59
$dictionary["ProjectTask"]["fields"]["projecttask_bill_billables_1"] = array (
  'name' => 'projecttask_bill_billables_1',
  'type' => 'link',
  'relationship' => 'projecttask_bill_billables_1',
  'source' => 'non-db',
  'module' => 'bill_Billables',
  'bean_name' => 'bill_Billables',
  'side' => 'right',
  'vname' => 'LBL_PROJECTTASK_BILL_BILLABLES_1_FROM_BILL_BILLABLES_TITLE',
);


 // created: 2018-01-19 21:45:28
$dictionary['ProjectTask']['fields']['workload_c']['inline_edit']='1';
$dictionary['ProjectTask']['fields']['workload_c']['labelValue']='Workload (%) :';

 

 // created: 2018-02-16 12:20:44
$dictionary['ProjectTask']['fields']['date_finish']['display_default']='now';
$dictionary['ProjectTask']['fields']['date_finish']['inline_edit']=true;
$dictionary['ProjectTask']['fields']['date_finish']['options']='date_range_search_dom';
$dictionary['ProjectTask']['fields']['date_finish']['merge_filter']='disabled';

 
?>