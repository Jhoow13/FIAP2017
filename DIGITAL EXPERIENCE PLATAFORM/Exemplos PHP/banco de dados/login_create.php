<?php

    if(isset($_POST['enviar'])){
        $username = $_POST['username'];
        $password = $_POST['password'];  
        
        //Estabelecendo a conexão
        $connection = mysqli_connect('localhost', 'root', 'fiap', 'loginapp');        
        
        
        if(!$connection){
           die("Vish.. Deu ruim");
        } 
        
        //Query para inserir os dados de acordo com os nomes das variáveis.
        $query = "INSERT INTO usuarios(username,password) VALUES ('$username', '$password')";
        
        //Função para inserir os dados em nosso banco.
        $resultado = mysqli_query($connection, $query);
       
        //Validação
        if(!$resultado){
            die("Não deu certo a inclusão" .mysqli_error());
        } else {
            echo "Dados criados com sucesso";
        }
        
    }


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
        <form action="login_create.php" method="post">
            
            <div class="form-group">
            <label for="username">Usuário</label>
            <input type="text" name="username" class="form-control">
            </div>
            
            <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" class="form-control">
            </div>
            
            <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
            
        </form>
    </div>





</div>
</body>
</html>