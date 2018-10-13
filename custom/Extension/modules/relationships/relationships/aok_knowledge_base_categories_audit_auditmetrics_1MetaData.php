<?php
// created: 2018-07-22 14:49:01
$dictionary["aok_knowledge_base_categories_audit_auditmetrics_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'aok_knowledge_base_categories_audit_auditmetrics_1' => 
    array (
      'lhs_module' => 'AOK_Knowledge_Base_Categories',
      'lhs_table' => 'aok_knowledge_base_categories',
      'lhs_key' => 'id',
      'rhs_module' => 'audit_AuditMetrics',
      'rhs_table' => 'audit_auditmetrics',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'aok_knowledge_base_categories_audit_auditmetrics_1_c',
      'join_key_lhs' => 'aok_knowleba0aegories_ida',
      'join_key_rhs' => 'aok_knowle25b4metrics_idb',
    ),
  ),
  'table' => 'aok_knowledge_base_categories_audit_auditmetrics_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'aok_knowleba0aegories_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'aok_knowle25b4metrics_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'aok_knowledge_base_categories_audit_auditmetrics_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'aok_knowledge_base_categories_audit_auditmetrics_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'aok_knowleba0aegories_ida',
        1 => 'aok_knowle25b4metrics_idb',
      ),
    ),
  ),
);