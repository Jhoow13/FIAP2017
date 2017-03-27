<?php
/*
Usando o método GET, crie um formulário que receba o nome do estudante,
2 notas de Zero à Dez e calcule a média quando um botão de submit for pressionado!
Faça a validação dos campos de modo que usuário tenha que preencher todos os campos.
*/

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

      <div class="col-sm-6">

        <h1 class="text-center">DESAFIO 10 - NOTAS</h1>
        <form action="desafio10.php" method="GET">
          <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">NAC 1</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">NAC 2</label>
            <input type="text" class="form-control">
          </div>

          <input type="submit" value="Calcular Media" class="form-control btn btn-primary">

        </form>

    </div>
  </div>


</body>
</html>
