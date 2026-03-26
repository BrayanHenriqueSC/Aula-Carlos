<?php 


function mensagem($nome){
    return "Bem vindo de volta ". $nome;
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
          <label> Digite o seu nome:</label>
          <input type='text' name="nome">
          <button type="submit"> Enviar </button>
      </form>

      
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        echo mensagem($nome);
}    
    ?>
</html>

