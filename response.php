<?php

require_once './library/Zend/Loader/StandardAutoloader.php';
$loader = new Zend\Loader\StandardAutoloader(array('autoregister_zf' => true));
$loader->registerNamespace('SON', 'library/SON');
$loader->register();

/*
VERSION 200 OK Reason
404 Page Not Found
500 Internal Server Error
403 Forbidden
HEADERS
BODY - Content
*/

use Zend\Http\Response;

$response = new Response();
$response->setStatusCode(Response::STATUS_CODE_200);
$response->getHeaders()->addHeaderLine('X-Token: JFD8FSDJK38KLSDK');
$response->getHeaders()->addHeaderLine('Content-Type: text/html');
$response->setContent(
        "<html>
            <body>" . 
                utf8_decode('Olá mundo!') 
            . "</body>
        </html>"  
        );

echo $response->getContent();