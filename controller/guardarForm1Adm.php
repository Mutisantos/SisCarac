<!-- Creador por:
	Diego Barrera
	Ivan Garcia

	Fecha Creación: Mayo 5 /2014
	Cliente: Prosofi

	Formato de caracterización de la comunidad 
 -->
<?php
	
	include "../controller/consultas.php";
	include 'utils.php';

	// Id ya viene por defecto de el administrador
	$id=$_POST['idd'];
	$nombre = quitarEspacios($_POST['nombre']);
	// encriptar cedula
	//TODO: quitar puntos o comas a la cedula
	$parentesco = quitarEspacios($_POST['parentesco']);
	$estadocivil = quitarEspacios($_POST['estadocivil']);
	$edad = quitarEspacios($_POST['edad']);
	$genero = quitarEspacios($_POST['genero']);
	$telefono = quitarEspacios($_POST['telefono']);
	$celular = quitarEspacios($_POST['celular']);
	$direccionnueva = quitarEspacios($_POST['direccionnueva']);
	$upz = quitarEspacios($_POST['upz']);
	$barrio = quitarEspacios($_POST['barrio']);
	$estrato = quitarEspacios($_POST['estrato']);
	$numerohogares = quitarEspacios($_POST['numerohogares']);
	$tiempobarrio = quitarEspacios($_POST['tiempobarrio']);

	$fechaEncuesta = quitarEspacios($_POST['fechaEncuesta']);
	$HoraInicioEncuesta = quitarEspacios($_POST['HoraInicioEncuesta']);
	$HoraFinEncuesta = quitarEspacios($_POST['HoraFinEncuesta']);
	$encuestador = quitarEspacios($_POST['encuestador']);
	$carrera = quitarEspacios($_POST['carrera']);
	$supervisor = quitarEspacios($_POST['supervisor']);
	$estado=quitarEspacios($_POST['estado']);
	$coordinadorProsofi=quitarEspacios($_POST['coordinadorProsofi']);
	// $_POST[''];
	
	//almacenar en la base de datos los datos recibidos
	guardarFormulario1Adm($id, $nombre,
		$parentesco,
		$estadocivil,
		$edad,
		$genero,
		$telefono,
		$celular,
		$direccionnueva,
		$upz,
		$barrio,
		$estrato,
		$numerohogares,
		$tiempobarrio,
		$fechaEncuesta,
		$HoraInicioEncuesta,
		$HoraFinEncuesta,
		$encuestador,
		$carrera,
		$supervisor,
		$estado,
		$coordinadorProsofi);

// almacenar el ID del encuestado para seguir llenando los demas formularios y guardarlos con este ID
	@session_start();
	$_SESSION["usuario"] = array('encuestado'=>$id);
	header("Location:/assets/2_IndicadoresSociodemograficos.php");
?>

