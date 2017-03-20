<?php include "db.php"; ?>
<?php include "functions.php";?>
<?php criaDados(); ?>
<?php include "header.php" ?>

<div class="container">    
    <div class="col-sm-6">
        <h1 class="text-center">CREATE</h1>
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
            <?php include "buttons.php"; ?>             
        </form>
    </div>
<?php include "footer.php" ?>