<div class="row  justify-content-center">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">AGREGAR ESTUDIANTE</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="PHP/update.php" method="POST"  enctype="multipart/form-data">
                <div class="card-body">
                    
                <?php
                    $id=cargar($_GET['id']);
                    function cargar($dato){
                         include "../../PHP/conn.php";
                         $sql="SELECT * FROM articulos where id=$dato";
                         $consulta=mysqli_query($conexion,$sql);
                         $resultado=$consulta->fetch_assoc();
                         return[
                                $resultado['id'],
                                $resultado['tipo'],
                                $resultado['serie'],
                                $resultado['serial'],
                                $resultado['foto'],
                                $resultado['descripcion']
                         ];
                        
                    }
                ?>

                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" name="id" id="exampleInputEmail1"  placeholder="TIPO" value="<?php echo $id[0]?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TIPO</label>
                    <input type="text" class="form-control" name="tipo" id="exampleInputEmail1" placeholder="TIPO">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">SERIE</label>
                    <input type="text" class="form-control"  name="serie" id="exampleInputPassword1" placeholder="SERIE">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">N° SERIAL</label>
                    <input type="text" class="form-control"  name="serial" id="exampleInputPassword1" placeholder="N° SERIAL">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">FOTO</label>
                    <input type="file" class="form-control"  name="foto" id="exampleInputPassword1" placeholder="FOTO">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">DESCRIPCION</label>
                    <input type="text" class="form-control"  name="descripcion" id="exampleInputPassword1" placeholder="DESCRIPCION">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"  class="btn btn-success">ENVIAR</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
          
          <!--/.col (right) -->
</div>