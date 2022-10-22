<?php
include("headeradmin.php");
 
	echo "<div class=\"container\">";
	echo "<h1>Olá  ".$_SESSION["login"]."</h1>";
	
	echo "<h2> Relação de vendas</h2>";
	
	$sql = "select * from produto_venda order by id_item";
	
	$resultado = $conexao->query($sql);
	echo "<table class='table table-hover'>";
	echo "<tr>
	        <td>ID</td>
			<td>ID da Venda</td>
			<td>ID dos Produtos</td>
			<td>Quantidade</td>
			<td>Valor</td>

		  </tr>";
	while($linha = $resultado->fetch_object())
	{
			echo "<tr>
			<td>$linha->id_item</td>
			<td>$linha->id_venda</td>
			<td>$linha->id_produto</td>
			<td>$linha->quantidade</td>
			<td>$linha->valor</td>

		  </tr>";
	}		
		  
	echo "</table>";
	
	echo "<hr>";
	
	
	echo "</div>";

include("footeradmin.php");
?>