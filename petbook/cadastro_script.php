<?php
//make a method to do a insert in database, taking the post from the form (cadastro.php)
function cadastro($nome, $email, $telefone, $senha) {
    include ('conexao.php');
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    try {
        $sql = "INSERT INTO cliente (nome, email, telefone, senha) VALUES ('$nome', '$email', '$telefone', '$senha')";
        $result = mysqli_query($conn, $sql);
        if($result) {
           echo 'cadastrado';
        }
        else {
            echo "erro";
       }
    }
    catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>