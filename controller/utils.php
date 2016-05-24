<!-- Creador por:
  Diego Barrera
  Ivan Garcia

  Fecha Creación: Marzo 4 /2014

  Formato de caracterización de la comunidad Prosofi
 -->

<?php
	// libreria de herramientas propias

	//quitar los puntos o comas de los numeros
	function quitarPuntos($numero){
		
	}
	
	function quitarEspacios($palabra){
		if($palabra==''){
			return 'vacio';
			// return $palabra;
		}
		return $palabra;

	}

	function borrarSesionEncuestado(){
		@session_start();
		unset($_SESSION['usuario']['encuestado']);
	}


?>