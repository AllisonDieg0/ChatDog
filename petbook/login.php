<?php
 //make a method to do a select in database, taking the email and pass from table (cliente)
    function login($email, $senha) {          
         include 'conexao.php';    
        try {
            $sql = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if($row) {
                echo'conectado';
            }
            else {
                return false;
            }
        }
        catch(Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }


?>