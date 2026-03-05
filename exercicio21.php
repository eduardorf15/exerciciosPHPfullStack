<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 21</title>
</head>
<body>

<?php include('funcoes.php'); ?>

<h2>Exercício 21 - IMC</h2>
<form method="POST">
<input type="number" step="0.01" name="peso" placeholder="Peso (kg)">
<input type="number" step="0.01" name="altura" placeholder="Altura (m)">
<button type="submit">Calcular</button>
</form>

<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];
echo "<h3>" . ex24_imc($peso,$altura) . "</h3>";
?>
<button><a href="index.php">Voltar</a></button>

</body>
</html>