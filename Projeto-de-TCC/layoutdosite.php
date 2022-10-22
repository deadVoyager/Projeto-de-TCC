<?php
 
    /*
		A função Inicio sempre exibe o Banner de produtos, 
		a não ser que seja passado o valor "N" para não exibir o banner rotativo.
	*/
	
   function Inicio($exibeBanner="N")
   {
    //iniciar a sessao
	
	if(isset($_SESSION["nome"]))
	{
		$nome = $_SESSION["nome"];
	}
	else
	{
		$nome = " Cliente";
	}
	
	//ler a variavel de sessão
	if(isset($_SESSION['Carrinho']))
	{
		$total = $_SESSION['Indice'];
	}
	else
	{
		$total = 0;
	}
	?>



	<div id="menu">
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 


			</div>
		
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a> Olá <?php echo $nome;?>, você possui <?php echo $total; ?> item(s) no seu carrinho. </a></li>
				
<?php
				if(isset($_SESSION["nome"]))
				{
					echo '<li><a href="sair.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>';
				}
				?>
			  </ul>
			</div>
		  </div>
		</nav>
	</div>
	
	
	<?php
	
	
	
	
   
   }
   
   function Fim()
   {
	   
		echo "</div>"; //fecha a Div conteudo
			
		echo "<br>";
		echo "<br>";
			
		echo "<div id=\"rodape\">
			
			  </div>";
				
		echo "</body>";
		

	
   }
 

?>