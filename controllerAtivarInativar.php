<?php
	include ("Noticia.php");
	$listarNoticia = new Noticia(); //new() muitas vezes significa classe
	
	$id = filter_input(INPUT_GET, "id");
	$situacao= filter_input(INPUT_GET, "situacao");
	
	$retorno = $listarNoticia->ativarInativar($id,$situacao);
	
	if($retorno){
		echo "Noticia ativada ou inativada com sucesso";
	}else {
		echo "Erro ao ativar ou inativar a noiticia";
	}
	
?>	
