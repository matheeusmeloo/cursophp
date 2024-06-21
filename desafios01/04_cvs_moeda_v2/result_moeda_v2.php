<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://sail.faunalia.eu/fancy-index/icons/php.svg">
    <link rel="stylesheet" href="../../style.css">
    <title>Conversor Moeda v2</title>
</head>
<body>
    <header>
        <h1>Conversor de Moeda (Avançado)</h1>
    </header>
    <main>
        <?php
        //  $hoje = "06-20-2024";
          $hoje = (new DateTime())->format('m-d-Y'); // O Banco Central não trás informações do dólar nos dias: SEXTA, SÁBADO E DOMINGO).
          $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=\''.$hoje.'\'&$top=100&$format=json&$select=cotacaoCompra';
         // Obter o conteúdo da URL
            $response = file_get_contents($url);
                // Decodificar o JSON
                $jsonData = json_decode($response);
                    // Verificar se há dados na resposta
                    if (isset($jsonData->value) && count($jsonData->value) > 0) {
                        // Extrair os dados
                        $cotacao = $jsonData->value[0];
                         $n = $_GET["numero"] ?? "Valor inválido";
                         $convert = round($n / $cotacao->cotacaoCompra, 2);//resultado, utilizei a função round e chamei o número 2 pra dizer que queria mais dois números após a virgula.
                         echo "<p>Seus R$ $n equivalem a <strong>US$ $convert</strong></p>";
                         echo "<p><strong>Cotação de R$ ".round($cotacao->cotacaoCompra, 2)." importada do Banco Central do Brasil</p>";
                    } else {
                        echo "Nenhuma cotação encontrada para a data: " . $hoje . ".\n";
                    }
        ?>
         <a href="javascript:history.go(-1)"><button type="button">⬅️ Voltar</button></a>
    </main>
</body>
</html>