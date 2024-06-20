<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://sail.faunalia.eu/fancy-index/icons/php.svg">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado Final</title>
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
            //var_dump($_REQUEST);// $_GET $_POST $_COOKIE - O request é basicamente a junção de todos estes itens
            $n = $_GET["numero"] ?? "Valor inválido"; // coalescencia nula no PHP, função para direcionar melhor mensagens de erro só usando o ?? depois das variaveis
            $a = $n - 1;//número antecessor
            $s = $n + 1;//número sucessor
            echo "<p>O número escolhido foi <strong>$n</strong></p>";
            echo "<p>O seu antecessor é <strong>$a</strong></p>";
            echo "<p>O número sucessor é <strong>$s</strong></p>";
        ?>
         <a href="javascript:history.go(-1)"><button type="button">⬅️ Voltar</button></a>
    </main>
</body>
</html>