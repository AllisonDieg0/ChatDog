<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
//make a method to do a insert in database, taking the post from the form (cadastro.php)

    include ('conexao.php');
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    try {
        $sql = "INSERT INTO cliente (nome, email, telefone, senha) VALUES ('$nome', '$email', '$telefone', '$senha')";
        $result = mysqli_query($conn, $sql);
        if($result) {
           echo '<p>cadastrado</p>';
           header('Location: index.php');
        }
        else {
            echo "<p>error</p>";
       }
    }
    catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }

?>
</body>
</html>


