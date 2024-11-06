<?php 

require_once 'models/Database.php';

class Blogs extends Database
{
    public $id;
    public $id_users;
    public $title;
    public $created_at;


	public function create()
	{
		$query = "INSERT INTO `blogs` (`title`, `id_users`) VALUES (:title, :id_users)";

		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':title', $this->title);
		$stmt->bindValue(':id_users', $this->id_users);
		return $stmt->execute();
	}

    public function getAll()
	{
        $stmt = $this->db->prepare('SELECT * FROM `blogs` WHERE `id_users` = ?');
        $stmt->execute([$this->id_users]);
        return $stmt->fetchAll();
	}

    public function deleteBlog()
    {
        $stmt = $this->db->prepare('DELETE FROM `blogs` WHERE `id` = :id');
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }




}