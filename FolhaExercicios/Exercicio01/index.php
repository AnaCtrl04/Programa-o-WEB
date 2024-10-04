<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Três Valores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #555;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }

        /* Classes para cores específicas baseadas nas condições */
        .blue {
            color: blue;
        }

        .green {
            color: green;
        }

        .red {
            color: red;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Calculadora de Soma</h1>

        <form method="POST">
            <label for="valor1">Digite o primeiro valor:</label>
            <input type="number" name="valor1" required><br>

            <label for="valor2">Digite o segundo valor:</label>
            <input type="number" name="valor2" required><br>

            <label for="valor3">Digite o terceiro valor:</label>
            <input type="number" name="valor3" required><br>

            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe os valores do formulário
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $valor3 = $_POST['valor3'];

            // Calcula a soma dos três valores
            $soma = $valor1 + $valor2 + $valor3;

            // Verifica as condições e atribui a classe apropriada
            $classeResultado = ""; // Inicializa a variável de classe
            if ($valor1 > 10) {
                $classeResultado = "blue";  // Primeira variável > 10, resultado azul
            } elseif ($valor2 < $valor3) {
                $classeResultado = "green"; // Segunda variável < terceira, resultado verde
            } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
                $classeResultado = "red";   // Terceira variável < primeira e segunda, resultado vermelho
            }

            // Exibe o resultado com a classe CSS apropriada
            echo "<p class='$classeResultado'>O resultado da soma é: $soma</p>";
        }
        ?>
    </div>

</body>
</html>
