<?php

namespace SON;

//class Product implements \SON\CategoryAwareInterface {
class Product {
    
    private $category;
    private $db;
    
    public function addCategory(\SON\CategoryInterface $category)
    {
        $this->category[] = $category;
    }
    
    public function setDb(\SON\Db\Connection $db){
        $this->db = $db;
        return $this;
    }
    
    public function getDb(){
        return $this->db;
    }
    
        
    
    /*
    public function setCategory(\SON\Category $category)
    {
        $this->category = $category;
    }
    
    /*
    private $id;
    private $name;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }
     * 
     */
}
