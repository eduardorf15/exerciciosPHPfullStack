<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 05</title>
</head>

<body>

<?php include('funcoes.php'); ?>

<h1>Exercício 05</h1>
<h2>Informe um número de 1 a 7</h2>

<form method="POST">

<label>Digite um número:</label>
<input type="number" name="numero" id="numero"> <br><br>

<button type="submit">Calcular</button>

<?php

$numero = $_POST['numero'];
$resultado = diaDaSemana($numero);

?>

</button>

<br><br>

<h2>
<?php echo $resultado; ?>
</h2>

</form>

<button><a href="index.php">Voltar</a></button>

</body>
</html>