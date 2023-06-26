<?php
include "conn.php";
 
$titulo=$_POST['titulo'];
$dimensiones=$_POST['dimensiones'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));


 $sql="INSERT INTO obras(titulo,dimensiones,descripcion,precio,foto)VALUES('$titulo','$dimensiones','$descripcion','$precio','$foto')";
 $query=mysqli_query($conexion,$sql);
 
 header('Location:../index.php');

?>