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

	// si la variable esta NULL la convierte en 'vacio'
	$nombre = quitarEspacios($_POST['nombre']);
	// encriptar cedula - Requiere cambiarse el método para que sea una encriptación simétrica para desencriptar
	//MD5 es cifrado asimétrico y no podría utilizarse en las siguientes vistas
	//TODO: quitar puntos o comas a la cedula
	$parentesco = quitarEspacios($_POST['parentesco']);
	$estadocivil = quitarEspacios($_POST['estadocivil']);
	$edad = quitarEspacios($_POST['edad']);
	$genero = quitarEspacios($_POST['genero']);
	//$cedula = md5(quitarEspacios($_POST['cedula']));
	$cedula = quitarEspacios($_POST['cedula']);
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
	echo $HoraInicioEncuesta;
	//almacenar en la base de datos los datos recibidos
	//método llamado de consultas.php, se encuentra que la generación de ID generado
	$id = guardarFormulario1($nombre,
		$parentesco,
		$estadocivil,
		$edad,
		$genero,
		$cedula,
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
	// Se cambia el valor de id por cédula para que la relación de la búsqueda sea por la cédula
	// Se define una variable de sesión para la cedula del encuestado que se va a proyectar en el resto de las vistas  
	@session_start();
	$_SESSION["usuario"] = array('encuestado'=>$cedula);
	header("Location:/assets/2_IndicadoresSociodemograficos.php");
?>

