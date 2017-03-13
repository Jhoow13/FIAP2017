<?php

    if(isset($_POST['enviar'])){
//        echo "Opa, deu certo!";  
        $username = $_POST['username'];
        $password = $_POST['password'];  
        $email = $_POST['email'];  

        
        $connection = mysqli_connect('localhost', 'root', '', 'desafio');        
        
        if(!$connection){
            die("Vish.. Deu ruim");
        }
        
        
    $query = "INSERT INTO usuarios(username,password,email) VALUES ('$username','$password','$email')";    
        
    $resultado = mysqli_query($connection, $query);
        
        if(!$resultado){
            echo "Dados não inseridos";
        } else {
            echo "Dados inseridos corretamente";
        }
        
        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    
    <div class="col-sm-6">
        <form action="desafio_8.php" method="post">
            <div class="form-group">
            <label for="username">Usuário</label>
            <input type="text" name="username" class="form-control">
            </div>
            
             <div class="form-group">
                <label                                                                  for="password">Senha</label>
            <input type="password" name="password" class="form-control">
            </div>
            
            <div class="form-group">
                <label                                                                  for="email">E-mail</label>
            <input type="text" name="email" class="form-control">
            </div>
            
            <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
            
        </form>
    </div>





</div>
</body>
</html>