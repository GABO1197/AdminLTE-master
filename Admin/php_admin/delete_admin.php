<?php
    include "conexion.php";

    $id=$_GET['id'];
    $delete_admin=mysqli_query($con_admin,"UPDATE users SET estatus= 0  WHERE id= $id");
    header('Location: ../index.php');
    

?>