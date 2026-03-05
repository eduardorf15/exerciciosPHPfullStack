<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
</head>
<body>

<?php include('funcoes.php'); ?>

<h2>Exercício 19 - Salário por hora</h2>
<form method="POST">
<input type="number" name="horas" placeholder="Horas trabalhadas">
<input type="number" step="0.01" name="valor" placeholder="Valor por hora">
<button type="submit">Calcular</button>
</form>

<?php
$horas = $_POST['horas'];
$valor = $_POST['valor'];
echo "<h3>" . ex18_salario($horas, $valor) . "</h3>";
?>
<button><a href="index.php">Voltar</a></button>

</body>
</html>