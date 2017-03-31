<?php
 print_r($_GET);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>GET</title>
</head>
<body>

<?php

$id = 10;
$button = "CLIQUE AQUI AGORA";


?>


<a href="get.php?id=<?php echo $id;?>"><?php echo $button;?></a>




</body>
</html>
