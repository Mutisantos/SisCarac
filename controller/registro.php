<!-- Creador por:
  Diego Barrera
  Ivan Garcia

  Fecha Creación: Marzo 4 /2014

  Formato de caracterización de la comunidad Prosofi
 -->
<?php

	include 'consultas.php';

	//validar que el servidor este llamando al script mendiante metodo POST
	// if($_SERVER['REQUEST_METHOD']=='POST'){
	 	
		//validar que no exista previamente la cedula en la Base Datos
		if(!existe($_POST["cedula"])){

		 	registrarEncuestador($_POST["nombre"], md5($_POST["cedula"]), md5($_POST["clave"]), $_POST["email"] ) ;
		 	//cerrar la conexion al servidor
		 	if( login($_POST["email"],$_POST["clave"]) ){

		 		header("Location:/assets/menuEncuestador.php");

		 	}

		}
		else{
			header("Location:/index.html");	
		}

		

	 // }

?>