<?php
session_start();
include ('conexao.php');
include('upload.php');


try{
    $id = $_SESSION['id'];
    $descricao = $_POST['descricao'];
    $imagem = imageUpload($_FILES['imagem']);
    $sql = "INSERT INTO post (imagem, descricao, fk_cliente) VALUES ('$imagem','$descricao','$id')";
    $result = mysqli_query($conn, $sql);
    header('Location:teste.php');

}catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>