<?php

namespace model\pessoa;

 class Pessoa {
    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $cpfcnpj;
    private $tipo;
    private $telefone;
    private $endereco;

    public function __construct()
    {
        $this->nome = "vazio";
        $this->sobrenome = "sobrenome";
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSobreNome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getNomeCompleto() {
        return $this-> nome . " " . $this->sobrenome;
    }

    public function getDataNascimento() {
        return $this-> dataNascimento . " " . $this->dataNascimento;
    }

    public function getCpfCnpj() {
        return $this->cpfcnpj . " " . $this->cpfcnpj;
    }

    public function getTipo() {
        return $this-> tipo . " " . $this->tipo;
    }

    public function getTelefone() {
        return $this-> telefone . " " . $this->telefone;
    }

    public function getEndereco() {
        return $this-> endereco . " " . $this->endereco;
    }

}

/*
function retornaNomeCompletoPessoa ($nome, $sobrenome) {
    return $nome . " " . $sobrenome;
}

?>