<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 26</title>
</head>
<body>

<?php include("funcoes.php"); ?>

<form method="POST">

Número 1
<input type="number" name="vetor[]"><br>

Número 2
<input type="number" name="vetor[]"><br>

Número 3
<input type="number" name="vetor[]"><br>

Número 4
<input type="number" name="vetor[]"><br>

Número 5
<input type="number" name="vetor[]"><br>

Número 6
<input type="number" name="vetor[]"><br>

Número 7
<input type="number" name="vetor[]"><br>

Número 8
<input type="number" name="vetor[]"><br>

Número 9
<input type="number" name="vetor[]"><br>

Número 10
<input type="number" name="vetor[]"><br>

<button type="submit">Calcular</button>

<?php

$vet = $_POST["vetor"];
mostrarPares($vet);

?>

</form>

<button><a href="index.php">Voltar</a></button>

    
</body>
</html>