<?php
include("headeradmin.php");
 
	echo "<div class=\"container\">";
	echo "<h1>Olá  ".$_SESSION["login"]."</h1>";
	
	echo "<h2> Categorias de produtos</h2>";
	
	$sql = "select * from categoria order by nome";
	
	$resultado = $conexao->query($sql);
	echo "<table class='table table-hover'>";
	echo "<tr>
			<td>Id_Categoria</td>
			<td>Nome</td>
			<td>Ativo</td>
			<td>Excluir</td>
		  </tr>";
	while($linha = $resultado->fetch_object())
	{
			echo "<tr>
			<td>$linha->id_categoria</td>
			<td>$linha->nome</td>
			<td>$linha->ativo</td>
			<td><a href='excluir_categoria.php?ID=$linha->id_categoria'><img src='/TCC(Final)/Images/deletar2.png'></a></td>
		  </tr>";
	}		
		  
	echo "</table>";
	
	echo "<hr>";
	
	?>
	<form action="cad_categoria.php" method="post">
	<div class="form-group">
		<label for="nome">Nome da Categoria</label>
		<input type="text" class="form-control" id="nome" name="nome">
	</div>
		
	<button type="submit" class="btn btn-success">Adicionar Categoria</button>
	</form>
	
	<?php
	echo "</div>";

include("footeradmin.php");
?>