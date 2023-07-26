<?php
// Establecer los datos de conexió

// Crear la conexión
$link= mysqli_connect ("127.0.0.1:3307","root","","inventario");

/*revisar la conexion */
if ( $link === 0){
    die("Error".mysqli_connect_error());//muestra el error
}

//obtener los datos de los productos
$nombre=$_POST["nombre"];
$talla=$_POST["talla"];
$precio=$_POST["precio"];
$cantidad=$_POST["cantidad"];
$descripcion=$_POST["descripcion"];

 //consulta insert a mysql 
   //insert into nonbre de la tabla values variables de php
   $insertar="INSERT INTO producto(nombre,talla,precio,cantidad,descripción	)
   VALUES('$nombre','$talla','$precio','$cantidad','$descripcion')";

    //corroborar
    if (mysqli_query($link,$insertar)){
        if(mysqli_affected_rows($link)>0 ){

            echo '<script type="text/javascript">
          alert("datos actualizados :D");
        window.location.href="conexion.html"
        </script>
        '; 
    }else{  
        echo '<script type="text/javascript">
        alert("no existe este registro :S");
      window.location.href="conexion.html"
      </script>
      '; 
    
     }
    }else{
        echo '<script type="text/javascript">
        alert("datos no actualizados :S");
      window.location.href="conexion.html"
      </script>
      '; 
    }
       
    
    mysqli_close($link);

?>