<?php
session_start();

include("conexion.php");
$queryContacto = "SELECT `tbl_etiqueta`.`nombre_etiqueta` AS `Etiqueta`, `tbl_contactos`.`nombre_contacto` AS `Contacto`, `tbl_contactos`.`apellidos_contacto` AS `Apellido`, `tbl_contacto_etiqueta`.`id_contacto_etiqueta` AS `IDContactoEtiqueta` FROM `tbl_contactos` LEFT JOIN `tbl_contacto_etiqueta` ON `tbl_contacto_etiqueta`.`id_contacto` = `tbl_contactos`.`id_contacto` LEFT JOIN `tbl_etiqueta` ON `tbl_contacto_etiqueta`.`id_etiqueta` = `tbl_etiqueta`.`id_etiqueta` LEFT JOIN `tbl_usuarios` ON `tbl_etiqueta`.`id_usuario` = `tbl_usuarios`.`id_usuario` WHERE `tbl_usuarios`.`correo_usuario` = '".$_SESSION['usuario']."' AND `tbl_etiqueta`.`id_etiqueta` = '".$_GET['id']."'";
$result = mysqli_query($con,$queryContacto);
?>
<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-bold">Eliminar contacto de la etiqueta <?php echo $_GET['id'];?></h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>   
</div>
<p> Usa ctrl + click para seleccionar los contactos que quieras eliminar </p>
<form action="eliminarContactoEtiqueta.php" method="GET">
<div class="modal-body mx-3">
    <div class="md-form">
<select size=15 style='width: 100%;' name="contacto[]" multiple>
    <option value="" disabled selected>Selecciona que contactos añadir</option>
    <?php 
        while($row = mysqli_fetch_array($result)) { 

        echo '<option value="'.$row['IDContactoEtiqueta'].'"> '.$row['Contacto'].' '.$row['Apellido'].' </option>';   
        }
        //echo '<input type="hidden" value="'.$_GET['id'].'" name="id_etiqueta">';

    ?>
</select>


    </div>
</div>
<div class="modal-footer d-flex justify-content-center">
    <button class="btn btn-default" name="new_etiqueta" id="new_contactoetiqueta">Eliminar contacto </button>
</div>
</form>