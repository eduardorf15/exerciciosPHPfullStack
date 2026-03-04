<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>
<body>

<?php include('funcoes.php'); ?>

<h2>Exercício 16 - Fatorial</h2>
<form method="POST">
<input type="number" name="n" placeholder="Número">
<button type="submit">Calcular</button>
</form>

<?php
$n = $_POST['n'];
echo "<h3>" . ex11_fatorial($n) . "</h3>";
?>
    
</body>
</html>