<?php
$produto='';
$mensagem='';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $produto = $_POST['produto'];

    $mensagem = ($produto == 'chocolate') ? "Em Estoque"
    : (($produto == 'caramelo') ? "Produto esgotado" : "Produto não encontrado");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura IF ELSE</title> 
    <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
    <h1>Candy Store</h1>
    <form method="post">
    <label>Digite o nome do produto :</label>
        <input type="text" name="produto"> 
        <button type="submit">Enviar</button>
    </form>
<h2> <?= $produto ?></h2>
<p> <?= $mensagem ?></p>

</body>
</html>