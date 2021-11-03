<?php
namespace app\models;
ini_set('default_charset','UTF-8');
abstract class Model {
	protected $connection;

	public function __construct() {
		$this->connection = Connection::connect();
	}
	public function all() {
		$sql = "SELECT * FROM {$this->table}";
		$all = $this->connection->prepare($sql);
		$all->execute();
		return $all->fetchAll();
	}
	public function find($field,$comp, $value) {
		$sql = "SELECT * FROM {$this->table} WHERE $field $comp ?";
		$find = $this->connection->prepare($sql);
		$find->bindValue(1,$value);
		$find->execute();
		return $find->fetchAll();
	}
	public function all_of_one($id) {
		$sql = "SELECT * FROM {$this->table} WHERE id = ?";
		$all_of_one = $this->connection->prepare($sql);
		$all_of_one->bindValue(1,$id);
		$all_of_one->execute();
		return $all_of_one->fetch();
	}
	public function countF($field,$comp, $value) {
		$sql = "SELECT COUNT(*) FROM {$this->table} WHERE $field $comp ?";
		$find = $this->connection->prepare($sql);
		$find->bindValue(1,$value);
		$find->execute();
		$count=$find->rowCount();
		return $count;
	}
	public function find_one_id($field, $comp, $value) {
		$sql = "SELECT id FROM {$this->table} WHERE $field $comp ?";
		$find_one_id = $this->connection->prepare($sql);
		$find_one_id->bindValue(1,$value);
		$find_one_id->execute();
		return $find_one_id->fetch();
	}
	public function find_one($field, $comp, $value) {
		$sql = "SELECT * FROM {$this->table} WHERE $field $comp ?";
		$find_one = $this->connection->prepare($sql);
		$find_one->bindValue(1,$value);
		$find_one->execute();
		return $find_one->fetch();
	}
	public function find_NS($nome, $senha) {
		$sql = "SELECT id FROM {$this->table} WHERE nome = ? and senha= ?";
		$find = $this->connection->prepare($sql);
		$find->bindValue(1,$nome);
		$find->bindValue(2,$senha);
		$find->execute();
		return $find->fetch();
	}
	public function del($id){
		$sql = "DELETE FROM {$this->table} WHERE id = ?";
		$del = $this->connection->prepare($sql);
		$del->bindValue(1, $id);
		$del->execute();
		return ($del->rowCount()>0) ;
	}
	public function alt($id,$nome,$email){
		$sql = "UPDATE {$this->table} set nome= ? , email= ?  WHERE id = ?";
		$alt = $this->connection->prepare($sql);
		$alt->bindValue(1, $nome);
		$alt->bindValue(2, $email);
		$alt->bindValue(3, $id);
		$alt->execute();
		return true;
	}
}