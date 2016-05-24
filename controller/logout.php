//cerrar la sesion del usuario
<?php
@session_start();
	echo $_SESSION["usuario"];

	if(isset($_SESSION["usuario"])){

  		unset($_SESSION["usuario"]);
  		session_destroy();
  		
  	}

header("Location: /index.html");
?>