<?php
session_start();
require '../../config.php';
use app\models\User;
$user = new User;
echo json_encode($user->find_one('id','=',$_SESSION['idu']));