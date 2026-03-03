<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>

<?php include('funcoes.php'); ?>
<h2>Exercício 07 - Horário mais tarde</h2>

<form method="POST">
    Horário 1: <input type="time" name="h1"><br><br>
    Horário 2: <input type="time" name="h2"><br><br>
    <button type="submit">Comparar</button>
</form>

<?php
if(isset($_POST['h1'], $_POST['h2'])){
    echo "<h3>".horarioMaisTarde($_POST['h1'], $_POST['h2'])."</h3>";
}
?>
    
</body>
</html>