<!-- <script src="../1_InformacionPrincipal.html" type="text/javascript" /> -->

<?php 
// buscar usuario por su cedula/documento de identidad
	include 'consultas.php';
	include 'utils.php';
	
	session_start();
	//verificar que el usuario esté logeado
	if(!isset($_SESSION['usuario']['user'])){
		header("Location:/assets/menuEncuestador.php");
	}
	$answr;
	//consulta SQL para obtener los datos del formulario 
	if ($_POST["reporte1NI"]!="") {
		$answr=buscarCedulaNombre(md5($_POST["reporte1NI"]), $_POST["reporte1NI"]);
	}elseif ($_POST["reporte2Barrio"]!="") {
		$answr=buscarBarrio($_POST["reporte2Barrio"]);
	}elseif ($_POST["reporte3Direccion"]!="") {
		$answr=buscarDireccion($_POST["reporte3Direccion"]);
	}
	$_SESSION['answr']=$answr;
	header("Location:/assets/reportes.php")
	
?>