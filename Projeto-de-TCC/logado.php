
  <?php
     if(isset($_POST['email']))
	 {
		
		$email = $_POST['email'];
		$senha = sha1($_POST['senha']);
		
		include("conectar.php");
		
		$sql = "select nome, senha as 'senha', cpf 
				from clientes 
			    where email='$email'";
		
		//echo "$sql";
		
		$resultado = $conexao->query($sql);
		
		if($resultado->num_rows > 0)
		{
			$linha     = $resultado->fetch_object();
			
			$senhaBD = $linha->senha;
			$nome    = $linha->nome;
			$cpf    = $linha->cpf;
			
			if($senha == $senhaBD)
			{
				session_start();
				$_SESSION['logado'] = "sim";
				$_SESSION['nome']   = $nome;
				$_SESSION['cpf']   = $cpf;

				
				header("location:index.php");
			}
			else
			{
				echo '<div class="alert alert-warning">
						<strong>Aviso!</strong> Senha ou Email inválido!
					 </div>';
				echo "<a href='index.php'>Voltar</a>";
			}
		}
		else
		{
			echo '<div class="alert alert-warning">
						<strong>Aviso!</strong> Senha ou Email inválido!
					 </div>';
				echo "<a href='index.php'>Voltar</a>";
		}
	 }
	 else
	 {
       echo"erro";
	 }

   
  
	
?>