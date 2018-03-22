<?php
include("conexion.php");
session_start();
$q = $_GET['q'];
$sql="SELECT * FROM `tbl_contactos` WHERE nombre_contacto LIKE '%".$q."%' AND id_usuario = ".$_SESSION['idusuario'];
$result = mysqli_query($con,$sql);
?>
<!-- Side navigation links -->
<!--<li>   ##### El comentario marca donde iria puesto en la pagina principal #####
    <ul class="collapsible collapsible-accordion"> -->
        <li class="arreglarMenu"><a class="collapsible-header waves-effect arrow-r mostrarmenu"><i class="fa fa-chevron-right"></i> Resultados de la busqueda<i class="fa fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
                <ul>
                    <?php while($row = mysqli_fetch_array($result)) { ?>
                    <li><a href="#" class="waves-effect" onclick="mostrarContacto('<?php echo $row['id_contacto']; ?>');"><?php echo $row['nombre_contacto']." ".$row['apellidos_contacto']; ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </li>
        <a href="#" class="collapsible-header waves-effect arrow-r" onclick="showUsuario();">Volver</a>
        <script type="text/javascript" src="js/compiled.min.js"></script>
<!--    </ul>
</li> -->