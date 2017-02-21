<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$string = "Essa semana tem feriado!";

//A função abaixo conta a quantidade de caracteres da nossa string.    
echo strlen($string);
echo "<br>";
//A função abaixo converte todos os caracteres para maiúsculo.
echo strtoupper($string);
echo "<br>";
//A função abaixo converte todos os caracteres para minúsculo.
echo strtolower($string);
echo "<br>";
//A função abaixo verifica a ocorrência de um caractere escolhido na string apontada.    
if(!strstr($string, '!')) {
    echo "Não tem ponto de exclamação";
} else {
    echo "Tem ponto de exclamação";
}
    
?>

</body>
</html>