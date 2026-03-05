<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Ex01</title></head><body>
<?php include('funcoes.php'); ?>

<h2>Exercício 06 - Maior de dois números</h2>
<form method="POST">
<input type="number" name="a" placeholder="A">
<input type="number" name="b" placeholder="B">
<button type="submit">Calcular</button>
</form>

<?php
$a = $_POST['a'];
$b = $_POST['b'];
echo "<h3>" . ex01_maior($a,$b) . "</h3>";
?>

<button><a href="index.php">Voltar</a></button>

</body>
</html>