<?php

require_once './library/Zend/Loader/StandardAutoloader.php';
$loader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
$loader->registerNamespace('SON', 'library/SON');
$loader->register();

/*
$exemplo = new SON\Event\Exemplo();

$exemplo->getEventManager()->attach('metodo', function($e){
    echo $e->getName() . '<br />';
    echo get_class($e->getTarget()) . '<br />';
    echo $e->getParam('valor') . '<br />'; 
    echo $e->getParam('parametro') . '<br />';
});
*/

$events = new Zend\EventManager\SharedEventManager(); 
$events->attach('SON\Event\Exemplo', 'metodo', function($e){
    echo $e->getName() . '<br />';
    echo get_class($e->getTarget()) . '<br />';
    echo $e->getParam('valor') . '<br />'; 
    echo $e->getParam('parametro') . '<br />';    
});

//$events->attach('SON\Event\Exemplo', 'multiplosEventos.pre', function($e){
//    echo 'Executou pre <br />';
//}, -1000);
//
//$events->attach('SON\Event\Exemplo', 'multiplosEventos.post', function($e){
//    echo 'Executou post <br />';
//}, 1000);

/*
$events->attach('SON\Event\Exemplo', array('metodo', 'metodo2'), function($e){
    echo $e->getName() . '<br />';
    echo get_class($e->getTarget()) . '<br />';
    echo $e->getParam('valor') . '<br />'; 
    echo $e->getParam('parametro') . '<br />';    
});
*/

/*
$events->attach('SON\Event\Exemplo', 'metodo2', function($e){
    echo $e->getName() . '<br />';
    echo get_class($e->getTarget()) . '<br />';
    echo $e->getParam('valor') . '<br />';   
});
*/

//print_r($events->getEvents('SON\Event\Exemplo')); die;

echo '<pre>';
//print_r($events->getListeners('SON\Event\Exemplo', '*')); 
echo '</pre>';

//$events->clearListeners('SON\Event\Exemplo'); //Limpa os listeners

//$exemplo = new SON\Event\Exemplo(); 
//$exemplo->getEventManager()->setSharedManager($events); //events é um sharedEventManager
//$exemplo->metodo(20);
//$exemplo->metodo2();

//@print_r($exemplo->metodo3(2));
//@print_r($exemplo->metodo3(1));
//@print_r($exemplo->metodo3(2));

//$exemplo->multiplosEventos(1);

$exemploListener = new SON\Event\ExemploListener;
$exemplo = new SON\Event\Exemplo;
$exemplo->getEventManager()->attachAggregate($exemploListener);

$exemplo->multiplosEventos(1);



