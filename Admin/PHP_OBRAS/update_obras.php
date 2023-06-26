<?php

 update($_POST['id'],$_POST['titulo'],$_POST['dimensiones'],$_POST['descripcion'],$_POST['foto'],$_POST['precio']);

 function update($id,$titulo,$dimensiones,$descripcion,$foto,$precio){
    include "conn.php";

    $foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $sql="UPDATE obras SET  titulo='$titulo',dimensiones='$dimensiones', descripcion='$descripcion', precio='$precio', foto='$foto' where id='$id'";
    $conexion->query($sql);
    header('Location: ../index.php');

 }
 
?>