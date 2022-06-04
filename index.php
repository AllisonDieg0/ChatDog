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
<script>
history.pushState(null, null, null);
window.addEventListener('popstate', function (event) {
    history.pushState(null, null, null);
});
</script>
   
<div class="bn">
    <div class="container"> 
      <header class="row">
    <img src ="img/banner.jpg" class="img-fluid" alt="Banner ">
    </header>
</div>
</div>
<br><br><br><br>

<div class="meio">
<div class="container">
        <div class="row">
        <div class="col-12">
      <div class="card-deck" >
        <div class="mx-auto">
        <div class="card">
          <div class="card-body">
          <form action="login.php" method="post">   
  <div class="form-group">


    <label for="email">Endereço de email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Seu email">
  
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
  </div>
 <div id="bt">
 <button type="submit" class="btn btn-primary" >Enviar</button><br><br>
<div class="bt">
<a href="cadastro.php" >Cadastrar</a>
</div></div>
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
    <img src ="img/footer.jpg" class="img-fluid" alt="Banner ">
    </footer>

</div>

</div>
    
    
</body>
</html>