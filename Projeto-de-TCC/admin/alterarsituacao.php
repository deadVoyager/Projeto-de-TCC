<?php
	//Mudança de situação

	if(isset($_POST["id_venda"]))
	{
		include("headeradmin.php");
		
		$id_venda  = $_POST["id_venda"];
		$situacao = $_POST["situacao"];
		
		$sql = " update venda
		set situacao = '$situacao'
		where id_venda = '$id_venda'";
		echo "$sql";
		$resultado = $conexao->query($sql);

		echo "<h1 align='center'>Cadastrado com sucesso!</h1>";
		echo "<br>";
		echo "<p align='center'><a href='vendasadmin.php' class='btn btn-success'>Voltar</a></p>";
		
		include("footeradmin.php");
	}
	else
	{
		echo "<h1> align='center'>Ocorreu um erro</h1>";
		echo "<br>";
		header("Location:vendasadmin.php");
	}
?>