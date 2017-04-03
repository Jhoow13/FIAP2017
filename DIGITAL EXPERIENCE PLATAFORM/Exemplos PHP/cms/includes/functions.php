<?php include('db.php'); 


function itensCabecalho(){
    global $connection;    
    $query = "SELECT cat_nome FROM categorias";
    $resultado = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($resultado)){
        $nomeCategoria = $row['cat_nome'];
        echo "<li><a href='#'>$nomeCategoria</a></li>";
    }
}


?>



