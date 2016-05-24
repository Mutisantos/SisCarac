<!-- <script src="../1_InformacionPrincipal.html" type="text/javascript" /> -->

<?php 
	

	include 'consultas.php';
	include 'utils.php';
	require_once('../1_InformacionPrincipal.php');
	/**
 	*  Controlador de busquedas en la base de datos MySQL de la plataforma AAMP
    *  Se utiliza para hacer la busqueda de un encuestado dada la cédula del mismo y poder cargar todos los datos 
    *  demográficos del encuestado y poder mostrarlo al inicio del formulario. Da aviso tambien en caso que no se 
    *  encuentre la cedula
    */

	$cedula=$_POST['cedula'];
	
	//$cedula = md5($cedula);

	$idUser = buscarCedula($cedula);
	if($idUser==0)
	echo "<script type='text/javascript'>alert('El usuario con esta cédula no existe. Si desea crear al usuario, puede hacerlo en este momento, sino puede volver al menú principal.');</script>";

	 
	//consulta SQL para obtener los datos del formulario 
	$user = llenarFormulario1($cedula);
	$nombre = quitarEspacios($user['nombre']);
	// encriptar cedula
	//TODO: quitar puntos o comas a la cedula
	$parentesco = quitarEspacios($user['parentesco']);
	$estadocivil = quitarEspacios($user['estadocivil']);
	$edad = quitarEspacios($user['edad']);
	$genero = quitarEspacios($user['genero']);
	$cedula = $_POST['cedula'];
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
	//llenar formulario 1
	// SELECT 'id', 'fechaE', 'horaInicio', 'horaFin', 'estado', 'vistoBueno', 'nombre', 'telefono', 'celular', 'email', 'parentesco', 'encuestador'
	llenar($nombre, $parentesco, $estadocivil, $edad, $genero, $cedula, $telefono, $celular, $direccionnueva, $upz, $barrio, $estrato, $numerohogares, $tiempobarrio, $fechaEncuesta, $HoraInicioEncuesta, $HoraFinEncuesta, $encuestador, $carrera, $supervisor, $estado, $coordinadorProsofi );
	// llenar( quitarEspacios($_POST['cedula']), quitarEspacios($user['fechaE']), quitarEspacios($user['horaInicio']), quitarEspacios($user['horaFin']), quitarEspacios($user['estado']), quitarEspacios($user['vistoBueno']), quitarEspacios($user['nombre']), quitarEspacios($user['telefono']), quitarEspacios($user['celular']), quitarEspacios($user['email']), quitarEspacios($user['parentesco']), quitarEspacios($user['encuestador']));
?>