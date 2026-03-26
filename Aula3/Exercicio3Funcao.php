<?php
$doce = "";


function verificar($estoque) {
    if ($estoque >= 10) {
        return "Estoque bom";
    } elseif ($estoque > 0) {
        return "Estoque baixo";
    } else {
        return "Produto esgotado";
    }
}
?>
<html>
  <head>
    <title>The Candy Store</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
<body>
<form method="post">
    <h3>Verificar Estoque</h3>
    <label> Qual o nome do doce?</label>
    <input type="text" name="doce" ><br>
    <label> Qual a quantidade em estoque </label>
    <input type="number" name="estoque" ><br>
    <button type="submit" >Verificar</button>
</form>
</body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $estoque = $_POST['estoque'];
    $doce = $_POST['doce'];


    echo "Doce: ".$doce."<br>";
    echo verificar($estoque);
}
?>