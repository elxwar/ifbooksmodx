<?php
/**
 * @package modx
 * @subpackage mysql
 */
$xpdo_meta_map['modDashboard']= array (
  'package' => 'modx',
  'version' => '1.1',
  'table' => 'dashboard',
  'fields' => 
  array (
    'name' => '',
    'description' => NULL,
    'hide_trees' => 0,
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'description' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
    ),
    'hide_trees' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
  ),
  'indexes' => 
  array (
    'name' => 
    array (
      'alias' => 'name',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'name' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'hide_trees' => 
    array (
      'alias' => 'hide_trees',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'hide_trees' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'aggregates' => 
  array (
    'UserGroups' => 
    array (
      'class' => 'modUserGroup',
      'local' => 'id',
      'foreign' => 'dashboard',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
  'composites' => 
  array (
    'Placements' => 
    array (
      'class' => 'modDashboardWidgetPlacement',
      'local' => 'id',
      'foreign' => 'dashboard',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
