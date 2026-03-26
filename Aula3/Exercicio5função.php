<?php
$produtos = [
    "Balda de Morango" => 2.50,
    "Pirulito de Uva" => 3.00,
    "Chocolate ao Leite" => 5.50,
    "Goma de Frutas" => 4.25,
    "Marshmallow" => 6.00
];

function calcular_resumo($doce, $quantidade, $produtos) {
    if ((!isset($produtos[$doce]))) {
        return "Produto inválido";
    }

    $preco = $produtos[$doce];
    $subtotal = $preco * $quantidade;

    $desconto = 0;
    if ($quantidade >= 10) {
        $desconto = $subtotal * 0.10;
    }

    $total = $subtotal - $desconto;

    return [
        "doce" => $doce,
        "preco" => $preco,
        "quantidade" => $quantidade,
        "subtotal" => $subtotal,
        "desconto" => $desconto,
        "total" => $total
    ];
}
?>
 
<html>
  <head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
<form method="post">
    <h3>Resumo do Pedido</h3>
    <label> Qual o nome do doce?</label>
    <input type="text" name="doce"><br>
    <label> Qual a quantidade </label>
    <input type="number" name="quantidade"><br>
    <button type="submit" >Gerar Resumo</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantidade = $_POST['quantidade'];
    $doce = $_POST['doce'];
    $resultado = calcular_resumo($doce, $quantidade, $produtos);

    if ($resultado == "Produto inválido") {
        echo $resultado;
    } else {
        echo "Doce: ".$resultado['doce']."<br>";
        echo "Preço: R$ ".$resultado['preco']."<br>";
        echo "Quantidade: ".$resultado['quantidade']."<br>";
        echo "Subtotal: R$ ".$resultado['subtotal']."<br>";
        echo "Desconto: R$ ".$resultado['desconto']."<br>";
        echo "Total final: R$ ".$resultado['total'];
    }
}
?>