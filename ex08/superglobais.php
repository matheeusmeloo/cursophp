<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://sail.faunalia.eu/fancy-index/icons/php.svg">
    <link rel="stylesheet" href="../style.css">
    <title>Superglobais</title>
</head>
<body>
    <main>
        <pre>
            <?php 
              setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

              session_start();
              $_SESSION["teste"] = "FUNCIONOU!";

              echo "<h1>Superglobal GET</h1>";
              var_dump($_GET);

              echo "<h1>Superglobal POST</h1>";
              var_dump($_POST);

              echo "<h1>Superglobal RESQUEST</h1>";
              var_dump($_REQUEST);

              echo "<h1>Superglobal COOKIE</h1>";
              var_dump($_COOKIE);

              echo "<h1>Superglobal SESSION</h1>";
              var_dump($_SESSION);
            ?>
        </pre>
    </main>
</body>
</html>