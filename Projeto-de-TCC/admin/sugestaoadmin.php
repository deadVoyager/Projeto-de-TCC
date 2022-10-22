<?php
include("headeradmin.php");
 
	echo "<div class=\"container\">";
	echo "<h1>Olá  ".$_SESSION["login"]."</h1>";
	
	echo "<h2> Sugestões e Perguntas</h2>";
	
	$sql = "select * from sugestoes order by nome";
	
	$resultado = $conexao->query($sql);
	echo "<table class='table table-hover'>";
	echo "<tr>
			<td>Nome</td>
			<td>Email</td>
			<td>Telefone</td>
			<td>Sugestão</td>
		  </tr>";
	while($linha = $resultado->fetch_object())
	{
			echo "<tr>
			<td>$linha->nome</td>
			<td>$linha->email</td>
			<td>$linha->telefone</td>
			<td>$linha->sugestao</td>
		  </tr>";
	}		
		  
	echo "</table>";
	
	echo "<hr>";
	?>
	echo "<h4>Formulário de sugestão</h4>
					<form action="respostadmin.php" method="post">
						<input type="text" name="login" placeholder="Login" required="">
						
						<textarea name="resposta" style="min-height: 200px; resize: none; width: 100%; margin: 1.5em 0;" placeholder="Pergunta feita e a resposta:" required=""></textarea>
						<input type="submit" value="Enviar" >
					</form>";
		<?php			
	include("footeradmin.php");
	?>