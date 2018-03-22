
<?php
session_start();
include("conexion.php");
if (!$con->set_charset("utf8")) {
    } else {
    }
$sql="SELECT * FROM `tbl_contactos`";


$consultaEtiquetas = "SELECT DISTINCT `tbl_etiqueta`.`nombre_etiqueta` AS `Etiqueta`,`tbl_etiqueta`.`id_etiqueta` AS `IDEtiqueta`,`tbl_etiqueta`.`icon_etiqueta` AS `Icon`
FROM `tbl_usuarios`
    LEFT JOIN `tbl_etiqueta` ON `tbl_etiqueta`.`id_usuario` = `tbl_usuarios`.`id_usuario`
WHERE `tbl_usuarios`.`correo_usuario` = '".$_SESSION['usuario']."'";
$etiqueta = mysqli_query($con,$consultaEtiquetas);

?>
<!-- Side navigation links -->
<!--<li>   ##### El comentario marca donde iria puesto en la pagina principal #####
    <ul class="collapsible collapsible-accordion"> -->
        <li class="arreglarMenu"><a class="collapsible-header waves-effect arrow-r mostrarmenu"><i class="fa fa-chevron-right"></i> Todos <i class="fa fa-angle-down rotate-icon"></i></a>
            <div id="paquita" class="collapsible-body">
                <ul>
                    <?php
                    $todo = "SELECT * FROM `tbl_contactos` WHERE id_usuario = ".$_SESSION['idusuario'];
                    $todocontactos = mysqli_query($con,$todo);
                    if (mysqli_num_rows($todocontactos)!= 0) {
                        while($cont = mysqli_fetch_array($todocontactos)) { ?>
                            <li><a href="#" class="waves-effect" onclick="mostrarContacto('<?php echo $cont['id_contacto']; ?>');"><?php echo $cont['nombre_contacto']." ".$cont['apellidos_contacto']; ?></a>
                            </li><?php
                        }
                    }

                    ?>
                </ul>
            </div>
        </li>
        <?php while($eti = mysqli_fetch_array($etiqueta)) { ?>
        <li class="arreglarMenu"><a class="collapsible-header waves-effect arrow-r mostrarmenu"><i class="<?php echo $eti['Icon']; ?> "></i><?php echo $eti['IDEtiqueta'].' - '.$eti['Etiqueta']; ?><i class="fa fa-angle-down rotate-icon"></i></a>
            <div id="paquita" class="collapsible-body">
                <ul>
                    <?php
                    $contactoEtiquetas = "SELECT  `tbl_etiqueta`.`nombre_etiqueta` AS `Etiqueta`, `tbl_contactos`.`nombre_contacto` AS `Contacto`, `tbl_contactos`.`apellidos_contacto` AS `Apellido`,`tbl_contactos`.`id_contacto` AS `IDContacto`
                    FROM `tbl_contactos`
                        LEFT JOIN `tbl_contacto_etiqueta` ON `tbl_contacto_etiqueta`.`id_contacto` = `tbl_contactos`.`id_contacto`
                        LEFT JOIN `tbl_etiqueta` ON `tbl_contacto_etiqueta`.`id_etiqueta` = `tbl_etiqueta`.`id_etiqueta`
                        LEFT JOIN `tbl_usuarios` ON `tbl_etiqueta`.`id_usuario` = `tbl_usuarios`.`id_usuario`
                    WHERE `tbl_usuarios`.`correo_usuario` = '".$_SESSION['usuario']."' AND `tbl_etiqueta`.`nombre_etiqueta` = '".$eti['Etiqueta']."'";
                    $result = mysqli_query($con,$contactoEtiquetas);
                    if (mysqli_num_rows($result)!= 0) {
                        while($row = mysqli_fetch_array($result)) {       
                    ?>
                    <li><a href="#" class="waves-effect" onclick="mostrarContacto('<?php echo $row['IDContacto']; ?>');"><?php echo $row['Contacto']." ".$row['Apellido']; ?></a>
                    </li>
                    <?php 
                        }
                    ?>
                    <li><a data-target="#modalRegisterForm" data-toggle="modal" href="#modalRegisterForm" class="waves-effect" onclick="mostrarFormulario2('formNuevoContactoEtiqueta', '<?php echo $eti['IDEtiqueta']; ?>');"> Añadir contacto a la etiqueta </a>
                    </li>
                    <li><a data-target="#modalRegisterForm" data-toggle="modal" href="#modalRegisterForm" class="waves-effect" onclick="mostrarFormulario2('formEliminarContactoEtiqueta', '<?php echo $eti['IDEtiqueta']; ?>');"> Eliminar contacto de la etiqueta </a>
                    </li>
                    <?php
                    }else{ ?>
                    <li><a  class="waves-effect"> No tienes ningun contacto </a>
                    <li><a data-target="#modalRegisterForm" data-toggle="modal" href="#modalRegisterForm" class="waves-effect" onclick="mostrarFormulario2('formNuevoContactoEtiqueta', '<?php echo $eti['IDEtiqueta']; ?>');"> Añadir contacto a la etiqueta </a>
                    </li>
                    <?php
                    } 
                    ?>
                </ul>
            </div>
        </li>
        <?php } ?>
        <script type="text/javascript" src="js/compiled.min.js.descarga"></script>
<!--    </ul>
</li> -->