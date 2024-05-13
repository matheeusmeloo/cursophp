<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://www.php.net/favicon.ico?v=2">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        date_default_timezone_set("America/Sao_Paulo");
            echo "Hoje é o dia " . date("d/M/Y");
            echo " e a hora atual é " . date("G:i:s T")
        ?>
    </h1>
</body>
</html>