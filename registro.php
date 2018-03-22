<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		header("location: contactos.php");
	} else {
		//$_SESSION['error']="<div class='alert alert-danger alerterror' id='mensaje-error' role=alert'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> No te saltes el login</div>";
		//header("location: login.php");
	}
		include("conexion.php");

		$correo_usuario=$_GET['new_correo_usuario'];


		$q = "SELECT * FROM tbl_usuarios WHERE correo_usuario='$correo_usuario'";
		$resultado = mysqli_query($con, $q);

		if(mysqli_num_rows($resultado)>0){
			$_SESSION['errorexistente']="<div class='alert alert-danger alerterror' id='mensaje-error' role=alert'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Cuenta ya existente	</div>";
			header("location: login.php");
		} else {
			$nombre_usuario=$_GET['new_nombre_usuario'];
			$apellidos_usuario=$_GET['new_apellidos_usuario'];
			$contraseña_usuario=$_GET['new_password_usuario'];
			$password_enc=md5($contraseña_usuario);

			$querynewuser="INSERT INTO tbl_usuarios (nombre_usuario,contraseña_usuario,apellidos_usuario,correo_usuario,estado_usuario) VALUES ('$nombre_usuario','$password_enc','$apellidos_usuario','$correo_usuario','Activo')";
			$resultnewuser=mysqli_query($con,$querynewuser);
			$_SESSION['successcreada']="<div class='alert alert-success alertsuccess' id='mensaje-error' role=alert'><i class='fa fa-check' aria-hidden='true'></i> Cuenta creada</div>";
			$_SESSION['usuario']=$correo_usuario;
			header("location: contactos.php");
		}


?>
