<?php 
	$conexao;

	function conectar(){
		global $conexao;
		$conexao = mysql_connect('localhost', 'root', 'supermercado') or die(mysqli_connect_error());
	}

	function fechar(){
		global $conexao;
		mysqli_close($conexao);
	}

	function query(){
		global $conexao;
		mysqli_query($conexao, "SET CHARACTER SET utf8");
		$query = mysqli_query($conexao, $sql)or die (mysqli_query_error());
		return $query;
	}



?>