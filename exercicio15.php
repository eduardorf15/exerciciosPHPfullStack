<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>
<body>
<?php include('funcoes.php'); ?>

    <h2>Exercício 15 - Triângulo</h2>
    <form method="POST">
        <input type="number" name="a" placeholder="Lado A">
        <input type="number" name="b" placeholder="Lado B">
        <input type="number" name="c" placeholder="Lado C">
        <button type="submit">Verificar</button>
    </form>

<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    echo "<h3>" . ex06_triangulo($a,$b,$c) . "</h3>";
?>

<button><a href="index.php">Voltar</a></button>

</body>
</html>