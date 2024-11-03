<?php

require_once "Aula15/conexaobd.php";
require_once "Aula15/query.php";

$bd = new Conexaobd();
$bd->setHost("localhost");
$bd->setPorta(5432);
$bd->setDatabase("postgres");
$bd->setUser("postgres");
$bd->setPassword("123456");

if(!$bd->Conecta()) {
    echo "Erro de Conexão";
} else {  
    $query = new Query($bd);
    $query->setSql("SELECT 1 AS Coluna");
    if ($query->Open()) {
        while ($linha = $query->getNextRow()) {
            var_dump($linha);
        }
    } else {
        echo "Nenhum registro encontrado;";
    }
}

class Query {
    private $bd;
    private $sql;
    private $result;

    public function __construct($bd) {
        $this->bd = $bd;
    }

    public function setSql($sql) {
        $this->sql = $sql;
    }

    public function Open() {
        $this->result = pg_query($this->bd->getConnection(), $this->sql);
        return $this->result !== false;
    }

    public function getNextRow() {
        return pg_fetch_assoc($this->result);
    }
}

?>
