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
        <section>
            <form action="result_moeda_v1.php" method="get">
                <label for="numero">Quantos R$ você tem na carteira: </label>
                <input type="number" name="numero" id="idnumero">
                <input type="submit" value="Converter">
            </form>
            <a href="javascript:history.go(-1)"><button type="button">⬅️ Voltar</button></a>
        </section>
</body>
</html>