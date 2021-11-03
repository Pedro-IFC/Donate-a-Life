<?php
		$escolhas=file_get_contents('../assets/escolhas/dados/'.$_SESSION['idu'].'/escolhas.json');
		$escolhas=json_decode($escolhas);
		if (isset($escolhas[0])) {
			$_SESSION['escolha1']=$escolhas[0];
			$_SESSION['fraseEscolha1']=$escolhas[0]==0 ? "Por que?": "Mudar de assunto";
		}
		if(isset($escolhas[1])){
			$_SESSION['escolha2']=$escolhas[1];
			$_SESSION['fraseEscolha2']=$escolhas[1]==0 ? "Fale": "Mudar de assunto";
		}
?>