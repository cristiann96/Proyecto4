<?php
session_start();
include("conexion.php");
if (!$con->set_charset("utf8")) {
    } else {
    }
$consultaEtiquetas = "SELECT DISTINCT `tbl_etiqueta`.`nombre_etiqueta` AS `Etiqueta`,`tbl_etiqueta`.`id_etiqueta` AS `IDEtiqueta` 
FROM `tbl_usuarios`
    LEFT JOIN `tbl_etiqueta` ON `tbl_etiqueta`.`id_usuario` = `tbl_usuarios`.`id_usuario`
WHERE `tbl_usuarios`.`correo_usuario` = '".$_SESSION['usuario']."'";
$etiqueta = mysqli_query($con,$consultaEtiquetas);

?>
<ul>
<?php while($eti = mysqli_fetch_array($etiqueta)) { ?>
        
    <li><a data-target="#modalRegisterForm" data-toggle="modal" href="#modalRegisterForm" class="waves-effect" onclick="formeditEtiqueta('<?php echo $eti['Etiqueta']; ?>','<?php echo $eti['IDEtiqueta']?>')"><?php echo $eti['IDEtiqueta'].' '.$eti['Etiqueta']; ?></a></li>


<?php
} 
?>
</ul>

