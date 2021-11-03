<?php
	session_start();
	require '../../config.php';
	use app\models\User;
	$user = new User;
	$nome=filter_input(INPUT_GET, 'nome');
	$sexo=$_GET['sexo'];
	$senha=md5(filter_input(INPUT_GET, 'senha'));
	$find=$user->find('nome','=', $nome);
	if (count($find)>0) {
		echo "erro1";	
	}else{ 
		echo $user->create($nome,$sexo,$senha);
	}