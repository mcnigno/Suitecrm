<?php
// created: 2018-01-01 15:17:14
$dictionary["AOS_Products_Quotes"]["fields"]["aos_quotes_aos_products_quotes_1"] = array (
  'name' => 'aos_quotes_aos_products_quotes_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_aos_products_quotes_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_AOS_QUOTES_AOS_PRODUCTS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'aos_quotes_aos_products_quotes_1aos_quotes_ida',
);
$dictionary["AOS_Products_Quotes"]["fields"]["aos_quotes_aos_products_quotes_1_name"] = array (
  'name' => 'aos_quotes_aos_products_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_QUOTES_AOS_PRODUCTS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'aos_quotes_aos_products_quotes_1aos_quotes_ida',
  'link' => 'aos_quotes_aos_products_quotes_1',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["AOS_Products_Quotes"]["fields"]["aos_quotes_aos_products_quotes_1aos_quotes_ida"] = array (
  'name' => 'aos_quotes_aos_products_quotes_1aos_quotes_ida',
  'type' => 'link',
  'relationship' => 'aos_quotes_aos_products_quotes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_QUOTES_AOS_PRODUCTS_QUOTES_1_FROM_AOS_PRODUCTS_QUOTES_TITLE',
);
