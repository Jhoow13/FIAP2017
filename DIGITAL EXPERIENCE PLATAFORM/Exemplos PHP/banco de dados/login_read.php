<?php
 $connection = mysqli_connect('localhost', 'root', 'fiap', 'loginapp');       
    if(!$connection){
         die("Conexão falhou");
    }
         
 $query = "SELECT * FROM usuarios";     
 $resultado = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    
    <div class="col-sm-6">
        <?php
        while($row = mysqli_fetch_assoc($resultado)){
        ?>    
         
        <pre>       
        <?php        
            print_r($row); 
        }        
        ?> 
        </pre>   
    </div>

</div>
</body>
</html>