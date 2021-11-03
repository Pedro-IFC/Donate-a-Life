<?php
	session_start();
	if (!isset($_SESSION['idu'])) {
		$_SESSION['msg']="Você não logou ainda";
		header('Location: index.php');
	}else{
		$idu=$_SESSION['idu'];
	}
	if (isset($_POST['sair-index'])) {
		unset($_SESSION['idu']);
		unset($_SESSION['logado']);
		session_unset();
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Usuario</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/first.css">
</head>
<body id="capa3">
	Id:<span id="idu"><?php if (isset($idu)) {echo $idu;}?></span>
	<div class="container">
		<h1 id="nome-title" class="mg-2"></h1>
		<img id="img-pers" height="400">
		<div id="cap">
			<div class="card" id="card" style="width: 18rem;">
				<img class="card-img-top" id="capa-cap" alt="Capa do capitulo" style="max-height:250px;"><br>
		  		<div class="card-body">
		    		<h5 class="card-title" id="cap-title"></h5>
		    		<p class="card-text" id="cap-desc"></p>
		    		<a  class="btn btn-primary" id="btn-historia">Jogar o Capitulo</a>
		  		</div>
			</div>
		</div>
		
	</div>
	<div class="sup-di">
		<form method="POST">
			<button type="submit" name="sair-index" class="btn btn-primary">Sair</button>
		</form>
	</div>
</body>
	<script type="text/javascript" src="assets/js/xhttp.js"></script>
	<script type="text/javascript" src="assets/js/functions.js"></script>
	<script type="text/javascript" src="assets/js/principalC.js"></script>
</html>