<?php
include('conexao.php');
#alterar o like da talela post

try{   
    $id = $_POST['id'];
    $texto = $_POST['texto'];
    $selecionar = "SELECT comentarios FROM post WHERE id = '$id'";
    $result = mysqli_query($conn, $selecionar);
    if (mysqli_num_rows($result) > 0) {
       $row = mysqli_fetch_assoc($result);
       if(strval($row['comentarios']) != "" ){
        $texto = strval($texto+"/");
        $sql = "UPDATE post SET comentarios = '$texto' WHERE id = '$id'";
       $result = mysqli_query($conn, $sql);
       }
       else{
        $texto = strval($row['comentarios']+$texto+"/");
        $sql = "UPDATE post SET comentarios = '$texto' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
       }
      
       }
    else {
        echo "0 results";
    }
      
    }
   
catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>