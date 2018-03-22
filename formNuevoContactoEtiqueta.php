<?php
session_start();

include("conexion.php");
$queryContacto = "SELECT `tbl_contactos`.`id_contacto` AS `IDContacto`,`tbl_contactos`.`nombre_contacto` AS `NContacto`, `tbl_contactos`.`apellidos_contacto` AS `AContacto` FROM `tbl_usuarios`, `tbl_contactos` WHERE `tbl_usuarios`.`correo_usuario` = '".$_SESSION['usuario']."'";
$sqlComprovacion = "SELECT * FROM `tbl_contacto_etiqueta` WHERE `id_etiqueta` = ".$_GET['id']."";
$result = mysqli_query($con,$queryContacto);
$resultComprovacion = mysqli_query($con,$sqlComprovacion);
?>
<div class="modal-header text-center">
    <h4 class="modal-title w-100 font-bold">Añadir contacto a la etiqueta <?php echo $_GET['id'];?></h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>   
</div>
<p> Usa ctrl + click para seleccionar los contactos que quieras añadir </p>
<form action="nuevoContactoEtiqueta.php" method="GET">
<div class="modal-body mx-3">
    <div class="md-form">
<select size=15 style='width: 100%;' name="contacto[]" multiple>
    <option value="" disabled selected>Selecciona que contactos añadir</option>
    <?php 
    $contador = 0;
        while($row = mysqli_fetch_array($result)) { 
            //$contador++;
            /*while($col = mysqli_fetch_array($resultComprovacion)) {
                //if ($col['id_contacto'] != $row['IDContacto']) {
                    //$contador++;
                //}               
            }*/
        echo '<option value="'.$row['IDContacto'].'"> '.$row['NContacto'].' '.$row['AContacto'].' </option>';   
        }
        echo '<input type="hidden" value="'.$_GET['id'].'" name="id_etiqueta">';
        //echo '<input type="hidden" value="'.$contador.'" name="numero contador">';
    ?>
</select>


    </div>
</div>
<div class="modal-footer d-flex justify-content-center">
    <button class="btn btn-default" name="new_etiqueta" id="new_contactoetiqueta">Añadir contacto </button>
</div>
</form>