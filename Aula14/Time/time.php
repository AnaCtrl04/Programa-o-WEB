<?php
    class Time {
        private $nome;
        private $anoFundacao;
        private $jogadores;

        public function __construct(){
            $this->jogadores = array();
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setanoFundacao($ano){
            $this->anoFundacao = $ano;
        }
        public function addJogador($jogador){
            array_push($this->jogadores, $jogador);
        }
        public function getJogadores() {
            return $this->jogadores;
        }
    }
?>