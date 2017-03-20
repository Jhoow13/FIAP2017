<?php include "db.php"; ?>
<?php include "functions.php";?>
<?php include "header.php" ?>

<div class="container">    
    <div class="col-sm-6">
        <h1 class="text-center">READ</h1>
        <?php
            mostraDadosRead();
            include "buttons.php";
        ?>
    </div>
<?php include "footer.php" ?>
