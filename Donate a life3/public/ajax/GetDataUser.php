<?php
	session_start();	
	require '../../config.php';
	$idu=$_GET['idu'];
	use app\models\User;
	$user = new User;
	echo json_encode($user->all_of_one($idu));