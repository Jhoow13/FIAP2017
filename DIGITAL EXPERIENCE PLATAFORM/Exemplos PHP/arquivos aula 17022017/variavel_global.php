<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    
    <?php
    
    
    $x = "fora"; 

    function teste(){
    global $x;   
    $x = "dentro";      
    }

    echo $x;
    echo "<br>";
    
    teste();
    echo $x;
    
    
    
    ?>
    
</body>
</html>