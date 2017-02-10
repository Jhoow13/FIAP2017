<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <?php
        
        if(4 == "4"){
            echo 'Voce ta mentindo!!! <br>';
        }else{
            echo 'Ok, deu certo <br>';
        }

        if(4 === "4"){
            echo "Tá certo <br>";
        }else{            
            echo "Tá errado!! <br>";
        }

        // if(4 <= 4){
        //     echo 'Ok. <br>';
        // }

        // if(4 != 5){
        //     echo 'Ok, 4 diferente de 5';
        // }

        //Operador E : &&
        if(2 == 2 && 7 == 7){
            echo "Isso ai <br>";
        }

        //Operador OU : ||
        if (2 == 2 || 2 == 1 ){
            echo "Mentira";
        }else{
            echo "Isso ai";
        }
        
    ?>
</body>
</html>