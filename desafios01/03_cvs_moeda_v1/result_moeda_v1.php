<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://sail.faunalia.eu/fancy-index/icons/php.svg">
    <link rel="stylesheet" href="../../style.css">
    <title>Conversor Moeda v1</title>
</head>
<body>
    <header>
        <h1>Conversor de Moeda (Básico)</h1>
    </header>
    <main>
        <?php
            //var_dump($_REQUEST);// $_GET $_POST $_COOKIE - O request é basicamente a junção de todos estes itens
            $n = $_GET["numero"] ?? "Valor inválido";
            $cotacao = 5.45; //cotação dólar dia 20/06/2024
            $convert = round($n / $cotacao, 2);//resultado, utilizei a função round e chamei o número 2 pra dizer que queria mais dois números após a virgula.
            echo "<p>Seus R$ $n equivalem a <strong>US$ $convert</strong></p>";
            echo "<p><strong>Cotação fixa de R$ $cotacao </strong> informada diretamente no código fonte.</p>";
        ?>
         <a href="javascript:history.go(-1)"><button type="button">⬅️ Voltar</button></a>
    </main>
</body>
</html>