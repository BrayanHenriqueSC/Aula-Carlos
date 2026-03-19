<?php
$dia='';
$oferta='';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $dia = $_POST['dia'];

    switch($dia){
        case 'segunda': $oferta= '20% de desconto em chocolates';
        break;
        case 'terça': $oferta= '20% de desconto em balas de menta';
        break;
        default: $oferta='Compre três pacotes e leve um gratis';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Switch</title> 
    <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
    <h1>Candy Store</h1>
    <form method="post">
    <label>Digite o dia da semana :</label>
        <input type="text" name="dia"> 
        <button type="submit">Verificar Oferta:</button>
    </form>
<h2> Ofertas de <?= $dia ?></h2>
<p> <?= $oferta ?></p>

</body>
</html>