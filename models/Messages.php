<?php 

require_once 'models/Database.php';

class Messages extends Database
{
    public $id;
    public $text;
    public $id_users;
    public $id_blogs;


    public function addMessage() {
        $stmt = $this->db->prepare('INSERT INTO `messages` (text, id_users, id_blogs) VALUES (:text, :id_users, :id_blogs)');
        $stmt->bindValue(':text', $this->text, PDO::PARAM_STR);
        $stmt->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        $stmt->bindValue(':id_blogs', $this->id_blogs, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getIdByName($name) {
        $stmt = $this->db->prepare('SELECT id FROM `role` WHERE `name` = :name');
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}