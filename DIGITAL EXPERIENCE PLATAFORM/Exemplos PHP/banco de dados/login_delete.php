<?php include "db.php"; ?>
<?php include "functions.php";?>
<?php include "header.php" ?>
<?php deletaDados();?>


<div class="container">    
    <div class="col-sm-6">
        <form action="login_delete.php" method="post">
            <h1 class="text-center">DELETE</h1>
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
                      mostraDados();
                    ?>
                </select>
            </div>
            
            <input class="btn btn-primary" type="submit" name="delete" value="Deletar">
            
        </form>
    </div>
<?php include "footer.php" ?>