<?php
include("headeradmin.php");
 
	echo "<div class=\"container\">";
	echo "<h1>Olá  ".$_SESSION["login"]."</h1>";
	
	echo "<h2> Relação de vendas</h2>";
	
	$sql = "select * from venda order by data_venda";
	
	$resultado = $conexao->query($sql);
	echo "<table class='table table-hover'>";
	echo "<tr>
	        <td>Id da Venda </td>
			<td>Data da venda </td>
			<td>Cpf </td>
			<td>Forma de pagamento</td>
			<td>Parcelas</td>
			<td>Valor total</td>
			<td>Valor do frete</td>
			<td>Endereço</td>
			<td>Situação</td>
			<td>CEP</td>

		  </tr>";
	while($linha = $resultado->fetch_object())
	{
			echo "<tr>
			<td>$linha->id_venda</td>
			<td>$linha->data_venda</td>
			<td>$linha->cpf</td>
			<td>$linha->forma_pag</td>
			<td>$linha->parcelas</td>
			<td>$linha->valor_total</td>
			<td>$linha->valor_frete</td>
			<td>$linha->endereco</td>
			<td>$linha->situacao</td>
			<td>$linha->cep</td>

		  </tr>";
	}		
		  
	echo "</table>";
	
	echo "<hr>";

?>
<form action="alterarsituacao.php" method="post">
<<div class="form-group">
		<label for="id_venda">Informe o ID da venda</label>
		<input type="text" class="form-control"  name="id_venda">
	</div>
	<h5> Informe a situação </h5>
	
	<input type='radio' name='situacao' value='aberto' checked>Aberto</div>
	<input type='radio' name='situacao' value='enviando' checked>Enviando</div>
	<input type='radio' name='situacao' value='entregue' checked>Entregue</div>
	<input type='radio' name='situacao' value='cancelado' checked>Cancelado</div>
	
	<button type="submit" class="btn btn-success">Mudar Situação</button>
	</form>
	<?php
	echo "</div>";

include("footeradmin.php");
?>