<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nome = $_POST["nome"];
		$preco = $_POST["preco"];
		$codBarras = $_POST["codBarras"];
		$descricao = $_POST["descricao"];
		$urlImg = $_POST["urlImg"];
		$quantidade = $_POST["quantidade"];
		$peso = $_POST["peso"];
		
		if (!file_exists("Produtos.txt")) {
		$cabecalho = "id;Nome;Preco;Codigo de Barras;Descricao;Url da Imgaem;Quantidade; Peso; \n";
		$arquivoProdutos = fopen("Produtos.txt", "w");
		fwrite($arquivoProdutos,$cabecalho);
		fclose($arquivoProdutos);
		}
		$arquivoProdutos = fopen("Produtos.txt", "a") or die("arquivo com problemas");
		$id = uniqid();
		$linha = $id . ";" . $nome . ";" . $preco . ";" . $codBarras . ";" . $descricao . ";" . $urlImg . ";" . $quantidade . ";" . $peso . "\n";
		fwrite($arquivoProdutos,$linha);
		fclose($arquivoProdutos);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>

	<body>
		<h1>Menu</h1>
		
		<table>
			<tr>
				<th>
				<a href="exProvaIncluir.php"> Incluir produto </a>
				</th>
			</tr>
			<tr>
				<th>
				<a href="exProvaAlterar1.php"> Alterar produto <a>
				</th>
			</tr>
			<tr>
				<th">
				<a href="exProvaListarTodos.php"> Listar todos produtos</a>
				</th>
			</tr>
			<tr>
				<th>
				<a href="exProvaListarUm.php"> Listar um produto </a>
				</th>
			</tr>
			<tr>
				<th>
				<a href="exProvaExcluir.php">Excluir produto</a>
				</th>
			</tr>
		</table>
		
		<h1>Incluir Produto </h1>
		
		<form action="exProvaIncluir.php" method=POST>
		Nome: <input type=text name="nome" value=''> <br>
		Preco: <input type=text name="preco"> <br>
		Codigo de Barras: <input type=text name="codBarras"> <br>
		Descricao: <input type=text name="descricao"> <br>
		url da Imagem:<input type=text name="urlImg"> <br>
		Quantidade: <input type=text name="quantidade"> <br>
		peso (em KG): <input type=text name="peso"> <br>
		<br><br>
		<input type="submit" value="Incluir">
		</form>
		
	</body>
</html>