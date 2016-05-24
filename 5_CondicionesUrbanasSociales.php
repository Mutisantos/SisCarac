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


<form class="" role="form" action="/assets/controller/guardarForm5.php" method="POST" name="form5" enctype="multipart/form-data">



  <div class="col-md-6 ">

  	<h5><b>V. VARIABLES SOCIOECONÓMICAS</b></h5>
    
    <b>P26 ¿A través de cuál de las opciones que le voy a leer obtivo usted los recusos para adquirir su vivienda actual?</b><br/>
    <table class="table">
        <th>Opción</th>
        <th>Sí</th>
        <th>No</th>
        <tr>
          <td>
            Ahorro
          </td>
          <td>
            <input type="radio" name="P26Ahorro" id="optionsRadios1" value="Si">
          </td>
          <td>
            <input type="radio" name="P26Ahorro" id="optionsRadios1" value="No" checked><br/>
          </td>
        </tr>
        <tr>
          <td>
            Crédito hipotecario
          </td>
          <td>
            <input type="radio" name="P26Credito" id="optionsRadios2" value="Si">
          </td>
          <td>
            <input type="radio" name="P26Credito" id="optionsRadios2" value="No" checked>
          </td>
        </tr>
        <tr>
          <td>
            Subsidio del gobierno
          </td>
          <td>
            <input type="radio" name="P26Subsidio" id="optionsRadios3" value="Si">
          </td>
          <td>
            <input type="radio" name="P26Subsidio" id="optionsRadios3" value="No" checked>
          </td>
        </tr>
        <tr>
          <td>
            Prestamo de un conocido
          </td>
          <td>
            <input type="radio" name="P26Prestamo" id="optionsRadios4" value="Si">
          </td>
          <td>
            <input type="radio" name="P26Prestamo" id="optionsRadios4" value="No" checked>
          </td>
        </tr>
        <tr>
          <td>
            Cesantias
          </td>
          <td>
            <input type="radio" name="P26Cesantias" id="optionsRadios5" value="Si">
          </td>
          <td>
            <input type="radio" name="P26Cesantias" id="optionsRadios5" value="No" checked>
          </td>
        </tr>
        <tr>
          <td>
            Otro ¿Cuál?
          </td>
          <td>
            <input type="text" name="P26Otro" placeholder="¿Cuál?">
          </td>
        </tr>
      </table>


    <b>P27 ¿Considera usted que actualmente su vivienda necesita mejoramiento? </b>
    <select class="form-control" name="P27Mejoramiento">
      <option value="si">Sí</option>
      <option value="no">No</option>
    </select>
    <br>

    <b>P28 ¿Considera usted la posibilidad de solicitar un crédito o subsidio para mejorar su vivienda?</b>
    <select class="form-control" name="P28Subsidio">
      <option value="si">Sí</option>
      <option value="no">No (P30)</option>
    </select>
    <br>

    <b>P29 ¿Por qué?</b>
    <input type="text" name="P29Porque" placeholder="¿Por qué?"><br>

    <h5><b>VI. VARIABLES SOCIOCULTURALES</b></h5>
    <b>P30 Lugar de origen movilización y razones</b>
    <table class= "table" >
      <th>
        LUGAR DE ORIGEN
      </th>
      <th>
        AÑO DE MOVILIZACIÓN
      </th>
      <th>
        LUGAR AL QUE SE DESPLAZÓ
      </th>
      <th>
        RAZÓN
      </th>
      <tr>
        <td>
          <input type="text" name="P30LugarO1" placeholder="Lugar">
        </td>
        <td>
          <input type="number" name="P30Ano1" placeholder="Año">
        </td>
        <td>
          <input type="text" name="P30LugarD1" placeholder="Lugar">
        </td>
        <td>
          <input type="text" name="P30Razon1" placeholder="Razón">
        </td>
      </tr>
      <tr>
        <td>
          <input type="text" name="P30LugarO2" placeholder="Lugar">
        </td>
        <td>
          <input type="number" name="P30Ano2" placeholder="Año">
        </td>
        <td>
          <input type="text" name="P30LugarD2" placeholder="Lugar">
        </td>
        <td>
          <input type="text" name="P30Razon2" placeholder="Razón">
        </td>
      </tr>
      <tr>
        <td>
          <input type="text" name="P30LugarO3" placeholder="Lugar">
        </td>
        <td>
          <input type="number" name="P30Ano3" placeholder="Año">
        </td>
        <td>
          <input type="text" name="P30LugarD3" placeholder="Lugar">
        </td>
        <td>
          <input type="text" name="P30Razon3" placeholder="Razón">
        </td>
      </tr>
      <tr>
        <td>
          <input type="text" name="P30LugarO4" placeholder="Lugar">
        </td>
        <td>
          <input type="number" name="P30Ano4" placeholder="Año">
        </td>
        <td>
          <input type="text" name="P30LugarD4" placeholder="Lugar">
        </td>
        <td>
          <input type="text" name="P30Razon4" placeholder="Razón">
        </td>
      </tr>
    </table>
    <br/>

    <b>P31 ¿Qué tan conforme se encuentra usted con su actual vivienda?</b>
    <select class="form-control" name="P31ConformeVivienda">
        <option value="MuyInconforme"> 1. Muy Inconforme </option>
        <option value="Inconforme"> 2. Inconforme </option>
        <option value="Niconformeniinconforme"> 3. Ni conforme ni inconforme </option>
        <option value="Conforme"> 4. Conforme </option>
        <option value="MuyConforme"> 5. Muy Conforme </option>
    </select>
    <br/>

    <b>P32 ¿Por qué razón?</b>
    <input type="text" class="form-control" name="P32Porque" placeholder="¿Por qué?"><br/>

    <b>P33 Comparando la vivienda que vivía anteriormente con la actual, ¿Qué es lo que más extraña?</b>
    <input type="text" class="form-control" name="P33Extrana" placeholder="¿Qué?"><br/>
      
    
  </div>
  <div class="col-md-6 ">
    <b>P34 ¿Qué cambios le gustaría realizar a su vivienda, para que quede como usted la sueña o desea?</b>
    <input type="text" class="form-control" name="P34Cambios" placeholder="¿Qué?"><br/>

    <b>P35 ¿Considera qué el lugar que habita actualmente le permite vivir dignamente? </b>
    <select class="form-control" name="P35Dignamente">
      <option value="si">Sí</option>
      <option value="no">No</option>
    </select>
    <br>

    <b>P36 ¿Por qué?</b>
    <input type="text" class="form-control" name="P36Porque" placeholder="¿Por qué?"><br/>

    <b>P37 ¿Qué animales o mascotas tiene actualmente en su vivienda?</b>
    <input type="text" class="form-control" name="P37Mascotas" placeholder="¿Qué?"><br/>

    <b>P38 ¿Cuáles son los problemas familiares más frecuentes en su hogar?</b>
    <input type="text" class="form-control" name="P38Problemas" placeholder="¿Cuáles?"><br/>

    <b>P39 ¿Con qué persona de su hogar es más dificil la convivencia y por qué?</b>
    <input type="text" class="form-control" name="P39PersonaConvi" placeholder="¿Quién? y ¿Por qué?"><br/>

    <b>P40 ¿Generalmente cómo se solucionan los problemas en su hogar? </b>
    <select class="form-control" name="P40Solucion">
      <option value="Agresión Verval">Agresión Verval</option>
      <option value="Dialogo">Dialogo</option>
      <option value="Discusión">Discusión</option>
      <option value="Agresión Fisica">Agresión Fisica</option>
      <option value="Indiferencia">Indiferencia</option>
      <option value="Otro">Otro</option>
    </select>
    <br>
    Otro <input type="text" name="P40Otro" placeholder="¿Cuál?"><br>

    <b>P41 En una escala de 1 a 5 ¿Qué tan buena o mala cree que es su calidad de vida actualmente?</b>
    <select class="form-control" name="P41CalidadVida">
        <option value="MuyMala"> 1. Muy Mala </option>
        <option value="Mala"> 2. Mala </option>
        <option value="NibuenaniMala"> 3. Ni buena ni Mala </option>
        <option value="Buena"> 4. Buena </option>
        <option value="MuyBuena"> 5. Muy Buena </option>
    </select>
    <br/>

    <b>P42 ¿Por qué?</b>
    <input type="text" class="form-control" name="P42Porque" placeholder="¿Por qué?"><br/>

    <b>P43 ¿Cómo cree que será sus condiciones de vida y la de su familia en el transcurso de un año?</b>
    <select class="form-control" name="P43CalidadVida">
        <option value="Mejorarán">Mejorarán</option>
        <option value="Empeorarán">Empeorarán</option>
        <option value="Iguales"> Iguales</option>
    </select>
    <br/>

    <b>P44 ¿Por qué?</b>
    <input type="text" class="form-control" name="P44Porque" placeholder="¿Por qué?"><br/>

  	
  	<input class="btn btn-primary" type="submit" value=" Continuar ">
  	<!-- <a href="6_CanvasFamilograma.html">Demo</a> -->
  </div>

</form>

</body>

<script type="text/javascript">

//mediante la libreria jQuery se cargan los select option 
function cargarMultiples(valores, nombreSelector){
	// var values="Parques,Hospitales";
	var values = valores;
	$.each(values.split(","), function(i,e){
    	$("#"+nombreSelector+" option[value='" + e + "']").prop("selected", true);
	});	
}

//funcion para cargar formulario 5
  function cargarForm5( P26Ahorro, P26Credito, P26Subsidio, P26Prestamo, P26Cesantias, P26Otro, P27Mejoramiento, P28Subsidio, P29Porque, P30LugarO1, P30Ano1, P30LugarD1, P30Razon1, P30LugarO2, P30Ano2, P30LugarD2, P30Razon2, P30LugarO3, P30Ano3, P30LugarD3, P30Razon3, P30LugarO4, P30Ano4, P30LugarD4, P30Razon4, P31ConformeVivienda, P32Porque, P33Extrana, P34Cambios, P35Dignamente, P36Porque, P37Mascotas, P38Problemas, P39PersonaConvi, P40Solucion, P40Otro, P41CalidadVida, P42Porque, P43CalidadVida, P44Porque) {

    var formulario = document.form5;
        
    formulario.P26Ahorro.value= P26Ahorro; 
    formulario.P26Credito.value= P26Credito; 
    formulario.P26Subsidio.value= P26Subsidio; 
    formulario.P26Prestamo.value= P26Prestamo; 
    formulario.P26Cesantias.value= P26Cesantias; 
    formulario.P26Otro.value= P26Otro; 
    formulario.P27Mejoramiento.value= P27Mejoramiento; 
    formulario.P28Subsidio.value= P28Subsidio; 
    formulario.P29Porque.value= P29Porque; 
    formulario.P30LugarO1.value= P30LugarO1; 
    formulario.P30Ano1.value= P30Ano1; 
    formulario.P30LugarD1.value= P30LugarD1; 
    formulario.P30Razon1.value= P30Razon1; 
    formulario.P30LugarO2.value= P30LugarO2; 
    formulario.P30Ano2.value= P30Ano2; 
    formulario.P30LugarD2.value= P30LugarD2; 
    formulario.P30Razon2.value= P30Razon2; 
    formulario.P30LugarO3.value= P30LugarO3; 
    formulario.P30Ano3.value= P30Ano3; 
    formulario.P30LugarD3.value= P30LugarD3; 
    formulario.P30Razon3.value= P30Razon3; 
    formulario.P30LugarO4.value= P30LugarO4; 
    formulario.P30Ano4.value= P30Ano4; 
    formulario.P30LugarD4.value= P30LugarD4; 
    formulario.P30Razon4.value= P30Razon4; 
    formulario.P31ConformeVivienda.value= P31ConformeVivienda; 
    formulario.P32Porque.value= P32Porque; 
    formulario.P33Extrana.value= P33Extrana; 
    formulario.P34Cambios.value= P34Cambios; 
    formulario.P35Dignamente.value= P35Dignamente; 
    formulario.P36Porque.value= P36Porque; 
    formulario.P37Mascotas.value= P37Mascotas; 
    formulario.P38Problemas.value= P38Problemas; 
    formulario.P39PersonaConvi.value= P39PersonaConvi; 
    formulario.P40Solucion.value= P40Solucion; 
    formulario.P40Otro.value= P40Otro; 
    formulario.P41CalidadVida.value= P41CalidadVida; 
    formulario.P42Porque.value= P42Porque; 
    formulario.P43CalidadVida.value= P43CalidadVida; 
    formulario.P44Porque.value= P44Porque; 

    
  }

</script>






<?php
 	@session_start();
	
   	
   	include("controller/consultas.php");
	//validar que exista un id para el usuario encuestado
	encuestadoLogged();
  	
  	$id = $_SESSION['usuario']['encuestado'];

  /**
  * llamado a la funcion de llenar formulario 5 que carga cada una de las respuestas en 
  * la sección 5 de la encuesta que corresponde a la sección de Socioculturales y Gastos del encuestado
  * @return array[] ccada una de las respuestas por pregunta
  */
	$array = llenarFormulario5( $id );
	
    if($array!=0)
    {
      echo('<script>
        cargarForm5("'.$array['P26Ahorro'].'", "'.$array['P26Credito'].'", "'.$array['P26Subsidio'].'", "'.$array['P26Prestamo'].'", "'.$array['P26Cesantias'].'", "'.$array['P26Otro'].'", "'.$array['P27Mejoramiento'].'", "'.$array['P28Subsidio'].'", "'.$array['P29Porque'].'", "'.$array['P30LugarO1'].'", "'.$array['P30Ano1'].'", "'.$array['P30LugarD1'].'", "'.$array['P30Razon1'].'", "'.$array['P30LugarO2'].'", "'.$array['P30Ano2'].'", "'.$array['P30LugarD2'].'", "'.$array['P30Razon2'].'", "'.$array['P30LugarO3'].'", "'.$array['P30Ano3'].'", "'.$array['P30LugarD3'].'", "'.$array['P30Razon3'].'", "'.$array['P30LugarO4'].'", "'.$array['P30Ano4'].'", "'.$array['P30LugarD4'].'", "'.$array['P30Razon4'].'", "'.$array['P31ConformeVivienda'].'", "'.$array['P32Porque'].'", "'.$array['P33Extrana'].'", "'.$array['P34Cambios'].'", "'.$array['P35Dignamente'].'", "'.$array['P36Porque'].'", "'.$array['P37Mascotas'].'", "'.$array['P38Problemas'].'", "'.$array['P39PersonaConvi'].'", "'.$array['P40Solucion'].'", "'.$array['P40Otro'].'", "'.$array['P41CalidadVida'].'", "'.$array['P42Porque'].'", "'.$array['P43CalidadVida'].'", "'.$array['P44Porque'].'");
      </script>');  
    }
    
?>


</html>







