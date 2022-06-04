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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

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
          <li id="post" class="pointer" >
            <a href="teste.php">MEUS POSTS</a>
          </li>
          <li id="postar" class="pointer active">
            <a href="postar.php">O QUE VOCÊ ESTA PENSANDO?</a>
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
  

  <div class="meio">

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card-deck">
            <div class="mx-auto">
              <div class="card">
                <div class="card-body">
                  <form action="post_insert.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                      <h4>Enviar um Post</h4>
                      <br><br>
                      <input type="file" name=imagem[] multiple>

                      <br><br>
                      <div class="form-group">

                        <input class="dc" type="text" name="descricao" placeholder="Descrição do post">

                        <br><br>


                        <div id="bt">
                          <button type="submit" class="btn btn-primary">Postar</button><br><br>
                        </div>


                  </form>

                  <br>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  </div>
  </div>
  <br>
  <br>
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