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

	// $= quitarEspacios($_POST['id']); 
		$arriendo =quitarEspacios($_POST['Garriendo']);
		$alimentacion =quitarEspacios($_POST['Galimentacion']);
		$gas =quitarEspacios($_POST['Ggas']);
		$acueducto =quitarEspacios($_POST['Gacueducto']);
		$luz =quitarEspacios($_POST['Gluz']);
		$telefono =quitarEspacios($_POST['Gtelefono']);
		$internet =quitarEspacios($_POST['Ginternet']);
		$tv =quitarEspacios($_POST['Gtv']);
		$transporte =quitarEspacios($_POST['Gtransporte']);
		$universidad =quitarEspacios($_POST['Guniversidad']);
		$colegios =quitarEspacios($_POST['Gcolegios']);
		$medico =quitarEspacios($_POST['Gmedico']);
		$manutencion =quitarEspacios($_POST['Gmanutencion']);
		$recreacion =quitarEspacios($_POST['Grecreacion']);
		$bancariosD =quitarEspacios($_POST['GbancariosD']);
		$bancarios =quitarEspacios($_POST['Gbancarios']);
		$particularesD =quitarEspacios($_POST['GparticularesD']);
		$particulares =quitarEspacios($_POST['Gparticulares']);
		$ahorro =quitarEspacios($_POST['Gahorro']);
		$otrosGastos =quitarEspacios($_POST['GotrosGastos']);
		$totalMensual =quitarEspacios($_POST['GtotalMensual']);
		$tenencia= quitarEspacios($_POST['tenencia']); 
    	
    	$usos= quitarEspacios($_POST['usos']); 
    	
    	$cualNegocio= quitarEspacios($_POST['cualNegocio']); 
    	$lote= quitarEspacios($_POST['lote']); 
    	$tejaZinc= quitarEspacios($_POST['tejaZinc']); 
    	$ladriBloquePiedra= quitarEspacios($_POST['ladriBloquePiedra']);
    	$tierra= quitarEspacios($_POST['tierra']); 
    	$ladrilloVista= quitarEspacios($_POST['ladrilloVista']);
    	
    	$casalote= quitarEspacios($_POST['casalote']); 
    	$tejaFibrocemento= quitarEspacios($_POST['tejaFibrocemento']); 
    	$maderaPulida= quitarEspacios($_POST['maderaPulida']); 
    	$cementoGravilla= quitarEspacios($_POST['cementoGravilla']); 
    	$panete= quitarEspacios($_POST['panete']);

    	$casa= quitarEspacios($_POST['casa']); 
    	$tejaPlastica= quitarEspacios($_POST['tejaPlastica']);
    	$adobeTapia= quitarEspacios($_POST['adobeTapia']);
    	$maderaBurdaTabla= quitarEspacios($_POST['maderaBurdaTabla']);
    	$madera= quitarEspacios($_POST['madera']); 

    	$cuartoOtra= quitarEspacios($_POST['cuartoOtra']);
    	$placa= quitarEspacios($_POST['placa']);
    	$Bahareque= quitarEspacios($_POST['Bahareque']);
    	$balLAdSin= quitarEspacios($_POST['balLAdSin']);
    	$zinc= quitarEspacios($_POST['zinc']); 

    	$rancho= quitarEspacios($_POST['rancho']); 
    	$maderaBurda= quitarEspacios($_POST['maderaBurda']);
    	$naderaPulida= quitarEspacios($_POST['naderaPulida']);

    	$CiTeCaLaPl= quitarEspacios($_POST['CiTeCaLaPl']); 
    	$Tapete= quitarEspacios($_POST['Tapete']);

    	$otro1= quitarEspacios($_POST['otro1']); 
    	$otro2= quitarEspacios($_POST['otro2']); 
    	$otro3= quitarEspacios($_POST['otro3']); 
    	$otro4= quitarEspacios($_POST['otro4']); 
    	$otro5= quitarEspacios($_POST['otro5']); 

    	$oSinPanete= quitarEspacios($_POST['oSinPanete']); 
    	$oSinPintar= quitarEspacios($_POST['oSinPintar']); 
    	$oTerminada= quitarEspacios($_POST['oTerminada']); 

    	$salaT= quitarEspacios($_POST['salaT']); 
    	$salaS= quitarEspacios($_POST['salaS']); 
    	$comedorT= quitarEspacios($_POST['comedorT']); 
    	$comedorS= quitarEspacios($_POST['comedorS']); 
    	$banosT= quitarEspacios($_POST['banosT']); 
    	$banosS= quitarEspacios($_POST['banosS']); 
    	$cocinaT= quitarEspacios($_POST['cocinaT']); 
    	$cocinaS= quitarEspacios($_POST['cocinaS']); 
    	$habitacionesT= quitarEspacios($_POST['habitacionesT']); 
    	$habitaacionesS= quitarEspacios($_POST['habitaacionesS']); 
    	$pisosT= quitarEspacios($_POST['pisosT']); 
    	$pisosS= quitarEspacios($_POST['pisosS']); 
    	$personasN= quitarEspacios($_POST['personasN']); 
    	$metrosN= quitarEspacios($_POST['metrosN']); 
    	$cocinaComp= quitarEspacios($_POST['cocinaComp']);

    	
	
	//almacenar en la base de datos los datos recibidos
	guardarFormulario4($id, $arriendo , $alimentacion, $gas, $acueducto, $luz, $telefono, $internet, $tv, $transporte, $universidad, $colegios, $medico, $manutencion, $recreacion, $bancariosD, $bancarios, $particularesD, $particulares, $ahorro, $otrosGastos, $totalMensual, $tenencia , $usos , $cualNegocio , $lote , $tejaZinc , $ladriBloquePiedra , $tierra , $ladrilloVista , $casalote , $tejaFibrocemento , $maderaPulida , $cementoGravilla , $panete , $casa , $tejaPlastica , $adobeTapia , $maderaBurdaTabla , $madera , $cuartoOtra , $placa , $Bahareque , $balLAdSin , $zinc , $rancho , $maderaBurda , $naderaPulida , $CiTeCaLaPl , $Tapete , $otro1 , $otro2 , $otro3 , $otro4 , $otro5 , $oSinPanete , $oSinPintar , $oTerminada , $salaT , $salaS , $comedorT , $comedorS , $banosT , $banosS , $cocinaT , $cocinaS , $habitacionesT , $habitaacionesS , $pisosT , $pisosS , $personasN , $metrosN , $cocinaComp );

// almacenar el ID del encuestado para seguir llenando los demas formularios y guardarlos con este ID
	
	header("Location:/assets/5_CondicionesUrbanasSociales.php");
?>

