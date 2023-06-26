<?php
include "conn.php";
$respuesta=mysqli_query($conexion,"SELECT * FROM articulos where estatus=1");
$consulta=mysqli_num_rows($respuesta);
?>