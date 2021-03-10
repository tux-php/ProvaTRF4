<?php
include_once"Usuario.php";

class UsuarioDAO{
    public function inserir($User){        
        try {
            $conn = new PDO("mysql:host=localhost;dbname=acesso","fernando","123456");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            /* código letra B início*/ 
            $stmt = $conn->prepare("INSERT INTO usuario(nome,email,usuario,senha)
             VALUES('{$User->getNome()}','{$User->getEmail()}','{$User->getUsuario()}','{$User->getSenha()}')");            
            $sql = $stmt->execute();
            return 1;
            /*código letra B fim*/ 
        }catch(PDOException $e){
            return $e->getCode();
        }
    }

    public function buscar($User){        
        try {
            $conn = new PDO("mysql:host=localhost;dbname=acesso","fernando","123456");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM usuario WHERE usuario=? AND senha=?");
            
            $stmt->execute([$User->Usuario, $User->Senha]);
            
            $u = $stmt->fetch();
            //var_dump($u);die();
            $userFound = new Usuario();
            $userFound->Nome = $u['nome'];
            $userFound->Email = $u['email'];
            $userFound->Usuario = $u['usuario'];
            $userFound->Senha = $u['senha'];
            return $userFound;
        }catch(PDOException $e){
            return null;
        }
    }
}
?>