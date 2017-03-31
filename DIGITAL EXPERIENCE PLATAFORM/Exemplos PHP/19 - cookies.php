<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <?php    
        $nome = "NomeDoCookie";
        $valor = 200;
        $expira = time() + (60 * 60 * 24 * 7);

        setcookie($nome,$valor,$expira);

        echo "churros";
    ?>
</body>
</html>