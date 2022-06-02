<?php

include('conexao.php');
include('upload.php');

try{

   $sql = "SELECT  *  from post ";
   $result = mysqli_query($conn, $sql);


} catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
