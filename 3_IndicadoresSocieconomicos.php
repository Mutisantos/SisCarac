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


    <form class="form-inline" role="form" action="/assets/controller/guardarForm3.php" method="POST" name="form3" enctype="multipart/form-data" onsubmit="opciones()">
		

		<div class="col-md-6">
			<h5><b>III.	CONDICIONES URBANAS Y SOCIALES EN EL SECTOR.</b></h5>
			<br/>
			<!-- PREGUNTA1-->
			<b>P1 ¿Qué equipamiento urbano identifica usted en el Barrio?</b>
			<table class="table">
				<th>Equipamiento</th>
				<th>Sí</th>
				<th>No</th>
				<tr>
					<td>
						a. Parques 
					</td>
					<td>
						<input type="radio" name="P1Parques" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P1Parques" id="optionsRadios1" value="No" checked><br/>
					</td>
				</tr>
				<tr>
					<td>
						b. Hospitales 
					</td>
					<td>
						<input type="radio" name="P1Hospitales" id="optionsRadios2" value="Si">
					</td>
					<td>
						<input type="radio" name="P1Hospitales" id="optionsRadios2" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						c. Colegios
					</td>
					<td>
						<input type="radio" name="P1Colegios" id="optionsRadios3" value="Si">
					</td>
					<td>
						<input type="radio" name="P1Colegios" id="optionsRadios3" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						d. Iglesias 
					</td>
					<td>
						<input type="radio" name="P1Iglesias" id="optionsRadios4" value="Si">
					</td>
					<td>
						<input type="radio" name="P1Iglesias" id="optionsRadios4" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						e. Sede Junta de Acción Comunal
					</td>
					<td>
						<input type="radio" name="P1SedeAC" id="optionsRadios5" value="Si">
					</td>
					<td>
						<input type="radio" name="P1SedeAC" id="optionsRadios5" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						f. Jardines Infantiles
					</td>
					<td>
						<input type="radio" name="P1Jardines" id="optionsRadios6" value="Si">
					</td>
					<td>
						<input type="radio" name="P1Jardines" id="optionsRadios6" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						g. Otros ¿Cuales?
					</td>
					<td>
						<input type="text" class="form-control" name="P1Otro" >
					</td>
				</tr>
			</table>
			<br/>
			<!-- PREGUNTA2-->
			<b>P2 ¿Utiliza usted estos equipamientos urbanos?</b>
			<table class="table">
				<th>Sí</th>
				<th>No</th>
				<tr>
					<td>
						<input type="radio" name="P2Utiliza" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P2Utiliza" id="optionsRadios1" value="No" checked>
					</td>
				</tr>
			</table>
			<br/>

			<!-- PREGUNTA3-->

			<b>P3 Alrededor de su residencia se encuentra:</b>
			<table class="table">
				<th>Objeto</th>
				<th>Sí</th>
				<th>No</th>
				<tr>
					<td>
						a. Aguas Estancadas
					</td>
					<td>
						<input type="radio" name="P3Aguas" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P3Aguas" id="optionsRadios1" value="No" checked><br/>
					</td>
				</tr>
				<tr>
					<td>
						b. Caño de aguas sucias
					</td>
					<td>
						<input type="radio" name="P3Canos" id="optionsRadios2" value="Si">
					</td>
					<td>
						<input type="radio" name="P3Canos" id="optionsRadios2" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						c. Botadero de basuras
					</td>
					<td>
						<input type="radio" name="P3Botadero" id="optionsRadios3" value="Si">
					</td>
					<td>
						<input type="radio" name="P3Botadero" id="optionsRadios3" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						d. Zonas enmontadas 
					</td>
					<td>
						<input type="radio" name="P3Enmontadas" id="optionsRadios4" value="Si">
					</td>
					<td>
						<input type="radio" name="P3Enmontadas" id="optionsRadios4" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						e. Otro
					</td>
					<td>
						<input type="text" class="form-control" name="P3Otro" >
					</td>
				</tr>
				
			</table>
			<br/>

			<!-- PREGUNTA4-->
			<b>P4 ¿Qué tan conforme se encuentra usted con los equipamientos que le ofrecen alrededor de su vivienda?</b>
			<select class="form-control" name="P4Conforme">
				  <option value="MuyInconforme"> 1. Muy Inconforme </option>
				  <option value="Inconforme"> 2. Inconforme </option>
				  <option value="Niconformeniinconforme"> 3. Ni conforme ni inconforme </option>
				  <option value="Conforme"> 4. Conforme </option>
				  <option value="MuyConforme"> 5. Muy Conforme </option>
			</select>
			<br/>

			<!-- PREGUNTA5-->
			<b>P5 ¿Utiliza usted o algún miembro de su familia los servicios que existen en el sector?</b>
			<table class="table">
				<th>Sí ¿Cuál?</th>
				<th>No (pasa a 7)</th>
				<tr>
					<td>
						<input type="radio" name="P5UtilizaSalud" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P5UtilizaSalud" id="optionsRadios1" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="form-control" name="P5Cual" placeholder="¿Cuál?" >
					</td>
				</tr>
			</table>
			<br/>

			<!-- PREGUNTA6-->
			<b>P6 ¿Cómo calificaría usted el servicio de salud que le ofrecen?</b>
			<select class="form-control" name="P6CalificaSalud">
				  <option value="Deficiente"> 1. Deficiente </option>
				  <option value="Malo"> 2. Malo </option>
				  <option value="Regular"> 3. Regular </option>
				  <option value="Bueno"> 4. Bueno </option>
				  <option value="MuyBueno"> 5. Muy Bueno </option>
			</select>
			<br/>

			<!-- PREGUNTA7-->
			<b>P7 ¿Utiliza usted o algún miembro de la familia los colegios o instituciones educativas del sector?</b>
			<table class="table">
				<th>Sí</th>
				<th>No</th>
				<tr>
					<td>
						<input type="radio" name="P7UtilizaColegio" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P7UtilizaColegio" id="optionsRadios1" value="No" checked>
					</td>
				</tr>
			</table>
			<br/>

			<!-- PREGUNTA8-->
			<b>P8 ¿Qué tipo de educación les ofrecen?</b>
			<table class="table">
				<th>Educación</th>
				<th>Sí</th>
				<th>No</th>
				<tr>
					<td>
						PREESCOLAR
					</td>
					<td>
						<input type="radio" name="P8Preescolar" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P8Preescolar" id="optionsRadios1" value="No" checked><br/>
					</td>
				</tr>
				<tr>
					<td>
						PRIMARIA
					</td>
					<td>
						<input type="radio" name="P8Primaria" id="optionsRadios2" value="Si">
					</td>
					<td>
						<input type="radio" name="P8Primaria" id="optionsRadios2" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						MEDIA
					</td>
					<td>
						<input type="radio" name="P8Media" id="optionsRadios3" value="Si">
					</td>
					<td>
						<input type="radio" name="P8Media" id="optionsRadios3" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						BACHILLERATO COMPLETO
					</td>
					<td>
						<input type="radio" name="P8Bachillerato" id="optionsRadios4" value="Si">
					</td>
					<td>
						<input type="radio" name="P8Bachillerato" id="optionsRadios4" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						TÉCNICA/TECNOLÓGICA
					</td>
					<td>
						<input type="radio" name="P8Tecnico" id="optionsRadios4" value="Si">
					</td>
					<td>
						<input type="radio" name="P8Tecnico" id="optionsRadios4" value="No" checked>
					</td>
				</tr>
				
			</table>
			

			<br/>
			<br/>

		</div>
		<div class="col-md-6">
			<h5><b>III.	CONDICIONES URBANAS Y SOCIALES EN EL SECTOR.</b></h5>
			<br/>

			<!-- PREGUNTA9-->
			<b>P9 ¿Cómo calificaría usted el servicio de educación que le ofrecen en su sector?</b>
			<select class="form-control" name="P9CalificaEducacion">
				  <option value="Deficiente"> 1. Deficiente </option>
				  <option value="Malo"> 2. Malo </option>
				  <option value="Regular"> 3. Regular </option>
				  <option value="Bueno"> 4. Bueno </option>
				  <option value="MuyBueno"> 5. Muy Bueno </option>
			</select>

			<br/>
			<!-- PREGUNTA10-->

			<b>P10 ¿Cuántas opciones de transporte tiene usted para movilizarse de su casa al trabajo o lugar que más frecuenta? </b>
			<table class="table">
				<th>Opción de transporte</th>
				<th>¿Cuál usa? (numerar en orden) </th>
				<tr>
					<td>
						<input type="text" class="form-control" name="P10Opcion1" placeholder="1. ">
					</td>
					<td>
						<input type="text" class="form-control"  name="P10Usa1"  >
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="form-control"  name="P10Opcion2" placeholder="2.">
					</td>
					<td>
						<input type="text" class="form-control"  name="P10Usa2" >
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="form-control"  name="P10Opcion3" placeholder="3." >
					</td>
					<td>
						<input type="text" class="form-control"  name="P10Usa3" >
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="form-control"  name="P10Opcion4" placeholder="4." >
					</td>
					<td>
						<input type="text" class="form-control"  name="P10Usa4" >
					</td>
				</tr>
			</table>
			<br/>

			<!-- PREGUNTA11-->
			<b>P11 ¿En promedio cuánto le cuesta un día normal de transporte?</b>
			<div class="input-group"><span class="input-group-addon">$</span><input class="form-control" type="number" min="0" name="P11CostoTrans"></div>
			<br/>

			<!-- PREGUNTA12-->
			<b>P12 ¿En promedio cuanto tiempo demora usted en un trayecto del trabajo o al lugar que más frecuenta?</b>
			<input class="form-control"type="time" name="P12TiempoTrans"> 
			<br/>

			<!-- PREGUNTA13-->
			<b>P13 ¿Cómo calificaría usted la labor policial en su sector?</b>
			<select class="form-control" name="P13CalificaPolicia">
				  <option value="Deficiente"> 1. Deficiente </option>
				  <option value="Malo"> 2. Malo </option>
				  <option value="Regular"> 3. Regular </option>
				  <option value="Bueno"> 4. Bueno </option>
				  <option value="MuyBueno"> 5. Muy Bueno </option>
			</select>
			<br/>

			<!-- PREGUNTA14-->
			<b>P14 ¿En una escala de 1 a 5 qué tan seguro se siente en su sector?</b>
			<select class="form-control" name="P14CalificaSeguridad">
				  <option value="MuyInseguro"> 1. Muy Inseguro </option>
				  <option value="Inseguro"> 2. Inseguro </option>
				  <option value="Niseguroniinseguro"> 3. Ni seguro ni inseguro </option>
				  <option value="Seguro"> 4. Seguro </option>
				  <option value="MuySeguro"> 5. Muy Seguro </option>
			</select>
			<br/>

			<!-- PREGUNTA15-->
			<b>P15 ¿Qué tipo de organizaciones conoce usted en su sector?</b>
			<table class="table">
				<th>Organizaciones</th>
				<th>Sí</th>
				<th>No</th>
				<tr>
					<td>
						Madres comunitarias
					</td>
					<td>
						<input type="radio" name="P15Madres" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P15Madres" id="optionsRadios1" value="No" checked><br/>
					</td>
				</tr>
				<tr>
					<td>
						Clubes juveniles 
					</td>
					<td>
						<input type="radio" name="P15Clubes" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P15Clubes" id="optionsRadios1" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						Organizaciones étnicas
					</td>
					<td>
						<input type="radio" name="P15Etnicas" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P15Etnicas" id="optionsRadios1" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						Juntas de acción comunal 
					</td>
					<td>
						<input type="radio" name="P15Juntas" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P15Juntas" id="optionsRadios1" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						Comedores comunitarios
					</td>
					<td>
						<input type="radio" name="P15Comedores" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P15Comedores" id="optionsRadios1" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						Grupos culturales y ambientales
					</td>
					<td>
						<input type="radio" name="P15Culturales" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P15Culturales" id="optionsRadios1" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						Otros ¿Cuales?
					</td>
					<td>
						<input type="text" class="form-control" name="P15Otro" >
					</td>
				</tr>
			</table>
			<br/>

			<!-- PREGUNTA16-->
			<b>P16 ¿Usted o algún miembro de su familia hace(n) parte activa de alguna de estas organizaciones?</b>
			<table class="table">
				<th>Sí ¿Cuál?</th>
				<th>No (continuar)</th>
				<tr>
					<td>
						<input type="radio" name="P16FamiliaParte" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P16FamiliaParte" id="optionsRadios1" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="form-control" name="P16FamiliaParteCual" placeholder="¿Cuál?" >
					</td>
				</tr>
			</table>
			<br/>

			<!-- PREGUNTA17-->
			<b>P17 ¿De los proyectos que usted conoce ha identificado algún logro?</b>
			<table class="table">
				<th>Sí ¿Cuál(es)?</th>
				<th>No</th>
				<tr>
					<td>
						<input type="radio" name="P17Logro" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P17Logro" id="optionsRadios1" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="form-control" name="P17LogroCual" placeholder="¿Cuál?" >
					</td>
				</tr>
			</table>
			<br/>
			
			<!-- PREGUNTA18-->
			<b>P18 ¿Cree usted que este tipo de organizaciones generan cambios en su calidad de vida?</b>
			<table class="table">
				<th>Sí ¿Cuál(es)?</th>
				<th>No</th>
				<tr>
					<td>
						<input type="radio" name="P18Calidad" id="optionsRadios1" value="Si">
					</td>
					<td>
						<input type="radio" name="P18Calidad" id="optionsRadios1" value="No" checked>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="form-control" name="P18CalidadPorque" placeholder="¿Por qué?" >
					</td>
				</tr>
			</table>

			<br><br>
			<input class="btn btn-primary" type="submit" value=" Continuar ">
			<a href="4_InformacionVivienda.html">Demo</a>
		</div>

	</form>


</body>



<script type="text/javascript">






  function cargarForm3( P1Parques, P1Hospitales, P1Colegios, P1Iglesias, P1SedeAC, P1Jardines, P1Otro, P2Utiliza, P3Aguas, P3Canos, P3Botadero, P3Enmontadas, P3Otro, P4Conforme, P5UtilizaSalud, P5Cual, P7UtilizaColegio, P8Preescolar, P8Primaria, P8Media, P8Bachillerato, P8Tecnico, P9CalificaEducacion, P10Opcion1, P10Usa1, P10Opcion2, P10Usa2, P10Opcion3, P10Usa3, P10Opcion4, P10Usa4, P11CostoTrans, P12TiempoTrans, P13CalificaPolicia, P14CalificaSeguridad, P15Madres, P15Clubes, P15Etnicas, P15Juntas, P15Comedores, P15Culturales, P15Otro, P16FamiliaParte, P16FamiliaParteCual, P17Logro, P17LogroCual, P18Calidad, P18CalidadPorque){
    var formulario = document.form3; 
    //cada Pregunta es cargada en el formulario, si el formulario cambia usar Find and Replace de cualqueir editor de texto
    formulario.P1Parques.value= P1Parques;
    formulario.P1Hospitales.value= P1Hospitales;
	formulario.P1Colegios.value= P1Colegios;
	formulario.P1Iglesias.value= P1Iglesias;
	formulario.P1SedeAC.value= P1SedeAC;
	formulario.P1Jardines.value= P1Jardines;
	formulario.P1Otro.value= P1Otro;
	formulario.P2Utiliza.value= P2Utiliza;
	formulario.P3Aguas.value= P3Aguas;
	formulario.P3Canos.value= P3Canos;
	formulario.P3Botadero.value= P3Botadero;
	formulario.P3Enmontadas.value= P3Enmontadas;
	formulario.P3Otro.value= P3Otro;
	formulario.P4Conforme.value= P4Conforme;
	formulario.P5UtilizaSalud.value= P5UtilizaSalud;
	formulario.P5Cual.value= P5Cual;
	formulario.P7UtilizaColegio.value= P7UtilizaColegio;
	formulario.P8Preescolar.value= P8Preescolar;
	formulario.P8Primaria.value= P8Primaria;
	formulario.P8Media.value= P8Media;
	formulario.P8Bachillerato.value= P8Bachillerato;
	formulario.P8Tecnico.value= P8Tecnico;
	formulario.P9CalificaEducacion.value= P9CalificaEducacion;
	formulario.P10Opcion1.value= P10Opcion1;
	formulario.P10Usa1.value= P10Usa1;
	formulario.P10Opcion2.value= P10Opcion2;
	formulario.P10Usa2.value= P10Usa2;
	formulario.P10Opcion3.value= P10Opcion3;
	formulario.P10Usa3.value= P10Usa3;
	formulario.P10Opcion4.value= P10Opcion4;
	formulario.P10Usa4.value= P10Usa4;
	formulario.P11CostoTrans.value= P11CostoTrans;
	formulario.P12TiempoTrans.value= P12TiempoTrans;
	formulario.P13CalificaPolicia.value= P13CalificaPolicia;
	formulario.P14CalificaSeguridad.value= P14CalificaSeguridad;
	formulario.P15Madres.value= P15Madres;
	formulario.P15Clubes.value= P15Clubes;
	formulario.P15Etnicas.value= P15Etnicas;
	formulario.P15Juntas.value= P15Juntas;
	formulario.P15Comedores.value= P15Comedores;
	formulario.P15Culturales.value= P15Culturales;
	formulario.P15Otro.value= P15Otro;
	formulario.P16FamiliaParte.value= P16FamiliaParte;
	formulario.P16FamiliaParteCual.value= P16FamiliaParteCual;
	formulario.P17Logro.value= P17Logro;
	formulario.P17LogroCual.value= P17LogroCual;
	formulario.P18Calidad.value= P18Calidad; 
    formulario.P18CalidadPorque.value= P18CalidadPorque;
    /*
    
        cargarMultiples(P11,"P11"); 
        cargarMultiples(P21,"P21"); 
        cargarMultiples(P22,"P22"); 
    	cargarMultiples(P31,"P31"); 
    	cargarMultiples(P41,"P41");  
    formulario.razones.value = razones;
    formulario.otro11.value = otro11;
    formulario.otro21.value = otro21;
    formulario.otro22.value = otro22;
    formulario.otro31.value = otro31;*/
  }


</script>




<?php
 	@session_start();
	$id = $_SESSION['usuario']['encuestado'];


   	include("controller/consultas.php");   	
   	//validar que exista un id para el usuario encuestado
	encuestadoLogged();



 	/**
    * llamado a la funcion de llenar formulario 3 que carga cada una de las respuestas en 
	* la sección 3 de la encuesta que corresponde a la sección Urbana y Social, que son preguntas 
	* la mayoria de si/no sobre elementos que componen el sector en el que habita el encuestado
    * @return array[] cada una de las respuestas obtenidas por cada pregunta
    */
	$array = llenarFormulario3( $id );
	
    if($array!=0)
    {
    	echo('<script>
      cargarForm3("'.$array['P1Parques'].'","'.$array['P1Hospitales'].'","'.$array['P1Colegios'].'","'.$array['P1Iglesias'].'","'.$array['P1SedeAC'].'","'.$array['P1Jardines'].'","'.$array['P1Otro'].'","'.$array['P2Utiliza'].'","'.$array['P3Aguas'].'","'.$array['P3Canos'].'","'.$array['P3Botadero'].'","'.$array['P3Enmontadas'].'","'.$array['P3Otro'].'","'.$array['P4Conforme'].'","'.$array['P5UtilizaSalud'].'","'.$array['P5Cual'].'","'.$array['P7UtilizaColegio'].'","'.$array['P8Preescolar'].'","'.$array['P8Primaria'].'","'.$array['P8Media'].'","'.$array['P8Bachillerato'].'","'.$array['P8Tecnico'].'","'.$array['P9CalificaEducacion'].'","'.$array['P10Opcion1'].'","'.$array['P10Usa1'].'","'.$array['P10Opcion2'].'","'.$array['P10Usa2'].'","'.$array['P10Opcion3'].'","'.$array['P10Usa3'].'","'.$array['P10Opcion4'].'","'.$array['P10Usa4'].'","'.$array['P11CostoTrans'].'","'.$array['P12TiempoTrans'].'","'.$array['P13CalificaPolicia'].'","'.$array['P14CalificaSeguridad'].'","'.$array['P15Madres'].'","'.$array['P15Clubes'].'","'.$array['P15Etnicas'].'","'.$array['P15Juntas'].'","'.$array['P15Comedores'].'","'.$array['P15Culturales'].'","'.$array['P15Otro'].'","'.$array['P16FamiliaParte'].'","'.$array['P16FamiliaParteCual'].'","'.$array['P17Logro'].'","'.$array['P17LogroCual'].'","'.$array['P18Calidad'].'","'.$array['P18CalidadPorque'].'");
      </script>');	
    }
    
?>


</html>

