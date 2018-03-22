<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		header("location: contactos.php");
	} else {
		header("location: login.php");
	}
		include("conexion.php");

		$nombre_etiqueta=$_GET['new_nombre_etiqueta'];
		$icono_etiqueta=$_GET['group1'];
		$id_etiqueta=$_GET['id_etiqueta'];

		$querynewcontacto="UPDATE `tbl_etiqueta` SET `nombre_etiqueta` = '".$nombre_etiqueta."', `icon_etiqueta` = '".$icono_etiqueta."' WHERE `tbl_etiqueta`.`id_etiqueta` = ".$id_etiqueta.";";
		$resultnewcontacto=mysqli_query($con,$querynewcontacto);
		header("location: contactos.php");
?>