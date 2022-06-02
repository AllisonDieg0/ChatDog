<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Atualizar Cadastro</title>
</head>

<body>
    <?php
    session_start();
    include('conexao.php');
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM cliente WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $nome = $row['nome'];
    $email = $row['email'];
    $telefone = $row['telefone'];
    $senha = $row['senha'];


    ?>
      <header class="header">
      <nav>
        <ul class="menu">
          <li id="home" class="pointer active" onclick="<?php session_start(); $_REQUEST = "home"?> mudar($_REQUEST)">
            <a href="#" >HOME</a>
          </li >
          <li id="conta" class="pointer" onclick="<?php session_start(); $_REQUEST = "conta";?> mudar($_REQUEST)">
            <a href="update.php" > MINHA CONTA</a>
          </li>
          <li id="posts" class="pointer" onclick="<?php session_start(); $_REQUEST = "post"; ?> mudar($_REQUEST)">
            <a href="teste.php" >MEUS POST</a>
          </li>
          <li id="postar" class="pointer" onclick="<?php session_start(); $_REQUEST = "postar"; ?> mudar($_REQUEST)">
            <a href="home.php" >O QUE VOCÊ ESTA PENSANDO?</a>
          </li>
        </ul>
      </nav>
    </header><br><br><br><br><br>

   <form action="update_script.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>">
        <label for="telefone">Telefone:</label>
        <input type="phone" name="telefone" id="telefone" value="<?php echo $row['telefone']; ?>">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" value="<?php echo $row['senha']; ?>">
        <input type="submit" value="Atualizar">
    </form>

</body>

<script src="js/javascript.js"></script>
</html>