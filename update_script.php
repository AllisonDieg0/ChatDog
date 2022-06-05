<?php
session_start();
$id = $_SESSION['id'];
    include 'conexao.php';
    include 'upload.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $imagem = imageUpload($_FILES['imagem']);
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    
    try {
        $sql = "UPDATE cliente SET imagem ='$imagem', nome = '$nome', email = '$email', telefone = '$telefone', senha = '$senha' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        header('Location: home.php');
        
    }
    catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }

?>