<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 18</title>
</head>
<body>

<?php include('funcoes.php'); ?>

<h2>Exercício 18 - Soma de 1 até N</h2>
<form method="POST">
    <input type="number" name="n" placeholder="N">
    <button type="submit">Calcular</button>
</form>

<?php
    $n = $_POST['n'];
    echo "<h3>" . ex15_soma_1aN($n) . "</h3>";
?>

<button><a href="index.php">Voltar</a></button>

</body>
</html>