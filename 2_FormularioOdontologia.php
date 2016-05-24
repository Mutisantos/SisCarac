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
          <a class="navbar-brand" href="#">Formulario Odonotología</a>
        </div>
        <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav ">
                    <li ><a href="1_FormularioOdontologia.php">Historia Clínica</a></li>
                    <li class="active"><a href="semaforizacion.php">Semaforizacón</a></li>
                </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/assets/menuEncuestador.php">Menú</a></li>
            <li><a href="/assets/controller/logout.php">Cerrar Sesión</a></li>
            <li><a target="_blank" href="/assets/docs/manualUsuario.pdf">Ayuda</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="POST" action="/assets/controller/buscarOdontologia.php">
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
    <img class="media-object" src="img/logojaveriana.png" alt="...">
  </a>
  	<h2>FORMULARIO SEMAFORIZACIÓN</h2>
</div>

<form class="" role="form" action="./controller/guardarFormO2.php" method="POST" name="formO2" enctype="multipart/form-data">
<div class="row">
<br>
<div class="container-fluid">
	<div class="col-md-">	
		Fecha: <input class="form-control" type="date" name="fecha1">  
		<br>
		<b>
		<p>
			La Facultad de Odontología de la Universidad Javeriana realizó 
			una actividad de promoción de la salud oral y evidenció que 
			<input class="form-control" type="text" name="paciente1">
			requiere de una atención odontológica por este motivo enviamos esta 
			remisión la cual debe ser devuelta a la persona que le hizo entrega de ésta.
			Tenga en cuenta que al momento de devolverla, esta remisión deber estar 
			completamente diligenciada por el profesional que lo atendió.

		</p>
		</b>
			<p>"LA VIDA, LA SALUD Y EL BIENESTAR ESTÁ EN TUS MANOS, SÓLO TÚ PUEDES MEJORAR TÚ CALIDAD DE VIDA"</p>
		<br>
		<b><p>REMITIDO AL SERVICIO DE SALUD ORAL DE SU EPS PARA VALORACIÓN Y TRATAMIENTO
			<br>
			PROFESIONAL QUE LO ATENDIÓ: <input class="form-control" name="profesional1"><br>
		</b>	
			TRATAMIENTO REALIZADO: <input class="form-control" name="tratamiento1"><br>
			IPS: <input class="form-control" name="ips"><br>
			FECHA DE ATENCIÓN: <input class="form-control" type="date" name="fechaA">  
			<br>
		<select class="form-control" name="color1">
				<option style="background-color:yellow" value="Amarillo">Amarillo</option>
				<option style="background-color:blue" value="Azul">Azul</option>
				<option style="background-color:red" value="Rojo">Rojo</option>
		</select>
			<br>
			OBSERVACIONES:
			<textarea name="observaciones1" class="form-control"></textarea><br>
		</p>

			<input class="btn btn-primary" type="submit" value=" Continuar ">
	</div>

	
	
</div>
</form>
</body>
</html>