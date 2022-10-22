<?php
session_start();
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
<!DOCTYPE html>
<html>
<head>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="./css/bootstraps.css" rel="stylesheet" type="text/css" media="all" />
<link href="./css/stylesy.css" rel="stylesheet" type="text/css" media="all" />
<link href="./css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="./css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Conexão banco -->
<?php
include("conectar.php");

?>
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
	$(document).ready(function() {
  $("#cep").keyup(function() {
      $("#cep").val(this.value.match(/[0-9]*/));
  });
});
$(document).ready(function() {
  $("#cpf").keyup(function() {
      $("#cpf").val(this.value.match(/[0-9]*/));
  });
});
</script>
<style>
.compra
{
	width: 220px;
	height: 80px;
}
.img_produto
{
	width: 250px;
	height:300px;
}
</style>
<!-- //end-smooth-scrolling --> 
</head> 
<body>
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
					echo '<li><a href="deslogar.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>';
				}
				?>
			  </ul>
			</div>
		  </div>
		</nav>
	</div>
	
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<!-- header modal -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">Entre agora!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Entrar</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Registrar-se</span></li>
									</ul>		
									
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="logado.php" method="post">			
													<input name="email" placeholder="Email" type="text" required="">						
													<input name="senha" placeholder="Senha" type="password" required="">										
													<div class="sign-up">
														<input type="submit" value="Entrar"/>
														
													</div>
												</form>
											</div>
										</div> 
									</div>	 
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form action="terminar_cadastro.php" method="post" role="form">		
												<div>
													<input placeholder="Nome" class="form-control" name="nome" id="nome" type="text" required="">
													</div>
													<div>
													<input placeholder="Email" class="form-control" name="email" id="email" type="email" required="">	
													</div>
													<div>
													<input placeholder="Senha" class="form-control" name="senha" id="senha" type="password" required="">	
													</div>
													<div>
													<input placeholder="Confirmar Senha" class="form-control" name="conf_senha" id="conf_senha" type="password" required="">
													</div>
													<div>
													<input placeholder="CPF" class="form-control" name="cpf" id="cpf" type="text" maxlength="11" pattern="([0-9]{11})" required="">
													</div>
													<div>
				                                    <label for="login">Sexo:</label>
				                                    <select class="form-control" name="sexo">
					                                <option value="M">Masculino</option>
					                                <option value="F">Feminino</option>
													<option value="O">Outro</option>
				                                    </select>
				                                    </div>
													<div> 
													<input placeholder="CEP" class="form-control" name="cep" id="cep" type="text" maxlength="8" pattern="([0-9]{8})" required="">
													</div>
													<div>
													<input placeholder="Endereço" class="form-control" name="endereco" id="endereco" type="text" required="">
													</div>
													<div>
													<br></br>
				                                    <h5> Data de Nascimento </h5>
													<input class="form-control" id="data_nascimento" name="data_nascimento" type="date" required="">
													<div class="sign-up">
													<br></br>
													</div>
														<input type="submit" value="Criar Conta"/>
													</div>
												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">

								</div>
								<div class="col-md-12">
									<ul class="social">

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	if(isset ($_SESSION["nome"]) == "")
	{
	echo" <script>
		$('#myModal88').modal('show');
	</script> "; 
	}
	?> 
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.php">InfoByte</a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="procure" placeholder="pesquisa">
						<input type="submit" value="procurar">
					</form>
				</div>
			</div>
			<div class="cart cart box_1"> 
				<form action="terminar_compra.php" method="post" class="last"> 
	
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>   
			</div>  
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs"> 
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="act">Início</a></li>	
						<!-- Mega Menu -->

							<li><a href="produtos.php" class="act" >Produtos</a></li>

						
						
						<li><a href="mail.php">Mande uma sugestão</a></li>
						<li><a href="faq.php">Perguntas e Respostas</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner1">
		<div class="container">
			
		</div>
	</div> 
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>

				<li>Historico de Compras</li>
			</ul>
		</div>
	</div>
	<?php
	echo '<form action="verhistorico.php" method="post">';
echo ' <div class="form-group">
		<label for="venda">Informe o CPF</label>
		<input type="text" class="form-control" name="cpfhistorico" required>
		</div>';
				
				if(isset($_SESSION['logado']) && $_SESSION['logado'] == "sim")
		{
			echo "<div align='center'>";
			echo "<button type='submit' class='btn btn-primary'>Finalizar Pedido</button>"; 
			echo "</div>";

		}
		else
		{
			echo "<h3>Faça o login para finalizar o pedido!</h3>";
		}
?>
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Informação</h3>
					<ul class="info"> 
						
						<li><a href="mail.php">Mande um Sugestão</a></li>
						<li><a href="faq.php">Perguntas e respostas</a></li>
						
					</ul>
				</div>
				
				<div class="col-md-3 w3_footer_grid">
					<h3>Perfil</h3>
					<ul class="info"> 
						<li><a href="index.php">Início</a></li>
					</ul>

					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>InfoByte</p>
			</div>
		</div>
	</div>
	<!-- //footer --> 
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  


</body>
</html>