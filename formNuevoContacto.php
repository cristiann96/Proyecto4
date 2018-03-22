<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-bold">Nuevo Contacto</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="nuevo_contacto.php" method="GET">
<div class="modal-body mx-3">
    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" name="new_nombre_contacto" class="form-control validate" placeholder="Nombre" required="required">
    </div>
    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" name="new_apellidos_contacto" class="form-control validate" placeholder="Apellidos">
    </div>
    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="email" name="new_correo_contacto" class="form-control validate" placeholder="Correo">
    </div>

    <div class="md-form">
        <i class="fa fa-home prefix grey-text" aria-hidden="true"></i>
        <input type="text" id="new_direccion_contacto" name="new_direccion_contacto" class="form-control validate" placeholder="Direccion">
    </div>

    <div class="md-form">
        <i class="fa fa-phone prefix grey-text"></i>
        <input type="text" id="new_telefono_contacto" name="new_telefono_contacto" class="form-control validate" placeholder="Telefono">
    </div>

    <!-- LATITUD -->
    <div class="md-form">
      <i class="fa fa-map-marker prefix grey-text" aria-hidden="true"></i>
      <input type="number" id="new_latitud_contacto" name="new_latitud_contacto" class="form-control validate" placeholder="Latitud" step="any">
    </div>

    <!-- LONGITUD -->
    <div class="md-form">
      <i class="fa fa-map-marker prefix grey-text" aria-hidden="true"></i>
      <input type="number" id="new_longitud_contacto" name="new_longitud_contacto" class="form-control validate" placeholder="Longitud" step="any">
    </div>
    <hr>

    <!-- DIRECCION 2 -->

    <div class="md-form">
        <i class="fa fa-home prefix grey-text" aria-hidden="true"></i>
        <input type="text" id="new_direccion2_contacto" name="new_direccion2_contacto" class="form-control validate" placeholder="Segunda direccion">
    </div>

    <div class="md-form">
        <i class="fa fa-phone prefix grey-text"></i>
        <input type="text" id="new_telefono2_contacto" name="new_telefono2_contacto" class="form-control validate" placeholder="Telefono">
    </div>

    <!-- LATITUD -->
    <div class="md-form">
      <i class="fa fa-map-marker prefix grey-text" aria-hidden="true"></i>
      <input type="number" id="new_latitud2_contacto" name="new_latitud2_contacto" class="form-control validate" placeholder="Latitud" step="any">
    </div>

    <!-- LONGITUD -->
    <div class="md-form">
      <i class="fa fa-map-marker prefix grey-text" aria-hidden="true"></i>
      <input type="number" id="new_longitud2_contacto" name="new_longitud2_contacto" class="form-control validate" placeholder="Longitud" step="any">
    </div>


</div>
<div class="modal-footer d-flex justify-content-center">
    <button class="btn btn-success" name="new_contacto" id="new_contacto">Añadir Contacto </button>
</div>
</form>
