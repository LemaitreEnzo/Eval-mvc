<?php 

require_once 'models/Database.php';

class Roles extends Database
{
    public $id;
    public $name;


    public function createRole() {
        $stmt = $this->db->prepare('INSERT INTO `roles` (name) VALUES (?)');
        $stmt->execute([$this->name]);
        return $stmt->fetchAll();
    }

    public function getIdByName($name) {
        $stmt = $this->db->prepare('SELECT id FROM `role` WHERE `name` = :name');
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}