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
<script src="js/jQuery.js"></script>

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
            <a href="post.php">MEUS POSTS</a>
          </li>
          <li id="postar" class="pointer">
            <a href="postar.php">POSTAR ALGO</a>
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
  else{
    header('Location: login.php');
  }

 
$sql = "SELECT post.id, post.data_post,post.comentarios, cliente.imagem as'imagem_cliente', cliente.nome, post.descricao,post.imagem, post.comentarios, post.curtidas from post inner join cliente on cliente.id = post.fk_cliente where cliente.id = $id order by post.id desc";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo'
        <li class="post" style="margin-left:15%;">
        
            <div class="infoUserPost">
            <div class="response" style ="display:flex"; >
                <div class="imgUserPost" style=""><img src="img/'.$row['imagem_cliente'].'" style="width:100%; height:100%; border-radius:50%;"> </div>
            <div class="nameAndHour" >
                <strong style= "color:#23A0FF">'.$row['nome'].'</strong>
                <p style ="color#D1D1D1; font-size:12px">'.date("d-m-Y",strtotime($row['data_post'])).'</p>
             </div>
            </div>
            <p>'.$row['descricao'].'</p>
            <center><div class="imgPost"><img src="img/'.$row['imagem'].'" style=""></div></center>
            <div class="actionBtnPost" id = "like'.$row['id'].'" style ="">
            <b>curtidas</b><p>'.$row['curtidas'].'</p>
                <button onclick = "likear('.$row['id'].');" id= "true" type="button" class ="filesPost">Curtir</button>
                <button type="button" onclick = "comentar('.$row['id'].',value)" id="like'.$row['id'].'" class ="filesComent" value="'.$row['comentarios'].'">comentar </button>  
             
            </div>
        </li>';
       
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
   </ul>
             
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="js/javascript.js"></script>
    
</body>
</html>
