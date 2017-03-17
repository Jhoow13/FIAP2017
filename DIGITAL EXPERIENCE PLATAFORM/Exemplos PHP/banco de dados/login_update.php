<?php
    include "db.php";

    $query = "SELECT * FROM usuarios";

    $resultado = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="pt-br">
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

            <div class="form-group">
                <select name="id">
                    <?php
                        while($row = mysqli_fetch_assoc($resultado)){
                            $id = $row['id'];
                            echo "<option value='$id'>$id</option>";
                        }
                    ?>
                </select>
            </div>
            
            <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
            
        </form>
    </div>





</div>
</body>
</html>