<?php

namespace SON\Event;

use Zend\EventManager\EventInterface;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\EventManager;
use Zend\EventManager\EventManagerAwareInterface;

class Exemplo implements EventManagerAwareInterface {

    protected $events;

    public function setEventManager(EventManagerInterface $events) {
        $events->setIdentifiers(array(
            __CLASS__,
            get_called_class()
        ));

        $this->events = $events;
        return $this;
    }

    public function getEventManager() {
        if (null == $this->events) {
            $this->setEventManager(new EventManager());
        }

        return $this->events;
    }

    public function metodo($parametro) {
        echo 'Metodo executou. <br />';

        //Gatilho
        $this->getEventManager()->trigger(
                __FUNCTION__, 
                $this, 
                array('valor' => 10, 
                    'parametro' => $parametro));
    }
    
     public function metodo2() {
        //Gatilho
        $this->getEventManager()->trigger(
                __FUNCTION__, 
                $this, 
                array('valor' => 'Valor qualquer'));
    }
    
    public function metodo3($valor){
        //Gatilho
        $arg = compact('valor');        
        $results = $this->getEventManager()->triggerUntil(
                __FUNCTION__, 
                $this, 
                $arg, 
                function($v) use ($valor) {
                    if($valor == 1){
                        return true;                        
                    }                                
                }
            );
            
        if ($results->stopped()){
            echo utf8_decode('Parou a execução');
            return $results->last();            
        }
        
        echo utf8_decode("Execução continuando...");
    }
    
    public function multiplosEventos($valor){
        $arg = compact('valor');
        $this->getEventManager()->trigger(
                __FUNCTION__ . '.pre', 
                $this, 
                $arg);        
        
        echo '<br />';
        echo utf8_decode('Conteúdo do método sendo executado');
        echo '<br />';
        echo '<br />';
        
        $this->getEventManager()->trigger(
                __FUNCTION__ . '.post', 
                $this, 
                array('valor' => 'Executou depois'));  
    }
    
    

}
