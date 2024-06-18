<?php
class Professor{
    private $id;
    private $Usuario;
    private $Senha;
    

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getUsuario(){
        return $this->Usuario;
    }

    public function setUsuario($Usuario){
        $this->Usuario = $Usuario;
    }

    public function getSenha(){
        return $this->Senha;
    }

    public function setSenha($Senha){
        $this->Senha = $Senha;
    }


    public function __toString(){
        return "Professor: Usuario: {$this->Usuario} - Senha: {$this->Senha}";
    }
}
?>