<?php
    include "conexion.php";

    $id=$_GET['id'];
    $habilitar_admin=mysqli_query($con_admin,"UPDATE users SET estatus= 1  WHERE id= $id");
    header('Location: ../index.php');
    

?>