<?php 
    include "conexion.php";
    // obras
    $respuesta=mysqli_query($con_admin,"SELECT * FROM obras where estatus=1");
    $consulta=mysqli_num_rows($respuesta);

    $obras_delete=mysqli_query($con_admin,"SELECT * FROM obras where estatus=0");
    $consulta_obras_delete=mysqli_num_rows($obras_delete);

    
// users
    $admin_user=mysqli_query($con_admin,"SELECT * FROM users WHERE rol=2");
    $consulta_admin_user=mysqli_num_rows($admin_user);

    $admin_delete_user=mysqli_query($con_admin,"SELECT * FROM users WHERE estatus=0");
    $consulta_admin_delete_user=mysqli_num_rows($admin_delete_user);

    
    // admin

    $admin=mysqli_query($con_admin,"SELECT * FROM `users` WHERE estatus=1 IN (SELECT estatus FROM users where rol=1 );");
    $consulta_admin=mysqli_num_rows($admin);

    $admin_delete=mysqli_query($con_admin,"SELECT * FROM users WHERE estatus=0");
    $consulta_admin_delete=mysqli_num_rows($admin_delete);

?>