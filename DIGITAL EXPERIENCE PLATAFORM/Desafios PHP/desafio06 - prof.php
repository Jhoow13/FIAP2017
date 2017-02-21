<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    
    <?php

function sorteioMega(){    
     
// Sorteia 6 números
for ($i = 1; $i <= 6; $i++) 
{ 
    $n[] = rand(1, 60); 
}
   
// Colocando em ordem crescente
sort($n);

// Exibe e separa com ' - ' os números
echo "Os números sorteados da Mega Sena são: " . implode(' - ', $n);
}
    sorteioMega();
    
    ?>
    
</body>
</html>