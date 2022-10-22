<?php
	//Excluir Historico

	if(isset($_GET["ID"]))
	{
		include("headeradmin.php");
		
		$id_venda  = $_GET["ID"];
		
		
		$sql = "delete from produto_venda where id_item='$id_item'";

		$resultado = $conexao->query($sql);
		
		echo "<h1 align='center'>Excluido com sucesso!</h1>";
		echo "<br>";
		echo "<p align='center'><a href='historicoadmin.php' class='btn btn-success'>Voltar</a></p>";
		
		include("footeradmin.php");
	}
	else
	{
		header("Location:historicoadmin.php");
	}
?>