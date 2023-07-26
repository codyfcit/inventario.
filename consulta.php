<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Eatilos/consulta.css">

    <title>Consulta</title>
</head>
<body>
<form action="consulta.php" method="post">

<div class="container">
    <h1 class="infinity-outlineicon-">ACTUALIZACION DE DATOS</h1>



<?php
//conexion a mysql

$link= mysqli_connect ("localhost:3307","root","","inventario");
//comprobamos conexion
if($link===0){
    echo "error";

}
$consulta="select*from producto";
$resultado = $link->query($consulta);

//recorremos cada uno de lops registros con unciclo while
echo '<table border="1">';
echo '<tr>';
echo '<th>id</th>';
echo '<th>nombre</th>';
echo '<th>talla</th>';
echo '<th>precio</th>';
echo '<th>cantidad</th>';
echo '<th>descripción</th>';

echo '</tr>';
while($fila = $resultado->fetch_assoc()){
    echo '<tr>';  //fila de nuestra tabla
    echo '<td>'.$fila['id'].'</td>';
    echo '<td>'.$fila['nombre'].'</td>';
    echo '<td>'.$fila['talla'].'</td>';
    echo '<td>'.$fila['precio'].'</td>';
    echo '<td>'.$fila['cantidad'].'</td>';
    echo '<td>'.$fila['descripción'].'</td>';
}

?>
</div>
</from>
</body>
</html>