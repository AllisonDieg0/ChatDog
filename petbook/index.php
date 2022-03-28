<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>petbook</title>
</head>
<body>
    <!-- make a screen to the user do the login -->
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Entrar">
        <a href="cadastro.php">Cadastrar</a>
    </form>
    
    
</body>
</html>