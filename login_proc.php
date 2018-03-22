<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		header("location: contactos.php");
	} else {
		include("conexion.php");

		$contraseña_encriptada = md5($_REQUEST['contraseña_usuario']);

		$q = "SELECT * FROM tbl_usuarios WHERE correo_usuario='$_REQUEST[correo_usuario]' AND contraseña_usuario='$contraseña_encriptada' and estado_usuario='Activo'";
		$resultado = mysqli_query($con, $q);

		if(mysqli_num_rows($resultado)>0){
			$datos_usuario=mysqli_fetch_array($resultado);
			$_SESSION['usuario']=$_REQUEST['correo_usuario'];
			$_SESSION['idusuario']=$datos_usuario['id_usuario'];
			$_SESSION['nomusuario']=$datos_usuario['nombre_usuario'];
			header("location: contactos.php");
		} else {
			$_SESSION['error']="<div class='alert alert-danger alerterror' id='mensaje-error' role=alert'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Login incorrecto o usuario deshabilitado.</div>";
			header("location: login.php");
		}
	}
?>
