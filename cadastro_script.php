

<?php


    include ('conexao.php');
    include ('upload.php');
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $imagem = imageUpload($_FILES['imagem']);
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    try {
        $sql = "INSERT INTO cliente (imagem,nome, email, telefone, senha) VALUES ('$imagem','$nome', '$email', '$telefone', '$senha')";
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





