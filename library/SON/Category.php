<?php

namespace SON;

class Category implements CategoryInterface {

    private $id;
    private $name;
    private $db;

    public function __construct(Db\Connection $db) {
        $this->db = $db;
    }

    public function listar() {
        $query = "SELECT * FROM category";
        $statement = $this->db->prepare($query);
        $statement->execute();

        return $statement->fetchAll(\PDO::FECH_ASSOC);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getName() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

}
