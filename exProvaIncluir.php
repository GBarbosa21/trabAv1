<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nome = $_POST["nome"];
		$codigo = $_POST["codigo"];
		$preco = $_POST["preco"];
		$codBarras = $_POST["codBarras"];
		$descricao = $_POST["descricao"];
		$urlImg = $_POST["urlImg"];
		$quantidade = $_POST["quantidade"];
		$peso = $_POST["peso"];
		
		if (!file_exists("Produtos.txt")) {
		$cabecalho = "Nome;Codigo;Preco;Codigo de Barras;Descricao;Url da Imgaem;Quantidade; Peso; \n";
		$arquivoProdutos = fopen("Produtos.txt", "w");
		fwrite($arquivoProdutosw,$cabecalho);
		fclose($arquivoAluno);
		}
		
		$arquivoProdutos = fopen("Produtos.txt", "a") or die("arquivo com problemas");
		$linha = $nome . ";" . $codigo . ";" . $preco . ";" . $codBarras . ";" . $descricao . ";" . $urlImg . ";" . $quantidade . ";" . $peso . "\n";
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
				Incluir produto
				</th>
			</tr>
			<tr>
				<th>
				Alterar produto
				</th>
			</tr>
			<tr>
				<th>
				Listar todos produtos
				</th>
			</tr>
			<tr>
				<th>
				Listar um produto
				</th>
			</tr>
			<tr>
				<th>
				Excluir produto
				</th>
			</tr>
		</table>
		
		<h1>Incluir Produto </h1>
		
		<form action="exProvaIncluir.php" method=POST>
		Nome: <input type=text name="nome" value=''> <br>
		Codigo: <input type=text name="codigo" value=''> <br>
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