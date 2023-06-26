<?php

 update($_POST['id'],$_POST['user'],sha1($_POST['pass']),$_POST['foto'],$_POST['rol']);

 function update($id,$userr,$passs,$foto,$rol){
    include "conexion.php";

    $foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    $sql="UPDATE users SET  user='$userr',pass='$passs',foto='$foto',rol='$rol' where id='$id'";
    $con_admin->query($sql);
    echo $sql;
    header('Location: ../index.php');

 }
 
?>