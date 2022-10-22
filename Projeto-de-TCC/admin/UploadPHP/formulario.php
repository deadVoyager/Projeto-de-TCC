<html>
	<head>
		<title>Upload de Arquivos</title>
		<meta charset="UTF-8">
	</head>
	<body>

        <form action="./upload.php" method="post" ENCTYPE="multipart/form-data">          
            
            <p>
                Nome do produto
                <input type="text" name="nome" id="nome">
            </p>

            <p>
                Valor do produto
                <input type="text" name="valor" id="valor">
            </p>

            <p>
                Escolha um arquivo:
                <input type="file" name="arquivo" id="arquivo">
            </p>

            <p>
               <button type="submit">OK</button>
            </p>
        </form>
    </body>
</html>