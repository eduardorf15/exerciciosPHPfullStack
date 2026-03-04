<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
</head>
<body>

<?php include('funcoes.php'); ?>

<h2>Exercício 17 - Produto (1 a 5)</h2>
<form method="POST">
<input type="number" name="cod" placeholder="Código 1..5">
<button type="submit">Mostrar</button>
</form>

<?php
$cod = $_POST['cod'];
echo "<h3>" . ex13_produto($cod) . "</h3>";
?>
    
</body>
</html>