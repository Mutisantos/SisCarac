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

<form class="form-inline" role="form" action="/assets/controller/guardarForm4.php" method="POST" name="form4" enctype="multipart/form-data">

<div class="col-md-6 ">
	<h5><b>IV.	CARACTERISTICAS DE LA VIVIENDA</b></h5>
	<b>P19 Características de la vivienda </b>



	<div class="col-md-12">
		<div class="panel panel-default">
			<table class="table pre-scrollable small">
			  <tr>
			  	<th rowspan="2">Tipo</th>
			  	<th colspan="4">Materiales</th>
			  </tr>
			  <tr>
			  	<td>Cubierta</td>
			  	<td>Muros</td>
			  	<td>Pisos</td>
			  	<td>Paredes</td>
			  
			  </tr>
			  <tr>
			  	<td>Lote 
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="lote"><span class="input-group-addon">%</span></div></td>
			  	<td>Teja Zinc 
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="tejaZinc"><span class="input-group-addon">%</span></div></td>
			  	<td>Ladrillo, Bloque, Piedra 
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="ladriBloquePiedra"><span class="input-group-addon">%</span></div></td>
			  	<td>Tierra, arena
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="tierra"><span class="input-group-addon">%</span></div></td>
			  	<td>Ladrillo a la vista 
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="ladrilloVista"><span class="input-group-addon">%</span></div></td>
			  </tr>
			 <tr>
			 	<td>Casa Lote 
			 		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="casalote"><span class="input-group-addon">%</span></div></td>
			  	<td>Teja Fibrocemento 
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="tejaFibrocemento"><span class="input-group-addon">%</span></div></td>
			  	<td>Madera Pulida
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="maderaPulida"><span class="input-group-addon">%</span></div></td>
			  	<td>Cemento, Gravilla 
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="cementoGravilla"><span class="input-group-addon">%</span></div></td>
			  	<td>Pañete 
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="panete"><span class="input-group-addon">%</span></div></td>
			  	
			 </tr>
			 <tr>
			 	<td>Casa 
			 		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="casa"><span class="input-group-addon">%</span></div></td>
			  	<td>Teja Plástica 
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="tejaPlastica"><span class="input-group-addon">%</span></div></td>
			  	<td>Adobe o tapia pisada
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="adobeTapia"><span class="input-group-addon">%</span></div></td>
			  	<td>Madera burda, tabla 
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="maderaBurdaTabla"><span class="input-group-addon">%</span></div></td>
			  	<td>Madera 
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="madera"><span class="input-group-addon">%</span></div></td>
			  	
			 </tr>
			 <tr>
			 	<td>Cuarto en otra estructura 
			 		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="cuartoOtra"><span class="input-group-addon">%</span></div></td>
			  	<td>Placa/Plancha 
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="placa"><span class="input-group-addon">%</span></div></td>
			  	<td>Bahareque
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="Bahareque"><span class="input-group-addon">%</span></div>
			  	</td>
			  	<td>Baldosín, ladrillo, sinténtico 
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="balLAdSin"><span class="input-group-addon">%</span></div></td>
			  	<td>Zinc 
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="zinc"><span class="input-group-addon">%</span></div></td>
			 </tr>
			 <tr>
			 	<td>Rancho 
			 		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="rancho"><span class="input-group-addon">%</span></div></td>
			  	<td></td>
			  	<td>Madera Burda
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="maderaBurda"><span class="input-group-addon">%</span></div></td>
			  	<td>Madera Pulida
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="naderaPulida"><span class="input-group-addon">%</span></div></td>
			  	<td></td>
			 </tr>
			 <tr>
			 	<td></td>
			  	<td></td>
			  	<td>Cinc, tela, cartón, latas, plástico
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="CiTeCaLaPl"><span class="input-group-addon">%</span></div></td>
			  	<td>Tapete
			  		<div class="input-group"><input class="form-control" min="0" max="100" type="number" name="Tapete"><span class="input-group-addon">%</span></div></td>
			  	<td></td>
			 </tr>
			 <tr>
			 	<td>
			 		Otro 
			 		<div class="input-group"><input class="form-control" type="text" name="otro1"><span class="input-group-addon">T</span></div></td>
			  	<td>
			  		Otro
			  		<div class="input-group"><input class="form-control" type="text" name="otro2"><span class="input-group-addon">T</span></div></td>
			  	<td>
			  		Otro
				  	<div class="input-group"><input class="form-control" type="text" name="otro3"><span class="input-group-addon">T</span></div></td>
				 <td>
				 	Otro 
			  		<div class="input-group"><input class="form-control" type="text" name="otro4"><span class="input-group-addon">T</span></div></td>
			  	<td>Otro 
			  		<div class="input-group"><input class="form-control" type="text" name="otro5"><span class="input-group-addon">T</span></div></td>
			 </tr>
			</table>

		</div>
		<b>P20 Estado Actual de la vivienda</b><br/>
		Obra sin pañete <div class="input-group"><input class="form-control" min="0" max="100" type="number" name="oSinPanete"><span class="input-group-addon">%</span></div><br>
		Obra estucada sin pintar <div class="input-group"><input class="form-control" min="0" max="100" type="number" name="oSinPintar"><span class="input-group-addon">%</span></div><br>
		Terminada <div class="input-group"><input class="form-control" min="0" max="100" type="number" name="oTerminada"><span class="input-group-addon">%</span></div><br>
		<b>P21 Distribución de la vivienda </b>

		<table class=" small">
			<tr>
				<th>Espacios</th>
				<th>Cantidad</th>
				<th>Terminado</th>
			</tr>
			<tr>
				<td>Sala</td>
				<td>
					<input class="form-control" type="number" min="0" max="100" name="salaT">
				</td>
				<td>
					<select class="form-control" name="salaS">
					  <option value="si">Sí</option>
					  <option value="no">No</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Comedor</td>
				<td>
					<input class="form-control" min="0" max="100" type="number" name="comedorT">
				</td>
				<td>
					<select class="form-control" name="comedorS">
					  <option value="si">Sí</option>
					  <option value="no">No</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Baños</td>

				<td>
					<input class="form-control" min="0" max="100" type="number" name="banosT">
				</td>
				<td>
					<select class="form-control" name="banosS">
					  <option value="si">Sí</option>
					  <option value="no">No</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Cocina</td>
				<td>
					<input class="form-control" min="0" max="100" type="number" name="cocinaT">
				</td>
				<td>
					<select class="form-control" name="cocinaS">
					  <option value="si">Sí</option>
					  <option value="no">No</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Habitaciones</td>
				
				<td>
					<input class="form-control" min="0" max="100" type="number" name="habitacionesT">
				</td>
				<td>
					<select class="form-control" name="habitaacionesS">
					  <option value="si">Sí</option>
					  <option value="no">No</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Pisos</td>
				
				<td>
					<input class="form-control" min="0" max="100" type="number" name="pisosT">
				</td>
				<td>
					<select class="form-control" name="pisosS">
					  <option value="si">Sí</option>
					  <option value="no">No</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Personas por Habitación</td>
				<td><input class="col-xs-2 form-control" type="number" name="personasN"></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<b>P22 Metros cuadrados de la vivienda</b><br/>
		<input class="form-control" type="number" name="metrosN"><br/>
		<br/><br/><br/>
	</div>

</div>	 
<div class="col-md-6">
	
	

	<b>P23 ¿La Cocina es compartida?</b><br/> 
    <select class="form-control" name="cocinaComp">
          <option value="si">Sí</option>
          <option value="no">No</option>
    </select>
    <br>

	<b>P24 Tenencia </b><br/>
	<select class="form-control" name="tenencia">
				  <option value="Propia totalmente Pagada">Propia totalmente Pagada</option>
				  <option value="Propia la están pagando">Propia la están pagando</option>
				  <option value="En arriendo o sub-arriendo">En arriendo o sub-arriendo</option>
				  <option value="En usufructo">En usufructo</option>
				  <option value="Posecion sin Título">Posesión sin título</option>
	</select><br/>
	
	<b>P25 Uso </b>
	<select class="form-control" name="usos">
				  <option value="Residencial">Residencial</option>
				  <option value="Renta">Renta</option>
				  <option value="Residencia con negocios">Residencia con negocios</option>
				  <option value="Tipo de negocio">Tipo de negocio</option>
	</select><input class="form-control" type="text" name="cualNegocio" placeholder="Tipo de negocio¿Cuál?"><br/>
	
	
	<h5><b>V.	VARIABLES SOCIOECONÓMICAS</b></h5>
	<table class="table">
	    
		<!-- tabla que permite conocer los ingresos y gastos de la familia -->

	    <th>Tipo de Gastos</th>
	    <th>Valor</th>
	  	</tr>
	  	<td>Arriendo</td>
	  	<td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Garriendo"></div></td></tr>
	  	<td>Alimentaci&#243;n</td>
	  	<td><div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Galimentacion"></div> </td></tr>
	  	<td>Gas</td>
	  	<td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Ggas"></div></td></tr>
	  	<td>Acueducto</td>
	  	<td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Gacueducto"></div></td> </tr>
	    <td>Luz</td>
	    <td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Gluz"></div></td></tr>
	    <td>Tel&#233;fono</td>
	    <td><div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Gtelefono"></div></td></tr>
	    <td>Internet</td>
	    <td><div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Ginternet"></div></td></tr>
	    <td>TV Cable</td>
	    <td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Gtv"></div></td></tr>  
	    <td>Transporte</td>
	    <td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Gtransporte"></div></td></tr>
	    <td>Universidad</td>
	    <td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Guniversidad"></div></td></tr>
	    <td>Colegios</td>
	    <td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Gcolegios"></div></td></tr>
	    <td>Gastos M&#233;dicos</td>
	    <td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Gmedico"></div></td></tr> 
	    <td>Manutenci&#243;n Estudios</td>
	    <td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Gmanutencion"></div></td> </tr>
	    <td>Recreaci&#243;n</td>
	    <td><div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Grecreacion"></div></td> </tr>
	    <td>Prestamos Bancarios
	    	<div class="input-group"> <span class="input-group-addon">$</span><input placeholder=" Valor Dueda" type="text" name="GbancariosD"></div></td>
	    	<td><div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Gbancarios"></div></td></tr>
 		<td>Prestamos Particulares
	    	<div class="input-group"> <span class="input-group-addon">$</span><input placeholder=" Valor Dueda" type="text" name="GparticularesD"></div></td>
	    	<td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Gparticulares"></div></td></tr>
	    <td>Ahorro Familiar</td>
	    <td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="Gahorro"></div></td> </tr>
	    <td>Otros Gastos: &#191;cu&#225;les?</td><td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="GotrosGastos"></div></td> </tr> 
	    <td><b>Total Mensual</b></td><td> <div class="input-group"> <span class="input-group-addon">$</span><input type="text" name="GtotalMensual"></div></td> </tr> 
 	</table>
 	<input class="btn btn-primary" type="submit" value=" Continuar ">
	<a href="5_CondicionesUrbanasSociales.html">Demo</a>
</div>

	</form>


</body>

<script type="text/javascript">
  //funcion para cargar formulario 3
  function cargarForm4(arriendo, alimentacion, gas, acueducto, luz, telefono, internet, tv, transporte, universidad, colegios, medico, manutencion, recreacion, bancariosD, bancarios, particularesD, particulares, ahorro, otrosGastos, totalMensual, tenencia , usos , cualNegocio , lote , tejaZinc , ladriBloquePiedra , tierra , ladrilloVista , casalote , tejaFibrocemento , maderaPulida , cementoGravilla , panete , casa , tejaPlastica , adobeTapia , maderaBurdaTabla , madera , cuartoOtra , placa , Bahareque , balLAdSin , zinc , rancho , maderaBurda , naderaPulida , CiTeCaLaPl , Tapete , otro1 , otro2 , otro3 , otro4 , otro5 , oSinPanete , oSinPintar , oTerminada , salaT , salaS , comedorT , comedorS , banosT , banosS , cocinaT , cocinaS , habitacionesT , habitaacionesS , pisosT , pisosS , personasN , metrosN , cocinaComp ) {

    var formulario = document.form4;
    
    	
    	
    	formulario.tenencia.value = tenencia; 
    	
    	formulario.usos.value = usos; 
    	
    	formulario.cualNegocio.value = cualNegocio; 
    	formulario.lote.value = lote; 
    	formulario.tejaZinc.value = tejaZinc; 
    	formulario.ladriBloquePiedra.value = ladriBloquePiedra;
    	formulario.tierra.value = tierra; 
    	formulario.ladrilloVista.value = ladrilloVista;
    	
    	formulario.casalote.value = casalote; 
    	formulario.tejaFibrocemento.value = tejaFibrocemento; 
    	formulario.maderaPulida.value = maderaPulida; 
    	formulario.cementoGravilla.value = cementoGravilla; 
    	formulario.panete.value = panete;

    	formulario.casa.value = casa; 
    	formulario.tejaPlastica.value = tejaPlastica;
    	formulario.adobeTapia.value = adobeTapia;
    	formulario.maderaBurdaTabla.value = maderaBurdaTabla;
    	formulario.madera.value = madera; 

    	formulario.cuartoOtra.value = cuartoOtra;
    	formulario.placa.value = placa;
    	formulario.Bahareque.value = Bahareque;
    	formulario.balLAdSin.value = balLAdSin;
    	formulario.zinc.value = zinc; 

    	formulario.rancho.value = rancho; 
    	formulario.maderaBurda.value = maderaBurda;
    	formulario.naderaPulida.value = naderaPulida;

    	formulario.CiTeCaLaPl.value = CiTeCaLaPl; 
    	formulario.Tapete.value = Tapete;


    	formulario.otro1.value = otro1; 
    	formulario.otro2.value = otro2; 
    	formulario.otro3.value = otro3; 
    	formulario.otro4.value = otro4; 
    	formulario.otro5.value = otro5; 

    	formulario.oSinPanete.value = oSinPanete; 
    	formulario.oSinPintar.value = oSinPintar; 
    	formulario.oTerminada.value = oTerminada; 


    	formulario.salaT.value = salaT; 
    	formulario.salaS.value = salaS; 
    	formulario.comedorT.value = comedorT; 
    	formulario.comedorS.value = comedorS; 
    	formulario.banosT.value = banosT; 
    	formulario.banosS.value = banosS; 
    	formulario.cocinaT.value = cocinaT; 
    	formulario.cocinaS.value = cocinaS; 
    	formulario.habitacionesT.value = habitacionesT; 
    	formulario.habitaacionesS.value = habitaacionesS; 
    	formulario.pisosT.value = pisosT; 
    	formulario.pisosS.value = pisosS; 
    	formulario.personasN.value = personasN; 

    	formulario.metrosN.value = metrosN; 

    	formulario.cocinaComp.value = cocinaComp; 

    	formulario.Garriendo.value = arriendo;
	    formulario.Galimentacion.value = alimentacion; 
	    formulario.Ggas.value = gas; 
	    formulario.Gacueducto.value = acueducto;
	    formulario.Gluz.value = luz; 
	    formulario.Gtelefono.value = telefono; 
	    formulario.Ginternet.value = internet; 
	    formulario.Gtv.value = tv; 
	    formulario.Gtransporte.value = transporte; 
	    formulario.Guniversidad.value = universidad; 
	    formulario.Gcolegios.value = colegios; 
	    formulario.Gmedico.value = medico; 
	    formulario.Gmanutencion.value = manutencion; 
	    formulario.Grecreacion.value = recreacion; 
	    formulario.GbancariosD.value = bancariosD; 
	    formulario.Gbancarios.value = bancarios; 
	    formulario.GparticularesD.value = particularesD; 
	    formulario.Gparticulares.value = particulares; 
	    formulario.Gahorro.value = ahorro; 
	    formulario.GotrosGastos.value = otrosGastos; 
	    formulario.GtotalMensual.value = totalMensual; 

  }

</script>






<?php
 	@session_start();
	$id = $_SESSION['usuario']['encuestado'];
   	
   	include("controller/consultas.php");
   	//validar que exista un id para el usuario encuestado
	encuestadoLogged();


 	//buscar si el usuario ya existe para cargar sus datos
	$array = llenarFormulario4( $id );
	
    if($array!=0)
    {
    	echo('<script>
      cargarForm4("'.$array['arriendo'].'","'.$array['alimentacion'].'","'.$array['gas'].'","'.$array['acueducto'].'","'.$array['luz'].'","'.$array['telefono'].'","'.$array['internet'].'","'.$array['tv'].'","'.$array['transporte'].'","'.$array['universidad'].'","'.$array['colegios'].'","'.$array['medico'].'","'.$array['manutencion'].'","'.$array['recreacion'].'","'.$array['bancariosD'].'","'.$array['bancarios'].'","'.$array['particularesD'].'","'.$array['particulares'].'","'.$array['ahorro'].'","'.$array['otrosGastos'].'","'.$array['totalMensual'].'","'. $array['tenencia'].'", "'.$array['usos'].'", "'.$array['cualNegocio'].'", "'.$array['lote'].'", "'.$array['tejaZinc'].'", "'.$array['ladriBloquePiedra'].'", "'.$array['tierra'].'", "'.$array['ladrilloVista'].'", "'.$array['casalote'].'", "'.$array['tejaFibrocemento'].'", "'.$array['maderaPulida'].'", "'.$array['cementoGravilla'].'", "'.$array['panete'].'", "'.$array['casa'].'", "'.$array['tejaPlastica'].'", "'.$array['adobeTapia'].'", "'.$array['maderaBurdaTabla'].'", "'.$array['madera'].'", "'.$array['cuartoOtra'].'", "'.$array['placa'].'", "'.$array['Bahareque'].'", "'.$array['balLAdSin'].'", "'.$array['zinc'].'", "'.$array['rancho'].'", "'.$array['maderaBurda'].'", "'.$array['naderaPulida'].'", "'.$array['CiTeCaLaPl'].'", "'.$array['Tapete'].'", "'.$array['otro1'].'", "'.$array['otro2'].'", "'.$array['otro3'].'", "'.$array['otro4'].'", "'.$array['otro5'].'", "'.$array['oSinPanete'].'", "'.$array['oSinPintar'].'", "'.$array['oTerminada'].'", "'.$array['salaT'].'", "'.$array['salaS'].'", "'.$array['comedorT'].'", "'.$array['comedorS'].'", "'.$array['banosT'].'", "'.$array['banosS'].'", "'.$array['cocinaT'].'", "'.$array['cocinaS'].'", "'.$array['habitacionesT'].'", "'.$array['habitaacionesS'].'", "'.$array['pisosT'].'", "'.$array['pisosS'].'", "'.$array['personasN'].'", "'.$array['metrosN'].'", "'.$array['cocinaComp'].'");
      </script>');	
    }
    
?>


</html>


