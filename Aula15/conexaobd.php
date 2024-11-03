<?php

class Conexaobd {
    private $host;
    private $porta;
    private $database;
    private $user;
    private $password;
    private $internalConnection;

    public function __construct() {
        $this->porta = 5432;
    }

    public function setHost($host) {
        $this->host = $host;
    }

    public function setPorta($porta) {
        $this->porta = $porta;
    }

    public function setDatabase($database) {
        $this->database = $database;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function Conecta() {
        try {
            $this->internalConnection = pg_connect($this->getConnectString());
            if ($this->internalConnection) { 
                return true;
            }
        } catch (\Throwable $e) {
            return false;
        }
    }

    private function getConnectString() {
        return "host=" . $this->host .
               " port=" . $this->porta .
               " dbname=" . $this->database .
               " user=" . $this->user .
               " password=" . $this->password . ";";
    }   
    public function getInternalConnection() {
        return $this->internalConnection;
    }
}
?>
