<?php

require_once './library/Zend/Loader/StandardAutoloader.php';
$loader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
$loader->registerNamespace('SON', 'library/SON');
$loader->register();

//require './geraDefinicao.php';
//$connection = new SON\Db\Connection('localhost', 'banco', 'root', 'password');
//$category = new SON\Category($connection);

$definitionList = new Zend\Di\DefinitionList(array(
    new Zend\Di\Definition\ArrayDefinition(include __DIR__ . '/data/di/SON-definition.php'), 
    $runtime = new Zend\Di\Definition\RuntimeDefinition(), 
));

$di = new Zend\Di\Di();
//$di = new Zend\Di\Di($definitionList);

/*
$di->instanceManager()->setParameters('SON\Db\Connection', array(
    'server' => 'localhost', 
    'dbName' => 'banco', 
    'user' => 'username', 
    'password' => 123
));
 * 
 */

$di->instanceManager()->addAlias('Conexao1', 'SON\Db\Connection', array(
    'server' => 'localhost1', 
    'dbName' => 'banco1', 
    'user' => 'username1', 
    'password' => 1231   
));

$di->instanceManager()->addAlias('Conexao2', 'SON\Db\Connection', array(
    'server' => 'localhost2', 
    'dbName' => 'banco2', 
    'user' => 'username2', 
    'password' => 1232   
));

//$di->instanceManager()->addAlias('Produto', 'SON\Product');
//$product = $di->get('Produto');
//print_r($product);

$conexao1 = $di->get('Conexao1');
$conexao2 = $di->get('Conexao2');
//print_r($conexao1);
//die;

//$category = $di->get('SON\Category');
//$test = $di->get('SON\Test');
/*
echo '<pre>';
Zend\Di\Display\Console::export($di);
echo '</pre>';
*/

$di->instanceManager()->addTypePreference('SON\Db\Connection', 'Conexao1');
$category = $di->get('SON\Category', array('db' => 'Conexao2'));

//$di = new Zend\Di\Di();
/*
$di->configure(new Zend\Di\Config(array(
    'definition' => array(
        'class' => array(
            'SON\Product' => array(
                'setCategory' => array('required' => true),
            ),
        ),        
    ),
)));
*/

$di->configure(new Zend\Di\Config(array(
    'definition' => array(
        'class' => array(
            'SON\Product' => array(
                'addCategory' => array(
                    'category' => array(
                        'type' => 'SON\CategoryInterface', 
                        'required' => true,                        
                    ),                    
                ),
            ),
        ),        
    ),
    'instance' => array(
        'SON\Product' => array( 
            'injections' => array(
                'SON\Category', 
                'SON\CategoryType'
            ),
        ),
    ),
)));

$product = $di->get('SON\Product');
echo '<pre>';
print_r($product);
echo '</pre>';