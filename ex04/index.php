<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://sail.faunalia.eu/fancy-index/icons/php.svg">
    <title>Manipulação de Strings</title>
</head>
<body>
    <?php 
        $nome = "Matheus"; //Ao usar double quoted(aspas simples) você está pedindo para o PHP interpretar o que está dentro da string
        $sobrenome = 'Melo \u{1F596}'; //Agora aspas simples ele nao interpreta, e o caracter unicode não será processado pelo PHP.

        echo "$nome $sobrenome \n";
    ?>
    <br><!-- regrinha importante, dentro de aspas duplas eu posso usar aspas simples. E dentro de aspas simples eu posso usar aspas duplas. Porém, nao posso usar aspas simples dentro de aspas simples ou aspas duplas dentro de aspas duplas, são regras do PHP -->
    <?php 
        const CANAL = "Curso em Vídeo \u{1F499}";
        echo "Eu adoro o ".CANAL ; //Para concatemos valores de constantes, utilizar o ponto " . "
    ?>
    <br>
    <?php 
        $nom = "Matheus";
        $snom = "Melo";
        $apelido = "Gafanhoto";

        echo "$nom \"$apelido\" $snom"; //Caracteres de escape, vai ser usada a barra invertida, nesse exemplo eu coloquei pra poder a aspas dupla aparecer no texto

    ?>
</body>
</html>