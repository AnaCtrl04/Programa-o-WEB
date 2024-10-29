<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Avaliação</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4a90e2, #5d5d5d);
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        /* Container principal */
        .container {
            background: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            max-width: 1000px;
            width: 100%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 1rem;
        }

        /* Estilo do formulário */
        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        /* Escala de avaliação */
        .rating-scale {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 1rem 0;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .rating button {
            background-color: #e0e0e0;
            border: none;
            padding: 0.5rem;
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            color: #333;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .rating button:hover {
            background-color: #4a90e2;
            color: #fff;
        }

        .rating .low, .rating .high {
            font-size: 0.9rem;
            color: #666;
        }

        /* Campo de opinião */
        .open-question label {
            font-weight: bold;
            color: #333;
        }

        textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        textarea:focus {
            border-color: #4a90e2;
            outline: none;
        }

        /* Botão de envio */
        button[type="submit"] {
            background-color: #4a90e2;
            color: #fff;
            padding: 0.8rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #357abd;
        }

        /* Rodapé */
        footer p {
            font-size: 0.8rem;
            color: #666;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Perguntas do banco</h1>
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?> 
            <!-- Mensagem de agradecimento após o envio -->
            <p>Mensagem final: “O Hospital Regional Alto Vale (HRAV) agradece sua resposta e ela é muito importante para nós, pois nos ajuda a melhorar continuamente nossos serviços.”</p>
        <?php else: ?> 
            <!-- Formulário de avaliação -->
            <form method="POST" action="">
                <div class="rating-scale">
                    <div class="rating">
                        <span class="low">Muito Insatisfeito</span>
                        <button type="submit" name="rating" value="0">0</button>
                        <button type="submit" name="rating" value="1">1</button>
                        <button type="submit" name="rating" value="2">2</button>
                        <button type="submit" name="rating" value="3">3</button>
                        <button type="submit" name="rating" value="4">4</button>
                        <button type="submit" name="rating" value="5">5</button>
                        <button type="submit" name="rating" value="6">6</button>
                        <button type="submit" name="rating" value="7">7</button>
                        <button type="submit" name="rating" value="8">8</button>
                        <button type="submit" name="rating" value="9">9</button>
                        <button type="submit" name="rating" value="10">10</button>
                        <span class="high">Muito Satisfeito</span>
                    </div>
                </div>
                <div class="open-question">
                    <label for="open_feedback">Deixe sua opinião:</label>
                    <textarea name="open_feedback" id="open_feedback" rows="4" placeholder="Escreva sua opinião aqui..."></textarea>
                </div>
                <button type="submit">Enviar Avaliação</button>
            </form>
        <?php endif; ?>
        <footer>
            <p>“Sua avaliação espontânea é anônima, nenhuma informação pessoal é solicitada ou armazenada.”</p>
        </footer>
    </div>
</body>
</html>
