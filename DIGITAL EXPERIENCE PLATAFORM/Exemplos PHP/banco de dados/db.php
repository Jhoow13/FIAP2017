<?php
    $connection = mysqli_connect('localhost', 'root', 'fiap', 'loginapp');        
    if(!$connection){
        echo("Vish.. Deu ruim");
    }
?>