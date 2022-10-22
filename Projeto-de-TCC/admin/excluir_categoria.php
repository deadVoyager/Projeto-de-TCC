<?php
	//Excluir Categorias

	if(isset($_GET["ID"]))
	{
		include("headeradmin.php");
		
		$id_categoria  = $_GET["ID"];
		
		
		$sql = "delete from categoria where id_categoria='$id_categoria'";
		$resultado = $conexao->query($sql);
		
		echo "<h1 align='center'>Excluido com sucesso!</h1>";
		echo "<br>";
		echo "<p align='center'><a href='categoriasadmin.php' class='btn btn-success'>Voltar</a></p>";
		
		include("footeradmin.php");
	}
	else
	{
		header("Location:categoriasadmin.php");
	}
?>