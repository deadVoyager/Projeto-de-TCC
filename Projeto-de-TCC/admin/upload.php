<html>
	<head>
		<title>Upload de Arquivos</title>
		<meta charset="UTF-8">
	</head>
	<body>
    <?php
        
        $limite = 1024*1024*1024;  //1MB

        $arquivo = $_FILES["arquivo"];

        var_dump($_FILES["arquivo"]);

        if($arquivo['type'] == "image/jpeg")
	    {
          
            if($limite > $arquivo["size"])
            {
                $nome = $_POST["nome"];

                $valor = $_POST["valor"];

                $novoNome = md5("foto_".date("dmYhis")).".jpg"; //novo nome do arquivo

				//a função abaixo grava o arquivo na pasta enviados
                move_uploaded_file( $arquivo['tmp_name'], "./enviados/".$novoNome);
          
		  
				//depois grava as informações no banco de dados
                $sql = "insert into produtos (nome, valor, foto) values ('$nome','$valor','$novoNome') ";

                $conexao = new mysqli("localhost","root","", "3A");
                $conexao->query($sql);


                echo "<br>Cadastro realizado com sucesso!";
            }
            else
            {
              echo "Arquivo maior que o limite de $limite MB";
             }
        }
        else
        {
            echo "<br>Tente somente arquivos .jpg!";
        }
    ?>
    </body>
</html>