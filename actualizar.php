<?php
/*conexion a MySQL desde PHP*/
/*direccion del servidor,nombre del usuario,contraseña y nombre de la bd*/ 
$link= mysqli_connect ("127.0.0.1:3307","root","","inventario");
/*revisar la conexion */
if ( $link === 0){
    die("Error".mysqli_connect_error());//muestra el error
}
//obtener los datos del formulario
    $id=$_POST["id"];
    $nombre= $_POST["nombre"];
    $talla = $_POST["talla"];
    $precio= $_POST["precio"];
    $cantidad = $_POST["cantidad"];
    $descripcion=$_POST["descripcion"];

 //insert into nonbre de la tabla values variables de php
 $actualizar="UPDATE producto set nombre='$nombre',talla='$talla',precio='$precio',cantidad='$cantidad',descripción='$descripcion' where id=$id";
 //ejecutar la consulta

 if(mysqli_query($link,$actualizar )){
  if(mysqli_affected_rows($link)>0 ){

  


    echo '<script type="text/javascript">
  alert("datos actualizados :D");
window.location.href="actualizar.html"
</script>
'; 
 }else{
    echo '<script type="text/javascript">
    alert("no existe este registro :S");
  window.location.href="actualizar.html"
  </script>
  '; 

 }
}else{
    echo '<script type="text/javascript">
    alert("datos no actualizados :S");
  window.location.href="actualizar.html"
  </script>
  '; 
}
mysqli_close($link);
?>