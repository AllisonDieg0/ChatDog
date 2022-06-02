<?php
 
     
         include 'conexao.php'; 
         $email = $_POST['email'];
         $senha = $_POST['senha'];         
          
        try {
            $sql = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";            
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            #tranformar em id da sessão
            
            if($row) {
                echo"conectado '$id'";   
                echo"atulizar cadastro <a href='update.php?id=$id'>clique aqui</a>";                            
            }
            else {
                return false;
            }
        }
        catch(Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    


?>