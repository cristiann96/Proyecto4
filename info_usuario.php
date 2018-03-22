<?php
  session_start();
  include("conexion.php");
  $q = "SELECT * FROM tbl_usuarios WHERE correo_usuario='$_SESSION[usuario]'";
  $result = mysqli_query($con, $q);
  $row = $result->fetch_array(MYSQLI_ASSOC);
?>
