<?php
	session_start();
	if ($_GET['escolha']==1) {
		mkdir("dados/".$_SESSION['idu']);
	 	$arquivo0=fopen("dados/".$_SESSION['idu']."/escolhas.json","w+");
		$arquivo1=file_get_contents("dados/".$_SESSION['idu']."/escolhas.json");
		$JSON=json_decode($arquivo1);
		if (is_array($JSON)) {
			array_push($JSON,$_POST['btn']);
		}else{
			$JSON=array($_POST['btn']);
		}		$JSON=json_encode($JSON);
		fwrite($arquivo0,$JSON);
		fclose($arquivo0);
		header("Location: ../../historiaP/histm1.php");
	}else if($_GET['escolha']==2){
		$arquivo1=file_get_contents("dados/".$_SESSION['idu']."/escolhas.json");
		$arquivo0=fopen("dados/".$_SESSION['idu']."/escolhas.json","w+");
		$JSON=json_decode($arquivo1);
		$JSON[1]=$_POST['btn'];
		fwrite($arquivo0,json_encode($JSON));
		fclose($arquivo0);
		header("Location: ../../historiaP/histm1.php");
	}
?>