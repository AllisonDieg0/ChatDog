<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>petbook</title>
</head>
<body>
    <!-- make a screen to register -->
    <form action="cadastro_script.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="telefone">Telefone:</label>
        <input type="phone" name="telefone" id="telefone">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">        
        <input type="submit" value="Cadastrar">
        
    </form>
</body>
</html>