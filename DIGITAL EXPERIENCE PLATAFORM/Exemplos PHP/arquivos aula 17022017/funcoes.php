<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    
    <?php
    
    
//    function diga_Algo() {
//        echo "Hoje tem jogo do Corinthians!";
//    }
//    diga_Algo();
    
    
//     function calculadora(){
//        echo 456 + 345;
//    }
//     calculadora();
    
    function init(){
        diga_Algo();
        echo "<br>";
        calculadora();
    }
    
    function diga_Algo(){
        echo "Hoje tem jogo do Corinthians!";
    }
    
    function calculadora(){
        echo 456 + 345;
    }
    
    init();
    
    
    ?>
    
</body>
</html>