<?php

class Contato {
    private $tipo;
    private $nome;
    private $valor;
    public function getTipo() {
        return $this->tipo . " " . $this->tipo;
    }
    public function getNome() {
        return $this->nome . " " . $this->nome;
    }
    public function getValor() {
        return $this->valor . " " . $this->valor;
    }
}

?>