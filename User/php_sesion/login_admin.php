<?php
session_start();

if(isset($_POST['boton'])){
    include "conexion.php";
    $usuario=$_POST['user'];
    $pass=sha1($_POST['pass']);

    $sql="SELECT* FROM users WHERE user ='$usuario'AND pass='$pass' AND estatus=2";
    $consulta=mysqli_query($con,$sql);
    $user=mysqli_fetch_array($consulta);

    if($user['id']!=""){
        $_SESSION['usuario']=$user['id'];
        header('location: ../Admin/index.php');

    }else{
        header('Location: ../login_admin.php');
    }

}else{
    header('Location: ../login_admin.php');
}



?>