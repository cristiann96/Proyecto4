<?php
include("conexion.php");
$contacto = $_GET['id'];
$query = "SELECT * FROM tbl_contactos WHERE id_contacto = $contacto";
$result = mysqli_query($con, $query);
$row = $result->fetch_array(MYSQLI_ASSOC);
 ?>
<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-bold">Nuevo Contacto</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="modificar_contacto.php" method="GET">
<input type="hidden" name="id" value="<?php echo $contacto ; ?>">
<div class="modal-body mx-3">
    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" name="new_nombre_contacto" class="form-control validate" placeholder="Nombre" required="required" value="<?php echo $row['nombre_contacto']; ?>">
    </div>
    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" name="new_apellidos_contacto" class="form-control validate" placeholder="Apellidos" value="<?php echo $row['apellidos_contacto']; ?>">
    </div>
    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="email" name="new_correo_contacto" class="form-control validate" placeholder="Correo" value="<?php echo $row['correo_contacto']; ?>">
    </div>

    <div class="md-form">
        <i class="fa fa-home prefix grey-text" aria-hidden="true"></i>
        <input type="text" id="new_direccion_contacto" name="new_direccion_contacto" class="form-control validate" placeholder="Direccion" value="<?php echo $row['direccion_contacto']; ?>">
    </div>

    <div class="md-form">
        <i class="fa fa-phone prefix grey-text"></i>
        <input type="text" id="new_telefono_contacto" name="new_telefono_contacto" class="form-control validate" placeholder="Telefono" value="<?php echo $row['telefono_contacto']; ?>">
    </div>

    <!-- LATITUD -->
    <div class="md-form">
      <i class="fa fa-map-marker prefix grey-text" aria-hidden="true"></i>
      <input type="number" id="new_latitud_contacto" name="new_latitud_contacto" class="form-control validate" placeholder="Latitud" step="any" value="<?php echo $row['latitud_contacto']; ?>">
    </div>

    <!-- LONGITUD -->
    <div class="md-form">
      <i class="fa fa-map-marker prefix grey-text" aria-hidden="true"></i>
      <input type="number" id="new_longitud_contacto" name="new_longitud_contacto" class="form-control validate" placeholder="Longitud" step="any" value="<?php echo $row['longitud_contacto']; ?>">
    </div>
    <hr>

    <!-- DIRECCION 2 -->

    <div class="md-form">
        <i class="fa fa-home prefix grey-text" aria-hidden="true"></i>
        <input type="text" id="new_direccion2_contacto" name="new_direccion2_contacto" class="form-control validate" placeholder="Segunda direccion" value="<?php echo $row['direccion2_contacto']; ?>">
    </div>

    <div class="md-form">
        <i class="fa fa-phone prefix grey-text"></i>
        <input type="text" id="new_telefono2_contacto" name="new_telefono2_contacto" class="form-control validate" placeholder="Telefono" value="<?php echo $row['telefono2_contacto']; ?>">
    </div>

    <!-- LATITUD -->
    <div class="md-form">
      <i class="fa fa-map-marker prefix grey-text" aria-hidden="true"></i>
      <input type="number" id="new_latitud2_contacto" name="new_latitud2_contacto" class="form-control validate" placeholder="Latitud" step="any" value="<?php echo $row['latitud2_contacto']; ?>">
    </div>

    <!-- LONGITUD -->
    <div class="md-form">
      <i class="fa fa-map-marker prefix grey-text" aria-hidden="true"></i>
      <input type="number" id="new_longitud2_contacto" name="new_longitud2_contacto" class="form-control validate" placeholder="Longitud" step="any" value="<?php echo $row['longitud2_contacto']; ?>">
    </div>


</div>
<div class="modal-footer d-flex justify-content-center">
    <button class="btn btn-success" name="new_contacto" id="new_contacto">Modificars Contacto </button>
</div>
</form>
