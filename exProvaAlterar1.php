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
		
		<h1>Alterar produto</h1>
		
		<form action="exProvaAlterar1.php" method=POST>
		ID: <input type=text name="id" value=''> <br>
		Nome: <input type=text name="nome" value=''> <br>
		Preco: <input type=text name="preco"> <br>
		Codigo de Barras: <input type=text name="codBarras"> <br>
		Descricao: <input type=text name="descricao"> <br>
		url da Imagem:<input type=text name="urlImg"> <br>
		Quantidade: <input type=text name="quantidade"> <br>
		peso (em KG): <input type=text name="peso"> <br>
		<br><br>
		<input type="submit" value="Alterar">
		</form>
		
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$temp = $_POST["id"];
			$nome = $_POST["nome"];
			$preco = $_POST["preco"];
			$codBarras = $_POST["codBarras"];
			$descricao = $_POST["descricao"];
			$urlImg = $_POST["urlImg"];
			$quantidade = $_POST["quantidade"];
			$peso = $_POST["peso"];
				
		$arquivoProduto = fopen("Produtos.txt", "r")  or die("arquivo com problemas");
		$arquivoProduto2 = fopen("Produtos2.txt", "w")  or die("arquivo com problemas");
		
		$linha = $temp . ";" . $nome . ";" . $preco . ";" . $codBarras . ";" . $descricao . ";" . $urlImg . ";" . $quantidade . ";" . $peso . "\n";
		fwrite($arquivoProduto2, $linha);
		
		while (list($id, $nome, $preco, $codBarras, $descricao, $urlImg, $quantidade, $peso) = fgetcsv($arquivoProduto, 1000, ";"))
		{
			if($temp != $id){
			$linha = $id . ";" . $nome . ";" . $preco . ";" . $codBarras . ";" . $descricao . ";" . $urlImg . ";" . $quantidade . ";" . $peso . "\n";
			fwrite($arquivoProduto2, $linha);
			}
		}
		
			fclose($arquivoProduto);
			fclose($arquivoProduto2);
			
			$arquivoProduto = fopen("Produtos.txt", "w")  or die("arquivo com problemas");
			$arquivoProduto2 = fopen("Produtos2.txt", "r")  or die("arquivo com problemas");
				while (!feof($arquivoProduto2)) {
                     fwrite($arquivoProduto, fgets($arquivoProduto2));
                }
				fclose($arquivoProduto);
				fclose($arquivoProduto2);
				unlink("Produtos2.txt");
			}
		?>
		
	</body>
</html>