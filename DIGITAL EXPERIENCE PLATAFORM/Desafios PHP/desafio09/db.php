<?php
    $connection = mysqli_connect('localhost', 'root', 'fiap', 'pokedex');        
    if(!$connection){
        echo("Vish.. Deu ruim");
    }
?>