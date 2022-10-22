<?php
	//Excluir de Produtos

	if(isset($_GET["ID"]))
	{
		include("headeradmin.php");
		
		$id_produto  = $_GET["ID"];
		
		
		$sql = "delete from produto where id_produto='$id_produto'";
		$resultado = $conexao->query($sql);
		
		echo "<h1 align='center'>Excluido com sucesso!</h1>";
		echo "<br>";
		echo "<p align='center'><a href='produtosadmin.php' class='btn btn-success'>Voltar</a></p>";
		
		include("footeradmin.php");
	}
	else
	{
		header("Location:produtosadmin.php");
	}
?>