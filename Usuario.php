<?php
class Usuario{

    public $Nome;
    public $Email;
    public $Usuario;
    public $Senha;

    function __construct(){

    }
    function getNome(){
        return $this->Nome;
    }
    function getEmail(){
        return $this->Email;
    }
    function getUsuario(){
        return $this->Usuario;
    }
    function getSenha(){
        return $this->Senha;
    }
    function setNome($Nome){
        $this->Nome = $Nome;
    }
    function setEmail($Email){
        $this->Email = $Email;
    }
    function setUsuario($Usuario){
        $this->Usuario = $Usuario;
    }
    function setSenha($Senha){
        $this->Senha = $Senha;
    }
}


?>