<?php return array (
  'SON\\Category' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      '__construct' => 3,
      'setId' => 0,
      'setName' => 0,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'SON\\Category::__construct:0' => 
        array (
          0 => 'db',
          1 => 'SON\\Db\\Connection',
          2 => true,
          3 => NULL,
        ),
      ),
      'setId' => 
      array (
        'SON\\Category::setId:0' => 
        array (
          0 => 'id',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'SON\\Category::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'SON\\Db\\Connection' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      '__construct' => 3,
    ),
    'parameters' => 
    array (
      '__construct' => 
      array (
        'SON\\Db\\Connection::__construct:0' => 
        array (
          0 => 'server',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'SON\\Db\\Connection::__construct:1' => 
        array (
          0 => 'dbName',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'SON\\Db\\Connection::__construct:2' => 
        array (
          0 => 'user',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
        'SON\\Db\\Connection::__construct:3' => 
        array (
          0 => 'password',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
  'SON\\Product' => 
  array (
    'supertypes' => 
    array (
    ),
    'instantiator' => '__construct',
    'methods' => 
    array (
      'setId' => 0,
      'setName' => 0,
    ),
    'parameters' => 
    array (
      'setId' => 
      array (
        'SON\\Product::setId:0' => 
        array (
          0 => 'id',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
      'setName' => 
      array (
        'SON\\Product::setName:0' => 
        array (
          0 => 'name',
          1 => NULL,
          2 => true,
          3 => NULL,
        ),
      ),
    ),
  ),
);