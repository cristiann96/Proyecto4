<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-bold">Nuevo Contacto</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="registro.php" method="GET">
<div class="modal-body mx-3">
    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" name="new_nombre_contacto" class="form-control validate" placeholder="Nombre" required="required">
    </div>
    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" name="new_apellidos_contacto" class="form-control validate" placeholder="Apellidos" required="required">
    </div>
    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="email" name="new_correo_contacto" class="form-control validate" placeholder="Correo" required="required">
    </div>
    <div class="md-form">
        <i class="fa fa-phone prefix grey-text"></i>
        <input type="text" id="new_telefono_contacto" name="new_telefono_contacto" class="form-control validate" placeholder="Telefono" required="required" >
    </div>
    <div class="md-form">
        <i class="fa fa-home prefix grey-text"></i>
        <input type="text" id="new_direccion_contacto" name="new_direccion_contacto" class="form-control validate" placeholder="Direccion" required="required" >
    </div>



</div>
<div class="modal-footer d-flex justify-content-center">
    <button class="btn btn-default" name="new_contacto" id="new_contacto" disabled>Añadir Contacto </button>
</div>
</form>