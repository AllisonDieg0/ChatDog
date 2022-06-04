<?php
 session_start();    
         include 'conexao.php'; 
        $email = $_POST['email'];
         $senha = $_POST['senha'];         
          
        try {
            $sql = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";            
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if($row) {                
                $id = $row['id'];
                echo '<p>login efetuado</p>';
                $_SESSION['id'] = $id;
                header('Location: home.php');
             }
            else {
                echo "<script>alert('Usuario não encontrado')<script>";
            }
        }
        catch(Exception $e) {
           
            echo "Error: " . $e->getMessage();
        }
    


?>