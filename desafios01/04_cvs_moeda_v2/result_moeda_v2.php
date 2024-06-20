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
         $hoje = (new DateTime())->format('m-d-Y');
         $uri = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=\''.$hoje.'\'&$top=100&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';
         $response = file_get_contents($uri);
         $jsonData = json_decode($response);
         //var_dump($jsonData); //Aqui é para exibir os valores

             if (isset($jsonData->value) && count($jsonData->value) > 0) {
                 // Extrair os dados
                 $cotacao = $jsonData->value[0];
                 $cotacao->cotacaoCompra;
                 $n = $_GET["numero"] ?? "Valor inválido";
                 $convert = round($n / $cotacao, 2);//resultado, utilizei a função round e chamei o número 2 pra dizer que queria mais dois números após a virgula.
                 echo "<p>Seus R$ $n equivalem a <strong>US$ $convert</strong></p>";
                 echo "<p><strong>Cotação importada do Banco Central do Brasil</p>";

             } else {
                 echo "Nenhuma cotação encontrada para a data: " . $hoje . ".\n";
             }

        //var_dump($_REQUEST);// $_GET $_POST $_COOKIE - O request é basicamente a junção de todos estes itens
        
        ?>
         <a href="javascript:history.go(-1)"><button type="button">⬅️ Voltar</button></a>
            <span></span> 
        </a>
    </main>
</body>
</html>