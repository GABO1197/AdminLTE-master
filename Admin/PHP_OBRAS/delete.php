<?php
 include "conn.php";
 $id=$_GET['id'];
 $sql=mysqli_query($conexion,"UPDATE  obras SET estatus= 0 where id =$id");
 header('Location: ../index.php');
 
 
?>