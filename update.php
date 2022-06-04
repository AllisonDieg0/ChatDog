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
  <title>Atualizar Cadastro</title>
</head>

<body class="meio">
  <?php
  session_start();
  include('conexao.php');
  $id = $_SESSION['id'];
  $sql = "SELECT * FROM cliente WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $nome = $row['nome'];
  $email = $row['email'];
  $telefone = $row['telefone'];
  $senha = $row['senha'];


  ?>
  <div class="bn">
  <header class="header">
<nav>

  
        <ul class="menu">
          <li id="home" class="pointer" >
            <a href="home.php">PÁGINA INICIAL</a>
          </li>
          <li id="conta" class="pointer active">
            <a href="update.php">MINHA CONTA</a>
          </li>
          <li id="post" class="pointer" >
            <a href="teste.php">MEUS POST</a>
          </li>
          <li id="postar" class="pointer">
            <a href="home.php">O QUE VOCÊ ESTA PENSANDO?</a>
          </li>
        </ul>
      </nav>


    </header>
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
                  <form action="update_script.php" method="post">
                    <div class="form-group">
                      <label for="nome">Nome:</label>
                      <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>">                     

                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>">

                    </div>
                    <div class="form-group">
                      <label for="telefone">Telefone:</label>
                      <input type="tel" name="telefone" id="telefone" value="<?php echo $row['telefone']; ?>">

                    </div>
                    <div class="form-group">
                      <label for="senha">Senha:</label>
                      <input type="password" name="senha" id="senha" value="<?php echo $row['senha']; ?>">
                    </div>
                    <div id="bt">
                      <button type="submit" class="btn btn-primary">Enviar</button><br><br>
                      <div class="bt">
                        <a href="cadastro.php">Cadastrar</a>
                      </div>
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

</body>

<script src="js/javascript.js"></script>

</html>