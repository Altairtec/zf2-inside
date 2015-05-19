<?php

require_once './library/Zend/Loader/StandardAutoloader.php';
$loader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
$loader->registerNamespace('SON', 'library/SON');
$loader->register();

use Zend\ServiceManager\ServiceManager;

$serviceManager = new ServiceManager();
//$serviceManager->setService('Produto', new SON\Product());
//
//$produto = $serviceManager->get('Produto');
//$produto2 = $serviceManager->get('Produto');
//
//var_dump(spl_object_hash($produto) === spl_object_hash($produto2));

//print_r($produto);

//InvocableClass
//$serviceManager->setInvokableClass('Produto', 'SON\Product');
//print_r($serviceManager->get('Produto'));

//factories
//$serviceManager->setService('Connection', new SON\Db\Connection('a', 'b', 'c', 'd'));
//$serviceManager->setFactory('Categoria', function($sm){    
//    //$connection = $sm->get('Connection');
//    //$categoria = new \SON\Category($connection);
//    //$categoria = new \SON\Category($sm->get('Connection'));
//    return new \SON\Category($sm->get('Connection'));
//});
//
//$categoria = $serviceManager->get('Categoria');
//echo '<pre>';
//print_r($categoria);
//echo '</pre>';

//$serviceManager->setFactory('Category', 'SON\CategoryFactory');
//$categoria = $serviceManager->get('Category');
//
//echo '<pre>';
//print_r($categoria);
//echo '</pre>';

////Aliases
//$serviceManager->setService('SON\Db\Connection', new SON\Db\Connection('a', 'b', 'c', 'd'));
//$serviceManager->setAlias('Connection', 'SON\Db\Connection');
//
//echo '<pre>';
//print_r($serviceManager->get('Connection'));
//echo '</pre>';


//SharedManager
//$serviceManager->setInvokableClass('Produto', 'SON\Product');
//$serviceManager->setShared('Produto', false);
//
//$produto = $serviceManager->get('Produto');
//$produto2 = $serviceManager->get('Produto');
//
//var_dump(spl_object_hash($produto) === spl_object_hash($produto2));
//
//echo spl_object_hash($produto);
//echo '<br />';
//echo spl_object_hash($produto2);

////Peering Service Managers
//$serviceManagerA = new ServiceManager();
//$serviceManagerA->setInvokableClass('Produto', 'SON\Product');
////$produto = $serviceManagerA->get('Produto');
//
//$serviceManagerB = $serviceManagerA->createScopedServiceManager(ServiceManager::SCOPE_PARENT);
////$produto = $serviceManagerB->get('Produto');
////print_r($produto);
//
//$serviceManagerC = $serviceManagerA->createScopedServiceManager(ServiceManager::SCOPE_CHILD);
////$produto = $serviceManagerC->get('Produto'); //Não funciona
//$serviceManagerC->setInvokableClass('Test', 'SON\Test');
//print_r($serviceManagerC->get('Test'));
//print_r($serviceManagerA->get('Test'));

////Initializers
//$serviceManager->setService('Connection', new SON\Db\Connection('a', 'b', 'c', 'd'));
//$serviceManager->setInvokableClass('Produto', 'SON\Product');
//$serviceManager->addInitializer(function($instace, $serviceManager){
//    if ($instace instanceof SON\Product){
//        $instace->setDb($serviceManager->get('Connection'));        
//    }    
//});
//
//$produto = $serviceManager->get('Produto');
//
//echo '<pre>';
//print_r($produto);
//echo '</pre>';


//Array de cofig;
$serviceManager = new ServiceManager();
$config = array(
    'factories' => array(
        'Connection' => function($sm){
            return new SON\Db\Connection('a', 'b', 'c', 'd');
        }
    ),
    'invokables' => array(
        'Produto' => 'SON\Product'
    ),
    'shared' => array(
        'Produto' => false,
    ),
);
    
$serviceConfig = new Zend\Mvc\Service\ServiceManagerConfig($config);
$serviceConfig->configureServiceManager($serviceManager);
echo '<pre>';
print_r($serviceManager->get('Produto'));
echo '</pre>';