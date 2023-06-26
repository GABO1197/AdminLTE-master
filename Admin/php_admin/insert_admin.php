<?php
include "conexion.php";
$user=$_POST['user'];
$pass=sha1($_POST['pass']);
$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$rol=$_POST['rol'];

$sql_admin="INSERT INTO users(user,pass,foto,rol)VALUES('$user','$pass','$foto','$rol')";
 $query_admin=mysqli_query($con_admin,$sql_admin);


header('Location:../index.php');

?>