<?php
include("headeradmin.php");

	$sql = "Select * from admin where login = '".$_SESSION["login"]."'";
	$resultado = $conexao->query($sql);
				echo "<h2>Perfil do Administrador</h2>";

	
        $linha=$resultado->fetch_object();
		if(isset($_SESSION["logado"]))
		{
    
		echo $login = $linha->login;
	echo"	<br>";
	echo"	<br>";
		echo $nome = $linha->nome;
    echo"  <br>";
	echo"  <br>";

		  
	}
		  
		  else
		  {
	    echo "
		<h1> Olá , faça o login para poder administrar o site";
		  }
	
include("footeradmin.php");
?>