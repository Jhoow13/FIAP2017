<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
    <?php
    
        $listaNumeros = array(17,254,239,2,53);

        echo $listaNumeros[2] . '<br>';        
        print_r($listaNumeros);
        echo '<br>';

        //arrays associativos
        $nomes = array(
            "primeiro_nome" => 'Joel', 
            "segundo_nome" => 'Churros', 
            "terceiro_nome" => 'Regina');


        print_r($nomes);
        echo '<br>';
        echo $nomes['segundo_nome'];

    ?>
</body>
</html>