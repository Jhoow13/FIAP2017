
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
  <style>
      body{
          width:400px;
          margin:50px auto;
      }      
  </style>
</head>

  <body>
      <?php 

        if(isset($_POST['btnEnviar'])){
            //echo "Eba deu certo";

            $usuario = $_POST['txtUsuario'];
            $senha = $_POST['txtSenha'];

            // echo "O seu usuario é " . $usuario . '<br>';
            // echo "HAHAHA Descobri sua senha " . $senha;

            $nomes = array('Gustavo', 'Marcelo', 'Danilo','Pedro');

            //VALIDAÇOES
            if (strlen($usuario) < 5 || strlen($usuario) > 12){
                echo 'usuario deve ter mais que 5 caracteres e menos que 12 caracteres';
            }

            if(in_array($usuario, $nomes)){
                echo "Acesso permitido, bem vindo, " . $usuario;
            }else{
                echo "Acesso negado, você nao tem permissão";
            }
            


        }

      ?>
      <form action="17 - formulario.php" method="post">
            <input type="text" placeholder="usuario" name="txtUsuario" id="txtUsuario"><br>
            <input type="password" placeholder="senha" name="txtSenha" id="txtSenha"><br>      
            <input type="submit" name="btnEnviar">
      </form>
    
  </body>


</html>
