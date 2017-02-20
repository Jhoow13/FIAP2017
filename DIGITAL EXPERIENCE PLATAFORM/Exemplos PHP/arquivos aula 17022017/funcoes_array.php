<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>

  <body>
    <?php
        $lista = [342, 34, 56, 78, 897, 1, 22, 2017];

        echo "Número máximo do array '342, 34, 56, 78, 897, 1, 22, 2017' : " . max($lista) . "<br/><br/>";

        echo "Número mínimo do array '342, 34, 56, 78, 897, 1, 22, 2017' : " . min($lista) . "<br/><br/>";

        echo "Ordem crescente '342, 34, 56, 78, 897, 1, 22, 2017' : <br/>";

        echo "<pre>";
        print_r($lista);
        echo "</pre>";

        $array = array("Leonardo", "Brito", "11 99317-8094");

        //split
        $implode = implode(", ", $array);

        echo $implode;
    ?>
  </body>


</html>
