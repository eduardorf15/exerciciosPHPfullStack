<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
</head>
<body>

<?php include('funcoes.php'); ?>

<h2>Exercício 20 - Média 3 notas</h2>
<form method="POST">
<input type="number" step="0.01" name="n1" placeholder="Nota 1">
<input type="number" step="0.01" name="n2" placeholder="Nota 2">
<input type="number" step="0.01" name="n3" placeholder="Nota 3">
<button type="submit">Calcular</button>
</form>

<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
echo "<h3>" . ex20_media_aprovado($n1,$n2,$n3) . "</h3>";
?>
<button><a href="index.php">Voltar</a></button>

</body>
</html>