
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lista de Produtos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
     img
     {
         width: 200px;
         height: 150px;
     }
</style>
<?php

$conexao = new mysqli("localhost","root","","3A");

$sql = "select * from produtos order by nome";

$conexao->query($sql);

    echo "<table class='table table-hover'>";
    echo "<tr>
            <td> Codigo </td>
            <td> Nome do Produto </td>
            <td> Valor </td>
            <td> Foto </td>
        </tr>";

    $resultado = $conexao->query($sql);

    while($linha = $resultado->fetch_object())
    {
            echo "<tr>
                        <td> $linha->codigo </td>
                        <td> $linha->nome </td>
                        <td> $linha->valor </td>
                        <td> <img src='./enviados/$linha->foto'> </td>
                    </tr>";

    }
echo "</table>";
?>
</body>
</html>