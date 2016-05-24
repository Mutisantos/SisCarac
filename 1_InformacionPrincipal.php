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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script type="text/javascript" src="/assets/js/jquery-1.11.0.min.js"></script>
    <!-- Importar temas de Twitter Bootstrap -->
    	<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <!-- Importar temas de Twitter Bootstrap -->
    	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" />
    	<link rel="stylesheet" type="text/css" href="/assets/css/estilo.css" />    
      

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
  	<h2>DIAGN&#211;STICO SOCIOECON&#211;MICO <br>
	FAMILIAS  SECTOR BOLONIA &#8211; LOCALIDAD DE USME</h2>

</div>


<!-- <div class="jumbotron"> -->
	<h4><b>OBJETIVO:</b></h4>
	<p>Medir las condiciones socioecon&#243;micas de las familias que componen los hogares del sector Bolonia de Usme, en aspectos relacionados con indicadores sociodemogr&#225;ficos, psicosociales, econ&#243;micos, de salud, caracter&#237;sticas de la vivienda y  entorno  urbano y social. 
	<br>
	La ficha t&#233;cnica ser&#225; aplicada por estudiantes y profesores vinculados al Programa Social PROSOFI. </p>
	<br>

	<h4><b>CONFIDENCIALIDAD:</b></h4>
	<p>La informaci&#243;n obtenida a trav&#233;s de la encuesta ser&#225; uso exclusivo de la academia, agradecemos su honestidad al momento de responder cada una de las preguntas.

	Si est&#225; de acuerdo, a continuaci&#243;n lo invitamos a  firmar el consentimiento  de la aplicaci&#243;n de la encuesta.   
	</p>
	<br>
<!-- </div> -->

<!-- Enviar Formulario vía POST para que un script en PHP ingrese los datos a la base de datos -->

<form class="form-inline" role="form" action="/assets/controller/guardarForm1.php" method="POST" name="form1" enctype="multipart/form-data">
	<h5><b>I.	DEMOGRÁFICOS</b></h5>
  <table class="table">
    <tr>
      <td>
        <b>NOMBRES Y APELLIDOS:</b> 
      </td>
      <td>
        <input class="form-control"type="text" name="nombre">
      </td>
    </tr>

    <tr>
      <td>
        <b>Parentesco con el jefe de hogar</b>
      </td>
      <td>
          <select class="form-control" name="parentesco">
            <option value="Jefe de Hogar">Jefe de Hogar</option>
            <option value="Cónyuge o Compañero">Cónyuge o Compañero-a</option>
            <option value="Padres">Padre/Madre </option>
            <option value="Padrastro ">Padrastro/Madrastra </option>
            <option value="Hijo">Hijo/a </option>
            <option value="Abuelo">Abuelo/a </option>
            <option value="Hermano">Hermano/a </option>
            <option value="Tio">Tío/a </option>
            <option value="Primo">Primo/a </option>
            <option value="Sobrino">Sobrino/a </option>
            <option value="Nieto">Nieto/a </option>
            <option value="Hijastro">Hijastro/a </option>
            <option value="exConyuge">Ex cónyuge  </option>
            <option value="Suegro">Suegro/a </option>
            <option value="Novio ">Novio/a </option>
            <option value="Hermanastro">Hermanastro/a</option>
            <option value="Nuero">Nuero/a </option>
            <option value="Yerno">Yerno/a</option>
            <option value="Otro">Otro </option>
          </select>
      </td>
    </tr>

    <tr>
      <td>
        <b>Estado civil</b>
      </td>
      <td>
          <select class="form-control" name="estadocivil">
          <option value="Soltero">Soltero/a</option>
          <option value="Casado">Casado/a</option>
          <option value="UnionLibre">Unión Libre</option>
          <option value="Separado">Separado - Divorciado</option>
          <option value="Viudo">Viudo</option>
        </select>
      </td>
    </tr>

    <tr>
      <td>
        <b>Edad</b>
      </td>
      <td>
        <input class="form-control" type="number" name="edad" min="0" max="120" >
      </td>
    </tr>

    <tr>
      <td>
        <b>Género</b>
      </td>
      <td>
        <select class="form-control" name="genero" >
          <option value="Femenino">Femenino</option>
          <option value="Masculino">Masculino</option>
        </select>
      </td>
    </tr>

    <tr>
      <td>
        <b>Cédula</b> 
      </td>
      <td>
        <input class="form-control" type="number" name="cedula"  required>
      </td>
    </tr>

    <tr>
      <td>
        <b>Tel&#233;fono fijo</b>
      </td>
      <td>
        <input class="form-control"type="number" name="telefono">
      </td>
    </tr>

    <tr>
      <td>
        <b>Celular</b> 
      </td>
      <td>
        <input class="form-control"type="number" name="celular">
      </td>
    </tr>

    <tr>
      <td>
        <b>Dirección Nueva</b> 
      </td>
      <td>
        <input class="form-control"type="text" name="direccionnueva">
      </td>
    </tr>

    <tr>
      <td>
        <b>UPZ</b> 
      </td>
      <td>
        <input class="form-control"type="text" name="upz">
      </td>
    </tr>

    <tr>
      <td>
        <b>Barrio</b> 
      </td>
      <td>
        <input class="form-control"type="text" name="barrio">
      </td>
    </tr>

    <tr>
      <td>
        <b>Estrato</b> 
      </td>
      <td>
        <input class="form-control"type="number" name="estrato">
      </td>
    </tr>

    <tr>
      <td>
        <b>Número de hogares que compone la vivienda</b> 
      </td>
      <td>
        <input class="form-control"type="number" name="numerohogares">
      </td>
    </tr>

    <tr>
      <td>
        <b>¿Hace cuánto tiempo reside en el barrio?</b> 
      </td>
      <td>
        <input class="form-control"type="text" name="tiempobarrio">
      </td>
    </tr>
  </table>
	

	
	<h5><b>CONTROL DE CALIDAD DE LA ENCUESTA</b></h5>
  Fecha: <input class="form-control"type="date" name="fechaEncuesta"><br/>
  Hora de inicio: <input class="form-control"type="time" name="HoraInicioEncuesta"> Hora Final: <input class="form-control"type="time" name="HoraFinEncuesta"><br>
	Nombre encuestador: <input class="form-control"type="text" name="encuestador">Carrera: <input class="form-control"type="text" name="carrera"><br/>
	Supervisor: <input class="form-control"type="text" name="supervisor"><br/>
	1. Completa <input type="radio" name="estado" id="optionsRadios1" value="completa"> 2. Incompleta <input type="radio" name="estado" id="optionsRadios1" value="incompleta" checked><br/>
	Visto bueno Coordinaci&#243;n Social PROSOFI <input class="form-control" type="text" name="coordinadorProsofi"><br>

  <br>
	<input class="btn btn-primary" type="submit" value=" Continuar ">
	<a href="../2_IndicadoresSociodemograficos.php">Demo</a>
</form>
</body>

<?php
  
  // include("controller/consultas.php");

  // //validar que el usuario haya iniciado sesion
  // if(!isLogged()){
  //   header("Location:index.html");
  // }
  
  /**
  * función llenarAdm
  * Se encarga de llamar la funcion de javascript de cargar los datos correspondientes al primer formulario
  * definidos en la base de datos en la tabla Form1
  * @param int id
  * @param string nombre nombre completo del encuestado
  * @param string parentesco parentesco del encuestado con el jefe del hogar
  * @param string estadocivil del encuestado
  * @param int edad del encuestado
  * @param int telefono fijo del encuestado
  * @param int celular del encuestado
  * @param string direccionnueva de la residencia del encuestado
  * @param string upz de la residencia del encuestado
  * @param string barrio de la residencia del encuestado
  * @param int estrato de la residencia del encuestado
  * @param int numerohogares numero de los hogares que componen la casa
  * @param string tiempobarrio tiempo que lleva viviendo en el barrio
  * @param date fechaEncuesta fecha de la encuesta
  * @param time HoraInicioEncuesta hora de inicio
  * @param time HoraFinEncuesta hora de finalizcion
  * @param string encuestador nombre completo del encuestador
  * @param string carrera del encuestador
  * @param string supervisor nombre del supervisor del encuestador
  * @param string estado si fue completado o no la encuesta
  * @param string coordinadorProsofi visto bueno de prosofi
  *
  */  

  function llenar($nombre, $parentesco, $estadocivil, $edad, $genero, $cedula, $telefono, $celular, $direccionnueva, $upz, $barrio, $estrato, $numerohogares, $tiempobarrio, $fechaEncuesta, $HoraInicioEncuesta, $HoraFinEncuesta, $encuestador, $carrera, $supervisor, $estado, $coordinadorProsofi ){
    echo('<script>
      cargarForm1("'.$cedula.'", "'.$nombre.'", "'. $parentesco.'", "'. $estadocivil.'", "'. $edad.'", "'. $genero.'", "'. $telefono.'", "'. $celular.'", "'. $direccionnueva.'", "'. $upz.'", "'. $barrio.'", "'. $estrato.'", "'. $numerohogares.'", "'. $tiempobarrio.'", "'. $fechaEncuesta.'", "'. $HoraInicioEncuesta.'", "'. $HoraFinEncuesta.'", "'. $encuestador.'", "'. $carrera.'", "'. $supervisor.'", "'. $estado.'", "'. $coordinadorProsofi .'");
      </script>');
  }
?>

<script type="text/javascript">
  //funcion para cargar formulario 1
  function cargarForm1(cedula , nombre , parentesco , estadocivil , edad , genero , telefono , celular , direccionnueva , upz , barrio , estrato , numerohogares , tiempobarrio , fechaEncuesta , HoraInicioEncuesta , HoraFinEncuesta , encuestador , carrera , supervisor , estado , coordinadorProsofi) {

    var formulario = document.form1;
    
    // formulario.nombre.value = "diego";  
    // formulario.cedula.value = id;

    formulario.nombre.value = nombre; 
    formulario.parentesco.value =parentesco; 
    formulario.estadocivil.value=estadocivil;
    formulario.edad.value= edad;
    formulario.genero.value= genero;
    formulario.cedula.value = cedula ; 
    formulario.telefono.value= telefono ; 
    formulario.celular.value=celular ; 
    formulario.direccionnueva.value =direccionnueva; 
    formulario.upz.value=upz;
    formulario.barrio.value=barrio;
    formulario.estrato.value=estrato;
    formulario.numerohogares.value=numerohogares;
    formulario.tiempobarrio.value= tiempobarrio;

    formulario.fechaEncuesta.value =fechaEncuesta;
    formulario.HoraInicioEncuesta.value =HoraInicioEncuesta;
    formulario.HoraFinEncuesta.value =HoraFinEncuesta;  
    formulario.encuestador.value =encuestador; 
    formulario.carrera.value=carrera;
    formulario.supervisor.value=supervisor;
    formulario.estado.value =estado; 
    formulario.coordinadorProsofi.value= coordinadorProsofi; 
  }
</script>
</html>