<?php
session_start();
$id = $_SESSION['id'];
    include 'conexao.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    
    try {
        $sql = "UPDATE cliente SET nome = '$nome', email = '$email', telefone = '$telefone', senha = '$senha' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);       
        echo "Atualizado com sucesso!";
        header('Location: home.php');
        
    }
    catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }

?>