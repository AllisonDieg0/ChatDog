<?php
include('conexao.php');
#alterar o like da talela post

try {
    $id = $_POST['id'];
    $texto = strval($_POST['texto']);
    if ($texto != "") {
        $selecionar = "SELECT comentarios FROM post WHERE id = '$id'";
        $result = mysqli_query($conn, $selecionar);
        sleep(2);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['comentarios'] != null) $coment = strval($row['comentarios']) . $texto . "/";
            else $coment = $texto . "/";
            $sql = "UPDATE post SET comentarios = '$coment' WHERE id = '$id'";
            
            $foi ="<script>alert('haaaaaa');</script>";
            echo $foi;
            sleep(2);
            $result = mysqli_query($conn, $sql);
        } else {
            echo "0 results";
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
