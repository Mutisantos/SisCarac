<!-- Creador por:
	Diego Barrera
	Ivan Garcia

	Fecha Creación: Mayo 5 /2014
	Cliente: Prosofi

	Formato de caracterización de la comunidad 
 -->
<?php
	
	include 'utils.php';
	include "../controller/consultas.php";

	$fecha1 = ($_POST['fecha1']); 
	$paciente1 = quitarEspacios($_POST['paciente1']); 
	$profesional1 = quitarEspacios($_POST['profesional1']); 
	$tratamiento1 = quitarEspacios($_POST['tratamiento1']); 
	$ips = quitarEspacios($_POST['ips']); 
	$fechaA = ($_POST['fechaA']); 
	$color1 = quitarEspacios($_POST['color1']); 
	$observaciones1 = quitarEspacios($_POST['observaciones1']); 

	//almacenar los datos del formulario de odontologia
	guardarFormularioOdontologia2( $fecha1, $paciente1, $profesional1, $tratamiento1, $ips, $fechaA, $color1, $observaciones1);
	// $_POST[''];
	echo "<script> alert('Formulario Guardado'); </script>";
 	header("Location:/assets/menuEncuestador.php");

?>

