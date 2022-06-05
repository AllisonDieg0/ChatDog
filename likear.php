<?php
include('conexao.php');
#alterar o like da talela post

try{   
    $id = $_POST['id'];
    $result = $_POST['result'];
    if($result =='true'){
    $sql = "UPDATE post SET curtidas = curtidas + 1 WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    echo "Like realizado com sucesso!";
}
else {
    $sql = "UPDATE post SET curtidas = curtidas - 1 WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    echo "Like realizado com sucesso!";
}
} catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>