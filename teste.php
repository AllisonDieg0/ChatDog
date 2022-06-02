<?php


include('conexao.php');
if (isset($_GET['id'])){

    $id = $_GET['id'];
$sql = "SELECT  imagem  from post where  id=$id ";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
foreach($row as $data){
$imagem = $data['imagem'];
}}


?>