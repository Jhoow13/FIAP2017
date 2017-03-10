<?php

    if(isset($_POST['enviar'])){
        $usuario = $_POST['txtUsuario'];
        $senha = $_POST['txtSenha'];
        $email = $_POST['txtEmail'];
        
        //Estabelecendo a conexão
        $connection = mysqli_connect('localhost', 'root', 'fiap', 'desafio08');
        if(!$connection){
           die("Vish.. Deu ruim");
        } 
        
        //Query para inserir os dados de acordo com os nomes das variáveis.
        $query = "INSERT INTO usuarios(username,password,email) VALUES ('$usuario', '$senha','$email')";
        
        //Função para executar uma QUERY
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    
    <div class="col-sm-6">
        <form action="desafio08.php" method="post">
            
            <div class="form-group">
            <label for="txtUsuario">Usuário</label>
            <input type="text" name="txtUsuario" class="form-control">
            </div>
            
            <div class="form-group">
            <label for="txtSenha">Senha</label>
            <input type="password" name="txtSenha" class="form-control">
            </div>

            <div class="form-group">
            <label for="txtEmail">Email</label>
            <input type="email" name="txtEmail" class="form-control">
            </div>
            
            
            <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
            
        </form>
    </div>





</div>
</body>
</html>