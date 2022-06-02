

<?php


    include ('conexao.php');
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    try {
        $sql = "INSERT INTO cliente (nome, email, telefone, senha) VALUES ('$nome', '$email', '$telefone', '$senha')";
        $result = mysqli_query($conn, $sql);
        if($result) {
           echo '<p>cadastrado</p>';
           header('Location: index.php');
        }
        else {
            echo "<p>error</p>";
       }
    }
    catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }

?>





