<?php
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
