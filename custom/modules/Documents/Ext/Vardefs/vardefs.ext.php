<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-10-13 19:36:42
$dictionary['Document']['fields']['activity_field_c']['inline_edit']='1';
$dictionary['Document']['fields']['activity_field_c']['labelValue']='Activity field';

 

// created: 2018-02-23 09:25:32
$dictionary["Document"]["fields"]["project_documents_1"] = array (
  'name' => 'project_documents_1',
  'type' => 'link',
  'relationship' => 'project_documents_1',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_PROJECT_TITLE',
  'id_name' => 'project_documents_1project_ida',
);
$dictionary["Document"]["fields"]["project_documents_1_name"] = array (
  'name' => 'project_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'project_documents_1project_ida',
  'link' => 'project_documents_1',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["project_documents_1project_ida"] = array (
  'name' => 'project_documents_1project_ida',
  'type' => 'link',
  'relationship' => 'project_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECT_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);

?>