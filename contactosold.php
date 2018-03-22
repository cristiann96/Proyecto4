<!DOCTYPE html>
<?php
session_start();
$_SESSION['usuario'] = "Prueba";
?>
<style type="text/css">
    hr.menu {
    border-top: 1px solid rgba(205, 205, 205, 1);
}
</style>
<!-- saved from url=(0070)https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags always come first -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MyContacts</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="./css/cssbueno.css" rel="stylesheet">
    <script type="text/javascript">
//window.getElementById("slide-out").addEventListener("load", displayDate);
//AJAX PARA MOSTRAR LA LISTA DE ETIQUETAS
    function editEtiqueta() {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("editEtiqueta").innerHTML=this.responseText;
        }
      }
      xmlhttp.open("GET","listaEtiquetas.php",true);
      xmlhttp.send();
    }
    function mostrarFormulario(str) {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("contenidoFormulario").innerHTML=this.responseText;
        }
      }
      xmlhttp.open("GET",str+".php",true);
      xmlhttp.send();
    }
//AJAX PARA MOSTRAR LOS CONTACTOS BUSCADOS CON EL BUSCADOR DEL MENU
    function showQuery(str) {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("listaContactos").innerHTML=this.responseText;
            //var desplegable = document.getElementsByClassName("arreglarMenu");
            var desplegable = document.getElementsByClassName("mostrarmenu");
            var i;
            for (i = 0; i < desplegable.length; i++){
                desplegable[i].addEventListener("click", function(){
                    this.classList.toggle("active");
                    //var contenido = this.getElementsByTagName('div')[0];
                    var contenido = this.nextElementSibling;
                    if (contenido.style.display === "block"){
                        contenido.style.display = "none";
                    }else{
                        contenido.style.display = "block";
                    }
                });
            }

        }
      }
      xmlhttp.open("GET","listaContactosBusqueda.php?q="+str,true);
      xmlhttp.send();
    }
    </script>
<head>
</head>

<body class="fixed-sn grey-skin">
    
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed mdb-sidenav" style="transform: translateX(0%);">
            <ul class="custom-scrollbar list-unstyled" style="max-height:100vh;">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper waves-light waves-effect waves-light">
                        <a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#"><img src="./plantilla oscura_files/mdb-transparent.png" class="img-fluid flex-center"></a>
                    </div>
                </li>
                <!--/. Logo -->
                <!--Social-->
                <li>
                    <ul class="social">
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#" class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#" class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
                    </ul>
                </li>
                <!--/Social-->
                <!--Search Form-->
                <li>
                    <form class="search-form" role="search">
                        <div class="form-group waves-light waves-effect waves-light">
                            <input id="busqueda" type="text" class="form-control" placeholder="Search" onkeyup="showQuery(this.value);"> <!-- onkeyup="showQuery(this.value);" -->
                        </div>
                    </form>
                </li>
                <!--/.Search Form-->
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li class="arreglarMenu"><a class="collapsible-header waves-effect arrow-r mostrarmenu"><i class="fa fa-plus"></i>Nuevo<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a  data-target="#modalRegisterForm" data-toggle="modal" href="#modalRegisterForm" class="waves-effect" onclick="mostrarFormulario('formNuevoContacto');"><i class="fa fa-user-plus"></i>Contacto</a>
                                    </li>
                                    <li>
                                        <a data-target="#modalRegisterForm" data-toggle="modal" href="#modalRegisterForm" class="waves-effect" onclick="mostrarFormulario('formNuevoEtiqueta');"><i class="fa fa-tag"></i>Etiqueta</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="arreglarMenu"><a class="collapsible-header waves-effect arrow-r mostrarmenu" onload="editEtiqueta()"><i class="fa fa-plus"></i>Editar<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div id="editEtiqueta" class="collapsible-body">

                            </div>
                        </li>
                    </ul>
                </li><hr class="menu">
                <li>
                    <ul id="listaContactos" class="collapsible collapsible-accordion">
                        






<!-- ################################################# AQUI VAN COSAS AJAX ############################################################################################-->








                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>MyContacts</p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                        <?php echo $_SESSION['usuario']; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item waves-effect waves-light" href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#">Modificar Perfil</a>
                        <a class="dropdown-item waves-effect waves-light" href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#">Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
    
    <!--Main layout-->
    <main>
       
        <div class="container-fluid text-center">

            <!--Card-->
            <div class="card card-cascade wider reverse my-4 pb-5">

                <!--Card image-->
                
                <!--/Card image-->

                <!--Card content-->
                <div class="container-fluid">

  <div class="row">
    <div class="col-sm-4" style="background-color:lavender;">
        Aki la fotiko i la info
        <img src="img/montecristo.jpg" style="width: 100%; opacity: 0.02;">
    </div>
    <div class="col-sm-8" style="background-color:lavenderblush;">
        Aqui es donde va el mapa
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11980.109492214955!2d2.11557015!3d41.35175875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1517242759833" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        
        </div>
        
    </main>
    <!--/Main layout-->

    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3">
                    <h5 class="title">Footer Content</h5>
                    <p>Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Second column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="title">Links</h5>
                    <ul>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#!">Link 1</a></li>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#!">Link 2</a></li>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#!">Link 3</a></li>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Third column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="title">Links</h5>
                    <ul>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#!">Link 1</a></li>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#!">Link 2</a></li>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#!">Link 3</a></li>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Fourth column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="title">Links</h5>
                    <ul>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#!">Link 1</a></li>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#!">Link 2</a></li>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#!">Link 3</a></li>
                        <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action">
            <ul>
                <li>
                    <h5>Register for free</h5>
                </li>
                <li><a href="https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html" class="btn btn-primary waves-effect waves-light">Sign up!</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

        <hr>

        <!--Social buttons-->
        <div class="social-section text-center">
            <ul>
                <li><a class="btn-floating btn-fb waves-effect waves-light"><i class="fa fa-facebook"> </i></a></li>
                <li><a class="btn-floating btn-tw waves-effect waves-light"><i class="fa fa-twitter"> </i></a></li>
                <li><a class="btn-floating btn-gplus waves-effect waves-light"><i class="fa fa-google-plus"> </i></a></li>
                <li><a class="btn-floating btn-li waves-effect waves-light"><i class="fa fa-linkedin"> </i></a></li>
                <li><a class="btn-floating btn-git waves-effect waves-light"><i class="fa fa-github"> </i></a></li>
            </ul>
        </div>
        <!--/.Social buttons-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a href="http://www.mdbootstrap.com/"> MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>

    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">   
                <!-- Contienido modalbox -->
                <div id="contenidoFormulario">

                </div>
            </div>
        </div>
    </div>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery 
    <script type="text/javascript" src="js/compiled.min.js"></script>-->
    <script>

        // SideNav Initialization
        $(".button-collapse").sideNav();
        
        new WOW().init();
    
    </script><div class="drag-target" style="left: 0px; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>


<script type="text/javascript">
    //AJAX PARA MOSTRAR LA LISTA DE CONTACTOS
    function showUsuario() {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("listaContactos").innerHTML=this.responseText;
            //var desplegable = document.getElementsByClassName("arreglarMenu");
            var desplegable = document.getElementsByClassName("mostrarmenu");
            var i;
            for (i = 0; i < desplegable.length; i++){
                desplegable[i].addEventListener("click", function(){
                    this.classList.toggle("active");
                    //var contenido = this.getElementsByTagName('div')[0];
                    var contenido = this.nextElementSibling;
                    if (contenido.style.display === "block"){
                        contenido.style.display = "none";
                    }else{
                        contenido.style.display = "block";
                    }
                });
            }
          //arreglarMenu();
        }
      }
      xmlhttp.open("GET","listaContactos.php",true);
      xmlhttp.send();
    }
//document.getElementById("busqueda").addEventListener("keyup",showQuery(this.value)); 
window.addEventListener("load",showUsuario());
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<div class="hiddendiv common"></div></body></html>