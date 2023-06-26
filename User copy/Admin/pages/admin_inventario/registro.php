<div class="row  justify-content-center">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">AGREGAR ARTICULO</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="php_admin/insert_admin.php" method="POST"  enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">TITULO</label>
                    <input type="text" class="form-control" name="titulo" id="exampleInputEmail1" placeholder="TITULO">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">DIMENSION</label>
                    <input type="text" class="form-control"  name="dimensiones" id="exampleInputPassword1" placeholder="DIMENSIONES">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">DESCRIPCION</label>
                    <input type="textarea" class="form-control"  name="descripcion" id="exampleInputPassword1" placeholder="DESCRIPCION">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">FOTO</label>
                    <input type="file" class="form-control"  name="obras" id="exampleInputPassword1" placeholder="FOTO">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">PRECIO</label>
                    <input type="text" class="form-control"  name="precio" id="exampleInputPassword1" placeholder="PRECIO">
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