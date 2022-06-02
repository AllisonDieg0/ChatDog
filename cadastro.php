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
<style>input {
            padding: 12px;
            border: 2px solid black;
            
            border-radius: 15px;
        }
        
        
        .cd{

            background-color: dodgerblue;
            color: white;
            border: none;
        }</style>
</head>
<body>

<div class="bn">
    <div class="container"> 
      <header class="row">
    <img src ="banner.jpg" class="img-fluid" alt="Banner ">
    </header>
</div>
</div>

 

    <div class="meio">
<div class="container">
        <div class="row">
        <div class="col-12">
      <div class="card-deck" >
        <div class="mx-auto">
        <div class="card">
          <div class="card-body">
          <form action="cadastro_script.php" method="POST">
          <div class="form-group">


          <label for="nome"></label>
<input type="text" id="nome"  name="nome" placeholder="Digite seu nome">

</div>
  <div class="form-group">

  <label for="email"></label>
    <input type="email"  id="email" aria-describedby="emailHelp" name="email" placeholder="Seu email">
  
  </div>

  <div class="form-group">


  <label for="telefone"></label>
    <input type="phone"  id="telefone"  name="telefone" placeholder="Seu telefone">
  
  </div>




  <div class="form-group">
  <label for="senha"></label>
    <input type="password"  id="senha" name="senha" placeholder="Senha">
  </div>
 <div id="bt">
 <input class="cd" type="submit" value="cadastro" onclick="cadastro()">



</div>
</form>



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


<div class="ft">
<div class="container"> 
      <footer class="row">
    <img src ="footer.jpg" class="img-fluid" alt="Banner ">
    </footer>

</div>

</div>


 

</body>


</html>