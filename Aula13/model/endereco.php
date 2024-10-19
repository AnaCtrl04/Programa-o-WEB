<?php
 class Endereco {
    private $logradouro;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;
    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }
    public function getBairro($bairro) {
        $this->bairro = $bairro;
    }
    public function getCidade($cidade) {
        $this->cidade = $cidade;
    }
    public function getEstado($estado) {
        $this->estado = $estado;
    }
    public function getCEP($cep) {
        $this->cep = $cep;
    }
 }
?>