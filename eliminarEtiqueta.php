<?php
session_start();

include("conexion.php");
$queryContacto = "SELECT `tbl_etiqueta`.`nombre_etiqueta` AS `Etiqueta`, `tbl_contactos`.`nombre_contacto` AS `Contacto`, `tbl_contactos`.`apellidos_contacto` AS `Apellido`, `tbl_contacto_etiqueta`.`id_contacto_etiqueta` AS `IDContactoEtiqueta` FROM `tbl_contactos` LEFT JOIN `tbl_contacto_etiqueta` ON `tbl_contacto_etiqueta`.`id_contacto` = `tbl_contactos`.`id_contacto` LEFT JOIN `tbl_etiqueta` ON `tbl_contacto_etiqueta`.`id_etiqueta` = `tbl_etiqueta`.`id_etiqueta` LEFT JOIN `tbl_usuarios` ON `tbl_etiqueta`.`id_usuario` = `tbl_usuarios`.`id_usuario` WHERE `tbl_usuarios`.`correo_usuario` = '".$_SESSION['usuario']."' AND `tbl_etiqueta`.`id_etiqueta` = '".$_GET['etiqueta']."'";
$result = mysqli_query($con,$queryContacto);
while($row = mysqli_fetch_array($result)) {

    $sql = "DELETE FROM `tbl_contacto_etiqueta` WHERE `tbl_contacto_etiqueta`.`id_contacto_etiqueta` = ".$row['IDContactoEtiqueta'].";";
    //$result=mysqli_query($con,$sql);
echo $sql ."<br>";
$eliminar=mysqli_query($con,$sql);
}
$queryEliminar = "DELETE FROM `tbl_etiqueta` WHERE `tbl_etiqueta`.`id_etiqueta` = '".$_GET['etiqueta']."'";
$eliminarEtiqueta=mysqli_query($con,$queryEliminar);
header("location: contactos.php");
?>
