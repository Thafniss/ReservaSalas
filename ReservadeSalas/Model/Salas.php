<?php
  class Sala {
    private $sala_id;
    private $Usuario;
    private $capacidade;

    public function __construct($sala_id, $Usuario, $capacidade) {
        $this->sala_id = $sala_id;
        $this->Usuario = $Usuario;
        $this->capacidade = $capacidade;
    }

    public function getSalaId() {
        return $this->sala_id;
    }
    public function setSalaId($sala_id){
        $this->sala_id = $sala_id;
    }

    public function getUsuario() {
        return $this->Usuario;
    }
    public function setUsuario($Usuario){
        $this->Usuario = $Usuario;
    }

    public function getCapacidade() {
        return $this->capacidade;
    }
    public function setCapacidade($capacidade){
        $this->capacidade = $capacidade;
    }
}
?>