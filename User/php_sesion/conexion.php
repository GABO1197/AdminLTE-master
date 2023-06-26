<?php

$host="localhost";
$user="root";
$pass="";
$db="galeria";
$con=mysqli_connect($host,$user,$pass,$db);
if(!$con){
    echo"error de conexion";
}else{
    // echo" conexion";
    // header('Location: index.php');
}

?>