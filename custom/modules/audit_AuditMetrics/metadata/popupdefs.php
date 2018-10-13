<?php
$popupMeta = array (
    'moduleMain' => 'audit_AuditMetrics',
    'varName' => 'audit_AuditMetrics',
    'orderBy' => 'audit_auditmetrics.name',
    'whereClauses' => array (
  'name' => 'audit_auditmetrics.name',
  'audit_auditcategory_audit_auditmetrics_1_name' => 'audit_auditmetrics.audit_auditcategory_audit_auditmetrics_1_name',
  'assigned_user_id' => 'audit_auditmetrics.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'audit_auditcategory_audit_auditmetrics_1_name',
  5 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'audit_auditcategory_audit_auditmetrics_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AUDIT_AUDITCATEGORY_AUDIT_AUDITMETRICS_1_FROM_AUDIT_AUDITCATEGORY_TITLE',
    'id' => 'AUDIT_AUDITCATEGORY_AUDIT_AUDITMETRICS_1AUDIT_AUDITCATEGORY_IDA',
    'width' => '10%',
    'name' => 'audit_auditcategory_audit_auditmetrics_1_name',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'AUDIT_AUDITCATEGORY_AUDIT_AUDITMETRICS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AUDIT_AUDITCATEGORY_AUDIT_AUDITMETRICS_1_FROM_AUDIT_AUDITCATEGORY_TITLE',
    'id' => 'AUDIT_AUDITCATEGORY_AUDIT_AUDITMETRICS_1AUDIT_AUDITCATEGORY_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VALUE_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_VALUE',
    'width' => '10%',
  ),
),
);
