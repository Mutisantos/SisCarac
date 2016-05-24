<?php 
// buscar usuario por su cedula/documento de identidad
	include 'consultas.php';
	require_once('../1_FormularioOdontologia.php');
	
	$cedula=$_POST['cedula'];
	// $cedula = md5($cedula);

	

// echo $idUser;

	//consulta SQL para obtener los datos del formulario por cedula
	$user = llenarFormularioOdontologia($cedula);

	//buscar el id del usuario encuestado
	$idUser = buscarCedulaComposicion($cedula);
	$user2 = llenarUbicacion($idUser);
	
	llenarOdontologia($cedula,$user['edad'],$user['sexo'],$user['actividad'],$user['segSocial'],$user['escolaridad'],$user2['localidad'],$user2['barrio'],$user2['upz']);
	// llenar( quitarEspacios($_POST['cedula']), quitarEspacios($user['fechaE']), quitarEspacios($user['horaInicio']), quitarEspacios($user['horaFin']), quitarEspacios($user['estado']), quitarEspacios($user['vistoBueno']), quitarEspacios($user['nombre']), quitarEspacios($user['telefono']), quitarEspacios($user['celular']), quitarEspacios($user['email']), quitarEspacios($user['parentesco']), quitarEspacios($user['encuestador']));
?>
		

