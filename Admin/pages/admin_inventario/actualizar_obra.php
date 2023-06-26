<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ACTUALIZAR</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
 
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.html" class="h1"><b>ACTUALIZAR</a>
    </div>
    <div class="card-body">
              <form action="../../PHP_OBRAS/update_obras.php" method="POST"  enctype="multipart/form-data">
                <div class="card-body">
                    
                <?php
                    $id=cargar($_GET['id']);
                    function cargar($dato){
                         include "../../PHP_OBRAS/conn.php";
                         $sql="SELECT * FROM obras where id=$dato";
                         $consulta=mysqli_query($conexion,$sql);
                         $resultado=$consulta->fetch_assoc();
                         return[
                                $resultado['id'],
                                $resultado['titulo'],
                                $resultado['dimensiones'],
                                $resultado['descripcion'],
                                $resultado['precio'],
                                $resultado['foto']
                         ];
                        
                    }
                ?>

                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" name="id" id="exampleInputEmail1"  placeholder="TIPO" value="<?php echo $id[0]?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TITULO</label>
                    <input type="text" class="form-control" name="titulo" id="exampleInputEmail1" placeholder="TIPO"value="<?php echo $id[1]?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">DIMENSIONES</label>
                    <input type="text" class="form-control"  name="dimensiones" id="exampleInputPassword1" placeholder="SERIE" value="<?php echo $id[2]?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">DESRIPCION</label>
                    <input type="text" class="form-control"  name="descripcion" id="exampleInputPassword1" placeholder="N° SERIAL" value="<?php echo $id[3]?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">FOTO</label>
                    <input type="file" class="form-control"  name="foto" id="exampleInputPassword1" placeholder="FOTO">
                    <div class="col-12">
                            <div class="card card-primary">
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                      <?php
                                        $imagen = ' <img src="<?php echo $dato[4]?>"/>';
                                      ?>
                                        <!-- <a href="#?>?text=1" data-toggle="lightbox"   data-title="<?php //echo $dato[1]?>">
                                         
                                        </a> -->
                                        <img src="data:image/png;base64,<?php echo base64_encode($id[5]);?>" class="img-fluid mb-21" alt="white sample" >
                                    </div>
                                </div>
                              </div>
                            </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">PRECIO</label>
                    <textarea type="text" class="form-control"  name="precio" id="exampleInputPassword1" placeholder="Precio" value="<?php echo "$". $id[4]?>"><?php echo $id[4]?></textarea>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"  class="btn btn-success">ENVIAR</button>
                </div>
              </form>
    </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../inventarios/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../inventarios/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../inventarios/dist/js/adminlte.min.js"></script>
<!-- FOTOS -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
</body>
</html>
