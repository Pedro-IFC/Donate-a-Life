<?php
session_start();
if (isset($_SESSION['msg'])) {
	$msg =$_SESSION['msg'];
	unset($_SESSION['msg']);
}else{
	$msg= "null";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>DL Login</title>
	<script type="text/javascript">
		var msg = <?php echo '"'.$msg.'"';?>;
		if (msg!="null") {
			alert(msg);
		}
	</script>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/first.css">
</head>
<body id="capa1">
	<div id="container">
		<div id="entrar">
			<center>
				<h1 class="sem-fundo">Entrar</h1>
				<form id="form-entrada">
					<input id="nome" placeholder="Nome de usuário" class="form-1 form-control"><br>
					<input type="password" id="senha" placeholder="Senha do usuário" class="form-1 form-control"><br>
			</center>
					<button type="submit" id="btn-entrar" class="btn-1 btn btn-primary">Entrar</button>
					<a href="cadastraru.php" class="btn-2 btn btn-secondary">Cadastrar</a><br><br>
					<div id="loading"></div>
				</form>
				<span class="btn-1">
						Programador: Pedro Daniel<br>
				</span>
		</div>
	</div>
</body>
	<script type="text/javascript" src="assets/js/xhttp.js"></script>
	<script type="text/javascript" src="assets/js/login.js"></script>
</html>