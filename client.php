<?php

require_once './library/Zend/Loader/StandardAutoloader.php';
$loader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
$loader->registerNamespace('SON', 'library/SON');
$loader->register();

use Zend\Http\Request;
use Zend\Http\Client;

//$client = new Client('http://www.google.com.br');
//$response = $client->send();
//
//echo '<pre>';
////echo $response->toString();
//echo $response->getBody();
////echo '</pre>';

//$request = new Request();
//$request->setMethod(Request::METHOD_GET);
//$request->setUri('http://www.google.com.br');
//$request->getHeader()->addHeaderLine('nome:Jonathan');
//
//$client = new Client();
//$client->dispatch($request);
//echo $client->getResponse()->toString();

//$request = new Request();
//$request->setMethod(Request::METHOD_GET);
//$request->setUri('http://www.google.com.br');
//$request->getHeader()->addHeaderLine('nome:Jonathan');
//
//$client = new Client();
//$client->dispatch($request);
//echo $client->getResponse()->toString();

//$request = new Request();
//$request->setMethod(Request::METHOD_GET);
//$request->setUri('http://google.com.br');
//$request->getHeaders()->addHeaderLine('nome:Jonathan');
//
//$client = new Client('http://google.com', array(
//    'maxredirects' => 1));
//$client->dispatch($request);
//echo '<pre>';
//echo $client->getResponse()->toString();
//echo '</pre>';

//Socket
//$config = array(
//    'adapter' => 'Zend\Http\Client\Adapter\Socket', 
//    'ssltransport' => 'tls'
//);
//
//$client = new Client('https://www.google.com.br', $config);
//$response = $client->send(); 
//echo '<pre>';
//echo $response->toString();
//echo '</pre>';

//Curl
$config = array(
    'adapter' => 'Zend\Http\Client\Adapter\Curl', 
    'curloptions' => array(CURLOPT_FOLLOWLOCATION => true)
);

$client = new Client('http://www.google.com.br', $config);
$response = $client->send(); 
echo '<pre>';
echo $response->toString();
echo '</pre>';