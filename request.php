<?php

require_once './library/Zend/Loader/StandardAutoloader.php';
$loader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
$loader->registerNamespace('SON', 'library/SON');
$loader->register();

/*
GET URI 1.1
HEADERS Content-Type: text/html
BODDY -> Conteúdo
*/

use Zend\Http\Request;

////Request GET
//$request = new Request;
//$request->setMethod(REQUEST::METHOD_GET);
//$request->setUri('http://google.com');
//$request->setContent(utf8_decode('Conteúdo da nossa REQUEST'));
//
//echo $request->toString();


////Request POST
//$request = new Request;
//$request->setMethod(REQUEST::METHOD_POST);
//$request->getPost()->set('nome', 'Jonathan');
//$request->getPost()->set('x', '10');
//$request->setUri('http://google.com');
//$request->setContent($request->getPost()->toString());
//
//echo $request->toString();

//HEADERS
$request = new Request;
$request->setMethod(REQUEST::METHOD_POST);
$request->getPost()->set('nome', 'Jonathan');
$request->setUri('http://google.com');
$request->setContent($request->getPost()->toString());
$request->getHeaders()->addHeaders(array('headerX' => 10, 'headerY' => 20));
$request->getHeaders()->addHeaderLine('Content-Type: text/html');
echo $request->toString();