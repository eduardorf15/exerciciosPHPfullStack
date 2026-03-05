<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 23</title>
</head>
<body>

<?php include('funcoes.php'); ?>

<h2>Exercício 23 - Nota para Conceito</h2>
<form method="POST">
<input type="number" step="0.01" name="nota" placeholder="Nota">
<button type="submit">Converter</button>
</form>

<?php
$nota = $_POST['nota'];
echo "<h3>Conceito: " . ex30_conceito($nota) . "</h3>";
?>
<button><a href="index.php">Voltar</a></button>
    
</body>
</html>