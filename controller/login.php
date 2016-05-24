<!-- Creador por:
	Diego Barrera
	Ivan Garcia

	Fecha Creación: Marzo 4 /2014
	Cliente: Prosofi

	Formato de caracterización de la comunidad

 -->

<?php
	//validar que el servidor este llamando al script mendiante metodo POST
	// if($_SERVER['REQUEST_METHOD']=='POST'){

		 include 'consultas.php';

		if(login($_POST["correo"],$_POST["clave"])){
			
			header("Location:/assets/menuEncuestador.php");			
			 // echo $_SESSION["usuario"]['user'];
			die();

		}
		else{
			header("Location:/index.html");			
		}
	
	// }

?>