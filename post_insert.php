<?php

include ('conexao.php');

include('upload.php');



try{

    $imagem = Image::imageUpload($_FILES['imagem']);

    $sql = "INSERT INTO post (imagem) VALUES ('$imagem')";
    $result = mysqli_query($conn, $sql);

}catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>