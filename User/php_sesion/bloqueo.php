<?php
session_start();
include "conexion.php";
$usuario=$_SESSION['usuario'];
$sql="SELECT* FROM users WHERE id ='$usuario'";
    $consulta=mysqli_query($con,$sql);
    $user=mysqli_fetch_array($consulta);

    if($user['id']!=""){
        $dato="entro";

    }else{
        header('Location: ../login_admin.php');
    }

?>