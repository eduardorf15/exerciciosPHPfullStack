<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 25</title>
</head>
<body>

<?php

echo "<h2>Tabuada</h2>";

echo "Digite um número de 1 a 10:<br>";

if($_POST){
    
    $num = $_POST["num"];

    echo "<br>Tabuada do $num:<br>";

    for($i = 1; $i <= 10; $i++){
        echo $num * $i . "<br>";
    }

}

?>

<form method="post">
    <input type="number" name="num">
    <button type="submit">Ver Tabuada</button>
</form>
<button><a href="index.php">Voltar</a></button>


</body>
</html>