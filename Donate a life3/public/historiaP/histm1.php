<?php
	session_start();
	if (!isset($_SESSION['logado'])) {
		$_SESSION['msg']="Você não logou ainda";
		header('Location: ../index.php');
	}else{
		$idu=$_SESSION['idu'];
	}
	if (isset($_POST['sair-cap'])) {
		header('Location: ../principal.php');
	} 
	require '../assets/escolhas/readEscolhas.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Historia</title>
	<script type="text/javascript">
		var cap = 1;
		var idu=<?php echo $idu?>
	</script>
	<style type="text/css">
		.escolha{
			color: red;
			font-size: 30px;
		}
	</style>
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/first.css">
	<style type="text/css">
		.ini{
			font-size: 40px;
			font-weight: bold;
		}
		.mg1{
			text-align:center;
		}
		#title{
			font-size: 50px;
		}
		body{
			font-size: 20px;
		}
	</style>
</head>
<body id="capa3">
	<div class="container" id="teste">
		<center>
			<img src="../design_docs/final/he/cap1/pg1.png" width="650px"><br><br>
			<img src="../design_docs/final/he/cap1/pg2.png" width="650px"><br><br>
			<img src="../design_docs/final/he/cap1/pg3.png" width="650px"><br><br>
		</center>
		<h1 id="title" class="mg1"></h1><br>
		<p><span class="tab"></span><span class="ini">E</span>ram sete e meia da manhã quando acordei.</p>
		<p>-Droga, de novo isso</p>
		<p><span class="tab"></span>Esse sou eu, <span class="nome"></span>, um simples estudante de ensino médio, com notas médias, sem muitos amigos, integrante de um time fraco de vôlei, sem namorada, um estudante simples se tirar o fato de que eu sou o Ace do meu time.</p>
		<p><span class="tab"></span>E como um estudante simples, durmo até tarde e acabo me atrasando para a aula, como no dia de hoje.</p>
		<p>-Tenho que esperar até próximo das 8 horas para ir à escola, isso me dá tempo de me ajeitar e tomar café.</p>
		<p><span class="tab"></span>Saindo do quarto e indo para a cozinha percebo que o tempo está bom apesar de estar tudo escuro, graças a quase todas as janelas estarem fechadas, abrindo-as dava de perceber o quão limpo estava o tempo, com apenas poucas nuvens pairando sobre o cêu.</p>
		<p><span class="tab"></span>Na geladeira da cozinha estava escrito "<i>Tentei te acordar, mas não consegui, tem comida na geladeira, com amor Mamãe</i>", fui até o quarto dos meus pais e lá estava meu pai dormindo, o quarto da minha irmã que era ao lado, estava uma bagunça com a cama desajeitada e os mangás jogados em todos os cantos, como ela não estava lá supus que ela já havia ido para a escola.</p>
		<p><span class="tab"></span>Fui a geladeira e havia takikomi gohan (um risosoto de peixe praticamente), coloquei no kotatsu e comi, ao terminar coloquei na pia, que estava quase lotada, e fui ao banheiro escovar os dentes, ao entrar percebi que faltava papel higiênico e que a pasta estava no fim.</p>
		<p><span class="tab"></span>Após terminar de escovar e de me aprontar para a aula, rapidamente excrevi um bilhete dizendo <i>"A comida estava ótima, o papel higiênico e pasta de dente", após cola-lo na geladeira fui para a escola.</i></p>
		<p><span class="tab"></span>Cheguei lá próximo das 8 e 5, 10 minutos antes do segundo tempo, então sem nada para fazer conversei com Lev, um amigo meu desde a pré-escola.</p>
		<center>
			<img src="../design_docs/final/he/cap1/pg4.png" width="650px">
		</center>
		<p><span class="tab"></span>Indo para o segundo tempo teriámos Saúde e educação física, primeiramente deveríamos ir para o banheiro trocar de roupa.</p>
		<p>-Muito bem alunos comecem o alongemento, porque hoje teremos vôlei -Declarou Kana-sensei</p>
		<p>-Vamos fazer o time de sempre? Eu, você, o Yaku, o Kuroo, o Daichi e o -Perguntou Lev</p>
		<p>-Pode ser, vai ser divertido jogar contra o Atsumo e o Osumo eles são muito bons -Respondi</p>
		<p>-Ok vou chama-los para o time -Disse Lev indo em direção aos mesmos</p>
		<p><span class="tab"></span>Logo após Lev se encontrar com eles, ele retornou cabisbaixo</p>
		<p id="antP1">-Eles disseram que não que iriam jogar com o Atsumo e Osumo -Disse ele, olhando para baixo</p>
		<?php 
			if (!isset($_SESSION['escolha1'])){
				echo '<form action="../assets/escolhas/escolhas.php?escolha=1" method="POST">';
				echo '<small>Obs as cores dos botões não influenciam na história</small><br><br>';
				echo '<button type="submit" class="btn btn-primary" value="0" name="btn">Perguntar por 	que?</button>';
				echo "&nbsp;&nbsp;";
				echo '<button type="submit" class="btn btn-success" value="1" name="btn">Mudar de 	assunto</button>';
				echo '</form>';
			}else{
				if ($_SESSION['escolha1']==0) {
					include '../assets/escolhas/returns/escolha10.php';
				}else if ($_SESSION['escolha1']==1) {
					include '../assets/escolhas/returns/escolha11.php';
				}
			}
		?>
	</div>
	<div class="sup-di">
		<form method="POST">
			<button type="submit" name="sair-cap" class="btn btn-primary">Sair do capítulo</button>
		</form>
	</div>
</body>
	<script type="text/javascript" src="../assets/js/functions.js"></script>
	<script type="text/javascript" src="../assets/js/xhttp.js"></script>
	<script type="text/javascript" src="../assets/js/hist1.js"></script>
</html>