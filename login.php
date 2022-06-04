<?php
 session_start();    
         include 'conexao.php'; 
        $email = $_POST['email'];
         $senha = $_POST['senha'];         
          
        try {
            $sql = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";            
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) > 0) {
                $_SESSION['id'] = $row['id'];
                header('Location: home.php');
            }
            else {
                echo '<script>alert("Email ou senha incorretos!");
                window.location.href = "index.php";</script>';                
            }

           
        }
        catch(Exception $e) {
           
            echo "Error: " . $e->getMessage();
        }
    


?>