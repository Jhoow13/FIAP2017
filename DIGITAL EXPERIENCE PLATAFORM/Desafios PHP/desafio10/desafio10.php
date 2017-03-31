<?php
/*
Usando o método GET, crie um formulário que receba o nome do estudante,
2 notas de Zero à Dez e calcule a média quando um botão de submit for pressionado!
Faça a validação dos campos de modo que usuário tenha que preencher todos os campos.
*/

    if(isset($_GET['btnCalcular'])){

        $nome = $_GET['txtNome'];
        $nota1 = $_GET['txtNota1'];
        $nota2 = $_GET['txtNota2'];

        $media = ($nota1 + $nota2) / 2;        
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio 10</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

  <div class="container">

      <h1 class="text-center">DESAFIO 10 - NOTAS</h1>
      <div class="col-sm-6">
        <form action="desafio10.php" method="GET">
          <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="txtNome" class="form-control">
          </div>
          <div class="form-group">
            <label for="">NAC 1</label>
            <input type="text" name="txtNota1" class="form-control">
          </div>
          <div class="form-group">
            <label for="">NAC 2</label>
            <input type="text" name="txtNota2" class="form-control">
          </div>

          <input type="submit" name="btnCalcular" value="Calcular Media" class="form-control btn btn-primary">

        </form>

    </div>

    <div class="col-sm-6">
        <p class="text-center">Resumo</p>
        <table class="table table-bordered">
          <tr>
            <td>Nome</td>
            <td><?php if(isset($nome)){ echo $nome; }?></td>
          </tr>
          <tr>
            <td>Nota 1</td>
            <td><?php if(isset($nota1)){ echo $nota1; }?></td>                        
          </tr>
          <tr>
            <td>Nota 2</td>
            <td><?php if(isset($nota2)){ echo $nota2; }?></td>
          </tr>
          <tr>
            <td>Media</td>
            <td><?php if(isset($media)){ echo $media; }?></td>
          </tr>
        </table>
    </div>
  </div>


</body>
</html>
