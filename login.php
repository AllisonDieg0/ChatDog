<?php
 
     
         include 'conexao.php'; 
         $email = $_POST['email'];
         $senha = $_POST['senha'];         
          
        try {
            $sql = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";            
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            if($row) {
                echo '<p>login efetuado</p>';
                header('Location: home.php');
             }
            else {
                return false;
            }
        }
        catch(Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    


?>