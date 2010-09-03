<?php
$xpdo_meta_map['Person']= array (
  'package' => 'sample',
  'table' => 'person',
  'fields' => 
  array (
    'first_name' => NULL,
    'last_name' => NULL,
    'middle_name' => NULL,
    'date_modified' => 'CURRENT_TIMESTAMP',
    'dob' => NULL,
    'gender' => '',
    'blood_type' => '',
    'username' => NULL,
    'password' => NULL,
    'security_level' => NULL,
  ),
  'fieldMeta' => 
  array (
    'first_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
    ),
    'last_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
    ),
    'middle_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
    ),
    'date_modified' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => false,
      'default' => 'CURRENT_TIMESTAMP',
      'attributes' => 'ON UPDATE CURRENT_TIMESTAMP',
    ),
    'dob' => 
    array (
      'dbtype' => 'date',
      'phptype' => 'date',
      'null' => true,
    ),
    'gender' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'\',\'M\',\'F\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'blood_type' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'\',\'A+\',\'A-\',\'B+\',\'B-\',\'AB+\',\'AB-\',\'O+\',\'O-\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'username' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'index' => 'unique',
    ),
    'password' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'password',
      'null' => false,
    ),
    'security_level' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '4',
      'phptype' => 'integer',
      'null' => false,
    ),
  ),
  'indexes' => 
  array (
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'columns' => 
      array (
        'id' => 
        array (
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'username' => 
    array (
      'alias' => 'username',
      'primary' => false,
      'unique' => true,
      'columns' => 
      array (
        'username' => 
        array (
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'composites' => 
  array (
    'PersonPhone' => 
    array (
      'class' => 'PersonPhone',
      'local' => 'id',
      'foreign' => 'person',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
  'validation' => 
  array (
    'class' => 'validation.xPDOValidator',
    'rules' => 
    array (
      'dob' => 
      array (
        'date_format' => 
        array (
          'type' => 'preg_match',
          'rule' => '/\\d{4}-\\d{2}-\\d{2}/',
        ),
      ),
      'password' => 
      array (
        'password_length' => 
        array (
          'type' => 'xPDOValidationRule',
          'rule' => 'xPDOMinLengthValidationRule',
          'value' => '6',
        ),
      ),
    ),
  ),
);