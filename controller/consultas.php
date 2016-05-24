<!-- Creador por:
  Diego Barrera
  Ivan Garcia

  Fecha Creación: Marzo 4 /2014

  Formato de caracterización de la comunidad Prosofi
 -->
<?php
	/**
     *  Funcion Conectar 
     *  Establece la conexión con MySQL a través de PHP 
     *  Si se desea trabajar de manera local se debe comentar la segunda linea y descomentarear la primera
     */
	function conectar(){
		// mysqli_connect("hosting","usuario","contrasena","nombreBaseDatos")
		$sqlcon = mysqli_connect("localhost","root",/*"PROSOFI2015CAR"*/"","test") or die ("no se pudo conectar a mysql");
		//$sqlcon = mysqli_connect("localhost","root","PROSOFI2015CAR","test") or die ("could not connect to mysql");
		return $sqlcon;
	}

	/**
     *  funcion encuestado Logged
     *  Verifica que el usuario corresponde a un encuestador
     */
	function encuestadoLogged(){
		$id = $_SESSION['usuario']['encuestado'];

	   	if(!isset($id)){
	   		//logout
	   		//llevar a la pantalla de login
	   		header("Location:/assets/menuEncuestador.php");
	   	}
	}
	/**
     *  funcion encuestado isLogged
     *  verifica que el usuario esté loggeado en el sistema
     */
	function isLogged(){
		@session_start();
		if(!isset($_SESSION["usuario"])){
			header("Location:/index.html");
			return false;
		}
		if(!is_array($_SESSION["usuario"])){
			header("Location:/index.html");
			return false;
		}
		if(empty($_SESSION["usuario"]['user'])){
			return false;
		}
		return true;
	}

	/**
     *  funcion login
     *  Inicia sesion del usuario dado el email y su clave
     */
	function login($email,$clave){
		@session_start();
		//retorna conexcion a la base de datos
		$con = conectar();

        if(empty($email))
        	return false;
        if(empty($clave))
        	return false;

        //Consultar la existencia del usuario en la tabla de encuestadores
        $sql = 'SELECT correo, clave FROM encuestador WHERE correo = "'.$email.'"';
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		//Extraer el registro de usuario
		$row = mysqli_fetch_array($query);


		//sino fue encontrado en la tabla de encuestadores busquelo en la tabla de administradores
		if(!$row){
			//Consultar la existencia del usuario en la tabla de adminsitradores
			$sql = 'SELECT correo, clave FROM administrador WHERE correo = "'.$email.'"';
			$query = mysqli_query($con, $sql) or die (mysqli_error($con));
			//Extraer el registro de usuario
			$row = mysqli_fetch_array($query);
			//si es administrador
			if ($row) {
				$_SESSION["usuario"]=array('adm'=>true);
			}
		}

		if($row){

			//Generación del hash de la contraseña con el metodo MD5
			$hash = md5($clave);
			if($hash==$row["clave"]){
				if (isset($_SESSION["usuario"])) {
					$_SESSION["usuario"]['user']=$row["correo"];
				}else{
					$_SESSION["usuario"] = array('user'=>$row["correo"]);
				}

				return true;
			}

			else{
				unset($_SESSION["usuario"]);//desctrucción de sesión
				return false;
			}
		}
		else{

			return false;//El usuario no existe
		}
		//Close connection
    	mysql_close($connection) or die ("Unexpected Error!!");
	}
	/**
     *  funcion existeAdmn
     *  Determina si además, el usuario no es uno normal sino uno administrativo
     */
	function existeAdmn($correo){

        $con = conectar();

		$sql="SELECT * FROM administrador WHERE correo=".$correo ;
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($query);

		// el usuario no existe en la BD
		if(!$row['cedula']){

			return false;
		}

		return true;
	}

	/**
     *  funcion existe
     *  Valida la existencia de la cedula en la base de datos
     *  @param int cedula: la cedula del encuestado
     */
	function existe($cedula){

        $con = conectar();

		$sql="SELECT cedula FROM usuario WHERE cedula=".$cedula ;
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($query);

		// el usuario no existe en la BD
		if(!$row['cedula']){

			return false;
		}

		return true;
	}
	/**
     *  funcion registrarEncuestador
     *  Registra a un encuestador en la base de datos (usuario normal)
     *  @param string nombre: la nombre del encuestador
     *  @param int cedula: la cedula del encuestador
     *  @param string clave: clave cifrada del encuestador
     *  @param string email: correo del encuestador
     */
	function registrarEncuestador($nombre, $cedula, $clave, $email){

		$con = conectar();

		$sql1 = "INSERT INTO usuario (`correo`, `nombre`, `cedula`) VALUES ('".$email."', '".$nombre."', '".$cedula."');";
		mysqli_query($con, $sql1) or  die();

		$sql2 = "INSERT INTO encuestador (`correo`, `clave`) VALUES ('".$email."', '".$clave."');";
		mysqli_query($con, $sql2) or  die();

	}
	/**
     *  funcion registrarAdministrador
     *  Registra a un administrador en la base de datos 
     *  @param string nombre: la nombre del encuestador
     *  @param int cedula: la cedula del encuestador
     *  @param string clave: clave cifrada del encuestador
     *  @param string email: correo del encuestador
     */
	function registrarAdministrador($nombre, $cedula, $clave, $email){

		$con = conectar();

		$sql1 = "INSERT INTO usuario (`correo`, `nombre`, `cedula`) VALUES ('".$email."', '".$nombre."', '".$cedula."');";
		mysqli_query($con, $sql1) or  die();

		$sql2 = "INSERT INTO administrador (`correo`, `clave`) VALUES ('".$email."', '".$clave."');";
		mysqli_query($con, $sql2) or  die();
	}
	/**
     *  funcion registrarAdministrador
     *  buscar encuestado por cedula en el menu de Encuestador 
     *  @param int numero: la nombre del encuestador
     */
	function buscarCedula($numero){

		$con = conectar();

		$sql = "SELECT id FROM encuestado WHERE cedulaEncuestado = '".mysqli_real_escape_string($con , $numero)."' " ;
		//echo $sql;

		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($query);

		return $row['id'];
	}
	/**
     *  funcion buscarCedulaComposicion
     *  Obtengo todos los valores de identificacion que coincidan con el numero de cedula suministrado 
     *  Es decir, busco todos los familiares del encuestado
     *  @param int numero: la nombre del encuestador
     */

	function buscarCedulaComposicion($numero){

		$con = conectar();

		$sql = "SELECT id FROM form2composicion WHERE documento = '".mysqli_real_escape_string($con ,$numero)."' " ;
		// echo $sql;

		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($query);

		if($row)
			return $row['id'];
		else
			return 0;

	}


	function llenarFormularioOdontologia($cedula){
		$con = conectar();

		$sql = "SELECT * FROM form2composicion WHERE documento = '".mysqli_real_escape_string($con ,$cedula)."' " ;
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($query);
		return $row;
	}

	function llenarUbicacion($id){
		$con = conectar();

		$sql = "SELECT localidad,barrio,upz FROM form4 WHERE id = '".mysqli_real_escape_string($con ,$id)."' " ;
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($query);
		return $row;
	}


	/**
     *  funcion llenarFormulario1
     * buscar datos de formulario 1 de caracterizacion con el id de usuario (la cedula)
     *  @param int id: la cedula del encuestado
     */
	function llenarFormulario1($id){

		$con = conectar();

		$sql = "SELECT * FROM form1 WHERE id = '".mysqli_real_escape_string($con ,$id)."' " ;
		// echo $sql;
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		
		$row = mysqli_fetch_array($query);
		//print_r($sql);
		return $row;
	}
	/**
     *  funcion llenarFormulario2
     *  buscar los datos de la sección sociodemográfica con el id del encuestado/cedula
     *  @param int id: la cedula del encuestado
     */
	function llenarFormulario2($id){

		$con = conectar();

		$sql = "SELECT * FROM form2 WHERE id = '".mysqli_real_escape_string($con ,$id)."' " ;
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($query);

		if($row)
			return $row;
		else
			return 0;
	}
	/**
     *  funcion llenarFormulario2composicion
	 *  llenar formulario 2 retrae datos de una tabla incorrecta, se crea este método para solucionarlo.
	 *  Este metodo obtiene los datos del núcleo familiar del encuestado y se muestra en los indicadores sociodemográficos
     *  @param int id: la cedula del encuestado
     */

	function llenarFormulario2composicion($id){

		$con = conectar();

		$sql = "SELECT  id, nombre, documento, sexo, edad, fechaN, estadoC, condicionEspecial, etnia, parentesco, escolaridad, ocupacion, actividad, ingresos, aporteIngresos, enfermedades,discapacidad, segSocial, sisben, cajaComp, subEstado, lugarDepartamento, lugarCiudad FROM form2composicion WHERE id = '".mysqli_real_escape_string($con ,$id)."' ORDER BY nombre desc" ;
	
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		//$resultSet = mysqli_fetch_all($query,MYSQLI_NUM);//No se usa array porque solo retornaría una fila

		$results_array = array();
		$result = $con->query($sql);
		while ($row = $result->fetch_assoc()) {
  			$results_array[] = $row;

		}

		return $results_array;
		//if($row){
			//$pointer = & $assoc; //Iniciar el apuntador al inicio del arreglo de retorno


			//return $row;
		//}
		//else
			//return 0;
	}

	/**
     *  funcion llenarFormulario3
	 *  llenar formulario 3 retrae datos de la tabla correspondiente.
	 *  Este metodo obtiene los datos referentes a la pagina 3 de la encuesta
     *  @param int id: la cedula del encuestado
     */
	function llenarFormulario3($id){

		$con = conectar();

		$sql = "SELECT * FROM form3 WHERE id = '".mysqli_real_escape_string($con ,$id)."' " ;
	
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($query);

		if($row)
			return $row;
		else
			return 0;
	}

	/**
     *  funcion llenarFormulario4
	 *  llenar formulario 4 retrae datos de la tabla
	 *  Este metodo obtiene los datos referentes a la pagina 4 de la encuesta
     *  @param int id: la cedula del encuestado
     */

	function llenarFormulario4($id){

		$con = conectar();

		$sql = "SELECT * FROM form4 WHERE id = '".mysqli_real_escape_string($con ,$id)."' " ;
		// echo $sql;
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($query);

		if($row)
			return $row;
		else
			return 0;
	}

	/**
     *  funcion llenarFormulario5
	 *  llenar formulario 5 retrae datos de la tabla
	 *  Este metodo obtiene los datos referentes a la pagina 5 de la encuesta
     *  @param int id: la cedula del encuestado
     */
	function llenarFormulario5($id){

		$con = conectar();

		$sql = "SELECT * FROM form5 WHERE id = '".mysqli_real_escape_string($con ,$id)."' " ;
		// echo $sql;
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($query);

		if($row)
			return $row;
		else
			return 0;
	}
	/**
     *  funcion llenarFormulario6
	 *  llenar formulario 6 retrae datos de la tabla
	 *  Este metodo obtiene los datos referentes a la pagina 6 de la encuesta
     *  @param int id: la cedula del encuestado
     */
	function llenarFormulario6($id){

		$con = conectar();

		$sql = "SELECT * FROM form6 WHERE id = '".mysqli_real_escape_string($con ,$id)."' " ;
		// echo $sql;
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($query);

		if($row)
			return $row;
		else
			return 0;
	}
	/**
     *  funcion guardarFormulario1Adm
	 *  Guardo un nuevo registro del primer formulario con todos los campos requeridos
	 *  @param id: cedula del encuestado como llave primaria del resto de datos del formulario
     */
	function guardarFormulario1Adm($id, $nombre, $parentesco, $estadocivil, $edad, $genero, $telefono, $celular, $direccionnueva, $upz, $barrio, $estrato, $numerohogares, $tiempobarrio, $fechaEncuesta, $HoraInicioEncuesta, $HoraFinEncuesta, $encuestador, $carrera, $supervisor, $estado, $coordinadorProsofi ){

		$nuevoUsuarioId = $id;

		$con = conectar();


		$sql2 = "UPDATE form1 SET nombre='".$nombre."', parentesco='".$parentesco."', estadocivil='".$estadocivil."', edad='".$edad."', genero='".$genero."', telefono='".$telefono."', celular='".$celular."', direccionnueva='".$direccionnueva."', upz='".$upz."', barrio='".$barrio."', estrato='".$estrato."', numerohogares='".$numerohogares."', tiempobarrio='".$tiempobarrio."', fechaE='".$fechaEncuesta."', horaInicio='".$HoraInicioEncuesta."', horaFin='".$HoraFinEncuesta."', encuestador='".$encuestador."', carrera='".$carrera."', supervisor='".$supervisor."', estado='".$estado."', vistoBueno='".$coordinadorProsofi."' WHERE id=".$nuevoUsuarioId." ";
		mysqli_query($con, $sql2) or  die();

		return $nuevoUsuarioId;

	}
	/**
     *  funcion guardarFormulario1
	 *  Guardo un nuevo registro del primer formulario con todos los campos requeridos
     */
	function guardarFormulario1($nombre, $parentesco, $estadocivil, $edad, $genero, $cedula, $telefono, $celular, $direccionnueva, $upz, $barrio, $estrato, $numerohogares, $tiempobarrio, $fechaEncuesta, $HoraInicioEncuesta, $HoraFinEncuesta, $encuestador, $carrera, $supervisor, $estado, $coordinadorProsofi ){

		$nuevoUsuarioId = buscarCedula($cedula);
		//$nuevoUsuarioId = $cedula;
		$con = conectar();

		if(!isset($nuevoUsuarioId) or $nuevoUsuarioId==0){
			// NO existe esa cedula en la base de datos

			echo "no existe en BD";
						//buscar el id del usuario

			$sql1 = "INSERT INTO encuestado (`id`, `cedulaEncuestado`) VALUES ('', '".mysqli_real_escape_string($con ,$cedula)."');";
			mysqli_query($con, $sql1);
			$nuevoUsuarioId = mysqli_real_escape_string($con ,$cedula);

			$sql2 = "INSERT INTO form1 (`id`, `nombre`, `parentesco`, `estadocivil`, `edad`, `genero`, `telefono`, `celular`, `direccionnueva`, `upz`, `barrio`, `estrato`, `numerohogares`, `tiempobarrio`, `fechaE`, `horaInicio`, `horaFin`, `encuestador`, `carrera`, `supervisor`, `estado`, `vistoBueno`)
			VALUES ('".$nuevoUsuarioId."', '".$nombre."', '". $parentesco."', '". $estadocivil."', '". $edad."', '". $genero."', '". $telefono."', '". $celular."', '". $direccionnueva."', '". $upz."', '". $barrio."', '". $estrato."', '". $numerohogares."', '". $tiempobarrio."', '". $fechaEncuesta."', '". $HoraInicioEncuesta."', '". $HoraFinEncuesta."', '". $encuestador."', '". $carrera."', '". $supervisor."', '". $estado."', '". $coordinadorProsofi ."');";
			mysqli_query($con, $sql2) or  die();

			return $nuevoUsuarioId;
		}
		else{

			//Existe la cedula en la base de datos

			// $nuevoUsuarioId = buscarCedula($cedula);
			//echo $nuevoUsuarioId;
			$sql1 = "UPDATE encuestado SET cedulaEncuestado='".$cedula."' WHERE id=".$nuevoUsuarioId." ";
			mysqli_query($con, $sql1) or  die();
			echo $nuevoUsuarioId;
			$sql2 = "UPDATE form1 SET nombre='".$nombre."', parentesco='".$parentesco."', estadocivil='".$estadocivil."', edad='".$edad."', genero='".$genero."', telefono='".$telefono."', celular='".$celular."', direccionnueva='".$direccionnueva."', upz='".$upz."', barrio='".$barrio."', estrato='".$estrato."', numerohogares='".$numerohogares."', tiempobarrio='".$tiempobarrio."', fechaE='".$fechaEncuesta."', horaInicio='".$HoraInicioEncuesta."', horaFin='".$HoraFinEncuesta."', encuestador='".$encuestador."', carrera='".$carrera."', supervisor='".$supervisor."', estado='".$estado."', vistoBueno='".$coordinadorProsofi."' WHERE id=".$nuevoUsuarioId." ";
			mysqli_query($con, $sql2) or  die();
			echo "form 1 ya existe ".$nuevoUsuarioId;

			return $nuevoUsuarioId;
		}

		//$nuevoUsuarioId
		return $nuevoUsuarioId;

	}
	/**
     *  funcion guardarFormulario2
	 *  Guardo los campos de ubicación geográfica en el pais
	 *  Actualmente no se esta utilizando
	 *  @param id: cedula del encuestado
	 *  
     */
	function guardarFormulario2($id,$lugarDepartamento,$lugarCiudad, $tiempoEnLocalidad){
		$con = conectar();

		// intento insertar los con ID enviado si ya existe, hace UPDATE

		$sql2 = "INSERT INTO form2 (`id`, `lugarDepartamento`, `lugarCiudad`, `tiempoEnLocalidad`)
		VALUES ('".$id."' , '".$lugarDepartamento."' , '".$lugarCiudad."', '".$tiempoEnLocalidad."')
		ON DUPLICATE KEY UPDATE id='".$id."' , lugarDepartamento='".$lugarDepartamento."' , lugarCiudad='".$lugarCiudad."' , tiempoEnLocalidad='".$tiempoEnLocalidad."' ";
		mysqli_query($con, $sql2) or  die();
	}
	/**
     *  funcion guardarFormulario2
	 *  Guardo los campos de ubicación de composición familiar del encuestado
	 *  se ingresan los datos por cada uno de los familiares y la llave primaria se da por
	 *  @param id: cedula del encuestado
	 *  
     */
	function guardarFormulario2Composicion($id, $nombre, $documento, $sexo, $edad, $fechaN, $estadoC, $condicionEspecial, $etnia, $parentesco, $escolaridad, $ocupacion, $actividad, $ingresos, $aporteIngresos, $enfermedades, $discapacidad, $segSocial, $sisben, $cajaComp, $subEstado, $lugarCiudad, $lugarDepartamento){
		$con = conectar();

		// intento insertar los con ID enviado si ya existe, hace UPDATE

		$sql2 = "INSERT INTO form2composicion (`id`, `nombre`, `documento`, `sexo`, `edad`, `fechaN`, `estadoC`, `condicionEspecial`, `etnia`, `parentesco`, `escolaridad`, `ocupacion`, `actividad`, `ingresos`, `aporteIngresos`, `enfermedades`, `discapacidad`, `segSocial`, `sisben`, `cajaComp`, `subEstado`, `lugarDepartamento`, `lugarCiudad`)
		VALUES ('".$id."' ,'".$nombre."' , '".$documento."' , '".$sexo."' , '".$edad."' , '".$fechaN."' , '".$estadoC."' , '".$condicionEspecial."' , '".$etnia."' , '".$parentesco."' , '".$escolaridad."' , '".$ocupacion."' , '".$actividad."' , '".$ingresos."' , '".$aporteIngresos."' , '".$enfermedades."' , '".$discapacidad."' , '".$segSocial."' , '".$sisben."' , '".$cajaComp."' , '".$subEstado."', '".$lugarDepartamento."' , '".$lugarCiudad."' )
		ON DUPLICATE KEY UPDATE nombre='".$nombre."' , documento='".$documento."' , sexo='".$sexo."' , edad='".$edad."' , fechaN='".$fechaN."' , estadoC='".$estadoC."' , condicionEspecial='".$condicionEspecial."' , etnia='".$etnia."' , parentesco='".$parentesco."' , escolaridad='".$escolaridad."' , ocupacion='".$ocupacion."' , actividad='".$actividad."' , ingresos='".$ingresos."' , aporteIngresos='".$aporteIngresos."' , enfermedades='".$enfermedades."' , discapacidad='".$discapacidad."' , segSocial='".$segSocial."' , sisben='".$sisben."' , cajaComp='".$cajaComp."' , subEstado='".$subEstado."' , lugarDepartamento='".$lugarDepartamento."'  , lugarCiudad='".$lugarCiudad."' ";
		mysqli_query($con, $sql2) or  die();
	}
	/**
     *  funcion guardarFormulario3
	 *  Guardo los campos de la parte urbana del sector donde habita el encuestado
	 *  @param id: cedula del encuestado como llave primaria
	 *  
     */
	function  guardarFormulario3( $id , $P1Parques  , $P1Hospitales  , $P1Colegios  , $P1Iglesias  , $P1SedeAC  , $P1Jardines  , $P1Otro  , $P2Utiliza  , $P3Aguas  , $P3Canos  , $P3Botadero  , $P3Enmontadas  , $P3Otro  , $P4Conforme  , $P5UtilizaSalud  , $P5Cual  , $P7UtilizaColegio  , $P8Preescolar  , $P8Primaria  , $P8Media  , $P8Bachillerato  , $P8Tecnico  , $P9CalificaEducacion  , $P10Opcion1  , $P10Usa1  , $P10Opcion2  , $P10Usa2  , $P10Opcion3  , $P10Usa3  , $P10Opcion4  , $P10Usa4  , $P11CostoTrans  , $P12TiempoTrans  , $P13CalificaPolicia  , $P14CalificaSeguridad  , $P15Madres  , $P15Clubes  , $P15Etnicas  , $P15Juntas  , $P15Comedores  , $P15Culturales  , $P15Otro  , $P16FamiliaParte  , $P16FamiliaParteCual  , $P17Logro  , $P17LogroCual  , $P18Calidad , $P18CalidadPorque ){
		$con = conectar();

		// intento insertar los con ID enviado si ya existe, hace UPDATE
		//$sql2 = "INSERT INTO form3 (`id` `P11`, `P21`, `P22`, `P31`, `P41`, `razones`, `otro11`, `otro21`, `otro22`, `otro31`)
		//VALUES ('".$id $P11."' , '".$P21."' , '".$P22."' , '".$P31."' , '".$P41$razones."', '".$otro11."', '".$otro21."', '".$otro22."', '".$otro31."')
		//ON DUPLICATE KEY UPDATE id='".$id"' , P11='".$P11."' , P21='".$P21."' , P22='".$P22."' , P31='".$P31."' , P41='".$P41"' , razones='".$razones."', otro11='".$otro11."', otro21='".$otro21."', otro22='".$otro22."', otro31='".$otro31."' ";
		$sql2 = "INSERT INTO form3 (`id`, `P1Parques`, `P1Hospitales`, `P1Colegios`, `P1Iglesias`, `P1SedeAC`, `P1Jardines`, `P1Otro`, `P2Utiliza`, `P3Aguas`, `P3Canos`, `P3Botadero`, `P3Enmontadas`, `P3Otro`, `P4Conforme`, `P5UtilizaSalud`, `P5Cual`, `P7UtilizaColegio`, `P8Preescolar`, `P8Primaria`, `P8Media`, `P8Bachillerato`, `P8Tecnico`, `P9CalificaEducacion`, `P10Opcion1`, `P10Usa1`, `P10Opcion2`, `P10Usa2`, `P10Opcion3`, `P10Usa3`, `P10Opcion4`, `P10Usa4`, `P11CostoTrans`, `P12TiempoTrans`, `P13CalificaPolicia`, `P14CalificaSeguridad`, `P15Madres`, `P15Clubes`, `P15Etnicas`, `P15Juntas`, `P15Comedores`, `P15Culturales`, `P15Otro`, `P16FamiliaParte`, `P16FamiliaParteCual`, `P17Logro`, `P17LogroCual`, `P18Calidad`, `P18CalidadPorque`)
		VALUES ('".$id."' , '".$P1Parques."' , '".$P1Hospitales."' , '".$P1Colegios."' , '".$P1Iglesias."' , '".$P1SedeAC."' , '".$P1Jardines."' , '".$P1Otro."' , '".$P2Utiliza."' , '".$P3Aguas."' , '".$P3Canos."' , '".$P3Botadero."' , '".$P3Enmontadas."' , '".$P3Otro."' , '".$P4Conforme."' , '".$P5UtilizaSalud."' , '".$P5Cual."' , '".$P7UtilizaColegio."' , '".$P8Preescolar."' , '".$P8Primaria."' , '".$P8Media."' , '".$P8Bachillerato."' , '".$P8Tecnico."' , '".$P9CalificaEducacion."' , '".$P10Opcion1."' , '".$P10Usa1."' , '".$P10Opcion2."' , '".$P10Usa2."' , '".$P10Opcion3."' , '".$P10Usa3."' , '".$P10Opcion4."' , '".$P10Usa4."' , '".$P11CostoTrans."' , '".$P12TiempoTrans."' , '".$P13CalificaPolicia."' , '".$P14CalificaSeguridad."' , '".$P15Madres."' , '".$P15Clubes."' , '".$P15Etnicas."' , '".$P15Juntas."' , '".$P15Comedores."' , '".$P15Culturales."' , '".$P15Otro."' , '".$P16FamiliaParte."' , '".$P16FamiliaParteCual."' , '".$P17Logro."' , '".$P17LogroCual."' , '".$P18Calidad."' , '".$P18CalidadPorque."')
		ON DUPLICATE KEY UPDATE id='".$id."' , P1Parques='".$P1Parques."' , P1Hospitales='".$P1Hospitales."' , P1Colegios='".$P1Colegios."' , P1Iglesias='".$P1Iglesias."' , P1SedeAC='".$P1SedeAC."' , P1Jardines='".$P1Jardines."' , P1Otro='".$P1Otro."' , P2Utiliza='".$P2Utiliza."' , P3Aguas='".$P3Aguas."' , P3Canos='".$P3Canos."' , P3Botadero='".$P3Botadero."' , P3Enmontadas='".$P3Enmontadas."' , P3Otro='".$P3Otro."' , P4Conforme='".$P4Conforme."' , P5UtilizaSalud='".$P5UtilizaSalud."' , P5Cual='".$P5Cual."' , P7UtilizaColegio='".$P7UtilizaColegio."' , P8Preescolar='".$P8Preescolar."' , P8Primaria='".$P8Primaria."' , P8Media='".$P8Media."' , P8Bachillerato='".$P8Bachillerato."' , P8Tecnico='".$P8Tecnico."' , P9CalificaEducacion='".$P9CalificaEducacion."' , P10Opcion1='".$P10Opcion1."' , P10Usa1='".$P10Usa1."' , P10Opcion2='".$P10Opcion2."' , P10Usa2='".$P10Usa2."' , P10Opcion3='".$P10Opcion3."' , P10Usa3='".$P10Usa3."' , P10Opcion4='".$P10Opcion4."' , P10Usa4='".$P10Usa4."' , P11CostoTrans='".$P11CostoTrans."' , P12TiempoTrans='".$P12TiempoTrans."' , P13CalificaPolicia='".$P13CalificaPolicia."' , P14CalificaSeguridad='".$P14CalificaSeguridad."' , P15Madres='".$P15Madres."' , P15Clubes='".$P15Clubes."' , P15Etnicas='".$P15Etnicas."' , P15Juntas='".$P15Juntas."' , P15Comedores='".$P15Comedores."' , P15Culturales='".$P15Culturales."' , P15Otro='".$P15Otro."' , P16FamiliaParte='".$P16FamiliaParte."' , P16FamiliaParteCual='".$P16FamiliaParteCual."' , P17Logro='".$P17Logro."' , P17LogroCual='".$P17LogroCual."' , P18Calidad='".$P18Calidad."' , P18CalidadPorque='".$P18CalidadPorque."' ";

		mysqli_query($con, $sql2) or  die(mysqli_error($con));

		echo $sql2;
	}
	/**
     *  funcion guardarFormulario4
	 *  Guardo los campos de la parte de costos y vivienda 
	 *  @param id: cedula del encuestado como llave primaria
	 *  
     */
	function guardarFormulario4($id , $arriendo , $alimentacion , $gas , $acueducto , $luz , $telefono , $internet , $tv , $transporte , $universidad , $colegios , $medico , $manutencion , $recreacion , $bancariosD , $bancarios , $particularesD , $particulares , $ahorro , $otrosGastos , $totalMensual , $tenencia , $usos , $cualNegocio , $lote , $tejaZinc , $ladriBloquePiedra , $tierra , $ladrilloVista , $casalote , $tejaFibrocemento , $maderaPulida , $cementoGravilla , $panete , $casa , $tejaPlastica , $adobeTapia , $maderaBurdaTabla , $madera , $cuartoOtra , $placa , $Bahareque , $balLAdSin , $zinc , $rancho , $maderaBurda , $naderaPulida , $CiTeCaLaPl , $Tapete , $otro1 , $otro2 , $otro3 , $otro4 , $otro5 , $oSinPanete , $oSinPintar , $oTerminada , $salaT , $salaS , $comedorT , $comedorS , $banosT , $banosS , $cocinaT , $cocinaS , $habitacionesT , $habitaacionesS , $pisosT , $pisosS , $personasN , $metrosN , $cocinaComp ){

		$con = conectar();

		// intento insertar los con ID enviado si ya existe, hace UPDATE
		$sql2 = "INSERT INTO form4 (`id`, `arriendo` , `alimentacion`, `gas`, `acueducto`, `luz`, `telefono`, `internet`, `tv`, `transporte`, `universidad`, `colegios`, `medico`, `manutencion`, `recreacion`, `bancariosD`, `bancarios`, `particularesD`, `particulares`, `ahorro`, `otrosGastos`, `totalMensual`, `tenencia`,  `usos`,  `cualNegocio`,  `lote`,  `tejaZinc`,  `ladriBloquePiedra`,  `tierra`,  `ladrilloVista`,  `casalote`,  `tejaFibrocemento`,  `maderaPulida`,  `cementoGravilla`,  `panete`,  `casa`,  `tejaPlastica`,  `adobeTapia`,  `maderaBurdaTabla`,  `madera`,  `cuartoOtra`,  `placa`,  `Bahareque`,  `balLAdSin`,  `zinc`,  `rancho`,  `maderaBurda`,  `naderaPulida`,  `CiTeCaLaPl`,  `Tapete`,  `otro1`,  `otro2`,  `otro3`,  `otro4`,  `otro5`,  `oSinPanete`,  `oSinPintar`,  `oTerminada`,  `salaT`,  `salaS`,  `comedorT`,  `comedorS`,  `banosT`,  `banosS`,  `cocinaT`,  `cocinaS`,  `habitacionesT`,  `habitaacionesS`,  `pisosT`,  `pisosS`,  `personasN`,  `metrosN`,  `cocinaComp`)
		VALUES ('".$id."' , '".$arriendo."', '".$alimentacion."' , '".$gas."' , '".$acueducto."' , '".$luz."' , '".$telefono."' , '".$internet."' , '".$tv."' , '".$transporte."' , '".$universidad."' , '".$colegios."' , '".$medico."' , '".$manutencion."' , '".$recreacion."' , '".$bancariosD."' , '".$bancarios."' , '".$particularesD."' , '".$particulares."' , '".$ahorro."' , '".$otrosGastos."' , '".$totalMensual."' , '".$tenencia."', '".$usos."', '".$cualNegocio."', '".$lote."', '".$tejaZinc."', '".$ladriBloquePiedra."', '".$tierra."', '".$ladrilloVista."', '".$casalote."', '".$tejaFibrocemento."', '".$maderaPulida."', '".$cementoGravilla."', '".$panete."', '".$casa."', '".$tejaPlastica."', '".$adobeTapia."', '".$maderaBurdaTabla."', '".$madera."', '".$cuartoOtra."', '".$placa."', '".$Bahareque."', '".$balLAdSin."', '".$zinc."', '".$rancho."', '".$maderaBurda."', '".$naderaPulida."', '".$CiTeCaLaPl."', '".$Tapete."', '".$otro1."', '".$otro2."', '".$otro3."', '".$otro4."', '".$otro5."', '".$oSinPanete."', '".$oSinPintar."', '".$oTerminada."', '".$salaT."', '".$salaS."', '".$comedorT."', '".$comedorS."', '".$banosT."', '".$banosS."', '".$cocinaT."', '".$cocinaS."', '".$habitacionesT."', '".$habitaacionesS."', '".$pisosT."', '".$pisosS."', '".$personasN."', '".$metrosN."', '".$cocinaComp."')
		ON DUPLICATE KEY UPDATE id='".$id."' , arriendo='".$arriendo."' , alimentacion='".$alimentacion."' , gas='".$gas."' , acueducto='".$acueducto."' , luz='".$luz."' , telefono='".$telefono."' , internet='".$internet."' , tv='".$tv."' , transporte='".$transporte."' , universidad='".$universidad."' , colegios='".$colegios."' , medico='".$medico."' , medico='".$manutencion."' , recreacion='".$recreacion."' , bancariosD='".$bancariosD."' , bancarios='".$bancarios."' , particularesD='".$particularesD."' , particulares='".$particulares."' , ahorro='".$ahorro."' , otrosGastos='".$otrosGastos."' , totalMensual='".$totalMensual."', tenencia='".$tenencia."', usos='".$usos."', cualNegocio='".$cualNegocio."', lote='".$lote."', tejaZinc='".$tejaZinc."', ladriBloquePiedra='".$ladriBloquePiedra."', tierra='".$tierra."', ladrilloVista='".$ladrilloVista."', casalote='".$casalote."', tejaFibrocemento='".$tejaFibrocemento."', maderaPulida='".$maderaPulida."', cementoGravilla='".$cementoGravilla."', panete='".$panete."', casa='".$casa."', tejaPlastica='".$tejaPlastica."', adobeTapia='".$adobeTapia."', maderaBurdaTabla='".$maderaBurdaTabla."', madera='".$madera."', cuartoOtra='".$cuartoOtra."', placa='".$placa."', Bahareque='".$Bahareque."', balLAdSin='".$balLAdSin."', zinc='".$zinc."', rancho='".$rancho."', maderaBurda='".$maderaBurda."', naderaPulida='".$naderaPulida."', CiTeCaLaPl='".$CiTeCaLaPl."', Tapete='".$Tapete."', otro1='".$otro1."', otro2='".$otro2."', otro3='".$otro3."', otro4='".$otro4."', otro5='".$otro5."', oSinPanete='".$oSinPanete."', oSinPintar='".$oSinPintar."', oTerminada='".$oTerminada."', salaT='".$salaT."', salaS='".$salaS."', comedorT='".$comedorT."', comedorS='".$comedorS."', banosT='".$banosT."', banosS='".$banosS."', cocinaT='".$cocinaT."', cocinaS='".$cocinaS."', habitacionesT='".$habitacionesT."', habitaacionesS='".$habitaacionesS."', pisosT='".$pisosT."', pisosS='".$pisosS."', personasN='".$personasN."', metrosN='".$metrosN."', cocinaComp='".$cocinaComp."' ";
		echo $sql2;
		mysqli_query($con, $sql2) or  die(mysqli_error($con));
	}
	/**
     *  funcion guardarFormulario5
	 *  Guardo los campos de la parte de costos y preguntas adicionales 
	 *  @param id: cedula del encuestado como llave primaria
	 *  
     */
	function guardarFormulario5($id, $P26Ahorro, $P26Credito, $P26Subsidio, $P26Prestamo, $P26Cesantias, $P26Otro, $P27Mejoramiento, $P28Subsidio, $P29Porque, $P30LugarO1, $P30Ano1, $P30LugarD1, $P30Razon1, $P30LugarO2, $P30Ano2, $P30LugarD2, $P30Razon2, $P30LugarO3, $P30Ano3, $P30LugarD3, $P30Razon3, $P30LugarO4, $P30Ano4, $P30LugarD4, $P30Razon4, $P31ConformeVivienda, $P32Porque, $P33Extrana, $P34Cambios, $P35Dignamente, $P36Porque, $P37Mascotas, $P38Problemas, $P39PersonaConvi, $P40Solucion, $P40Otro, $P41CalidadVida, $P42Porque, $P43CalidadVida, $P44Porque){

		$con = conectar();

		// intento insertar los con ID enviado si ya existe, hace UPDATE
		 $sql2 = "INSERT INTO form5 (`id`, `P26Ahorro`, `P26Credito`, `P26Subsidio`, `P26Prestamo`, `P26Cesantias`, `P26Otro`, `P27Mejoramiento`, `P28Subsidio`, `P29Porque`, `P30LugarO1`, `P30Ano1`, `P30LugarD1`, `P30Razon1`, `P30LugarO2`, `P30Ano2`, `P30LugarD2`, `P30Razon2`, `P30LugarO3`, `P30Ano3`, `P30LugarD3`, `P30Razon3`, `P30LugarO4`, `P30Ano4`, `P30LugarD4`, `P30Razon4`, `P31ConformeVivienda`, `P32Porque`, `P33Extrana`, `P34Cambios`, `P35Dignamente`, `P36Porque`, `P37Mascotas`, `P38Problemas`, `P39PersonaConvi`, `P40Solucion`, `P40Otro`, `P41CalidadVida`, `P42Porque`, `P43CalidadVida`, `P44Porque`)
		 VALUES ('".$id."', '".$P26Ahorro."', '".$P26Credito."', '".$P26Subsidio."', '".$P26Prestamo."', '".$P26Cesantias."', '".$P26Otro."', '".$P27Mejoramiento."', '".$P28Subsidio."', '".$P29Porque."', '".$P30LugarO1."', '".$P30Ano1."', '".$P30LugarD1."', '".$P30Razon1."', '".$P30LugarO2."', '".$P30Ano2."', '".$P30LugarD2."', '".$P30Razon2."', '".$P30LugarO3."', '".$P30Ano3."', '".$P30LugarD3."', '".$P30Razon3."', '".$P30LugarO4."', '".$P30Ano4."', '".$P30LugarD4."', '".$P30Razon4."', '".$P31ConformeVivienda."', '".$P32Porque."', '".$P33Extrana."', '".$P34Cambios."', '".$P35Dignamente."', '".$P36Porque."', '".$P37Mascotas."', '".$P38Problemas."', '".$P39PersonaConvi."', '".$P40Solucion."', '".$P40Otro."', '".$P41CalidadVida."', '".$P42Porque."', '".$P43CalidadVida."', '".$P44Porque."')
		 ON DUPLICATE KEY UPDATE id='".$id."', P26Ahorro='".$P26Ahorro."', P26Credito='".$P26Credito."', P26Subsidio='".$P26Subsidio."', P26Prestamo='".$P26Prestamo."', P26Cesantias='".$P26Cesantias."', P26Otro='".$P26Otro."', P27Mejoramiento='".$P27Mejoramiento."', P28Subsidio='".$P28Subsidio."', P29Porque='".$P29Porque."', P30LugarO1='".$P30LugarO1."', P30Ano1='".$P30Ano1."', P30LugarD1='".$P30LugarD1."', P30Razon1='".$P30Razon1."', P30LugarO2='".$P30LugarO2."', P30Ano2='".$P30Ano2."', P30LugarD2='".$P30LugarD2."', P30Razon2='".$P30Razon2."', P30LugarO3='".$P30LugarO3."', P30Ano3='".$P30Ano3."', P30LugarD3='".$P30LugarD3."', P30Razon3='".$P30Razon3."', P30LugarO4='".$P30LugarO4."', P30Ano4='".$P30Ano4."', P30LugarD4='".$P30LugarD4."', P30Razon4='".$P30Razon4."', P31ConformeVivienda='".$P31ConformeVivienda."', P32Porque='".$P32Porque."', P33Extrana='".$P33Extrana."', P34Cambios='".$P34Cambios."', P35Dignamente='".$P35Dignamente."', P36Porque='".$P36Porque."', P37Mascotas='".$P37Mascotas."', P38Problemas='".$P38Problemas."', P39PersonaConvi='".$P39PersonaConvi."', P40Solucion='".$P40Solucion."', P40Otro='".$P40Otro."', P41CalidadVida='".$P41CalidadVida."', P42Porque='".$P42Porque."', P43CalidadVida='".$P43CalidadVida."', P44Porque='".$P44Porque."' ";
	 	echo $sql2;
		mysqli_query($con, $sql2) or  die();
	}
	/**
     *  funcion guardarFormulario6
	 *  Guardo las observaciones y comentarios de seguimiento de la encuesta 
	 *  @param id: cedula del encuestado como llave primaria
	 *  
     */
	function guardarFormulario6($id,$observaciones,$seguimiento){
		$con = conectar();

		// intento insertar los con ID enviado si ya existe, hace UPDATE

		$sql2 = "INSERT INTO form6 (`id`, `observaciones`, `seguimiento`)
		VALUES ('".$id."' , '".$observaciones."' , '".$seguimiento."')
		ON DUPLICATE KEY UPDATE id='".$id."' , observaciones='".$observaciones."' , seguimiento='".$seguimiento."' ";
		mysqli_query($con, $sql2) or  die();
	}



	function guardarFormularioOdontologia1($cedula,$adultoMayor, $adulto, $joven, $nino, $menor5,$otro13, $enfermedadesComunes, $otro21, $produccionEnfermedades, $quien, $paraQue, $otro24, $otrosElementos, $otro25, $Elementos, $otro31, $frecuencia, $dolorMuela, $problemasOdontologo, $ultimaVisita){

		$con = conectar();

		// intento insertar los con ID enviado si ya existe, hace UPDATE
		 $sql2 = "INSERT INTO formo1 (`id`, `12adultoMayor`, `12adulto`, `12joven`, `12nino`, `12menor5`, `otro13`, `21enfermedadesComunes`, `21otro`, `22produccionEnfermedades`, `23quien`, `24paraQue`, `otro24`, `25otrosElementos`, `25otro`, `31Elementos`, `31otro`, `32frecuencia`, `33dolorMuela`, `34problemasOdontologo`, `35ultimaVisita`)
		 VALUES ('".$cedula."', '".$adultoMayor."', '".$adulto."', '".$joven."', '".$nino."', '".$menor5."', '".$otro13."', '".$enfermedadesComunes."', '".$otro21."', '".$produccionEnfermedades."', '".$quien."', '".$paraQue."', '".$otro24."', '".$otrosElementos."', '".$otro25."', '".$Elementos."', '".$otro31."', '".$frecuencia."', '".$dolorMuela."', '".$problemasOdontologo."', '".$ultimaVisita."' )
		 ON DUPLICATE KEY UPDATE id='".$cedula."', 12adultoMayor='".$adultoMayor."', 12adulto='".$adulto."', 12joven='".$joven."', 12nino='".$nino."', 12menor5='".$menor5."', otro13='".$otro13."', 21enfermedadesComunes='".$enfermedadesComunes."', 21otro='".$otro21."', 22produccionEnfermedades='".$produccionEnfermedades."', 23quien='".$quien."', 24paraQue='".$paraQue."', otro24='".$otro24."', 25otrosElementos='".$otrosElementos."', 25otro='".$otro25."', 31Elementos='".$Elementos."', 31otro='".$otro31."', 32frecuencia='".$frecuencia."', 33dolorMuela='".$dolorMuela."', 34problemasOdontologo='".$problemasOdontologo."', 35ultimaVisita='".$ultimaVisita."' ";
		echo $sql2;
		mysqli_query($con, $sql2) or  die(mysqli_error($con));
	}


function guardarFormularioOdontologia2( $fecha1, $paciente1, $profesional1, $tratamiento1, $ips, $fechaA, $color1, $observaciones1){
	$con = conectar();
	$sql2 = "INSERT INTO formo2 (`id`,`fecha1`, `paciente1`, `profesional1`, `tratamiento1`, `ips`, `fechaA`, `color1`, `observaciones1`)
		VALUES  ('', '".$fecha1."',  '".$paciente1."',  '".$profesional1."',  '".$tratamiento1."',  '".$ips."',  '".$fechaA."',  '".$color1."',  '".$observaciones1."') ";

	echo $sql2;
	mysqli_query($con, $sql2) or  die();
}



function guardarOdontologia_Form2($id, $documento , $sexo , $edad,$escolaridad , $actividad, $segSocial){
	$con = conectar();

	// intento insertar los con ID enviado si ya existe, hace UPDATE
	$sql2 = "INSERT INTO form2composicion (`id`,`documento`, `sexo`, `edad`, `escolaridad`, `actividad`, `segSocial`)
	VALUES ('".$id."', '".$documento."' , '".$sexo."' , '".$edad."' , '".$escolaridad."' , '".$actividad."' , '".$segSocial."')
	ON DUPLICATE KEY UPDATE documento='".$documento."' , sexo='".$sexo."' , edad='".$edad."' , escolaridad='".$escolaridad."', actividad='".$actividad."', segSocial='".$segSocial."' ";
	echo $sql2;
	mysqli_query($con, $sql2) or die();

}
function guardarOdontologia_Form4($id, $localidad, $barrio, $upz){
	$con = conectar();

	// intento insertar los con ID enviado si ya existe, hace UPDATE
	$sql2 = "INSERT INTO form4 (`id`, `localidad`, `barrio`, `upz`)
	VALUES ('".$id."', '".$localidad."', '".$barrio."', '".$upz."')
	ON DUPLICATE KEY UPDATE localidad='".$localidad."', barrio='".$barrio."', upz='".$upz."' ";
	echo $sql2;
	mysqli_query($con, $sql2) or  die();
}
//consultas panel administrador

	/**
     *  funcion buscarCedulaNombre
	 *  Busco un usuario dado la cedula o el nombre, o ambas
	 *  @param id: numero de cedula del encuestado como llave primaria
	 *  @param string: nombre del encuestado como llave primaria
     */
function buscarCedulaNombre($numero, $nombre){

        $con = conectar();

		$sql = "SELECT id FROM encuestado WHERE cedulaEncuestado = '".mysqli_real_escape_string($con , $numero)."' " ;
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($query);

		// el usuario no existe en la BD
		if(!isset($row['id'])){
			$sql = "SELECT * FROM form1 WHERE nombre LIKE '%".mysqli_real_escape_string($con , $nombre)."%' " ;
			$query = mysqli_query($con, $sql) or die (mysqli_error($con));

		}else{
			$sql = "SELECT * FROM form1 WHERE id = ".mysqli_real_escape_string($con , $row['id'])." " ;
			$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		}
		$iner=0;
		$answr= array();
		while ($row =mysqli_fetch_array($query)) {
			$answr[$iner]=$row;
		}
		return $answr;

	}
	//buscar por barrio
	function buscarBarrio($nombre){

        $con = conectar();
		$sql = "SELECT * FROM form1 WHERE barrio LIKE '%".mysqli_real_escape_string($con , $nombre)."%' " ;
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$iner=0;
		$answr= array();
		while ($row =mysqli_fetch_array($query)) {
			print_r($row);
			$answr[$iner]=$row;
			$iner++;
		}
		return $answr;
	}
	function buscarDireccion($nombre){

        $con = conectar();
		$sql = "SELECT * FROM form1 WHERE direccionnueva LIKE '%".mysqli_real_escape_string($con , $nombre)."%' " ;
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		$iner=0;
		$answr= array();
		while ($row =mysqli_fetch_array($query)) {
			$answr[$iner]=$row;
		}
		return $answr;
	}
?>
