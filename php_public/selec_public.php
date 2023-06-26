<?php 
    include "../../Admin/php_admin/conexion.php";
    $respuesta=mysqli_query($con_admin,"SELECT * FROM obras where estatus=1");
    $consulta=mysqli_num_rows($respuesta);

?>