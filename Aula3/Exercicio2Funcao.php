<?php
$doce = "";
$total = 0;
function calcular_total($preco, $quantidade) {
    return $preco * $quantidade;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
<body>
<form method="post">
    <h3>Total da Compra</h3>
    <label> Nome do doce</label>
    <input type="text" name="doce"><br>
     <label>Preço</label>
    <input type="number" name="preco"><br>
     <label> Quantidade</label>
    <input type="number" name="quantidade" ><br>
    <button type="submit">Calcular</button>
</form>
</body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $doce = $_POST['doce'];

    $total = calcular_total($preco, $quantidade);
    echo "Doce: ".$doce."<br>";
    echo "Total: R$ ".$total;
}
?>