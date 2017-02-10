<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio 02</title>
</head>
<body>
    <?php
    //total de ligações 247
    //120 interurbanos
    //37 celular

    $assinatura = 12.9; 
    $precoImpulsos = 0.04;
    $precoCelular = 0.2;
    $impulsosSemCobrança = 90;

    $chamadasInterurbano = 120;
    $chamadasCelular = 37;


    echo '<h1>Conta Telefonica Maria Lucia</h1>';
    echo 'Preço assinatura: R$'. $assinatura ."<br>";
    echo 'Total de chamadas celular: R$'. $chamadasCelular ."<br>";
    echo 'Total de chamadas interurbano: R$'. $chamadasInterurbano ."<br>";
    echo 'Preco impulsos (só cobrar excedentes a 90): R$' . $precoImpulsos."<br>";
    echo 'Preco Celular: R$' . $precoCelular . "<br>";


    echo "Valor total da conta R$" . ((($chamadasInterurbano-$impulsosSemCobrança) * $precoImpulsos) + ($chamadasCelular * $precoCelular) + $assinatura);    

    ?>
</body>
</html>