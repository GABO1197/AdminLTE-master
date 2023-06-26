<div class="row  justify-content-center">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">AGREGAR ADMIN</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="php_admin/insert_admin.php" method="POST"  enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">USER</label>
                    <input type="text" class="form-control" name="user" id="exampleInputEmail1" placeholder="TITULO">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">PASS</label>
                    <input type="text" class="form-control"  name="pass" id="exampleInputPassword1" placeholder="DIMENSIONES">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">FOTO</label>
                    <input type="file" class="form-control"  name="foto" id="exampleInputPassword1" placeholder="FOTO">
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