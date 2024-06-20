<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://sail.faunalia.eu/fancy-index/icons/php.svg">
    <link rel="stylesheet" href="../style.css">
    <title>Antecessor e Sucessor</title>
</head>
<body>
    <header>
        <h1>Antecessor e Sucessor</h1>
    </header>
        <section>
            <h2>Informe um número</h2>
            <form action="result_ant_suc.php" method="get">
                <label for="numero">Número: </label>
                <input type="number" name="numero" id="idnumero">
                <input type="submit" value="Calcular">
            </form>
            <a href="javascript:history.go(-1)"><button type="button">⬅️ Voltar</button></a>
        </section>
</body>
</html>