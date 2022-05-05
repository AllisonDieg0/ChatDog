<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cadastro</title>
</head>
<body>
<?php
      
          include('conexao.php');
          $id = $_GET['id'];
          $sql = "SELECT * FROM cliente WHERE id = $id";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $nome = $row['nome'];
          $email = $row['email'];
          $telefone = $row['telefone'];
          $senha = $row['senha'];   


    ?>
   
    <form action="update_script.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value ="<?php echo $row['nome'];?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value ="<?php echo $row['email'];?>">
        <label for="telefone">Telefone:</label>
        <input type="phone" name="telefone" id="telefone" value ="<?php echo $row['telefone'];?>">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" value = "<?php echo $row['senha'];?>">        
        <input type="submit" value="Atualizar">
    </form>

</body>
</html>