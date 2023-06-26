<?php


include "conexion.php";

$titulo=$_POST['titulo'];
$dimensiones=$_POST['dimensiones'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$obras=addslashes(file_get_contents($_FILES['obras']['tmp_name']));




$sql="INSERT INTO obras(titulo,dimensiones,descripcion,precio,foto)VALUES('$titulo','$dimensiones','$descripcion','$precio','$obras')";
 $query=mysqli_query($con_admin,$sql);

// insert admin


$user=$_POST['user'];
$pass=sha1($_POST['pass']);
$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));

$sql_admin="INSERT INTO users(user,pass,foto)VALUES('$user','$pass','$foto')";
 $query_admin=mysqli_query($con_admin,$sql_admin);


header('Location:../index.php');

?>