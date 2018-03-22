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

		$querynewcontacto="INSERT INTO tbl_etiqueta (nombre_etiqueta,id_usuario,icon_etiqueta) VALUES ('".$nombre_etiqueta."','".$_SESSION['idusuario']."','".$icono_etiqueta."')";
		$resultnewcontacto=mysqli_query($con,$querynewcontacto);
		header("location: contactos.php");
?>