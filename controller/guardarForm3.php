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

	$P1Parques = quitarEspacios($_POST['P1Parques']);
	$P1Hospitales = quitarEspacios($_POST['P1Hospitales']);
	$P1Colegios = quitarEspacios($_POST['P1Colegios']);
	$P1Iglesias = quitarEspacios($_POST['P1Iglesias']);
	$P1SedeAC = quitarEspacios($_POST['P1SedeAC']);
	$P1Jardines = quitarEspacios($_POST['P1Jardines']);
	$P1Otro = quitarEspacios($_POST['P1Otro']);
	$P2Utiliza = quitarEspacios($_POST['P2Utiliza']);
	$P3Aguas = quitarEspacios($_POST['P3Aguas']);
	$P3Canos = quitarEspacios($_POST['P3Canos']);
	$P3Botadero = quitarEspacios($_POST['P3Botadero']);
	$P3Enmontadas = quitarEspacios($_POST['P3Enmontadas']);
	$P3Otro = quitarEspacios($_POST['P3Otro']);
	$P4Conforme = quitarEspacios($_POST['P4Conforme']);
	$P5UtilizaSalud = quitarEspacios($_POST['P5UtilizaSalud']);
	$P5Cual = quitarEspacios($_POST['P5Cual']);
	$P7UtilizaColegio = quitarEspacios($_POST['P7UtilizaColegio']);
	$P8Preescolar = quitarEspacios($_POST['P8Preescolar']);
	$P8Primaria = quitarEspacios($_POST['P8Primaria']);
	$P8Media = quitarEspacios($_POST['P8Media']);
	$P8Bachillerato = quitarEspacios($_POST['P8Bachillerato']);
	$P8Tecnico = quitarEspacios($_POST['P8Tecnico']);
	$P9CalificaEducacion = quitarEspacios($_POST['P9CalificaEducacion']);
	$P10Opcion1 = quitarEspacios($_POST['P10Opcion1']);
	$P10Usa1 = quitarEspacios($_POST['P10Usa1']);
	$P10Opcion2 = quitarEspacios($_POST['P10Opcion2']);
	$P10Usa2 = quitarEspacios($_POST['P10Usa2']);
	$P10Opcion3 = quitarEspacios($_POST['P10Opcion3']);
	$P10Usa3 = quitarEspacios($_POST['P10Usa3']);
	$P10Opcion4 = quitarEspacios($_POST['P10Opcion4']);
	$P10Usa4 = quitarEspacios($_POST['P10Usa4']);
	$P11CostoTrans = quitarEspacios($_POST['P11CostoTrans']);
	$P12TiempoTrans = quitarEspacios($_POST['P12TiempoTrans']);
	$P13CalificaPolicia = quitarEspacios($_POST['P13CalificaPolicia']);
	$P14CalificaSeguridad = quitarEspacios($_POST['P14CalificaSeguridad']);
	$P15Madres = quitarEspacios($_POST['P15Madres']);
	$P15Clubes = quitarEspacios($_POST['P15Clubes']);
	$P15Etnicas = quitarEspacios($_POST['P15Etnicas']);
	$P15Juntas = quitarEspacios($_POST['P15Juntas']);
	$P15Comedores = quitarEspacios($_POST['P15Comedores']);
	$P15Culturales = quitarEspacios($_POST['P15Culturales']);
	$P15Otro = quitarEspacios($_POST['P15Otro']);
	$P16FamiliaParte = quitarEspacios($_POST['P16FamiliaParte']);
	$P16FamiliaParteCual = quitarEspacios($_POST['P16FamiliaParteCual']);
	$P17Logro = quitarEspacios($_POST['P17Logro']);
	$P17LogroCual = quitarEspacios($_POST['P17LogroCual']);
	$P18Calidad = quitarEspacios($_POST['P18Calidad']);
	$P18CalidadPorque = quitarEspacios($_POST['P18CalidadPorque']);


	// si la variable esta NULL la convierte en 'vacio'
	/*
	$P11 =implode(",", quitarEspacios($_POST['P11']) );
	$P21 =implode(",", quitarEspacios( $_POST['P21']) );
	$P22 = implode(",", quitarEspacios( $_POST['P22']) );
	$P31 =implode(",", quitarEspacios( $_POST['P31']) );
	$P41 = quitarEspacios( $_POST['P41']);
	$otro11 = quitarEspacios( $_POST['otro11']);
	$otro21 = quitarEspacios( $_POST['otro21']);
	$otro22 = quitarEspacios( $_POST['otro22']);
	$otro31 = quitarEspacios( $_POST['otro31']);
	$razones =quitarEspacios($_POST['razones']);
	*/


	//almacenar en la base de datos los datos recibidos
	//guardarFormulario3($id $P11, $P21, $P22, $P31, $P41 $razones, $otro11, $otro21,  $otro22,  $otro31);
	guardarFormulario3($id, $P1Parques  , $P1Hospitales  , $P1Colegios  , $P1Iglesias  , $P1SedeAC  , $P1Jardines  , $P1Otro  , $P2Utiliza  , $P3Aguas  , $P3Canos  , $P3Botadero  , $P3Enmontadas  , $P3Otro  , $P4Conforme  , $P5UtilizaSalud  , $P5Cual  , $P7UtilizaColegio  , $P8Preescolar  , $P8Primaria  , $P8Media  , $P8Bachillerato  , $P8Tecnico  , $P9CalificaEducacion  , $P10Opcion1  , $P10Usa1  , $P10Opcion2  , $P10Usa2  , $P10Opcion3  , $P10Usa3  , $P10Opcion4  , $P10Usa4  , $P11CostoTrans  , $P12TiempoTrans  , $P13CalificaPolicia  , $P14CalificaSeguridad  , $P15Madres  , $P15Clubes  , $P15Etnicas  , $P15Juntas  , $P15Comedores  , $P15Culturales  , $P15Otro  , $P16FamiliaParte  , $P16FamiliaParteCual  , $P17Logro  , $P17LogroCual  , $P18Calidad , $P18CalidadPorque );
// almacenar el ID del encuestado para seguir llenando los demas formularios y guardarlos con este ID

	
	header("Location:/assets/4_InformacionVivienda.php");
?>

