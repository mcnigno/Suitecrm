<?php
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
