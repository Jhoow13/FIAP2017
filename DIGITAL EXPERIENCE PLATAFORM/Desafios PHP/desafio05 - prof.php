<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    
    <?php
    
    function temperatura($c){
       return ($c * 1.8) + 32;   
    }
    
    echo "A temperatura em Graus Fahrenheit é: " . temperatura(35) . "ºF";
    
    ?>
    
</body>
</html>