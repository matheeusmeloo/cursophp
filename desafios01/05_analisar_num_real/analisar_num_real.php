<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://sail.faunalia.eu/fancy-index/icons/php.svg">
    <link rel="stylesheet" href="../../style.css">
    <title>Analisador de Número Real</title>
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
        <section>
            <form action="result_analisar_num_real.php" method="get">
                <label for="numero">Número Real: </label>
                <input type="number" name="numero" id="idnumero" step="0.00000001" min="0.00000001"> <!-- Utilizado step e min para poder ser validado a inserção de número com vírgula -->
                <input type="submit" value="Analisar">
            </form>
            <a href="javascript:history.go(-1)"><button type="button">⬅️ Voltar</button></a>
        </section>
</body>
</html>