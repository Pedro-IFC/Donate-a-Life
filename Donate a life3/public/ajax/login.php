<?php
session_start();
require '../../config.php';
use app\models\User;
$user = new User;
$nome= filter_input(INPUT_GET, 'nome');
$senha= md5(filter_input(INPUT_GET, 'senha'));
$count=$user->countF('nome','=', $nome);
if ($count>0) {
	$usuarios=$user->find_NS($nome, $senha);
	if (isset($usuarios->id)) {
		$_SESSION['idu']=$usuarios->id;
		$_SESSION['logado']=true;	
		echo $usuarios->id;
	}else{
		echo "erro2";
	}
}else{
	echo "erro1";
}