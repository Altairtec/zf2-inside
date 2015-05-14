<?php

namespace SON\Event;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\EventManager\EventManager;

class EventListener implements ListenerAggregateInterface {
    
    protected $listeners = array();

    public function attach(EventManagerInterface $events) {
        //$this->listeners[] = $events->        
    }

    public function detach(EventManagerInterface $events) {
        
    }

}
