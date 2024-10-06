<?php
$disciplinas = array("Banco de Dados II", "Estrutura de dados II", "Administração e Sistemas", "Engenharia da computação II", "Desenvolvimento WEB I");

$professores = array("Marco B.", "Fernando Bastos", "Sandro", "Jullian", "Cleber Nardelli");

for ($i = 0; $i < 5; $i++) {
    echo "Disciplina: " . $disciplinas[$i] . ", Professor: " . $professores[$i] . ".<br>";
}
?>