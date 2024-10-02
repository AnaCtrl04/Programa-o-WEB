<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Capturar os valores inseridos no formulário
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $valor3 = $_POST['valor3'];

            // Calcular a soma dos três valores
            $soma = $valor1 + $valor2 + $valor3;

            // Determinar a cor com base nas condições
            $classeCor = "";

            if ($valor1 > 10) {
                $classeCor = "azul";
            } elseif ($valor2 < $valor3) {
                $classeCor = "verde";
            } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
                $classeCor = "vermelho";
            }

            echo "<p class='$classeCor'>Resultado da soma: $soma</p>";
        }
        ?>
