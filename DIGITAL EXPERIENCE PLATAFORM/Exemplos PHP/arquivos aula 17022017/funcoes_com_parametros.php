
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>

  <body>

    <?php
        function somar($x, $y){
          return $x + $y;
        }

        function subtrair($x, $y){
          return $x - $y;
        }

        function multiplicar($x, $y){
          return $x * $y;
        }

        function dividir($x, $y){
          return $x / $y;
        }

        echo somar(17, 50) . "<br/>";
        echo subtrair(20,27) . "<br/>";
        echo multiplicar(20,27) . "<br/>";
        echo dividir(20,27) . "<br/>";

    ?>

  </body>


</html>
