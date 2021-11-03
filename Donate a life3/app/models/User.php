<?php
namespace app\models;

class User extends Model {
	protected $table = 'usuarios';
	public function create($nome, $sexo, $senha) {
		$sql = "INSERT INTO {$this->table} VALUES(default, ?,?,?,0)";
		$create = $this->connection->prepare($sql);
		$create->bindValue(1, $nome);
		$create->bindValue(2, $senha);
		$create->bindValue(3, $sexo);
		$create->execute();
		return "sucess";
	}
}