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

*/
	$observaciones = quitarEspacios($_POST['observaciones']);

	$seguimiento = quitarEspacios($_POST['seguimiento']);
			
			
			//almacenar en la base de datos los datos recibidos
	guardarFormulario6($id, $observaciones, $seguimiento);
		borrarSesionEncuestado();

	// $_POST[''];
	echo "<script>alert('Formulario Guardado');</script>";

 	header("Location:/assets/menuEncuestador.php");
?>

