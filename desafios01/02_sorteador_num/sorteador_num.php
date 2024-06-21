<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://sail.faunalia.eu/fancy-index/icons/php.svg">
    <link rel="stylesheet" href="../../style.css">
    <title>Sorteador de números</title>
</head>
<body>
    <header>
        <h1>Sorteador de números</h1>
    </header>
    <main>
        <?php
            $n = mt_rand(0, 100);// função mais rápida para executar o comando
            // $n = random_int(0, 100); // Esta função pode ser um pouco demorada em alguns casos específicos, pois gera um numero criptografado.
            echo "<p>Gerando um número aleatório entro 0 e 100...</p>";
            echo "<p>O valor gerado foi <strong>$n</strong></p>";
        ?>
        <a href="javascript:location.reload()"><button type="button">🔁 Gerar outro</button></a>
        <a href="javascript:history.go(-1)"><button type="button">⬅️ Voltar</button></a>
    </main>
</body>
</html>