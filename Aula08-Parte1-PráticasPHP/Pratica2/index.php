<?php

//parte 1 da pratica
$salario1 = 1000;
$salario2 = 2000;

$salario1 = $salario2;

$salario2 = $salario2 + 1;

$salario1 = $salario1 * 1.10;


//parte 2 da pratica
echo "Salario 1: $salario1 e Salario 2: $salario2 <br>";

if ($salario1 > $salario2) {
    echo 'O salario 1 é maior do que o salario 2';
} else {
    if ($salario1 < $salario2) {
        echo 'O salario 2 é maior do que o salario 1';
    } else {
        echo 'Os dois salários são iguais';
    }
}
echo '<br><br><br>';

//parte 3 da pratica
for ($let = 1; $let <= 100; $let++) {
    $salario1 += 1;
    if($let == 50){
        break;
    }
    echo"O número é $let <br>"; 
}