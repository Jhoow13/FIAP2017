<?php include "db.php"; ?>
<?php include "functions.php";?>
<?php include "header.php" ?>
<?php atualizaDados(); ?>

<div class="container">    
    <div class="col-sm-6">
        <h1 class="text-center">UPDATE</h1>
        <form action="login_update.php" method="post">
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
                <?php mostraDados(); ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="update" value="Atualizar">
        </form>
        <?php include "buttons.php"; ?>
    </div>
<?php include "footer.php" ?>