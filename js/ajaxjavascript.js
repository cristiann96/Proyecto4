function mostrarContacto(str) {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("contacto").innerHTML=this.responseText;
          if (str=="Todo") {
            initMap();}else{
              initMap2();
            }
        }
      }
      xmlhttp.open("GET","mostrarContacto.php?contacto="+str,true);
      xmlhttp.send();
    }
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
        function formeditEtiqueta(nombre,id) {
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
      xmlhttp.open("GET","formEditarEtiqueta.php?nombre="+nombre+"&id="+id,true);
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
    function mostrarFormulario2(str,eti) {
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
      xmlhttp.open("GET",str+".php?id="+eti,true);
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
          editEtiqueta();
          mostrarContacto('Todo');
          $( "#mensaje-error" ).fadeIn( 300 ).delay( 3000 ).fadeOut( 1000 );
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