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
    	<script type="text/javascript" src="/assets/js/jquery-1.11.0.min.js"></script>
    <!-- Importar temas de Twitter Bootstrap -->
    	<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    <!-- Importar temas de Twitter Bootstrap -->
    	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" />
    	<link rel="stylesheet" type="text/css" href="/assets/css/estilo.css" />            
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
                    <li class="active"><a href="1_FormularioOdontologia.php">Historia Clínica</a></li>
                    <li ><a href="/assets/2_FormularioOdontologia.php">Semaforizacón</a></li>
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
    <img class="media-object" src="/assets/img/logojaveriana.png" alt="...">
  </a>
  <h2>FORMULARIO ODONTOLOGÍA</h2>
</div>

<form class="" role="form" action="/assets/controller/guardarFormO1.php" method="POST" name="formo1" enctype="multipart/form-data">

<div class="row">  
  <div class="col-md-4">
  	<h4><b>LA PERSONA Y SU ENTORNO</b></h4>
	<b>1</b>
  	<div class="container-fluid">
  		Doc. Identidad: <input class="form-control" type="number" min="1" name="id"><br>
	  	Edad: <input class="form-control" type="number" min="1" max="120" name="edad"><br>
	  	Sexo: <select class="form-control" name="sexo">
					  <option value="Masculino">Masculino</option>
					  <option value="Femenino">Femenino</option>
		</select>
	  	<br>
	  	Localidad:
		<select class="form-control" name="localidad">
			<option value="Antonio Nariño">Antonio Nariño</option>
			<option value="Barrios Unidos">Barrios Unidos</option>
			<option value="Bosa">Bosa</option>
			<option value="Chapinero">Chapinero</option>
			<option value="Ciudad Bolívar">Ciudad Bolívar</option>
			<option value="Engativá">Engativá</option>
			<option value="Fontibón">Fontibón</option>
			<option value="Fuera de Bogotá">Fuera de Bogotá</option>
			<option value="Kennedy">Kennedy</option>
			<option value="La Candelaria">La Candelaria</option>
			<option value="Los Mártires">Los Mártires</option>
			<option value="Puente Aranda">Puente Aranda</option>
			<option value="Rafael Uribe Uribe">Rafael Uribe Uribe</option>
			<option value="San Cristóbal">San Cristóbal</option>
			<option value="Santa Fé">Santa Fé</option>
			<option value="Suba">Suba</option>
			<option value="Sumapaz">Sumapaz</option>
			<option value="Teusaquillo">Teusaquillo</option>
			<option value="Tunjuelito">Tunjuelito</option>
			<option value="Usaquén">Usaquén</option>
			<option value="Usme">Usme</option>
		</select>
		<br>

	  	UPZ: <input class="form-control"type="text" name="upz"><br>
	  	Barrio: <input class="form-control"type="text" name="barrio"><br>
	</div>

	<br>
	<b>2 ¿Con cuántas personas vive usted?</b><br>
  	<div class="container-fluid">
	  	<br>
	  	<div class="container-fluid">
		  	Adulto Mayor <input class="form-control"type="number" min="0" max="10" name="adultoMayor"><br>
		  	Adulto <input class="form-control"type="number" min="0" max="10" name="adulto"><br>
		  	Joven <input class="form-control"type="number" min="0" max="10" name="joven"><br>
		  	Niño <input class="form-control"type="number" min="0" max="10" name="nino"><br>
		  	Menor de 5 años <input class="form-control"type="number" min="0" max="10" name="menor5"><br>
		</div>
	</div>
	<br>
	<b>3 ¿A qué se dedica?</b><br>
  	<div class="container-fluid">
		  	
			<select class="form-control" name="trabajo">
						  <option value="Empleado">Empleado</option>
						  <option value="Independiente">Independiente</option>
						  <option value="Hogar">Hogar</option>
						  <option value="Desempleado">Desempleado</option>
						  <option type="text" value="Desempleado"></option>
			</select>
		  	<!--  -->
			<input class="form-control" type="number" placeholder="¿Otro?¿Cuál?" min="0" max="10" name="otro13">
	</div>	
  	
	<br><b>4 ¿A qué regimen de salud está afiliado?</b><br>
	<div class="container-fluid">
		<select class="form-control" name="regimenSalud">
					  <option value="Contributivo">Contributivo</option>
					  <option value="Subsidiado">Subsidiado</option>
					  <option value="No asegurado con encuesta SISBEN">No asegurado con encuesta SISBEN</option>
					  <option value="No asegurado sin encuesta SISBEN">No asegurado sin encuesta SISBEN</option>
					  <option value="No sabe">No sabe</option>
					  <option value="Poblacion Especial">Población Especial</option>
		</select>
	</div>
	
	<br><b>5 ¿Cuál es su nivel de estudio?</b><br>
	<div class="container-fluid">
		<select class="form-control" name="estudio">
					  <option value="Primaria">Prímaria</option>
					  <option value="Secundaria">Secundaria</option>
					  <option value="Tecnico">Técnico</option>
					  <option value="Universitario">Universitario</option>
					  <option value="Ninguno">Ninguno</option>
		</select>
	</div>
  </div>
  
  <div class="col-md-4">
  	<h4><b>CONOCIMIENTOS EN SALUD ORAL</b></h4>
  	<b>1 ¿Sabe usted cuáles son las enfermedades más comunes de la boca?</b><br>
  	<div class="container-fluid">
  		
  		<select class="form-control" name="enfermedadesComunes[]" multiple>
					  <option value="Caries">Caries</option>
					  <option value="Sangrado en las encías">Sangrado en las encías</option>
					  <option value="Cálculo-Sarro">Cálculo-Sarro</option>
					  <option value="Placas en la boca">Placas en la boca</option>
		</select>
	  	<input class="form-control" type="text" name="otro21" placeholder="Otro ¿Cuál?"><br>
	<!-- <br> -->
	</div>
  	
  	<br><b>2 ¿Sabe usted por qué se producen las enfermedades en la boca?</b><br>
	<div class="container-fluid">
		<select class="form-control" name="produccionEnfermedades[]" multiple>
					  <option value="Mala higiene">Mala higiene</option>
					  <option value="Herencia">Herencia</option>
					  <option value="Mala alimentación">Mala alimentación</option>
					  <option value="Comer muchos dulces">Comer muchos dulces</option>
					  <option value="Por estar embarazada">Por estar embarazada</option>
		</select>
	</div>
	<br><b>3 ¿Quién le enseñó a usted a limpiarse la boca?</b><br>
	<div class="container-fluid">
		<select class="form-control" name="quien[]" id="quien" multiple>
					  <option value="Profesional de la salud">Profesional de la salud</option>
					  <option value="Padres">Padres</option>
					  <option value="Hermano">Hermano</option>
					  <option value="Revista">Revista/Televisión</option>
					  <option value="Aprendio solo">Aprendió solo</option>
		</select>
	</div>

	<br><b>4 ¿Para qué sirve la boca?</b><br>
	<div class="container-fluid">
		<select class="form-control" name="paraQue[]" id="paraQue" multiple>
					  <option value="Hablar">Hablar</option>
					  <option value="Reir">Reir</option>
					  <option value="Comer">Comer</option>
					  <option value="Besar">Besar</option>
		</select>
		<input class="form-control" type="text" name="otro24" placeholder="Otro ¿Cuál?"><br>
	</div>
	

	<br><b>5 ¿Qué otros elementos a parte del cepillo conoce usted para lavarse la boca?</b><br>
	<div class="container-fluid">
		<select class="form-control" name="otrosElementos[]" id="otrosElementos" multiple>
					  <option value="Agua">Agua</option>
					  <option value="Hilo o Fique">Hilo o Fique</option>
					  <option value="Bolsa de Plástico">Bolsa de Plástico</option>
					  <option value="Tela">Tela</option>
		</select>
		<input class="form-control" type="text" name="otro25" placeholder="Otro ¿Cuál?"><br>
		<br>
	</div>
  </div>
  
  <div class="col-md-4">
  	<h4><b>PRACTICAS EN SALUD ORAL</b></h4>
  	<b>1 ¿Qué elementos usa para lavarse la boca?</b><br>
  	<div class="container-fluid">
  		<select class="form-control" name="Elementos[]" id="Elementos" multiple>
					  <option value="Cepillo de Dientes">Cepillo de Dientes</option>
					  <option value="Crema dental">Crema dental</option>
					  <option value="Hilo dental">Hilo dental</option>
					  <option value="Palillos">Palillos</option>
					  <option value="Enjuague">Enjuague</option>
		</select>
		<input class="form-control" type="text" name="otro31" placeholder="Otro ¿Cuál?">
	</div>
	<br>

	<br><b>2 ¿Cada cuánto se lava la boca?</b><br>
  	<div class="container-fluid">
  		<select class="form-control" name="frecuencia[]" id="frecuencia" multiple>
					  <option value="Al levantarse">Al levantarse</option>
					  <option value="Al Desayunar">Al Desayunar</option>
					  <option value="Al Almorzar">Al Almorzar</option>
					  <option value="Después de Comer">Después de Comer</option>
					  <option value="Nunca">Nunca</option>
		</select>
	</div>
	<br>

	<b>3 ¿Qué hace cuando le duele una muela o le sangran las encías?</b><br>
	<div class="container-fluid">
		<select class="form-control" name="dolorMuela[]" id="dolorMuela" multiple>
					  <option value="Va al Odontologo">Va al Odontólogo</option>
					  <option value="Remedio Casero">Utiliza un remedio casero</option>
					  <option value="Hermano">Hermano</option>
					  <option value="Aumena el lavado">Aumenta la frecuencia del lavado de la boca</option>
					  <option value="Nada">Nada</option>
					  <option value="Esperar">Espera a que le pase</option>
		</select>
	</div>
	<br>

	<br><b>4 ¿Cuáles son los problemas que usted identifíca para no ir al odontólogo?</b><br>
	<div class="container-fluid">
		<select class="form-control" name="problemasOdontologo[]" id="problemasOdontologo" multiple>
					  <option value="Precio Consulta">Consulta muy cara y no tengo dinero</option>
					  <option value="Temor">Temor al odontólogo</option>
					  <option value="No tengo tiempo">No tengo tiempo</option>
					  <option value="Lejos">El lugar donde me atienden queda muy lejos</option>
					  <option value="Desconocimiento">No sé donde tengo que ir</option>
		</select>
	</div>

	<br><b>5 ¿Cuándo fue la ultima vez que visitó al odontólogo?</b><br>
	<div class="container-fluid">
		<select class="form-control" name="ultimaVisita[]" id="ultimaVisita" multiple>
					  <option value="Un mes o menos">Hace un mes o menos</option>
					  <option value="Entre 1 y 6">Entre 1 y 6 meses</option>
					  <option value="Entre 6 y 12 meses">Entre 6 meses y un año</option>
					  <option value="Mas de 12 meses">Más de 1 año</option>
					  <option value="Nunca">Nunca</option>
		</select>
	</div>
	<br>
	
	<input class="btn btn-primary" type="submit" value=" Continuar ">	
  </div>

</div>
	
</form>
</body>
<script>
	
	function cargarFormulario(documento, edad, sexo, actividad, segSalud, escolaridad, localidad, barrio, upz){
		
		var formulario = document.formo1;

    	formulario.id.value = documento;  
    	formulario.edad.value = edad;  
    	formulario.sexo.value = sexo;  
    	formulario.trabajo.value = actividad;  
    	formulario.regimenSalud.value = segSalud;  
    	formulario.estudio.value = escolaridad;  

    	formulario.localidad.value = localidad;  
    	formulario.barrio.value = barrio;  
    	formulario.upz.value = upz;  
	}

</script>
<?php

	function llenarOdontologia($documento,$edad,$sexo,$actividad,$segSalud,$escolaridad,$localidad, $barrio, $upz){
		echo '<script>
		 cargarFormulario('.$documento.', "'.$edad.'", "'.$sexo.'", "'.$actividad.'", "'.$segSalud.'", "'.$escolaridad.'", "'.$localidad.'", "'.$barrio.'", "'.$upz.'");
		</script>';

	}
?>
</html>
