<?php
  session_start();
  if(isset($_SESSION['usuario'])){
    //header("location: contactos.php");
  } else {
    header("location: login.php");
  }

  include("conexion.php");

  $nombre_usuario = $_GET['nombre_usuario'];
  $apellidos_usuario = $_GET['apellidos_usuario'];
  $correo_usuario = $_GET['correo_usuario'];
  $new_correo_usuario = $_GET['new_correo_usuario'];
  $password_usuario = $_GET['password_usuario'];
  $password_usuario2 = $_GET['password_usuario2'];
  $password_enc = md5($password_usuario);

  if($correo_usuario==$new_correo_usuario){
    if(!empty($password_usuario) AND (!empty($password_usuario2))){
      if($password_usuario==$password_usuario2){
        $query="UPDATE tbl_usuarios SET nombre_usuario='$nombre_usuario', apellidos_usuario='$apellidos_usuario', contraseña_usuario='$password_enc' WHERE correo_usuario='$correo_usuario'";
        $result=mysqli_query($con,$query);
        $_SESSION['successmodify']="<div class='alert alert-success alertsuccess' id='mensaje-error' role=alert'><i class='fa fa-check' aria-hidden='true'></i> Usuario modificado</div>";
        header("location: contactos.php");
      } else {
        $_SESSION['errorpw']="<div class='alert alert-danger alerterror' id='mensaje-error' role=alert'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Las contraseñas no coinciden. </div>";
        header("location: contactos.php");
      }

    } else {
      $query="UPDATE tbl_usuarios SET nombre_usuario='$nombre_usuario', apellidos_usuario='$apellidos_usuario' WHERE correo_usuario='$correo_usuario'";
      $result=mysqli_query($con,$query);
      $_SESSION['successmodify']="<div class='alert alert-success alertsuccess' id='mensaje-error' role=alert'><i class='fa fa-check' aria-hidden='true'></i> Usuario modificado</div>";
      header("location: contactos.php");
    }

  } else {
    $query2="SELECT * FROM tbl_usuarios WHERE correo_usuario='$new_correo_usuario'";
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)>0){
      $_SESSION['errorexistente']="<div class='alert alert-danger alerterror' id='mensaje-error' role=alert'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Cuenta ya existente </div>";
      header("location: contactos.php");
    } else {
      if(!empty($password_usuario) AND (!empty($password_usuario2))){
        if($password_usuario==$password_usuario2){
          $query="UPDATE tbl_usuarios SET nombre_usuario='$nombre_usuario', apellidos_usuario='$apellidos_usuario', contraseña_usuario='$password_enc', correo_usuario='$new_correo_usuario' WHERE correo_usuario='$correo_usuario'";
          $result=mysqli_query($con,$query);
          $_SESSION['usuario']=$new_correo_usuario;
          $_SESSION['successmodify']="<div class='alert alert-success alertsuccess' id='mensaje-error' role=alert'><i class='fa fa-check' aria-hidden='true'></i> Usuario modificado</div>";
          header("location: contactos.php");
        } else {
          $_SESSION['errorpw']="<div class='alert alert-danger alerterror' id='mensaje-error' role=alert'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Las contraseñas no coinciden. </div>";
          header("location: contactos.php");
        }
      } else {
        $query="UPDATE tbl_usuarios SET nombre_usuario='$nombre_usuario', apellidos_usuario='$apellidos_usuario', correo_usuario='$new_correo_usuario' WHERE correo_usuario='$correo_usuario'";
        $result=mysqli_query($con,$query);
        $_SESSION['usuario']=$new_correo_usuario;
        $_SESSION['successmodify']="<div class='alert alert-success alertsuccess' id='mensaje-error' role=alert'><i class='fa fa-check' aria-hidden='true'></i> Usuario modificado</div>";
        header("location: contactos.php");
      }
      $query="UPDATE tbl_usuarios SET nombre_usuario='$nombre_usuario', apellidos_usuario='$apellidos_usuario', correo_usuario='$new_correo_usuario' WHERE correo_usuario='$correo_usuario'";
      $result=mysqli_query($con,$query);
      $_SESSION['usuario']=$new_correo_usuario;
      $_SESSION['successmodify']="<div class='alert alert-success alertsuccess' id='mensaje-error' role=alert'><i class='fa fa-check' aria-hidden='true'></i> Usuario modificado</div>";
      header("location: contactos.php");
    }
  }

  if(isset($_GET['confirmDelete'])){
    $query="UPDATE tbl_usuarios SET estado_usuario='Deshabilitado' WHERE correo_usuario='$correo_usuario'";
    $result=mysqli_query($con,$query);
    session_destroy();
    header("location: login.php");
  }

?>
