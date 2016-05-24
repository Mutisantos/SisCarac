<!-- Creador por:
	Diego Barrera
	Ivan Garcia

	Fecha Creación: Mayo 5 /2014
	Cliente: Prosofi

	Formato de caracterización de la comunidad 
 -->
 <?php
 session_start();
  
  /**
  * inicio de sesión en el sistema con una cuenta autenticada y registrada
  */
  include "controller/consultas.php";
  isLogged();
  print_r($_SESSION);
  // se revisa solo 1 vez si es un adminsitrador o si es un encustador
  if (isset($_SESSION['usuario']['adm'])) {
    header("Location:/assets/menuAdministrador.php");
  }
 ?>
<!DOCTYPE>
<html>
<head>
	<!-- adicion de librerias de diseno y optimizacion para dispositivos moviles -->
	<title>Caracterizacion</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <!-- Importar temas de Twitter Bootstrap -->
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Importar temas de Twitter Bootstrap -->
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    	<link rel="stylesheet" type="text/css" href="css/estilo.css" />    
      

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
            <li><a href="/assets/controller/logout.php">Cerrar Sesión</a></li>
            <li><a target="_blank" href="/assets/docs/manualUsuario.pdf">Ayuda</a></li>
          </ul>
          
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
		  	<h2>Menú Encuestador</h2>
		</div>

		<hr class="featurette-divider">

			<!-- TODO: validar que sea el rol encuestador -->
	<div class="container marketing">
	<div class="row">
        <div class="col-lg-6">
        	
          <!-- <img class="" data-src="" src="" style="width: 140px; height: 140px;"> -->
          <!-- <img class="" src="img/form.png"> -->
          <h2>Crear Formulario</h2>
          <p>
            Puedes crear un nuevo formulario de caracterización a la comunidad.
          </p>
          	<div class="container-fluid">
				<a  class="btn btn-primary"  href="1_InformacionPrincipal.php">Crear Formulario</a>
			</div>
        </div><!-- /.col-lg-4 -->


        <div class="col-lg-6">
          <h2>Editar Formulario</h2>
          <p>
            Puedes editar un formulario de caracterización a la comunidad, conociendo el número de identificación del usuario Encuestado.
          </p>
          <form class="navbar-form" method="POST" action="./controller/buscar.php">
		            <input type="number" min="0" class="form-control" placeholder="Cédula No." name="cedula">
		            <input type="submit" class="btn btn-primary" value="Editar Formulario">
		   </form>

        </div><!-- /.col-lg-4 -->

    </div>
    
	<br><br><br>

	<!-- Odontologia -->
    <div class="row">
    	<!-- <div class="col-lg-6">
          <h2>Crear Formulario Odontología</h2>
          <p>
            Puedes crear un nuevo formulario de Odontología.
          </p>
          	<div class="container-fluid">
				<a  class="btn btn-primary"  href="1_FormularioOdontologia.php">Crear Formulario </a>
			</div>
        </div> --><!-- /.col-lg-4 -->

        <div class="col-lg-6">
          <h2>Editar Formulario de Odontología</h2>
          <p>
            Puedes editar un formulario de Odontología, conociendo el número de identificación del usuario Encuestado.
          </p>

          <form class="navbar-form" method="POST" action="./controller/buscarOdontologia.php">
		            <input type="number" min="0" class="form-control" placeholder="Cédula No." name="cedula">
		            <input type="submit" class="btn btn-primary" value="Editar Formulario">
		   </form>

        </div> 
        <!-- /.col-lg-4 -->
    </div>
	</div>	
			
</body>
</html>


