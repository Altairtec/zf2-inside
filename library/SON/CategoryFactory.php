<?php

namespace SON;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class CategoryFactory implements FactoryInterface {

    public function createService(ServiceLocatorInterface $serviceLocator) {
        $connection = $serviceLocator->get('Connection');
        return new Category($connection);
    }
    
       
    
}
