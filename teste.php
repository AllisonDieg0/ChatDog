
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

<div class="container-fluid">

    <header class="row">

      <nav class="container-fluid navbar navbar-expand-sm navbar-dark fixed-top" id="nav">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       
        <!-- Links -->
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="mx-auto row">
            <li id="home" class="pointer">
              <a   href="home.php">PAGINA INICIAL</a>
            </li>
            <li   id="home" class="pointer">
              <a  href="update.php">MINHA CONTA</a>
            </li>

              <li  id="post" class="pointer active">
                <a  href="teste.php">MEUS POSTS</a>
              </li>

              <li  id="postar" class="pointer" >
                <a  href="postar.php">O QUE VOCÊ ESTÁ PENSANDO ?</a>
              </li>

          </ul>



      </nav>

      
    </header>
  </div>
 </div>




</body>

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
    
$sql = "SELECT  * from post where fk_cliente = $id";



$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        #fazer um loop para mostrar todos os posts
      
      
        echo '
         <br><br>
     <div class="meio">
        <div class="container" >
        <div class="row">
           <div class="col-12" style = "margin-bottom:30px;">
              <div class="card-deck" >
                 <div class="mx-auto" >
                    <div class="card">
                       <div class="card-body">
                       <img src ="img/'.$row["imagem"].'" style = "width:100px;">
                       <br><br>
                      <h4> LEGENDA:  <b> '.$row['descricao'] .'<b></h4>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        </div>
     </div>';
    

    }
} else {
    echo "0 results";
}

mysqli_close($conn);


?>


    








