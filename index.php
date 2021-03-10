<?php
session_start();
$_SESSION = array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acesso ao Sistema</title>
</head>
<body>
<form action="recebe.php" method="post">
<p>
    <label for="usu">Usuário</label>
    <input type="text" name="usuario" id="log">
</p>
<p>
    <label for="sen">Senha</label>
    <input type="password" name="senha" id="sen">    
</p>
<input type="submit" value="Entrar"> <a href="cadastrar.html">Cadastre-se</a>
</form>
</body>
</html>