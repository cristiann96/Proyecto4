<?php
session_start();
$contacto = $_GET['contacto'];
include("conexion.php");
if ($contacto == "Todo"){ ?>
    <div class="row">
        <div class="col-sm-12" style="background-color:lavenderblush;">
            <div id="map" style="height: 600px"></div>
        </div>
    </div>
<?php 
}else{
?>
<div class="row">
<div class="col-sm-4" style="background-color:lavender;">
    <?php 
    $sql = "SELECT * FROM tbl_contactos WHERE id_contacto = $contacto";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)) { 
    ?>
    <img src="img/sinior.png" style="width: 100%">
    <p>Nombre: <?php echo $row['nombre_contacto']." ".$row['apellidos_contacto']; ?></p>
    <p>Correo: <?php echo $row['correo_contacto']; ?></p>
    <p>Direccion: <?php echo $row['direccion_contacto']; ?></p>
    <p>Telefono: <?php echo $row['telefono_contacto']; ?></p>
    <p>Direccion2: <?php echo $row['direccion2_contacto']; ?></p>
    <p>Telefono2: <?php echo $row['telefono2_contacto']; ?></p>
<?php
}
?>
    <a data-target="#modalRegisterForm" data-toggle="modal" href="#modalRegisterForm" class="btn btn-default" onclick="mostrarFormulario2('formModificarContacto','<?php echo $contacto; ?>')">Editar contacto </a>


</div>
<div class="col-sm-8" style="background-color:lavenderblush;">

<div id="map" style="height: 600px"></div>
</div>
</div>
<?php
}
?> 