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
    <main>
        <?php
            $n = $_GET["numero"] ?? "Valor inválido";
            // $frac = substr(strpbrk($n, '.,'), 1); // aqui ele vira uma string
            $frac = (int) substr(strpbrk($n, '.,'), 1); // assim o valor permanece como número

            echo "<p>Analisando o número <strong>$n</strong> informado pelo usuário:</p>";
            echo "<ul>
                    <li>
                        A parte inteira do número é: <strong>".intval($n)."</strong>
                    </li>";
            echo "<li>
                    A parte fracionária do número é: <strong>0,$frac</strong>
                  </li>
                  </ul>";
        ?>
         <a href="javascript:history.go(-1)"><button type="button">⬅️ Voltar</button></a>
    </main>
</body>
</html>