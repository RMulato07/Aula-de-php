<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body class="php-body">
<?php

    echo "<div class='div-php'>";
    
    $nome = $_POST [ 'nome' ];
    echo $nome . "<br>";

    $email = $_POST [ 'email' ];
    echo $email . "<br>";

    $idade = $_POST ['idade'];
    echo $idade . "<br>";

    $senha = $_POST [ 'senha'];
    echo $senha . "<br>";
    $genero = $_POST['genero'];
    
    echo "seu sexo é " . $_POST ['genero'];

    if(isset($_POST["interesses"])){
    echo "os interreses sao :<br>";

    foreach($_POST["interesses"] as $interesse)
    {

     echo"- ". $interesse ."<br>";

    }
    }
    else{
        echo" <br> ";
        echo"voce nao colocou o interesse preferido ";
    }

    $estado = $_POST["estado"];
    echo $estado ."</br>";

    $observacao = $_POST["observacao"];
    echo $observacao ."<br>";
    echo "</div>";
?>    
</body>
</html>

