<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <?php
    
        /*
            Notas
             7 de NAC
             8.7 de AM
             6.2 de PS
            Faltas
             13 aulas de 70            
        */

        $nac = 7;
        $am = 8.7;
        $ps = 6.2;
        $faltas = 13;

        $faltasPermitidas = 70 * 0.2;

        $notaTotal = (($nac * 0.2) + ($am * 0.3) + ($ps * 0.5));

        
        if($notaTotal > 6 && $faltas <= $faltasPermitidas){
            echo '<h1>Passou miserave</h1>';
        }


    ?>
</body>
</html>