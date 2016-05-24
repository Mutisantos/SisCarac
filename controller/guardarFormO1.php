<!-- Creador por:
	Diego Barrera
	Ivan Garcia

	Fecha Creación: Mayo 5 /2014
	Cliente: Prosofi

	Formato de caracterización de la comunidad 
 -->

 <!-- guardar localidad, barrio y upz en Form4, 
 luego guardar informacion personal en Form2Composicion
 y los datos odontologicos en FormO1 -->

<?php
	
	include 'utils.php';
	include "../controller/consultas.php";
	
	$cedula = quitarEspacios($_POST['id']);

	//conocer el id del usuario
	session_start();
	$id = $_SESSION['usuario']['encuestado'] = buscarCedulaComposicion($cedula);

	// si la variable esta NULL la convierte en 'vacio'
	$edad = quitarEspacios($_POST['edad']);
	$sexo = quitarEspacios($_POST['sexo']);
	$trabajo = quitarEspacios($_POST['trabajo']); 
	$regimenSalud = quitarEspacios($_POST['regimenSalud']); 
	$estudio = quitarEspacios($_POST['estudio']);
	//guardar datos en el form2Composicion
	guardarOdontologia_Form2($id, $cedula , $sexo , $edad, $estudio , $trabajo, $regimenSalud);


	$localidad = quitarEspacios($_POST['localidad']);
	$barrio = quitarEspacios($_POST['barrio']); 
	$upz = quitarEspacios($_POST['upz']); 
	//guardar datos en el form4
	guardarOdontologia_Form4($id, $localidad, $barrio, $upz);


	$adultoMayor = quitarEspacios($_POST['adultoMayor']); 
	$adulto = quitarEspacios($_POST['adulto']); 
	$joven = quitarEspacios($_POST['joven']); 
	$nino = quitarEspacios($_POST['nino']); 
	$menor5 = quitarEspacios($_POST['menor5']); 
	$otro13 = quitarEspacios($_POST['otro13']);  
	$enfermedadesComunes = quitarEspacios(implode(",", $_POST['enfermedadesComunes'] ));
	$otro21 = quitarEspacios($_POST['otro21']);
	$produccionEnfermedades = quitarEspacios(implode(",",($_POST['produccionEnfermedades']) ));
	$quien = quitarEspacios( implode(",", ($_POST['quien']) )); 
	$paraQue = quitarEspacios(implode(",", ($_POST['paraQue']) )); 
	$otro24 = quitarEspacios($_POST['otro24']);
	$otrosElementos = quitarEspacios(implode(",", ($_POST['otrosElementos']) )); 
	$otro25 = quitarEspacios($_POST['otro25']); 
	$Elementos = quitarEspacios(implode(",", ($_POST['Elementos']) )); 
	$otro31 = quitarEspacios($_POST['otro31']); 
	$frecuencia = quitarEspacios(implode(",", ($_POST['frecuencia']) )); 
	$dolorMuela = quitarEspacios(implode(",", ($_POST['dolorMuela']) )); 
	$problemasOdontologo = quitarEspacios(implode(",", ($_POST['problemasOdontologo']) )); 
	$ultimaVisita = quitarEspacios(implode(",", ($_POST['ultimaVisita']) ));

	//almacenar los datos del formulario de odontologia
	guardarFormularioOdontologia1($cedula, $adultoMayor, $adulto, $joven, $nino, $menor5,$otro13,$enfermedadesComunes, $otro21, $produccionEnfermedades, $quien, $paraQue, $otro24, $otrosElementos, $otro25, $Elementos, $otro31, $frecuencia, $dolorMuela, $problemasOdontologo, $ultimaVisita);

	// $_POST[''];
	
 	 header("Location:/assets/2_FormularioOdontologia.php");
?>

