<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$codigo = $_POST["codigo"];
		$arquivoAluno = fopen("Produtos.txt", "r") or die("arquivo com problemas");
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
		
		<h1>Alterar Produto </h1>
		
		<form action="ex19_IncluirAlunoArquivoApend.php" method=POST>
		Codigo do Produto: <input type=text name="codigo" value=''> <br>
		<br><br>
		<input type="submit" value="Incluir">
		</form>
	
	</body>
</html>