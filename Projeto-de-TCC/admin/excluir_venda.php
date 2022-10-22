<?php
	//Excluir Vendas

	if(isset($_GET["ID"]))
	{
		include("headeradmin.php");
		
		$id_venda  = $_GET["ID"];
		
		
		$sql = "delete from venda where id_venda='$id_venda'";

		$resultado = $conexao->query($sql);
		
		echo "<h1 align='center'>Excluido com sucesso!</h1>";
		echo "<br>";
		echo "<p align='center'><a href='vendasadmin.php' class='btn btn-success'>Voltar</a></p>";
		
		include("footeradmin.php");
	}
	else
	{
		header("Location:vendasadmin.php");
	}
?>