<?php
	//Cadastro de Produtos

	if(isset($_POST["nome"]))
	{
		include("headeradmin.php");
		
		$nome  = $_POST["nome"];
		$valor = $_POST["valor"];
		$detalhes = $_POST["detalhes"];
		$id_categoria = $_POST["id_categoria"];
		$quantidade = $_POST["quantidade"];
		$foto = $_POST["foto"];
		
		$sql = "insert into produto (id_categoria, nome_produto, detalhes, valor, quantidade, foto) 
				values ('$id_categoria','$nome','$detalhes','$valor','$quantidade','$foto')";
		$resultado = $conexao->query($sql);

		echo "<h1 align='center'>Cadastrado com sucesso!</h1>";
		echo "<br>";
		echo "<p align='center'><a href='produtosadmin.php' class='btn btn-success'>Voltar</a></p>";
		
		include("footeradmin.php");
	}
	else
	{
		header("Location:produtosadmin.php");
	}
?>