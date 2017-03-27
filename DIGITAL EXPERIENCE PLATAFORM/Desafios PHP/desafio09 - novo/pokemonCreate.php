<?php include "db.php"; ?>
<?php include "desafio09Functions.php";?>
<?php criaPokemon(); ?>
<?php include "header.php" ?>

<div class="container">    
    <div class="col-sm-6">
        <h1 class="text-center">CREATE</h1>
        <form action="pokemonCreate.php" method="post">                    
            <div class="form-group">
                <label for="txtPokemon">Nome Pokemon</label>
                <input type="text" name="txtPokemon" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtTipo_1">Tipo 1</label>
                <input type="text" name="txtTipo_1" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtTipo_2">Tipo 2</label>
                <input type="text" name="txtTipo_2" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtHP">HP</label>
                <input type="text" name="txtHP" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
            <?php include "buttons.php"; ?>             
        </form>
    </div>
<?php include "footer.php" ?>