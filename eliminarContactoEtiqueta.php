<?php
include("conexion.php");
//echo "Estas editando la etiqueta con el id numero: ".$_GET['id_etiqueta']."<br>";
//$etiqueta = $_GET['id_etiqueta'];
foreach ($_GET['contacto'] as $contacto)
{
        //print "Has seleccionado el contacto con el id:  $contacto<br/>";

        $sql = "DELETE FROM `tbl_contacto_etiqueta` WHERE `tbl_contacto_etiqueta`.`id_contacto_etiqueta` = ".$contacto.";";
        $result=mysqli_query($con,$sql);

}
header("location: contactos.php");


?>