<?php
	//Resposta para perguntas feitas

	if(isset($_POST["login"]))
	{
		include("headeradmin.php");
		
		$login  = $_POST["login"];
		$resposta = $_POST["resposta"];
		
		
		$sql = "insert into sugestao_resposta (login_admin, resposta)
				values ('$login','$resposta')";
		$resultado = $conexao->query($sql);

		echo "<h1 align='center'>Cadastrado com sucesso!</h1>";
		echo "<br>";
		echo "<p align='center'><a href='sugestaoadmin.php' class='btn btn-success'>Voltar</a></p>";
		
		include("footeradmin.php");
	}
	else
	{
		header("Location:sugestaoadmin.php");
	}
?>