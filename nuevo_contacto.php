<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		header("location: contactos.php");
	} else {
		header("location: login.php");
	}
		include("conexion.php");

		$nombre_contacto=$_GET['new_nombre_contacto'];
		$apellidos_contacto=$_GET['new_apellidos_contacto'];
		$correo_contacto=$_GET['new_correo_contacto'];

		$telefono_contacto=$_GET['new_telefono_contacto'];
		$direccion_contacto=$_GET['new_direccion_contacto'];
		$latitud_contacto=$_GET['new_latitud_contacto'];
		$longitud_contacto=$_GET['new_longitud_contacto'];

		$direccion2_contacto=$_GET['new_direccion2_contacto'];
		$telefono2_contacto=$_GET['new_telefono2_contacto'];
		$latitud2_contacto=$_GET['new_latitud2_contacto'];
		$longitud2_contacto=$_GET['new_longitud2_contacto'];


		$querynewcontacto="INSERT INTO tbl_contactos (nombre_contacto,apellidos_contacto,correo_contacto,telefono_contacto,latitud_contacto,longitud_contacto,direccion_contacto,telefono2_contacto,latitud2_contacto,longitud2_contacto,direccion2_contacto) VALUES ('$nombre_contacto','$apellidos_contacto','$correo_contacto','$telefono_contacto','$latitud_contacto','$longitud_contacto','$direccion_contacto','$telefono2_contacto','$latitud2_contacto','$longitud2_contacto','$direccion2_contacto')";
		$resultnewcontacto=mysqli_query($con,$querynewcontacto);
		header("location: contactos.php");
?>
