<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Exercício 11</title>
</head>

<body>

<?php include('funcoes.php'); ?>

<h2>Exercício 11</h2>
<h3>Classificar pessoa pela idade</h3>

<form method="POST">

<label>Digite a idade:</label>
<input type="number" name="idade">

<button type="submit">Classificar</button>

</form>

<?php

if(isset($_POST['idade'])){

    $idade = $_POST['idade'];
    $resultado = classificarIdade($idade);

    echo "<h3>Classificação: $resultado</h3>";

}

?>

<button><a href="index.php">Voltar</a></button>

</body>
</html>