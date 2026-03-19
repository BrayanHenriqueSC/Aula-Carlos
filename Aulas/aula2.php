<!--
<?php
$nome = 'Gi';
$preco = 5;
?>
<! DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Variaveis</title>
<link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
     <h1>Candy Store</h1>
     <h2>Bem vindo(a), <?php echo $nome; ?></h2>
     <p> O valor da compra será de R$ <?php echo $preco; ?></p>
</body>
</html>
-->

<!--
<?php
$nutricao =[
   'gordura' => 16,
   'acucar' => 51,
   'sal' => 6.3,
];
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Array Associativos</title>
    <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
    <h1>Candy Store</h1>
    <h2>Tabela nutricional (porção: 100g) </h2>
    <p>Gordura: <?php echo $nutricao['gordura'];?>%</p>
    <p>Açucar: <?php echo $nutricao['acucar'];?>%</p>
    <p>Sal: <?php echo $nutricao['sal'];?>%</p>
</body>
</html>
-->

<!--
<?php
$mais_vendidos = ['Chocolate', 'bala de menta', 'fudge', 'chiclete', 'bala toffee',
'jujuba'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Indexados</title>
    <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
   <h1>Candy Store</h1>
   <h2>Os mais vendidos</h2>
   <ul>
      <li> <?php echo $mais_vendidos[0];?></li>
      <li> <?php echo $mais_vendidos[1];?></li>
      <li> <?php echo $mais_vendidos[5] ;?></li>
   </ul>
</body>
</html>
--> 

<?php
$tabela_precos = [
      ['nome' => 'bala toffe', 'preço' =>5, 'estoque'=>120,],
      ['nome' => 'bala de menta','preço'=>3, 'estoque'=>66,],
      ['nome' => 'fondue', 'preço' =>4, 'estoque'=>97,],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Arrays multidimencionais</title>
     <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
     <h1>Candy Store</h1>
     <h2>Ofertas</h2>
     <p> <?php echo  $tabela_precos[0]['nome']; ?> - R$ <?php echo $tabela_precos[0]
     ['preço']; ?></p>
     <p> <?php echo  $tabela_precos[1]['nome']; ?> - R$ <?php echo $tabela_precos[1]
     ['preço']; ?></p>
     <p> <?php echo  $tabela_precos[2]['nome']; ?> - R$ <?php echo $tabela_precos[2]
     ['preço']; ?></p>
</body>
</html>