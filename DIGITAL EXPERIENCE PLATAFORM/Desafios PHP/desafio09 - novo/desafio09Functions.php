<?php
    include "db.php";
    //pokedream.com/pokedex

    function criaPokemon(){
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

    function dadosPokemonFogo(){
        global $connection;

        $query = "SELECT * FROM pokemon WHERE tipo_1 = 'Fogo' or tipo_2 = 'Fogo'";
        $resultado = mysqli_query($connection, $query);

        echo "<table class='table table-condensed'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Codigo</th>";
        echo "<th>Nome</th>";
        echo "<th>Tipo 1</th>";
        echo "<th>Tipo 2</th>";
        echo "<th>HP</th>";
        while($row = mysqli_fetch_assoc($resultado)){
            $codigo = $row['id'];
            $nome = $row['nome'];
            $tipo1 = $row['tipo_1'];
            $tipo2 = $row['tipo_2'];
            $hp = $row['hp'];
            
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td>$codigo</td>";
            echo "<td>$nome</td>";
            echo "<td>$tipo1</td>";
            echo "<td>$tipo2</td>";
            echo "<td>$hp</td>";
            echo "</tr>";            
        }
        echo "</tbody>";
        echo "</table>";
    }
?>