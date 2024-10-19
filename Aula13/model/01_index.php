<?php
 
 require_once "model\pessoa.php";

 $pessoa = new Pessoa();
 $pessoa->setNome('Ana');
 $pessoa->setSobreNome('Carolina');

 echo $pessoa->getNomeCompleto();
?>