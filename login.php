<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		header("location: contactos.php");
  }

	if(isset($_SESSION['error'])){
		$error = $_SESSION['error'];
	} else if(isset($_SESSION['errorlogin'])){
    $errorlogin = $_SESSION['errorlogin'];
  } else if (isset($_SESSION['errorexistente'])){
    $errorexistente = $_SESSION['errorexistente'];
  } else if (isset($_SESSION['successcreada'])){
    $successcreada = $_SESSION['successcreada'];
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="UTF-8">
    <title>Login - contactos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/md.css" rel="stylesheet">
    <link href="css/errores.css" rel="stylesheet">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <?php
    if(isset($error)){
      echo $error;
      unset($error);
      unset($_SESSION['error']);
    } else if(isset($errorlogin)){
      echo $errorlogin;;
      unset($errorlogin);
      unset($_SESSION['errorlogin']);
    } else if(isset($errorexistente)){
      echo $errorexistente;
      unset($errorexistente);
      unset($_SESSION['errorexistente']);
    } else {

    }
    ?>

  </head>
  <body style="background-color:#4db6ac">
    <div class="card" style="position: absolute;top: 50%;left: 50%;margin: -250px 0 0 -200px;width: 400px;height: 450px;">
      <div class="header pt-3 grey lighten-2" style="background-color: #44474b !important;">
        <div class="row d-flex justify-content-start">
          <h3 class="white-text mt-3 mb-4 pb-1 mx-5">Log in</h3>
        </div>
      </div>
      <form action="login_proc.php" method="POST">
      <div class="card-body mx-4 mt-4">
        <div class="md-form">
          <input type="text" class="form-control" placeholder="Correo" required="required" name="correo_usuario">
          <label for="Form-email4" colass=""></label>
        </div>
        <div class="md-form pb-3">
          <input type="password" class="form-control" placeholder="Contraseña" required="required" name="contraseña_usuario">
          <label for="Form-pass4" class=""></label>
        </div>
        <div class="text-center mb-4">
          <button type="input" class="btn btn-default btn-block z-depth-2 waves-effect waves-light">Log in</button>
        </div>
        </form>
        <p class="font-small grey-text d-flex justify-content-center">¿No tienes cuenta? &nbsp<a data-target="#modalRegisterForm" data-toggle="modal" class="MainNavText" id="MainNavHelp"
       href="#modalRegisterForm" class="unique-color-text font-bold ml-1">¡Regístrate!</a></p>
      </div>
    </div>


    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-bold">Registro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="registro.php" method="GET">
                <div class="modal-body mx-3">
                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" name="new_nombre_usuario" class="form-control validate" placeholder="Nombre" required="required">
                    </div>
                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" name="new_apellidos_usuario" class="form-control validate" placeholder="Apellidos" required="required">
                    </div>
                    <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" name="new_correo_usuario" class="form-control validate" placeholder="Correo" required="required">
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="new_password_usuario" name="new_password_usuario" class="form-control validate" placeholder="Contraseña" required="required" onkeyup='check();'>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="new_reppassword_usuario" name"new_reppassword_usuario" class="form-control validate" placeholder="Repetir contraseña" required="required" onkeyup='check();'>
                        <span id='message'></span>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default" name="new_usuario" id="new_usuario" disabled>Registrarse </button>
                </div>
              </form>
            </div>
        </div>
    </div>



    <script src="js/mensaje_error.js"></script>
    <script src="js/checkpw.js"></script>


  </body>
</html>
