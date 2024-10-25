<?php
 require_once "computador.php";

 $computador = new Computador ();
 $computador->Ligar();
 $computador->Desligar();
 echo $computador->getStatus();
?>