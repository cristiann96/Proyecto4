<?php
session_start();
$connection=mysqli_connect("localhost", "root", "", "bd_agenda");
if (!$connection) {  die('Not connected : ' . mysql_error());}
// FALTA PONER EL SESSION ID ESE
$query = "SELECT * FROM tbl_contactos WHERE id_usuario=".$_SESSION['idusuario'];
$result = mysqli_query($connection,$query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Direccion 1
echo '<markers>';
while ($row = @mysqli_fetch_assoc($result)){
  echo '<marker1 ';
  echo 'name="' . $row['nombre_contacto'] . " " . $row['apellidos_contacto'].'" ';
  echo 'address="' . $row['direccion_contacto'] . '" ';
  echo 'correo="' . $row['correo_contacto'] . '" ';
  echo 'telefono="' . $row['telefono_contacto'] . '" ';
  echo 'lat="' . $row['latitud_contacto'] . '" ';
  echo 'lng="' . $row['longitud_contacto'] . '" ';
  echo '/>';


  echo '<marker1 name="'.$row['nombre_contacto']." ".$row['apellidos_contacto'].'" address="'.$row['direccion2_contacto'].'" correo="'.$row['correo_contacto'].'" telefono="'.$row['telefono2_contacto'].'" lat="'.$row['latitud2_contacto'].'" lng="'.$row['longitud2_contacto'].'"/>';

}
echo '</markers>';


?>
