<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Exercício 12</title>
</head>

<body>

<?php include('funcoes.php'); ?>

<h2>Exercício 12</h2>
<h3>Verificar se número é par ou ímpar</h3>

<form method="POST">

<label>Digite um número:</label>
<input type="number" name="numero">

<button type="submit">Verificar</button>

</form>

<?php

if(isset($_POST['numero'])){

    $numero = $_POST['numero'];
    $resultado = verificarParImpar($numero);

    echo "<h3>$resultado</h3>";

}

?>

<button><a href="index.php">Voltar</a></button>

</body>
</html>