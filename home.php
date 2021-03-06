<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="css/Style.css">
  <title>petbook</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="js/jQuery.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="meio">
<script src="jQuery.js"></script>
  <div class="bn">
  <header class="header">
<nav>

  
        <ul class="menu">
          <li id="home" class="pointer active" >
            <a href="home.php">PÁGINA INICIAL</a>
          </li>
          <li id="conta" class="pointer">
            <a href="update.php">MINHA CONTA</a>
          </li>
          <li id="post" class="pointer" >
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
    <div class="container">
      <img src="img/banner.jpg" class="img-fluid" alt="Banner ">
    </div>
  </div>
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
 
$sql = "SELECT post.id, cliente.nome,cliente.imagem as'imagem_cliente', post.data_post, post.descricao,post.imagem, post.comentarios, post.curtidas from post inner join cliente on cliente.id = post.fk_cliente ";

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
  

  <div class="ft">
    <div class="container">
      <footer class="row">
        <img src="img/footer.jpg" class="img-fluid" alt="Banner ">
      </footer>

    </div>

  </div>
<script src="js/javascript.js"></script>

</body>

</html>