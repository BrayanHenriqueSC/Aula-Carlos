<?php
function escreva_logo(){
    return'<img src="img/logo.png" alt="logo">';
} 

function escreva_copyright_ano(){
    $ano = date('Y');
    $mensagem = 'The Candy Store'.'&copy;' . $ano;
    return $mensagem;
}
?>

<?php require_once 'includes/header.php'; ?>

<h2>Bem vindo à Candy Store</h2>

<?php include 'includes/footer.php'; ?>