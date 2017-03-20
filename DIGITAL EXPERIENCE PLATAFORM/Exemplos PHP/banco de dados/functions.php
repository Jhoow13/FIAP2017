<?php
    include "db.php";
    function mostraDados(){
        global $connection;

        $query = "SELECT * FROM usuarios";
        $resultado = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($resultado)){
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    function atualizaDados(){
        global $connection;        
        if(isset($_POST['update'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id = $_POST['id'];

            $query = "UPDATE usuarios SET ";
            $query .= "username = '$username', password='$password'";
            $query .= "WHERE id = $id";

            $resultado = mysqli_query($connection, $query);

            if(!$resultado){
                die("Falha na atualização");
            }else{
                echo "Dados atualizados com sucesso";
            }
        }
    }

    function deletaDados(){
        global $connection;
         if(isset($_POST['delete'])){            
            $id = $_POST['id'];

            $query = "DELETE FROM usuarios WHERE id = $id";
            
            $resultado = mysqli_query($connection, $query);

            if(!$resultado){
                die("Falha ao deletar");
            }else{
                echo "Dados removidos com sucesso";
            }
        }
    }
?>