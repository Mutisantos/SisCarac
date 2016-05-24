<!-- <script src="../1_InformacionPrincipal.html" type="text/javascript" /> -->

<?php 
// buscar usuario por su cedula/documento de identidad
	include 'consultas.php';
	include 'utils.php';
	// es distinto por que la cedula es encriptada y no se puede conseguir, no se peude mostrar
	require_once('../1_InformacionPrincipalAdm.php');
	
	//YA recive los datos de el reporte generado para el administrador


	$user = llenarFormulario1($_POST['id']);//el id ya viene desde el administrador
	$nombre = quitarEspacios($user['nombre']);
	$parentesco = quitarEspacios($user['parentesco']);
	$estadocivil = quitarEspacios($user['estadocivil']);
	$edad = quitarEspacios($user['edad']);
	$genero = quitarEspacios($user['genero']);
	$telefono = quitarEspacios($user['telefono']);
	$celular = quitarEspacios($user['celular']);
	$direccionnueva = quitarEspacios($user['direccionnueva']);
	$upz = quitarEspacios($user['upz']);
	$barrio = quitarEspacios($user['barrio']);
	$estrato = quitarEspacios($user['estrato']);
	$numerohogares = quitarEspacios($user['numerohogares']);
	$tiempobarrio = quitarEspacios($user['tiempobarrio']);

	$fechaEncuesta = quitarEspacios($user['fechaE']);
	$HoraInicioEncuesta = quitarEspacios($user['horaInicio']);
	$HoraFinEncuesta = quitarEspacios($user['horaFin']);
	$encuestador = quitarEspacios($user['encuestador']);
	$carrera = quitarEspacios($user['carrera']);
	$supervisor = quitarEspacios($user['supervisor']);
	$estado=quitarEspacios($user['estado']);
	$coordinadorProsofi=quitarEspacios($user['vistoBueno']);

	// se llena sin la cédula y con el valor Id ya en el
	llenarAdm($_POST['id'], $nombre, $parentesco, $estadocivil, $edad, $genero, $telefono, $celular, $direccionnueva, $upz, $barrio, $estrato, $numerohogares, $tiempobarrio, $fechaEncuesta, $HoraInicioEncuesta, $HoraFinEncuesta, $encuestador, $carrera, $supervisor, $estado, $coordinadorProsofi );
	 //llenarAdm( quitarEspacios($_POST['id'], quitarEspacios($user['fechaE']), quitarEspacios($user['horaInicio']), quitarEspacios($user['horaFin']), quitarEspacios($user['estado']), quitarEspacios($user['vistoBueno']), quitarEspacios($user['nombre']), quitarEspacios($user['telefono']), quitarEspacios($user['celular']), quitarEspacios($user['email']), quitarEspacios($user['parentesco']), quitarEspacios($user['encuestador']));
?>