<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $connection = pg_connect("host=$localhost dbname=$HospitalRegional user=$postgres password=$123456");
    if (!$connection) {
        echo "Ocorreu um erro.<br>";
        exit;
    }

    $result = pg_query($connection, "SELECT * from tbperguntas");
    if (!$result) {
        echo "Ocorreu um erro.<br>";
        exit;
    }

    ?>

    <table>
        <tr>
        <th>id_pergunta</th>
        <th>texto_pergunta</th>
        <th>status_pergunta</th>
        </tr>

        <?php
        while($row = pg_fetch_assoc($result)) {
            echo "
            <tr>
            <td>$row[id_pergunta]</td>
            <td>$row[texto_pergunta]</td>
            <td>$row[status_pergunta]</td>
            </tr>
            ";
        }
        ?>
    </table>

</body>
</html>