<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-bold">Nueva Etiqueta</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="nuevoEtiqueta.php" method="GET">
<div class="modal-body mx-3">
    <div class="md-form">
        <i class="fa fa-tag prefix grey-text"></i>
        <input type="text" name="new_nombre_etiqueta" class="form-control validate" placeholder="Nombre" required="required">
    </div>
<h4> <strong> Selecciona el icono de tu etiqueta </strong> </h4>
<br/>
<div class="form-inline">
    <div class="form-group">
        <input name="group1" type="radio" id="radio11" value="fa fa-address-book" checked="checked">
        <label for="radio11"><i class="fa fa-address-book"></i></label>
    </div>

    <div class="form-group">
        <input name="group1" type="radio" value="fa fa-chevron-right" id="radio21">
        <label for="radio21"><i class="fa fa-chevron-right"></i></label>
    </div>

    <div class="form-group">
        <input name="group1" type="radio"  value="fa fa-book" id="radio31">
        <label for="radio31"><i class="fa fa-book"></i></label>
    </div>
</div>
<br/><br/>
<div class="form-inline">
    <div class="form-group">
        <input name="group1" type="radio" value="fa fa-tag" id="radio12">
        <label for="radio12"><i class="fa fa-tag"></i></label>
    </div>

    <div class="form-group">
        <input name="group1" type="radio" value="fa fa-address-card" id="radio22">
        <label for="radio22"><i class="fa fa-address-card"></i></label>
    </div>

    <div class="form-group">
        <input name="group1" type="radio" value="fa fa-flag" id="radio32">
        <label for="radio32"><i class="fa fa-flag"></i></label>
    </div>
</div>
<br/><br/>
<div class="form-inline">
    <div class="form-group">
        <input name="group1" type="radio" value="fa fa-phone" id="radio13">
        <label for="radio13"><i class="fa fa-phone"></i></label>
    </div>

    <div class="form-group">
        <input name="group1" type="radio" value="fa fa-cogs" id="radio23">
        <label for="radio23"><i class="fa fa-cogs"></i></label>
    </div>

    <div class="form-group">
        <input name="group1" type="radio" value="fa fa-paperclip" id="radio33">
        <label for="radio33"><i class="fa fa-paperclip"></i></label>
    </div>
</div>
<br/>
</div>
<div class="modal-footer d-flex justify-content-center">
    <button class="btn btn-default" name="new_etiqueta" id="new_etiqueta">Añadir etiqueta </button>
</div>
</form>