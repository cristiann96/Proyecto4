<?php
include("info_usuario.php");
?>
<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-bold">Modificar Usuario</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="modificar_usuario.php" method="GET">
  <div class="modal-body mx-3">
      <div class="md-form">
          <i class="fa fa-user prefix grey-text"></i>
          <input type="text" name="nombre_usuario" class="form-control validate" placeholder="Nombre" required="required" value="<?php echo $row['nombre_usuario']; ?>">
      </div>
      <div class="md-form">
          <i class="fa fa-user prefix grey-text"></i>
          <input type="text" name="apellidos_usuario" class="form-control validate" placeholder="Apellidos" required="required" value="<?php echo $row['apellidos_usuario']; ?>">
      </div>
      <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="hidden" name="correo_usuario" class="form-control validate" placeholder="Correo" required="required" value="<?php echo $row['correo_usuario']; ?>">
          <input type="email" name="new_correo_usuario" class="form-control validate" placeholder="Correo" required="required" value="<?php echo $row['correo_usuario']; ?>">
      </div>

      <div class="md-form">
          <i class="fa fa-lock prefix grey-text"></i>
          <input type="password" name="password_usuario" class="form-control validate" placeholder="Contraseña" onkeyup='check();'>
      </div>

      <div class="md-form">
          <i class="fa fa-lock prefix grey-text"></i>
          <input type="password" name="password_usuario2" class="form-control validate" placeholder="Contraseña" onkeyup='check();'>
      </div>

  </div>
  <div class="modal-footer d-flex justify-content-center">
      <button class="btn btn-info">Modificar</button>
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminar">Eliminar usuario</button>
  </div>
  <div class="modal fade" id="confirmarEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro que deseas eliminar tu usuario?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="input" class="btn btn-danger" id="confirmDelete" name="confirmDelete">Eliminar usuario</button>
            </div>
        </div>
    </div>
</div>
</form>
<script src="js/mensaje_error.js"></script>
