<?php 

require_once 'models/Database.php';

class Users extends Database
{
    public $id;
    public $id_roles;
    public $firstname;
    public $lastname;
    public $created_at;
    public $password;
    public $email;

    public function createUser() {
        $stmt = $this->db->prepare('INSERT INTO `users` (firstname, lastname, email, password, created_at, id_roles) VALUES (:firstname, :lastname, :email, :password, :created_at, :id_roles)');
        $stmt->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $stmt->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $this->password, PDO::PARAM_STR);
        $stmt->bindValue(':created_at', $this->created_at, PDO::PARAM_STR);
        $stmt->bindValue(':id_roles', $this->id_roles, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getData() {
        $stmt = $this->db->prepare('SELECT * FROM `users` WHERE `email` = :email');
        $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function modify() {
        $stmt = $this->db->prepare('UPDATE `users` SET firstname = :firstname, lastname = :lastname, email = :email, password = :password,  id_roles = :id_roles WHERE id = :id');

        $stmt->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $stmt->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $this->password, PDO::PARAM_STR);
        $stmt->bindValue(':created_at', $this->created_at, PDO::PARAM_STR);
        $stmt->bindValue(':id_roles', $this->id_roles, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function deleteTask()
    {
        $stmt = $this->db->prepare('DELETE FROM `users` WHERE `id` = ?');
        $stmt->execute([$this->id]);
        return $stmt->fetch();
    }


}