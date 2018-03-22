<?php
  session_start();
  if(isset($_SESSION['usuario'])){
  } else {
    $_SESSION['error']="<div class='alert alert-danger alerterror' id='mensaje-error' role=alert'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> No te saltes el login</div>";
    header("location: login.php");
  }
  if(isset($_SESSION['successmodify'])){
        $successmodify = $_SESSION['successmodify'];
    } else if(isset($_SESSION['errorpw'])){
    $errorpw = $_SESSION['errorpw'];
  } else if(isset($_SESSION['errorexistente'])){
    $errorexistente = $_SESSION['errorexistente'];
  } else {

  }
?>

<!DOCTYPE html>
<style type="text/css">
    hr.menu {
    border-top: 1px solid rgba(205, 205, 205, 1);
}
#map {
  height: 100%;
}
</style>
<!-- saved from url=(0070)https://mdbootstrap.com/previews/docs/latest/html/skins/grey-skin.html -->
<html lang="en"><head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags always come first -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MyContacts</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/md.css" rel="stylesheet">
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
                        <img src="./img/mycontacts.png" class="img-fluid flex-center">
                    </div>
                    <br>
                </li>
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
                        <li class="arreglarMenu"><a class="collapsible-header waves-effect arrow-r mostrarmenu"><i class="fa fa-plus"></i>Editar<i class="fa fa-angle-down rotate-icon"></i></a>
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
                        <?php echo $_SESSION['nomusuario']; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item waves-effect waves-light" data-target="#modalRegisterForm" data-toggle="modal" href="#modalRegisterForm" onclick="mostrarFormulario('formModificarUsuario');">Modificar Perfil</a>
                        <a class="dropdown-item waves-effect waves-light" href="logout.php">Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->

    <!--Main layout-->

    <main>
      <?php
      if(isset($successmodify)){
        echo $successmodify;
        unset($successmodify);
        unset($_SESSION['successmodify']);
      } else if(isset($errorpw)){
        echo $errorpw;;
        unset($errorpw);
        unset($_SESSION['errorpw']);
      } else if(isset($errorexistente)){
        echo $errorexistente;
        unset($errorexistente);
        unset($_SESSION['errorexistente']);
      } else {

      }
      ?>
        <div class="container-fluid text-center">

            <!--Card-->
            <div class="card card-cascade wider reverse my-4 pb-5">

                <!--Card image-->

                <!--/Card image-->

                <!--Card content Aqui ira el contenido de cada contacto cargado via AJAX-->
                <div id="contacto" class="container-fluid">


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
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Fourth column-->
                <div class="col-md-2 mx-auto">
                    <h5 class="title">Links</h5>
                    <ul>
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div id="error" class="call-to-action">
          EARLY ACCESS
        </div>
        <!--/.Call to action-->

        <hr>

        <!--Social buttons-->
        <div class="social-section text-center">

        </div>
        <!--/.Social buttons-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
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

<script type="text/javascript" src="js/ajaxjavascript.js"></script>
<script type="text/javascript">
//document.getElementById("busqueda").addEventListener("keyup",showQuery(this.value));
window.addEventListener("load",showUsuario());
</script>
<script>
  var customLabel = {
    restaurant: {
      label: 'R'
    },
    bar: {
      label: 'B'
    },
    colegio: {
      label: 'S'
    },
  };

  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: new google.maps.LatLng(40.4381311, -3.8196196),
      zoom: 6
    });
    var infoWindow = new google.maps.InfoWindow;

    // Change this depending on the name of your PHP or XML file
    downloadUrl('informacion.php', function(data) {
      var xml = data.responseXML;
      var markers = xml.documentElement.getElementsByTagName('marker1');
      Array.prototype.forEach.call(markers, function(markerElem) {
        // Marker direccion 1
        var name = markerElem.getAttribute('name');
        var address = markerElem.getAttribute('address');
        var correo = markerElem.getAttribute('correo');
        var telefono = markerElem.getAttribute('telefono');
        var type = markerElem.getAttribute('type');

        var point = new google.maps.LatLng(
          parseFloat(markerElem.getAttribute('lat')),
          parseFloat(markerElem.getAttribute('lng')));

        var infowincontent = document.createElement('div');
        var strong = document.createElement('strong');

        // Nombre y Apellido
        strong.textContent = name
        infowincontent.appendChild(strong);
        infowincontent.appendChild(document.createElement('br'));

        // Direccion
        var text = document.createElement('text');
        text.textContent = address
        infowincontent.appendChild(text);
        infowincontent.appendChild(document.createElement('br'));

        // Correo
        var text = document.createElement('text');
        text.textContent += correo
        infowincontent.appendChild(text);
        infowincontent.appendChild(document.createElement('br'));

        // Telefono
        var text = document.createElement('text');
        text.textContent += telefono
        infowincontent.appendChild(text);

        var icon = customLabel[type] || {};
        var marker = new google.maps.Marker({
          map: map,
          position: point,
          label: icon.label
        });
        marker.addListener('click', function() {
          infoWindow.setContent(infowincontent);
          infoWindow.open(map, marker);
        });

      });
    });
  }



  function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
      new ActiveXObject('Microsoft.XMLHTTP') :
      new XMLHttpRequest;

    request.onreadystatechange = function() {
      if (request.readyState == 4) {
        request.onreadystatechange = doNothing;
        callback(request, request.status);
      }
    };

    request.open('GET', url, true);
    request.send(null);
  }

  function doNothing() {}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAapIKhK-nwLDeW6-N__ovkYTaY0eCyO54&callback=initMap">
</script>




<div class="hiddendiv common"></div>
</body>
</html>
