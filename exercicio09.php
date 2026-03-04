<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>

<?php include('funcoes.php'); ?>
<h2>Exercício 09 - Soma até ultrapassar 100</h2>

<form method="POST">
    Digite números separados por vírgula:<br>
    <input type="text" name="numeros"><br><br>
    <button type="submit">Calcular</button>
</form>

<?php
if(isset($_POST['numeros'])){
    $lista = explode(",", $_POST['numeros']);
    echo "<h3>".somaAte100($lista)."</h3>";
}
?>

<button><a href="index.php">Voltar</a></button>
    
</body>
</html>