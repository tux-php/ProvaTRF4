<?php
include_once"Usuario.php";
include_once"UsuarioDAO.php";

/** LETRA A INICIO*/
$nome = filter_var($_POST["nome"], FILTER_SANITIZE_SPECIAL_CHARS);
//var_dump($nome);die();
$email = filter_var($_POST["email"], FILTER_SANITIZE_SPECIAL_CHARS);
$usuario = filter_var($_POST["usuario"], FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_var($_POST["senha"], FILTER_SANITIZE_SPECIAL_CHARS);
/** LETRA A INICIO FIM*/
$usu = new Usuario();
$usu->Nome = $nome;
$usu->Email = $email;
$usu->Usuario = $usuario;
$usu->Senha = $senha;
$usuarioDAO = new UsuarioDAO();
$status = $usuarioDAO->inserir($usu);

if($status == 1){
    echo 'Cadastro realizado com sucesso!';
    echo '<a href="cadastrar.html">Voltar</a>'; 
}else{
    echo 'Erro '.$status. '. Entre em contato com o administrador do site.';
    echo '<a href="index.php">Voltar</a>'; 
}

?>

