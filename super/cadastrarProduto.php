<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Controle de Produtos</title>
</head>
<body>
	<div>
		<h1>Cadastrar Produtos</h1>
		<form method="post" action="controleProduto.php">
			<label for="descricao">Descrição:</label>
			<input type="text" name="descricao" id="descricao">
			<label for="preco">Preço:</label>
			<input type="number" step="0.01" name="preco" id="preco">
			<input type="submit" name="opcao" value="Cadastrar">			
		</form>
		<a href="menu.php">Voltar!</a>
	</div>

</body>
</html>