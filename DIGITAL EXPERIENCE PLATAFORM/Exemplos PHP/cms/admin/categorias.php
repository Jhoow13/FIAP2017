<?php include "includes/header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
      <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bem vindo
                            <small>Gustavo</small>
                        </h1>

                        <?php 
                          if(isset($_POST['enviar'])){
                            $cat_nome = $_POST['cat_nome'];
                            if($cat_nome == "" || empty($cat_nome)){
                              echo "Insira uma categoria válida"; 
                            }else{
                             $query = "INSERT INTO categorias(cat_nome) VALUES('$cat_nome')";
                             $add_categoria = mysqli_query($connection, $query);
                            }

                            if(!$add_categoria){
                              die("Não deu certo") . mysqli_error($connection);
                            }else{
                              echo "Categoria adicionada com sucesso";
                            }
                          }
                        ?>

                        <div class="col-sm-6">

                          <form action="categorias.php" method="POST">
                            <div class="form-group">
                              <label for="cat_nome">Adicionar Categoria</label>
                              <input type="text" class="form-control" name="cat_nome">
                            </div>

                            <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="enviar" value="Adicionar">
                            </div>


                          </form>
                          <!-- FECHA DIV SM 6-->
                        </div>


                        <div class="col-sm-6">


                          <?php
                          $query = "SELECT * from categorias";
                          $select_categorias = mysqli_query($connection, $query);
                         ?>


                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th> ID </th>
                                    <th> Nome da Categoria </th>
                                    <th>Ações</th>
                                  </tr>
                                </thead>

                                <tbody>

                                  <?php
                                  while($row = mysqli_fetch_assoc($select_categorias)){
                                      $cat_id = $row['cat_id'];
                                      $cat_nome = $row['cat_nome'];

                                      echo "<tr>";
                                      echo "<td>" . $cat_id . "</td>";
                                      echo "<td>" . $cat_nome . "</td>";
                                      echo "<td> <a href='categorias.php?delete={$cat_id}' class='btn btn-danger'>Apagar</a></td>";
                                      echo "</tr>";
                                    }

                                  ?>
                                </tbody>
                                <?php
                                  if(isset($_GET['delete'])){
                                    $apaga_cat_id = $_GET['delete'];
                                    $query = "DELETE from categorias WHERE cat_id = $cat_id";
                                    $delete_categorias = mysqli_query($connection, $query);

                                    echo "Categoria removida com sucesso";                                    
                                  }
                                ?>
                            </table>
                        </div>





                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/header.php"; ?>
