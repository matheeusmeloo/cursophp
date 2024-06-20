<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://sail.faunalia.eu/fancy-index/icons/php.svg">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            //var_dump($_REQUEST);// $_GET $_POST $_COOKIE - O request é basicamente a junção de todos estes itens
            $n = $_GET["nome"] ?? "Sem nome"; // coalescencia nula no PHP, função para direcionar melhor mensagens de erro só usando o ?? depois das variaveis
            $s = $_GET["sobrenome"] ?? "Desconhecido";
            echo "<p>É um prazer te conhecer, $n $s! Este é o meu site!";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>