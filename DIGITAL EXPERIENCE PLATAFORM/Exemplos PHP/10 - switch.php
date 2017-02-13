<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <?php
    
        $numero = 37;

        switch($numero){
            case 34:
                echo "Esse é o 34";
                break;
            case 37:
                echo "Esse é o 37";
                break;
            case 38:
                echo "Esse é o 39";
                break;
            default:
                echo "Não encontrei nenhum numero";
        }
    ?>
</body>
</html>