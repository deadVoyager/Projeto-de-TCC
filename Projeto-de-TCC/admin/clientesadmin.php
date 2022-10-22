<?php
include("headeradmin.php");

echo "<div class=\"container\">";
	echo "<h1>Olá  ".$_SESSION["login"]."</h1>";
	
	echo "<h2> Clientes</h2>";
	
	$sql = "select * from clientes order by nome";
	
	$resultado = $conexao->query($sql);
	echo "<table class='table table-hover'>";
	echo "<tr>
			<td>Nome</td>
			<td>Email</td>
			<td>CPF</td>
			<td>Sexo</td>
			<td>CEP</td>
			<td>Endereço</td>
			<td>Data de Nascimento</td>
		  </tr>";
		  while($linha = $resultado->fetch_object())
	{
			echo "<tr>
			<td>$linha->nome</td>
			<td>$linha->email</td>
			<td>$linha->cpf</td>
			<td>$linha->sexo</td>
			<td>$linha->cep</td>
			<td>$linha->endereco</td>
			<td>$linha->data_nascimento</td>
		  </tr>";
	}		
		  
	echo "</table>";
	
	echo "<hr>";
	
	?>
<?php

include("footeradmin.php");
?>