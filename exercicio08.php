<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>

<?php include('funcoes.php'); ?>
<h2>Exercício 08 - Média de 5 números</h2>

<form method="POST">
<?php for($i=1;$i<=5;$i++): ?>
    Número <?= $i ?>: <input type="number" name="num[]"><br><br>
<?php endfor; ?>
    <button type="submit">Calcular</button>
</form>

<?php
if(isset($_POST['num'])){
    $media = calcularMedia($_POST['num']);
    echo "<h3>Média: $media</h3>";
}
?>

<button><a href="index.php">Voltar</a></button>
    
</body>
</html>