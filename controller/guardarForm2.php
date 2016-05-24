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


	session_start();
	$id = $_SESSION['usuario']['encuestado'];

	// si la variable esta NULL la convierte en 'vacio'
	/*
	$lugarCiudad = quitarEspacios($_POST['lugarCiudad']);
	$lugarDepartamento = quitarEspacios($_POST['lugarDepartamento']);
	$tiempoEnLocalidad = quitarEspacios($_POST['tiempoEnLocalidad']);
	
	guardarFormulario2($id,$lugarDepartamento,$lugarCiudad, $tiempoEnLocalidad);
*/
	for ($i=0; $i<14 ; $i++) { 
		# code...
		if(isset( $_POST['nombre'][$i]) ){

			$nombre = quitarEspacios($_POST['nombre'][$i]);
			// echo ($nombre);	

			$lugarCiudad = quitarEspacios($_POST['lugarCiudad']);
			$lugarDepartamento = quitarEspacios($_POST['lugarDepartamento']);

			$documento= quitarEspacios($_POST['documento'][$i]);
			$sexo= quitarEspacios($_POST['sexo'][$i]);
			$edad= quitarEspacios($_POST['edad'][$i]); 
			$fechaN= quitarEspacios($_POST['fechaN'][$i]); 
			$estadoC= quitarEspacios($_POST['estadoC'][$i]); 
			$condicionEspecial= quitarEspacios($_POST['condicionEspecial'][$i]); 
			$etnia= quitarEspacios($_POST['etnia'][$i]);
			$parentesco= quitarEspacios($_POST['parentesco'][$i]);
			$escolaridad= quitarEspacios($_POST['escolaridad'][$i]);
			$ocupacion= quitarEspacios($_POST['ocupacion'][$i]);
			$actividad= quitarEspacios($_POST['actividad'][$i]);
			$ingresos= quitarEspacios($_POST['ingresos'][$i]);
			$aporteIngresos= quitarEspacios($_POST['aporteIngresos'][$i]); 
			$enfermedades= quitarEspacios($_POST['enfermedades'][$i]);
			$discapacidad = quitarEspacios($_POST['discapacidad'][$i]);
			$segSocial= quitarEspacios($_POST['segSocial'][$i]);
			$sisben= quitarEspacios($_POST['sisben'][$i]);
			$cajaComp= quitarEspacios($_POST['cajaComp'][$i]);
			$subEstado= quitarEspacios($_POST['subEstado'][$i]);
			
			//almacenar en la base de datos los datos recibidos
			guardarFormulario2Composicion($id, $nombre, $documento, $sexo, $edad, $fechaN, $estadoC, $condicionEspecial, $etnia, $parentesco, $escolaridad, $ocupacion, $actividad, $ingresos, $aporteIngresos, $enfermedades, $discapacidad, $segSocial, $sisben, $cajaComp, $subEstado, $lugarCiudad, $lugarDepartamento);
		}
		
	}

	// $_POST[''];
	
 	header("Location:/assets/3_IndicadoresSocieconomicos.php");
?>

