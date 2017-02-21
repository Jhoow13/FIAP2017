<link rel="stylesheet" href="desafio07.css">
<?php
    if(isset($_POST['btnEnviar'])){

        $usuario = $_POST['txtUsuario'];
        $senha = $_POST['txtSenha'];
        $email = $_POST['txtEmail'];
        $cidade = $_POST['txtCidade'];
        $estado = $_POST['txtEstado'];
        $mensagem_validacao = "";

        //criar variavel erro;

        if(strlen($usuario) < 5 || strlen($usuario) > 10){
            $mensagem_validacao = "Usuario deve ser maior que 5 e menor que 10 caracteres";
        }else if(strlen($senha) < 4){
            $mensagem_validacao = "Senha maior que 4 caracteres";
        }else if (!(strstr($email, '@'))){
            $mensagem_validacao = "Email precisa ter um caracter @";
        }else if(!(strlen($estado) == 2)){
            $mensagem_validacao = "Estado deve conter exatamente 2 caracteres";
        }
        else{
            $mensagem_validacao = "Cadastro efetuado com sucesso";
        }
    }
?>
<div class="container">
    <h1 class="texto-centro">
        <?php
            echo $mensagem_validacao; 
        ?>
    </h1>
    