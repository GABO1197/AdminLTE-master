<?php 
    include "conexion.php";
    $respuesta=mysqli_query($con_admin,"SELECT * FROM obras where estatus=1");
    $consulta=mysqli_num_rows($respuesta);

    $admin=mysqli_query($con_admin,"SELECT * FROM users WHERE estatus=1");
    $consulta_admin=mysqli_num_rows($admin);

    $admin_delete=mysqli_query($con_admin,"SELECT * FROM users WHERE estatus=2");
    $consulta_admin_delete=mysqli_num_rows($admin_delete);

?>