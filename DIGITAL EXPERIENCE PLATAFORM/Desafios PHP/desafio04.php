<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada - Desafio 04</title>
</head>
<body>
    <?php
        //Solução professor
        // for($x = 1; $x<=10; $x++){
        //     echo "Tabuada do $x <br>";
        //     for($y = 1; $y<=10; $y++){
        //         echo "$x x $y = " . $x * $y . '<br>';
        //     }
        // }

        $valores = array(1,2,3,4,5,6,7,8,9,10);
        foreach ($valores as $valor){
            echo "Tabuada do " . $valor . '<br>';
            for($i = 0; $i <= 10; $i++){
                echo "$valor x $i = " . $valor * $i . '<br>';
            }
            echo "____________ <br>";
        }

    ?>
</body>
</html>