<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>

    
    
    <?php 

$lista = [343,34,323,23,54,232,453];

//Função que exibe o maior número do array:
echo max($lista);

echo "<br>";
    
//Função que exibe o menor número do array:
echo min($lista);

echo "<br>";

// Ordem crescente:
sort($lista);

//Impressão do array inteiro:    
print_r($lista);
echo "<br>";
        
// Função para ligar os dados de um array    
$array = array('Gustavo', 'Torrente', '11954000000');
$implode = implode(", ", $array);
echo $implode    
    
    ?>
    
</body>
</html>