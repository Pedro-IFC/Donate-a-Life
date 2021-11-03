<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>DL Cadastrar</title>
	<script type="text/javascript">
		var sexo = <?php if (isset($_POST['sexo'])) {echo $_POST['sexo'];}else echo "null";?>;
	</script>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/first.css">
</head>
<body id="capa2">
	<div id="container">
		<div id="cadastrar">
			<center>
				<h1 class="sem-fundo">Cadastrar</h1>
			</center>
				<form id="form-entrada">
					<center>
						<input id="nome" placeholder="Nome de usuário" class="form-1 form-control">
					</center>
					<div class="mg-1">Sexo:<br>
						<input type="radio" id="sexom" name="sexo" value="m">Masculino<br>
						<input type="radio" id="sexof" name="sexo" value="f">Feminino<br>
					</div><br>
					<center>
						<input type="password" id="senha" placeholder="Senha" class="form-1 form-control">
					</center>
					<span class="min-span mg-1">Deve-se ter no minimo 6 caracteres</span><br>
					<center>
						<input type="password" id="conf-senha" placeholder="Confirme a senha" class="form-1 form-control"><br>
					</center>
					<button type="submit" id="btn-cadastrar" class="btn-1 btn btn-primary">Cadastrar</button>
					<a href="index.php" class="btn-2 btn btn-secondary">Entrar</a><br>
					<div id="loading"></div>
				</form>
		</div>
	</div>
</body>
	<script type="text/javascript" src="assets/js/xhttp.js"></script>
	<script type="text/javascript" src="assets/js/cadastrar.js"></script>
</html>