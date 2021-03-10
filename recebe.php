<?php
session_start();
include_once 'Usuario.php';
include_once 'UsuarioDAO.php';
if($_SERVER["REQUEST_METHOD"] != "POST"){
    header("Location: index.php");
    exit();
}

/** LETRA A INICIO*/
$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_var($_POST['senha'],FILTER_SANITIZE_SPECIAL_CHARS);
/** LETRA A INICIO FIM*/
$usu = new Usuario();
$usu->Usuario = $usuario;
$usu->Senha = $senha;
$usuarioDAO = new UsuarioDAO();
$userFound = $usuarioDAO->buscar($usu);
if(isset($userFound->Usuario) && isset($userFound->Senha)){    
    $_SESSION['usuario'] = $usuario;
    $_SESSION['time'] = time();
    header("Location:p1.php");
}else{    
    header("Location:index.php");
}

?>