<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
</head>
<body>
<?php include('funcoes.php'); ?>

    <h2>Exercício 14 - Múltiplo de 3 e 5</h2>
    <form method="POST">
        <input type="number" name="n" placeholder="Número">
        <button type="submit">Verificar</button>
    </form>

<?php
    $n = $_POST['n'];
    echo "<h3>" . ex05_mult_3e5($n) . "</h3>";
?>

<button><a href="index.php">Voltar</a></button>

</body>
</html>