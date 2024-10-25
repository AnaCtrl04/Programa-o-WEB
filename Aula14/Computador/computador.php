<?php
class Computador {
    private $estado;
    public function Ligar(){
        $this->estado = "Ligado";
        $this->escreverEstado();
    }
    public function Desligar(){
        $this->estado = "Desligado";
        $this->escreverEstado();
    }
    public function getStatus(){
        return $this->estado;
    }
    private function escreverEstado() {
        echo $this->getStatus();
    }
}
?>