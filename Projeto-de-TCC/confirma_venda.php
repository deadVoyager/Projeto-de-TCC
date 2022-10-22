<?php
 
session_start();

   
   if(isset($_POST["cep"]))
   {
		$cep         = $_POST['cep'];
		$endereco    = $_POST['endereco'];
        $i = $_POST['parcelas'];


		$forma_pag = $_POST['forma_pag'];
		$cep_frete       = $_POST['frete'];
		$cpf         = $_SESSION['cpf'];
		
		$temporario = explode("*",$cep_frete); //Quebrar a variavel frete e jogar em um vetor;
		$valor_total  = $_POST['valor_total'];
		$valor_frete  = $temporario[1];
		$prazo_entrega = $temporario[2];
		
			$sql = "insert into venda (data_venda, cpf, forma_pag, parcelas, valor_total,valor_frete,prazo_entrega, endereco, cep)
			   values(now(), '$cpf','$forma_pag',$i,'$valor_total','$valor_frete','$prazo_entrega','$endereco','$cep')";
	        echo " $sql";
			include("conectar.php");
			$resultado = $conexao->query($sql);
		
			//Pegar cada item do carrinho e inserir na tabela item_venda
			$Indice   = $_SESSION['Indice'];
			$Carrinho = $_SESSION['Carrinho'];
			$total = 0;
		
			$id_venda = $conexao->insert_id;
			
			for($i=0; $i < $Indice; $i++)
			{
				   $ID = $Carrinho[$i];
				   $sql = "select * from produto 
						   where  id_produto ='$ID'";	   
					$resultado = $conexao->query($sql);
					$linha = $resultado->fetch_object();
				
					$sql_item="insert into produto_venda (id_venda, id_produto,quantidade,valor) 
						      values('$id_venda','$ID','1','$linha->valor')";
							  
					$result = $conexao->query($sql_item);
			}

			
			for($i=0; $i <$Indice; $i++)
			{
				$ID = $Carrinho[$i];
				 $sql = "select estoque from produto 
						   where  id_produto ='$ID'";
						   $resultado = $conexao->query($sql);

				$sql_estoque = "update produto
				                set quantidade = ( quantidade - 1 )
								where id_produto ='$ID'"; 
		$result = $conexao->query($sql_estoque);
			}
		 echo "<h1 align='center'>Venda realizada com sucesso</h1>";
	   echo "<br>";

	   echo "<div align='center'><a href='index.php'>Sair</a></div>";
	    session_destroy();
   }
   else
   {
	   echo "<h1 align='center'>Preencha corretamente os campos</h1>";
	   echo "<br>";
	   echo "<div align='center'><a href='terminar_compra.php'>Voltar</a></div>";
   }
   

	
?>