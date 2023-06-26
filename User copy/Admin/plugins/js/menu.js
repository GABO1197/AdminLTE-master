function llamar(opcion){
    var ruta="";
    switch(opcion){
        case 1:
         ruta="pages/admin_inventario/tabla_inventario.php";
        break;
        case 2:
         ruta="pages/admin_inventario/registro.php";
        break;
        case 3:
         ruta="pages/admin_inventario/tabla_admin.php";
        break;
        case 4:
         ruta="pages/admin_inventario/registro_admin.php";
        break;
        case 5:
         ruta="pages/admin_inventario/tabla_admin_delete.php";
        break;
        
    }
     var parametros={"opcion":"1",}
     $.ajax({
         data:parametros,
         url:ruta,
         type:'post',
         beforsend: function(){
            //  $($respuesta).html();
         },
         success: function(respuesta){
             $('#respuesta').html(respuesta);
         }

     });
}