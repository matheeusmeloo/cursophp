<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://www.php.net/favicon.ico?v=2">
    <title>Teste tipos primitivos</title>
</head>
<body>
    <h1>Teste tipos primitivos</h1>
    <?php 
        // 0x é hexadecimal 0b é binario e 0 é Octal
        $num = 0x1A;
        echo "O valor da variavel e $num";

        $v = "Matheus";
        var_dump($v);

        $num1 = 3e2; //este camara é o equivalente a 3 x 2(2)
        echo "O valor é $num1";

    ?>
</body>
</html>