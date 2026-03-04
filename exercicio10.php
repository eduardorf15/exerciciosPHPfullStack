<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercício 10</title>
</head>

<body>

<?php include('funcoes.php'); ?>

<h2>Digite a senha</h2>

<form method="POST">

<input type="number" name="senha">

<button type="submit">Verificar</button>

</form>

<?php

$senha = $_POST['senha'];

$resultado = verificarSenha($senha);

echo "<h3>$resultado</h3>";

?>

<button><a href="index.php">Voltar</a></button>

</body>
</html>