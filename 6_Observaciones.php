<!-- Creador por:
	Diego Barrera
	Ivan Garcia

	Fecha Creación: Marzo 4 /2014
	Cliente: Prosofi

	Formato de caracterización de la comunidad 
 -->
 <!DOCTYPE>
<html>
<head>
	<!-- adicion de librerias de diseno y optimizacion para dispositivos moviles -->
	<title>Caracterizacion</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <!-- Importar temas de Twitter Bootstrap -->
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Importar temas de Twitter Bootstrap -->
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    	<link rel="stylesheet" type="text/css" href="css/estilo.css" />            
    	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<!-- barra de navegacion -->
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Diagnóstico Socioeconómico</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/assets/menuEncuestador.php">Menú</a></li>
            <li><a href="/assets/controller/logout.php">Cerrar Sesión</a></li>
            <li><a target="_blank" href="/assets/docs/manualUsuario.pdf">Ayuda</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="POST" action="/assets/controller/buscar.php">
            <input type="number" min="0" class="form-control" placeholder="Cédula No." name="cedula">
            <input type="submit" class="btn btn-primary" value="Buscar">
          </form>
        </div>
      </div>
    </div>

<!--  <div class="navbar-inverse navbar navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Diagnóstico Socioeconómico</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
 -->


  <div class="media">
        <a class="pull-left" href="#">
            <!-- logo de la javeriana -->
          <img class="media-object" src="/assets/img/logojaveriana.png" alt="...">
        </a>
      <a class="pull-right" href="#">
        <!-- logo Prosofi -->
        <img class="media-object" src="/assets/img/logoProsofi.png" alt="...">
      </a>
    </div>


<form class="" role="form" action="/assets/controller/guardarForm6.php" method="POST" name="form6" enctype="multipart/form-data">


<div class="col-md-6 ">
  
	<h5><b>OBSERVACIONES</b></h5>
	<textarea class="form-control" col="12" rows="7" name="observaciones"> </textarea>
	<br>
	<!-- <a href="6_CanvasFamilograma.html">Demo</a> -->
</div>
<div class="col-md-6 ">

  <h5><b>SEGUIMIENTO</b></h5>
  <textarea class="form-control" col="12" rows="7" name="seguimiento"> </textarea>
  <br>
  <input class="btn btn-primary" type="submit" value=" Finalizar ">
  <!-- <a href="6_CanvasFamilograma.html">Demo</a> -->
</div>

</form>

</body>

<script type="text/javascript">



//funcion para cargar formulario 6
  function cargarForm6(seguimiento,observaciones) {

    var formulario = document.form6;
        
    formulario.observaciones.value = observaciones; 
    formulario.seguimiento.value = seguimiento; 
    
  }

</script>






<?php
 	@session_start();
	
   	
   	include("controller/consultas.php");
	//validar que exista un id para el usuario encuestado
	encuestadoLogged();
  	
  	$id = $_SESSION['usuario']['encuestado'];

 	
  /**
  * Llamado a la funcion de llenarformulario6 teniendo en cuenta el id/cedula del encuestado
  * En esta seccion se toman las notas de observaciones y seguimiento 
  * Se escapan caracteres especiales para evitar generación de escritura basura ininterpretable por los navegadores
  * @return array[] con los dos campos a leer
  */
	  $array = llenarFormulario6( $id );
	  $Observacion = $array['Observaciones'];
    $Seguimiento = $array['Seguimiento'];
    //Se requiere tomar todos los caracteres no reconocidos y reemplazarlos por saltos de linea para evitar errores
    //Se escapan caracteres "basura" que provocan errores en el despliegue de los campos de texto de PHP
    $Seguimiento = preg_replace('/[^\S{L} 0-9]/', '\n', $Seguimiento);
    $Observacion = preg_replace('/[^\S{L} 0-9]/', '\n', $Observacion);
    
    if($array!=0)
    {
      echo('<script>
        cargarForm6("'.$Seguimiento.'","'.$Observacion.'");
      </script>');	
      //echo($array['Observaciones']);

    }
    
?>


</html>







