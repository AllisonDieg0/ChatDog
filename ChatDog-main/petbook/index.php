<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>petbook</title>
</head>
<body>
    <!-- make a screen to the user do the login -->
    <div class="header">

    <img src ="ChatDog.png" alt="Banner ">

    </div>

    <div class="content">
    <form action="login.php" method="post">
        <label  for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Entrar">
        <a href="cadastro.php">Cadastrar</a>
    </form>
    
</div>

<div class="footer">

<img src ="footer.png" alt="Banner ">

</div>
    
    
</body>
</html>