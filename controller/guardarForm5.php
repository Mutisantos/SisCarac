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


	@session_start();
	$id = $_SESSION['usuario']['encuestado'];

	// si la variable esta NULL la convierte en 'vacio'
	$P26Ahorro = quitarEspacios($_POST['P26Ahorro']); 
    $P26Credito = quitarEspacios($_POST['P26Credito']); 
    $P26Subsidio = quitarEspacios($_POST['P26Subsidio']); 
    $P26Prestamo = quitarEspacios($_POST['P26Prestamo']); 
    $P26Cesantias = quitarEspacios($_POST['P26Cesantias']); 
    $P26Otro = quitarEspacios($_POST['P26Otro']); 
    $P27Mejoramiento = quitarEspacios($_POST['P27Mejoramiento']); 
    $P28Subsidio = quitarEspacios($_POST['P28Subsidio']); 
    $P29Porque = quitarEspacios($_POST['P29Porque']); 
    $P30LugarO1 = quitarEspacios($_POST['P30LugarO1']); 
    $P30Ano1 = quitarEspacios($_POST['P30Ano1']); 
    $P30LugarD1 = quitarEspacios($_POST['P30LugarD1']); 
    $P30Razon1 = quitarEspacios($_POST['P30Razon1']); 
    $P30LugarO2 = quitarEspacios($_POST['P30LugarO2']); 
    $P30Ano2 = quitarEspacios($_POST['P30Ano2']); 
    $P30LugarD2 = quitarEspacios($_POST['P30LugarD2']); 
    $P30Razon2 = quitarEspacios($_POST['P30Razon2']); 
    $P30LugarO3 = quitarEspacios($_POST['P30LugarO3']); 
    $P30Ano3 = quitarEspacios($_POST['P30Ano3']); 
    $P30LugarD3 = quitarEspacios($_POST['P30LugarD3']); 
    $P30Razon3 = quitarEspacios($_POST['P30Razon3']); 
    $P30LugarO4 = quitarEspacios($_POST['P30LugarO4']); 
    $P30Ano4 = quitarEspacios($_POST['P30Ano4']); 
    $P30LugarD4 = quitarEspacios($_POST['P30LugarD4']); 
    $P30Razon4 = quitarEspacios($_POST['P30Razon4']); 
    $P31ConformeVivienda = quitarEspacios($_POST['P31ConformeVivienda']); 
    $P32Porque = quitarEspacios($_POST['P32Porque']); 
    $P33Extrana = quitarEspacios($_POST['P33Extrana']); 
    $P34Cambios = quitarEspacios($_POST['P34Cambios']); 
    $P35Dignamente = quitarEspacios($_POST['P35Dignamente']); 
    $P36Porque = quitarEspacios($_POST['P36Porque']); 
    $P37Mascotas = quitarEspacios($_POST['P37Mascotas']); 
    $P38Problemas = quitarEspacios($_POST['P38Problemas']); 
    $P39PersonaConvi = quitarEspacios($_POST['P39PersonaConvi']); 
    $P40Solucion = quitarEspacios($_POST['P40Solucion']); 
    $P40Otro = quitarEspacios($_POST['P40Otro']); 
	$P41CalidadVida = quitarEspacios($_POST['P41CalidadVida']); 
	$P42Porque = quitarEspacios($_POST['P42Porque']); 
	$P43CalidadVida = quitarEspacios($_POST['P43CalidadVida']); 
	$P44Porque = quitarEspacios($_POST['P44Porque']); 

	//almacenar en la base de datos los datos recibidos
	guardarFormulario5($id, $P26Ahorro, $P26Credito, $P26Subsidio, $P26Prestamo, $P26Cesantias, $P26Otro, $P27Mejoramiento, $P28Subsidio, $P29Porque, $P30LugarO1, $P30Ano1, $P30LugarD1, $P30Razon1, $P30LugarO2, $P30Ano2, $P30LugarD2, $P30Razon2, $P30LugarO3, $P30Ano3, $P30LugarD3, $P30Razon3, $P30LugarO4, $P30Ano4, $P30LugarD4, $P30Razon4, $P31ConformeVivienda, $P32Porque, $P33Extrana, $P34Cambios, $P35Dignamente, $P36Porque, $P37Mascotas, $P38Problemas, $P39PersonaConvi, $P40Solucion, $P40Otro, $P41CalidadVida, $P42Porque, $P43CalidadVida, $P44Porque);

// almacenar el ID del encuestado para seguir llenando los demas formularios y guardarlos con este ID
	
	//borrar sesion del usuario encuestado $_SESSION['usuario']['encuestado']


	

	header("Location:/assets/6_Observaciones.php");
?>


