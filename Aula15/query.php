<?php

class Query {
    private $conexaoBd;
    private $sql;
    private $lastQuery;
    private $result;

    public function __construct($conexaoBd) {
        $this->conexaoBd = $conexaoBd;
    }

    public function setSql($sql) {
        $this->sql = $sql;
    }

    public function open() {
        $this->result = pg_query($this->conexaoBd->getInternalConnection(), $this->sql);
        if ($this->result === false) {
            $this->lastQuery = pg_last_error($this->conexaoBd->getConnection());
            return false;
        }
        return true;
    }

    public function getNextRow() {
        return pg_fetch_assoc($this->result);
    }

    public function getAllRows() {
        return pg_fetch_all($this->result);
    }

    public function close() {
        if ($this->result) {
            pg_free_result($this->result);
        }
    }

    public function getLastError() {
        return $this->lastQuery;
    }
}

?>
