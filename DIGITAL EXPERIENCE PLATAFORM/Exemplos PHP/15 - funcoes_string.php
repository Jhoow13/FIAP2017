
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>

  <body>
    <?php 
      
    $string = "Faltam 5 dias para o carnaval !!!!!!!";
    $stringNome = "Joel";

    //conta a quantidade de caracteres
    echo strlen ($string);
    echo '<br>';
    //transforma em UPPERCASE
    echo strtoupper($stringNome);
    echo '<br>';
    //transforma em lowercase
    echo strtolower($stringNome);
    echo '<br>';

    if(strstr($string, '!')){
        echo "Eba, encontrei o que eu queria";
    }else{
        echo "Ah.. não tem o caracter solicitado";
    }
    
    ?>
  </body>


</html>
