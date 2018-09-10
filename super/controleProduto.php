<?php 
	include 'crudProduto.php';
	$opcao = $_POST["opcao"];

	if($opcao == "Cadastrar"){
		$descricao = $_POST["descricao"];
		$preco = $_POST["preco"];

		$cadastrarProduto($descricao, $preco);
		header("Location: cadastrarProduto.php");
	}



?>