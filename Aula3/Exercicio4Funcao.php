<?php
$total = 0;
$doce = "";
$final = 0;

function calcular_desconto($preco, $quantidade, $desconto ) {
    $total = $preco * $quantidade;
    return $total - $desconto;
}
?>

<html>
  <head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
<body>
<form method="post">
    <h3>Total com Desconto</h3>
     <label> Qual o nome do doce?</label>
    <input type="text" name="doce" ><br>
    <label> Qual o preco </label>
    <input type="number" name="preco"><br>
    <label> Qual a quantidade </label>
    <input type="number" name="quantidade"><br>
    <label> Qual o desconto (opcional) </label>
    <input type="number" name="desconto" ><br>
    <button type="submit" >Calcular</button>
</form>
</body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $doce = $_POST['doce'];
    $desconto = $_POST['desconto'];
    
    if ($desconto == '') {
        $desconto = 0;
    };

    $final = calcular_desconto($preco, $quantidade,$desconto);
    echo "Valor final: R$ ".$final;
}
?>