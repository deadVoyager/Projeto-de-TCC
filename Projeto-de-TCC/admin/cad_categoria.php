<?php


	if(isset($_POST["nome"]))
	{
		include("headeradmin.php");
		
		$nome =$_POST["nome"];
		
		$sql = "insert into categoria (nome,ativo) values ('$nome','S')";
		$resultado = $conexao->query($sql);
		
		echo "<h1 align='center'>Cadastrado com sucesso!</h1>";
		echo "<br>";
		echo "<p align='center'><a href='categoriasadmin.php' class='btn btn-success'>Voltar</a></p>";
		
		include("footeradmin.php");
	}
	else
	{
		header("Location:categoriasadmin.php");
	}
?>