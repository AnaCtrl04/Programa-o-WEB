<?php

$num1 = 10;
$num2 = 10;
$num3 = 10;

$soma = $num1 + $num2 + $num3;

 // Exibir o resultado conforme as condições
 if ($num1 > 10) {
    echo "<p class='result result-blue'>Resultado da soma: $soma</p>";
} elseif ($num2 < $num3) {
    echo "<p class='result result-green'>Resultado da soma: $soma</p>";
} elseif ($num3 < $num1 && $num3 < $num2) {
    echo "<p class='result result-red'>Resultado da soma: $soma</p>";
} else {
    echo "<p class='result'>Resultado da soma: $soma</p>";
}

?>