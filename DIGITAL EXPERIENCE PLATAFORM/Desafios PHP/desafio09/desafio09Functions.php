<?php
    include "db.php";

    function criaDados(){
        if(isset($_POST['enviar'])){
            $nomePokemon = $_POST['txtPokemon'];
            $tipo1Pokemon = $_POST['txtTipo_1'];  
            $tipo2Pokemon = $_POST['txtTipo_2'];
            $hpPokemon = $_POST['txtHP'];
            
            //Estabelecendo a conexão
            global $connection;
            
            if(!$connection){
                die("Vish.. Deu ruim");
            }
            
            //Query para inserir os dados de acordo com os nomes das variáveis.
            $query = "INSERT INTO pokemon(nome,tipo_1,tipo_2,hp) VALUES ('$nomePokemon', '$tipo1Pokemon', '$tipo2Pokemon', $hpPokemon)";
            
            //Função para executar uma QUERY
            $resultado = mysqli_query($connection, $query);
        
            //Validação
            if(!$resultado){
                die("Não deu certo a inclusão" .mysqli_error());
            } else {
                echo "Dados criados com sucesso";
            }
            
        }
    }

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

    function mostraDadosRead(){
        global $connection;

        $query = "SELECT * FROM usuarios";
        $resultado = mysqli_query($connection, $query);

        echo "<table class='table table-condensed'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Firstname</th>";
        echo "<th>Lastname</th>";
        echo "<th>Email</th>";
        while($row = mysqli_fetch_assoc($resultado)){
            $id = $row['id'];
            $username = $row['username'];
            $password = $row['password'];

            // echo "<h1>$id</h1>";
            // echo "<h1>$username</h1>";
            // echo "<h1>$password</h1>";

            
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$username</td>";
            echo "<td>$password</td>";
            echo "</tr>";            
        }
        echo "</tbody>";
        echo "</table>";
    }
?>