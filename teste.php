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
            <a href="teste.php">MEUS POSTS</a>
          </li>
          <li id="postar" class="pointer">
            <a href="postar.php">O QUE VOCÊ ESTA PENSANDO?</a>
          </li>
          <li id = "sair">
          <a href="logout.php">LOGOUT</a>
          </li>
        </ul>
      </nav>


    </header>
    <br><br><br><br>

    <ul class = "posts" style="display:inline-block; align-items: center;
  justify-content: center; ">
              
 
    
<?php
session_start();
include('conexao.php');
if (isset($_SESSION['id'])){
$id = $_SESSION['id'];
}
 
$sql = "SELECT post.id, post.data_post, cliente.nome, post.descricao,post.imagem, post.comentarios, post.curtidas from post inner join cliente on cliente.id = post.fk_cliente where cliente.id = $id ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        #fazer um feed para cada post do cliente e alinha imagem e descricao
echo'
<li class="post" style="
">
    <div class="infoUserPost" style:"display:flex;">
        <div class="imgUserPost" style=""></div>                
    <div class="nameAndHour" >
        <strong style= "color:#23A0FF">'.$row['nome'].'</strong>
        <p style ="color#D1D1D1; font-size:12px">'.$row['data_post'].'</p>
        
    </div>
    <p>'.$row['descricao'].'</p>
    <div class="imgPost"><img src="img/'.$row['imagem'].'" style=""></div>
    <div class="actionBtnPost">
    <p>'.$row['curtidas'].' curtidas</p>
        <button onclick = "likear()" type="button" class ="filesPost"><img src ="" >Curtir</button>
    </div>
</li>';
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
   </ul>
  
    
</body>
</html>
