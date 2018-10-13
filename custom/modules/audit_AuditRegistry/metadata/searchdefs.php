<?php
$module_name = 'audit_AuditRegistry';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
        'name' => 'current_user_only',
      ),
      'audit_auditmetrics_audit_auditregistry_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AUDIT_AUDITMETRICS_AUDIT_AUDITREGISTRY_1_FROM_AUDIT_AUDITMETRICS_TITLE',
        'id' => 'AUDIT_AUDITMETRICS_AUDIT_AUDITREGISTRY_1AUDIT_AUDITMETRICS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'audit_auditmetrics_audit_auditregistry_1_name',
      ),
      'project_audit_auditregistry_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_PROJECT_AUDIT_AUDITREGISTRY_1_FROM_PROJECT_TITLE',
        'id' => 'PROJECT_AUDIT_AUDITREGISTRY_1PROJECT_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'project_audit_auditregistry_1_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status_c',
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
        'default' => true,
        'width' => '10%',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
