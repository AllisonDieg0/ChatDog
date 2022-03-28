<?php
//make a connection to the database
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "petbook";
      
try {
   $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    echo "Conexão realizada com sucesso!";
}
catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>