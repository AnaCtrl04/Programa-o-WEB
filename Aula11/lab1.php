<?php
$conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");

if (!$conn) {
    echo "Erro ao conectar ao banco de dados: " . pg_last_error();
} else {
    echo "Conectado com sucesso!";
}
?>