<?php 
	include 'conexaoBD.php';

	function cadastrarProduto($descricao, $preco){
		conectar();
		query("INSERT INTO PRODUTO(descricao, preco)VALUES($descricao, $preco)");
		fechar();
	}


?>