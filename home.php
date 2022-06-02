<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
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
    <div class="container"> 
      <header class="row">
    <img src ="banner.jpg" class="img-fluid" alt="Banner ">
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
          <form action="post_insert.php" method="post"   enctype="multipart/form-data">   
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
 <button type="submit" class="btn btn-primary" >Postar</button><br><br>

 <a href="post.php?id=5" >result</a>

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
    <img src ="footer.jpg" class="img-fluid" alt="Banner ">
    </footer>

</div>

</div>

    
</body>
</html>