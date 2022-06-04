<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Style.css">
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Meus Posts</title>
</head>
<body class="meio">
<div class="bn">
<header class="header">
<nav>

  
        <ul class="menu">
          <li id="home" class="pointer" >
            <a href="home.php">PÁGINA INICIAL</a>
          </li>
          <li id="conta" class="pointer">
            <a href="update.php">MINHA CONTA</a>
          </li>
          <li id="post" class="pointer active" >
            <a href="teste.php">MEUS POST</a>
          </li>
          <li id="postar" class="pointer">
            <a href="home.php">O QUE VOCÊ ESTA PENSANDO?</a>
          </li>
        </ul>
      </nav>


    </header>
    <div class="container">
    </div>
  </div>
    
<?php
session_start();
include('conexao.php');
if (isset($_SESSION['id'])){
$id = $_SESSION['id'];
echo $id;
}
else{
    echo "Não está logado";
}
    
$sql = "SELECT  imagem  from post where fk_cliente = $id";



$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        #fazer um loop para mostrar todos os posts
        echo "<div class='card'>";
        echo "<img src ="."img/".$row["imagem"].">";
        echo "</div>";

    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
    
</body>
</html>
