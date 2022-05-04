<?php
 //make a method to updating the cliente register
    include 'conexao.php';
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    
    try {
        $sql = "UPDATE cliente SET nome = '$nome', email = '$email', telefone = '$telefone', senha = '$senha' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if($result) {
            echo "Atualizado com sucesso!";
        }
        else {
            return false;
        }
    }
    catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }

?>