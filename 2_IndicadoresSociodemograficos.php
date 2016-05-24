<!-- Creador por:
      Diego Barrera
      Ivan Garcia

      Fecha Creación: Marzo 4 /2014
      Cliente: Prosofi

      Formato de caracterización de la comunidad

 -->
<!DOCTYPE>
<html>
<head>
      <!-- adicion de librerias de diseno y optimizacion para dispositivos moviles -->
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Indicadores Sociodemogr&#225;ficos</title>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <!-- Importar temas de Twitter Bootstrap -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Importar temas de Twitter Bootstrap -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="css/estilo.css" />                       
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<!-- barra de navegacion -->
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Diagnóstico Socioeconómico</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/assets/menuEncuestador.php">Menú</a></li>
            <li><a href="/assets/controller/logout.php">Cerrar Sesión</a></li>
            <li><a target="_blank" href="/assets/docs/manualUsuario.pdf">Ayuda</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="POST" action="/assets/controller/buscar.php">
            <input type="number" min="0" class="form-control" placeholder="Cédula No." name="cedula">
            <input type="submit" class="btn btn-primary" value="Buscar">
          </form>
        </div>
      </div>
    </div>

<!--  <div class="navbar-inverse navbar navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Diagnóstico Socioeconómico</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
 -->


  <div class="media">
        <a class="pull-left" href="#">
            <!-- logo de la javeriana -->
          <img class="media-object" src="/assets/img/logojaveriana.png" alt="...">
        </a>
      <a class="pull-right" href="#">
        <!-- logo Prosofi -->
        <img class="media-object" src="/assets/img/logoProsofi.png" alt="...">
      </a>
      <h5><b>II.  INDICADORES SOCIODEMOGR&#193;FICOS</b></h5>
    </div>

<!-- Enviar Formulario vía POST para que un script en PHP ingrese los datos a la base de datos -->
<form class="form-inline" role="form" action="/assets/controller/guardarForm2.php" method="POST" name="form2" enctype="multipart/form-data">

      
      <!--
      <br>
      <b>TIPOLOG&#205;A FAMILIAR:</b><br>

      Lugar de origen (nacimiento):<!--  <input class="form-control" type="text" name="lugarOrigen">    
        <select name="lugarDepartamento" class="form-control">
            <option value="">Departamento</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Antioquia">Antioquia</option>
            <option value="Arauca">Arauca</option>
            <option value="Atlántico">Atlántico</option>
            <!-- <option value="Bogotá D.C.">Bogotá D.C.</option> 
            <option value="Bolívar">Bolívar</option>
            <option value="Boyacá">Boyacá</option>
            <option value="Caldas">Caldas</option>
            <option value="Caquetá">Caquetá</option>
            <option value="Casanare">Casanare</option>
            <option value="Cauca">Cauca</option>
            <option value="Cesar">Cesar</option>
            <option value="Chocó">Chocó</option>
            <option value="Córdoba">Córdoba</option>
            <option value="Cundinamarca">Cundinamarca</option>
            <option value="Güainia">Güainia</option>
            <option value="Guaviare">Guaviare</option>
            <option value="Huila">Huila</option>
            <option value="La Guajira">La Guajira</option>
            <option value="Magdalena">Magdalena</option>
            <option value="Meta">Meta</option>
            <option value="Nariño">Nariño</option>
            <option value="Norte de Santander">Norte de Santander</option>
            <option value="Putumayo">Putumayo</option>
            <option value="Quindío">Quindío</option>
            <option value="Risaralda">Risaralda</option>
            <option value="San Andrés y Providencia">San Andrés y Providencia</option>
            <option value="Santander">Santander</option>
            <option value="Sucre">Sucre</option>
            <option value="Tolima">Tolima</option>
            <option value="Valle del Cauca">Valle del Cauca</option>
            <option value="Vaupés">Vaupés</option>
            <option value="Vichada">Vichada</option>
        </select> 

        <select name="lugarCiudad" class="form-control">
            <option>Ciudad o Municipio</option>
            <option value="Abejorral">Abejorral</option>
            <option value="Abrego">Abrego</option>
            <option value="Abriaqui">Abriaqui</option>
            <option value="Acacias">Acacias</option>
            <option value="Acandí">Acandí</option>
            <option value="Acevedo">Acevedo</option>
            <option value="Achí">Achí</option>
            <option value="Agrado">Agrado</option>
            <option value="Agua de Dios">Agua de Dios</option>
            <option value="Aguachica">Aguachica</option>
            <option value="Aguada">Aguada</option>
            <option value="Aguadas">Aguadas</option>
            <option value="Aguazul">Aguazul</option>
            <option value="Agustín Codazzi">Agustín Codazzi</option>
            <option value="Aipe">Aipe</option>
            <option value="Albán">Albán</option>
            <option value="Albán (San José)">Albán (San José)</option>
            <option value="Albania">Albania</option>
            <option value="Alcalá">Alcalá</option>
            <option value="Aldana">Aldana</option>
            <option value="Alejandría">Alejandría</option>
            <option value="Algeciras">Algeciras</option>
            <option value="Almaguer">Almaguer</option>
            <option value="Almeida">Almeida</option>
            <option value="Alpujarra">Alpujarra</option>
            <option value="Altamira">Altamira</option>
            <option value="Alto Baudó (Pie de Pato)">Alto Baudó (Pie de Pato)</option>
            <option value="Altos del Rosario">Altos del Rosario</option>
            <option value="Alvarado">Alvarado</option>
            <option value="Amagá">Amagá</option>
            <option value="Amalfi">Amalfi</option>
            <option value="Ambalema">Ambalema</option>
            <option value="Anapoima">Anapoima</option>
            <option value="Ancuyá">Ancuyá</option>
            <option value="Andalucía">Andalucía</option>
            <option value="Andes">Andes</option>
            <option value="Angelópolis">Angelópolis</option>
            <option value="Angostura">Angostura</option>
            <option value="Anolaima">Anolaima</option>
            <option value="Anorí">Anorí</option>
            <option value="Anserma">Anserma</option>
            <option value="Anzá">Anzá</option>
            <option value="Anzóategui">Anzóategui</option>
            <option value="Apartadó">Apartadó</option>
            <option value="Apía">Apía</option>
            <option value="Aquitania">Aquitania</option>
            <option value="Aracataca">Aracataca</option>
            <option value="Aranzazu">Aranzazu</option>
            <option value="Aratoca">Aratoca</option>
            <option value="Arauca">Arauca</option>
            <option value="Arauquita">Arauquita</option>
            <option value="Arbeláez">Arbeláez</option>
            <option value="Arboleda (Berruecos)">Arboleda (Berruecos)</option>
            <option value="Arboledas">Arboledas</option>
            <option value="Arboletes">Arboletes</option>
            <option value="Arcabuco">Arcabuco</option>
            <option value="Arenal">Arenal</option>
            <option value="Argelia">Argelia</option>
            <option value="Ariguaní (El Difícil)">Ariguaní (El Difícil)</option>
            <option value="Arjona">Arjona</option>
            <option value="Armenia">Armenia</option>
            <option value="Armero (Guayabal)">Armero (Guayabal)</option>
            <option value="Arroyohondo">Arroyohondo</option>
            <option value="Astrea">Astrea</option>
            <option value="Ataco">Ataco</option>
            <option value="Atrato (Yuto)">Atrato (Yuto)</option>
            <option value="Ayapel">Ayapel</option>
            <option value="Bagadó">Bagadó</option>
            <option value="Bahía Solano (Mútis)">Bahía Solano (Mútis)</option>
            <option value="Bajo Baudó (Pizarro)">Bajo Baudó (Pizarro)</option>
            <option value="Balboa">Balboa</option>
            <option value="Baranoa">Baranoa</option>
            <option value="Baraya">Baraya</option>
            <option value="Barbacoas">Barbacoas</option>
            <option value="Barbosa">Barbosa</option>
            <option value="Barichara">Barichara</option>
            <option value="Barranca de Upía">Barranca de Upía</option>
            <option value="Barrancabermeja">Barrancabermeja</option>
            <option value="Barrancas">Barrancas</option>
            <option value="Barranco de Loba">Barranco de Loba</option>
            <option value="Barranquilla">Barranquilla</option>
            <option value="Becerril">Becerril</option>
            <option value="Belalcázar">Belalcázar</option>
            <option value="Belén">Belén</option>
            <option value="Belén de los Andaquíes">Belén de los Andaquíes</option>
            <option value="Belén de Umbría">Belén de Umbría</option>
            <option value="Bello">Bello</option>
            <option value="Belmira">Belmira</option>
            <option value="Beltrán">Beltrán</option>
            <option value="Berbeo">Berbeo</option>
            <option value="Betania">Betania</option>
            <option value="Beteitiva">Beteitiva</option>
            <option value="Betulia">Betulia</option>
            <option value="Bituima">Bituima</option>
            <option value="Boavita">Boavita</option>
            <option value="Bochalema">Bochalema</option>
            <option value="Bogotá D.C.">Bogotá D.C.</option>
            <option value="Bojacá">Bojacá</option>
            <option value="Bojayá (Bellavista)">Bojayá (Bellavista)</option>
            <option value="Bolívar">Bolívar</option>
            <option value="Bosconia">Bosconia</option>
            <option value="Boyacá">Boyacá</option>
            <option value="Briseño">Briseño</option>
            <option value="Bucaramanga">Bucaramanga</option>
            <option value="Bucarasica">Bucarasica</option>
            <option value="Buenaventura">Buenaventura</option>
            <option value="Buenavista">Buenavista</option>
            <option value="Buenos Aires">Buenos Aires</option>
            <option value="Buesaco">Buesaco</option>
            <option value="Buga">Buga</option>
            <option value="Bugalagrande">Bugalagrande</option>
            <option value="Buriticá">Buriticá</option>
            <option value="Busbanzá">Busbanzá</option>
            <option value="Cabrera">Cabrera</option>
            <option value="Cabuyaro">Cabuyaro</option>
            <option value="Cáceres">Cáceres</option>
            <option value="Cachipay">Cachipay</option>
            <option value="Cáchira">Cáchira</option>
            <option value="Cácota">Cácota</option>
            <option value="Caicedo">Caicedo</option>
            <option value="Caicedonia">Caicedonia</option>
            <option value="Caimito">Caimito</option>
            <option value="Cajamarca">Cajamarca</option>
            <option value="Cajibío">Cajibío</option>
            <option value="Cajicá">Cajicá</option>
            <option value="Calamar">Calamar</option>
            <option value="Calarcá">Calarcá</option>
            <option value="Caldas">Caldas</option>
            <option value="Caldono">Caldono</option>
            <option value="Cali">Cali</option>
            <option value="California">California</option>
            <option value="Calima (Darién)">Calima (Darién)</option>
            <option value="Caloto">Caloto</option>
            <option value="Campamento">Campamento</option>
            <option value="Campo de la Cruz">Campo de la Cruz</option>
            <option value="Campoalegre">Campoalegre</option>
            <option value="Campohermoso">Campohermoso</option>
            <option value="Canalete">Canalete</option>
            <option value="Candelaria">Candelaria</option>
            <option value="Cantagallo">Cantagallo</option>
            <option value="Cantón de San Pablo">Cantón de San Pablo</option>
            <option value="Cañasgordas">Cañasgordas</option>
            <option value="Caparrapí">Caparrapí</option>
            <option value="Capitanejo">Capitanejo</option>
            <option value="Cáqueza">Cáqueza</option>
            <option value="Caracolí">Caracolí</option>
            <option value="Caramanta">Caramanta</option>
            <option value="Carcasí">Carcasí</option>
            <option value="Carepa">Carepa</option>
            <option value="Carmen de Apicalá">Carmen de Apicalá</option>
            <option value="Carmen de Carupa">Carmen de Carupa</option>
            <option value="Carmen de Viboral">Carmen de Viboral</option>
            <option value="Carolina">Carolina</option>
            <option value="Cartagena">Cartagena</option>
            <option value="Cartagena del Chairá">Cartagena del Chairá</option>
            <option value="Cartago">Cartago</option>
            <option value="Carurú">Carurú</option>
            <option value="Casabianca">Casabianca</option>
            <option value="Castilla la Nueva">Castilla la Nueva</option>
            <option value="Caucasia">Caucasia</option>
            <option value="Cepitá">Cepitá</option>
            <option value="Cereté">Cereté</option>
            <option value="Cerinza">Cerinza</option>
            <option value="Cerrito">Cerrito</option>
            <option value="Cerro San Antonio">Cerro San Antonio</option>
            <option value="Chachagüi">Chachagüi</option>
            <option value="Chaguaní">Chaguaní</option>
            <option value="Chalán">Chalán</option>
            <option value="Chameza">Chameza</option>
            <option value="Chaparral">Chaparral</option>
            <option value="Charalá">Charalá</option>
            <option value="Charta">Charta</option>
            <option value="Chía">Chía</option>
            <option value="Chigorodó">Chigorodó</option>
            <option value="Chima">Chima</option>
            <option value="Chimichagua">Chimichagua</option>
            <option value="Chinácota">Chinácota</option>
            <option value="Chinavita">Chinavita</option>
            <option value="Chinchina">Chinchina</option>
            <option value="Chinú">Chinú</option>
            <option value="Chipaque">Chipaque</option>
            <option value="Chipatá">Chipatá</option>
            <option value="Chiquinquirá">Chiquinquirá</option>
            <option value="Chíquiza">Chíquiza</option>
            <option value="Chiriguaná">Chiriguaná</option>
            <option value="Chiscas">Chiscas</option>
            <option value="Chita">Chita</option>
            <option value="Chitagá">Chitagá</option>
            <option value="Chitaranque">Chitaranque</option>
            <option value="Chivatá">Chivatá</option>
            <option value="Chivolo">Chivolo</option>
            <option value="Chivor">Chivor</option>
            <option value="Choachí">Choachí</option>
            <option value="Chocontá">Chocontá</option>
            <option value="Cicuto">Cicuto</option>
            <option value="Ciénaga">Ciénaga</option>
            <option value="Ciénaga de Oro">Ciénaga de Oro</option>
            <option value="Cimitarra">Cimitarra</option>
            <option value="Circasia">Circasia</option>
            <option value="Cisneros">Cisneros</option>
            <option value="Clemencia">Clemencia</option>
            <option value="Cocorná">Cocorná</option>
            <option value="Coello">Coello</option>
            <option value="Cogua">Cogua</option>
            <option value="Colombia">Colombia</option>
            <option value="Colón">Colón</option>
            <option value="Colón (Génova)">Colón (Génova)</option>
            <option value="Coloso (Ricaurte)">Coloso (Ricaurte)</option>
            <option value="Cómbita">Cómbita</option>
            <option value="Concepción">Concepción</option>
            <option value="Concordia">Concordia</option>
            <option value="Condoto">Condoto</option>
            <option value="Confines">Confines</option>
            <option value="Consacá">Consacá</option>
            <option value="Contadero">Contadero</option>
            <option value="Contratación">Contratación</option>
            <option value="Convención">Convención</option>
            <option value="Copacabana">Copacabana</option>
            <option value="Coper">Coper</option>
            <option value="Córdoba">Córdoba</option>
            <option value="Corinto">Corinto</option>
            <option value="Coromoro">Coromoro</option>
            <option value="Corozal">Corozal</option>
            <option value="Corrales">Corrales</option>
            <option value="Cota">Cota</option>
            <option value="Cotorra">Cotorra</option>
            <option value="Covarachia">Covarachia</option>
            <option value="Coyaima">Coyaima</option>
            <option value="Cravo Norte">Cravo Norte</option>
            <option value="Cuaspud (Carlosama)">Cuaspud (Carlosama)</option>
            <option value="Cubar">Cubar</option>
            <option value="Cubarral">Cubarral</option>
            <option value="Cucaita">Cucaita</option>
            <option value="Cucunubá">Cucunubá</option>
            <option value="Cúcuta">Cúcuta</option>
            <option value="Cucutilla">Cucutilla</option>
            <option value="Cuitiva">Cuitiva</option>
            <option value="Cumaral">Cumaral</option>
            <option value="Cumaribo">Cumaribo</option>
            <option value="Cumbal">Cumbal</option>
            <option value="Cumbitará">Cumbitará</option>
            <option value="Cunday">Cunday</option>
            <option value="Curillo">Curillo</option>
            <option value="Curití">Curití</option>
            <option value="Curumaní">Curumaní</option>
            <option value="Dabeiba">Dabeiba</option>
            <option value="Dagua">Dagua</option>
            <option value="Dibulla">Dibulla</option>
            <option value="Distracción">Distracción</option>
            <option value="Dolores">Dolores</option>
            <option value="Don Matías">Don Matías</option>
            <option value="Dos Quebradas">Dos Quebradas</option>
            <option value="Duitama">Duitama</option>
            <option value="Durania">Durania</option>
            <option value="Ebéjico">Ebéjico</option>
            <option value="El Águila">El Águila</option>
            <option value="El Bagre">El Bagre</option>
            <option value="El Banco">El Banco</option>
            <option value="El Cairo">El Cairo</option>
            <option value="El Calvario">El Calvario</option>
            <option value="El Carmen">El Carmen</option>
            <option value="El Carmen de Bolívar">El Carmen de Bolívar</option>
            <option value="El Castillo">El Castillo</option>
            <option value="El Cerrito">El Cerrito</option>
            <option value="El Charco">El Charco</option>
            <option value="El Cocuy">El Cocuy</option>
            <option value="El Colegio">El Colegio</option>
            <option value="El Copey">El Copey</option>
            <option value="El Doncello">El Doncello</option>
            <option value="El Dorado">El Dorado</option>
            <option value="El Dovio">El Dovio</option>
            <option value="El Espino">El Espino</option>
            <option value="El Guacamayo">El Guacamayo</option>
            <option value="El Guamo">El Guamo</option>
            <option value="El Litoral de San Juan">El Litoral de San Juan</option>
            <option value="El Molino">El Molino</option>
            <option value="El Paso">El Paso</option>
            <option value="El Paujil">El Paujil</option>
            <option value="El Peñón">El Peñón</option>
            <option value="El Piñón">El Piñón</option>
            <option value="El Playón">El Playón</option>
            <option value="El Retén">El Retén</option>
            <option value="El Retorno">El Retorno</option>
            <option value="El Rosal">El Rosal</option>
            <option value="El Rosario">El Rosario</option>
            <option value="El Tablón">El Tablón</option>
            <option value="El Tambo">El Tambo</option>
            <option value="El Tarra">El Tarra</option>
            <option value="El Zulia">El Zulia</option>
            <option value="Elías">Elías</option>
            <option value="Encino">Encino</option>
            <option value="Enciso">Enciso</option>
            <option value="Entrerríos">Entrerríos</option>
            <option value="Envigado">Envigado</option>
            <option value="Espinal">Espinal</option>
            <option value="Facatativá">Facatativá</option>
            <option value="Falán">Falán</option>
            <option value="Filadelfia">Filadelfia</option>
            <option value="Filandia">Filandia</option>
            <option value="Firavitoba">Firavitoba</option>
            <option value="Flandes">Flandes</option>
            <option value="Florencia">Florencia</option>
            <option value="Floresta">Floresta</option>
            <option value="Florián">Florián</option>
            <option value="Florida">Florida</option>
            <option value="Floridablanca">Floridablanca</option>
            <option value="Fómeque">Fómeque</option>
            <option value="Fonseca">Fonseca</option>
            <option value="Fortul">Fortul</option>
            <option value="Fosca">Fosca</option>
            <option value="Francisco Pizarro">Francisco Pizarro</option>
            <option value="Fredonia">Fredonia</option>
            <option value="Fresno">Fresno</option>
            <option value="Frontino">Frontino</option>
            <option value="Fuente de Oro">Fuente de Oro</option>
            <option value="Fundación">Fundación</option>
            <option value="Funes">Funes</option>
            <option value="Funza">Funza</option>
            <option value="Fúquene">Fúquene</option>
            <option value="Fusagasugá">Fusagasugá</option>
            <option value="Gachalá">Gachalá</option>
            <option value="Gachancipá">Gachancipá</option>
            <option value="Gachantivá">Gachantivá</option>
            <option value="Gachetá">Gachetá</option>
            <option value="Galán">Galán</option>
            <option value="Galapa">Galapa</option>
            <option value="Galeras (Nueva Granada)">Galeras (Nueva Granada)</option>
            <option value="Gama">Gama</option>
            <option value="Gamarra">Gamarra</option>
            <option value="Gámbita">Gámbita</option>
            <option value="Gámeza">Gámeza</option>
            <option value="Garagoa">Garagoa</option>
            <option value="Garzón">Garzón</option>
            <option value="Génova">Génova</option>
            <option value="Gigante">Gigante</option>
            <option value="Ginebra">Ginebra</option>
            <option value="Giraldo">Giraldo</option>
            <option value="Girardot">Girardot</option>
            <option value="Girardota">Girardota</option>
            <option value="Girón">Girón</option>
            <option value="Gómez Plata">Gómez Plata</option>
            <option value="González">González</option>
            <option value="Gramalote">Gramalote</option>
            <option value="Granada">Granada</option>
            <option value="Guaca">Guaca</option>
            <option value="Guacamayas">Guacamayas</option>
            <option value="Guacarí">Guacarí</option>
            <option value="Guachetá">Guachetá</option>
            <option value="Guachucal">Guachucal</option>
            <option value="Guadalupe">Guadalupe</option>
            <option value="Guaduas">Guaduas</option>
            <option value="Guaitarilla">Guaitarilla</option>
            <option value="Gualmatán">Gualmatán</option>
            <option value="Guamal">Guamal</option>
            <option value="Guamo">Guamo</option>
            <option value="Guapi">Guapi</option>
            <option value="Guapotá">Guapotá</option>
            <option value="Guarandá">Guarandá</option>
            <option value="Guarne">Guarne</option>
            <option value="Guasca">Guasca</option>
            <option value="Guatapé">Guatapé</option>
            <option value="Guataquí">Guataquí</option>
            <option value="Guatavita">Guatavita</option>
            <option value="Guateque">Guateque</option>
            <option value="Guática">Guática</option>
            <option value="Guavata">Guavata</option>
            <option value="Guayabal de Síquima">Guayabal de Síquima</option>
            <option value="Guayabetal">Guayabetal</option>
            <option value="Guayatá">Guayatá</option>
            <option value="Guepsa">Guepsa</option>
            <option value="Guicán">Guicán</option>
            <option value="Gutiérrez">Gutiérrez</option>
            <option value="Hacarí">Hacarí</option>
            <option value="Hatillo de Loba">Hatillo de Loba</option>
            <option value="Hato">Hato</option>
            <option value="Hato Corozal">Hato Corozal</option>
            <option value="Hatonuevo">Hatonuevo</option>
            <option value="Heliconia">Heliconia</option>
            <option value="Herrán">Herrán</option>
            <option value="Herveo">Herveo</option>
            <option value="Hispania">Hispania</option>
            <option value="Hobo">Hobo</option>
            <option value="Honda">Honda</option>
            <option value="Ibagué">Ibagué</option>
            <option value="Icononzo">Icononzo</option>
            <option value="Iles">Iles</option>
            <option value="Imúes">Imúes</option>
            <option value="Inzá">Inzá</option>
            <option value="Ipiales">Ipiales</option>
            <option value="Iquira">Iquira</option>
            <option value="Isnos">Isnos</option>
            <option value="Itagüí">Itagüí</option>
            <option value="Itsmina">Itsmina</option>
            <option value="Ituango">Ituango</option>
            <option value="Iza">Iza</option>
            <option value="Jambaló">Jambaló</option>
            <option value="Jamundí">Jamundí</option>
            <option value="Jardín">Jardín</option>
            <option value="Jenesano">Jenesano</option>
            <option value="Jericó">Jericó</option>
            <option value="Jerusalén">Jerusalén</option>
            <option value="Jesús María">Jesús María</option>
            <option value="Jordán">Jordán</option>
            <option value="Juan de Acosta">Juan de Acosta</option>
            <option value="Junín">Junín</option>
            <option value="Juradó">Juradó</option>
            <option value="La Apartada (Frontera)">La Apartada (Frontera)</option>
            <option value="La Argentina">La Argentina</option>
            <option value="La Belleza">La Belleza</option>
            <option value="La Calera">La Calera</option>
            <option value="La Capilla">La Capilla</option>
            <option value="La Ceja">La Ceja</option>
            <option value="La Celia">La Celia</option>
            <option value="La Cruz">La Cruz</option>
            <option value="La Cumbre">La Cumbre</option>
            <option value="La Dorada">La Dorada</option>
            <option value="La Esperanza">La Esperanza</option>
            <option value="La Estrella">La Estrella</option>
            <option value="La Florida">La Florida</option>
            <option value="La Gloria">La Gloria</option>
            <option value="La Jagua de Ibirico">La Jagua de Ibirico</option>
            <option value="La Llanada">La Llanada</option>
            <option value="La Macarena">La Macarena</option>
            <option value="La Merced">La Merced</option>
            <option value="La Mesa">La Mesa</option>
            <option value="La Montañita">La Montañita</option>
            <option value="La Palma">La Palma</option>
            <option value="La Paz">La Paz</option>
            <option value="La Paz (Robles)">La Paz (Robles)</option>
            <option value="La Peña">La Peña</option>
            <option value="La Pintada">La Pintada</option>
            <option value="La Plata">La Plata</option>
            <option value="La Playa">La Playa</option>
            <option value="La Primavera">La Primavera</option>
            <option value="La Salina">La Salina</option>
            <option value="La Sierra">La Sierra</option>
            <option value="La Tebaida">La Tebaida</option>
            <option value="La Tola">La Tola</option>
            <option value="La Ubita">La Ubita</option>
            <option value="La Unión">La Unión</option>
            <option value="La Uribe">La Uribe</option>
            <option value="La Vega">La Vega</option>
            <option value="La Victoria">La Victoria</option>
            <option value="La Virginia">La Virginia</option>
            <option value="Labateca">Labateca</option>
            <option value="Labranzagrande">Labranzagrande</option>
            <option value="Landázuri">Landázuri</option>
            <option value="Lebrija">Lebrija</option>
            <option value="Leiva">Leiva</option>
            <option value="Lejanías">Lejanías</option>
            <option value="Lenguazaque">Lenguazaque</option>
            <option value="Lérida">Lérida</option>
            <option value="Leticia">Leticia</option>
            <option value="Líbano">Líbano</option>
            <option value="Liborina">Liborina</option>
            <option value="Linares">Linares</option>
            <option value="Lloró">Lloró</option>
            <option value="López (Micay)">López (Micay)</option>
            <option value="Lorica">Lorica</option>
            <option value="Los Andes (Sotomayor)">Los Andes (Sotomayor)</option>
            <option value="Los Córdobas">Los Córdobas</option>
            <option value="Los Palmitos">Los Palmitos</option>
            <option value="Los Patios">Los Patios</option>
            <option value="Los Santos">Los Santos</option>
            <option value="Lourdes">Lourdes</option>
            <option value="Luruaco">Luruaco</option>
            <option value="Macanal">Macanal</option>
            <option value="Macaravita">Macaravita</option>
            <option value="Maceo">Maceo</option>
            <option value="Machetá">Machetá</option>
            <option value="Madrid">Madrid</option>
            <option value="Magangue">Magangue</option>
            <option value="Magüí (Payán)">Magüí (Payán)</option>
            <option value="Mahates">Mahates</option>
            <option value="Maicao">Maicao</option>
            <option value="Majagual">Majagual</option>
            <option value="Málaga">Málaga</option>
            <option value="Malambo">Malambo</option>
            <option value="Mallama (Piedrancha)">Mallama (Piedrancha)</option>
            <option value="Manatí">Manatí</option>
            <option value="Manaure">Manaure</option>
            <option value="Manaure Balcón Cesar">Manaure Balcón Cesar</option>
            <option value="Maní">Maní</option>
            <option value="Manizales">Manizales</option>
            <option value="Manta">Manta</option>
            <option value="Manzanares">Manzanares</option>
            <option value="Mapiripán">Mapiripán</option>
            <option value="Margarita">Margarita</option>
            <option value="María la Baja">María la Baja</option>
            <option value="Marinilla">Marinilla</option>
            <option value="Maripí">Maripí</option>
            <option value="Mariquita">Mariquita</option>
            <option value="Marmato">Marmato</option>
            <option value="Marquetalia">Marquetalia</option>
            <option value="Marsella">Marsella</option>
            <option value="Marulanda">Marulanda</option>
            <option value="Matanza">Matanza</option>
            <option value="Medellín">Medellín</option>
            <option value="Medina">Medina</option>
            <option value="Melgar">Melgar</option>
            <option value="Mercaderes">Mercaderes</option>
            <option value="Mesetas">Mesetas</option>
            <option value="Milán">Milán</option>
            <option value="Miraflores">Miraflores</option>
            <option value="Miranda">Miranda</option>
            <option value="Mistrató">Mistrató</option>
            <option value="Mitú">Mitú</option>
            <option value="Mocoa">Mocoa</option>
            <option value="Mogotes">Mogotes</option>
            <option value="Molagavita">Molagavita</option>
            <option value="Momil">Momil</option>
            <option value="Mompós">Mompós</option>
            <option value="Mongua">Mongua</option>
            <option value="Monguí">Monguí</option>
            <option value="Moniquirá">Moniquirá</option>
            <option value="Monitos">Monitos</option>
            <option value="Montebello">Montebello</option>
            <option value="Montecristo">Montecristo</option>
            <option value="Montelíbano">Montelíbano</option>
            <option value="Montenegro">Montenegro</option>
            <option value="Montería">Montería</option>
            <option value="Monterrey">Monterrey</option>
            <option value="Morales">Morales</option>
            <option value="Morelia">Morelia</option>
            <option value="Morroa">Morroa</option>
            <option value="Mosquera">Mosquera</option>
            <option value="Motavita">Motavita</option>
            <option value="Murillo">Murillo</option>
            <option value="Murindó">Murindó</option>
            <option value="Mutatá">Mutatá</option>
            <option value="Mutiscua">Mutiscua</option>
            <option value="Muzo">Muzo</option>
            <option value="Nariño">Nariño</option>
            <option value="Nátaga">Nátaga</option>
            <option value="Natagaima">Natagaima</option>
            <option value="Nechí">Nechí</option>
            <option value="Necoclí">Necoclí</option>
            <option value="Neira">Neira</option>
            <option value="Neiva">Neiva</option>
            <option value="Nemocón">Nemocón</option>
            <option value="Nilo">Nilo</option>
            <option value="Nimaima">Nimaima</option>
            <option value="Nobsa">Nobsa</option>
            <option value="Nocaima">Nocaima</option>
            <option value="Nóvita">Nóvita</option>
            <option value="Nuevo Colón">Nuevo Colón</option>
            <option value="Nunchía">Nunchía</option>
            <option value="Nuquí">Nuquí</option>
            <option value="Obando">Obando</option>
            <option value="Ocamonte">Ocamonte</option>
            <option value="Ocaña">Ocaña</option>
            <option value="Oiba">Oiba</option>
            <option value="Oicatá">Oicatá</option>
            <option value="Olaya">Olaya</option>
            <option value="Onzága">Onzága</option>
            <option value="Oporapa">Oporapa</option>
            <option value="Orito">Orito</option>
            <option value="Orocué">Orocué</option>
            <option value="Ortega">Ortega</option>
            <option value="Ospina">Ospina</option>
            <option value="Otanche">Otanche</option>
            <option value="Ovejas">Ovejas</option>
            <option value="Pachavita">Pachavita</option>
            <option value="Pacho">Pacho</option>
            <option value="Pácora">Pácora</option>
            <option value="Padilla">Padilla</option>
            <option value="Páez">Páez</option>
            <option value="Páez (Belalcazar)">Páez (Belalcazar)</option>
            <option value="Paicol">Paicol</option>
            <option value="Pailitas">Pailitas</option>
            <option value="Paime">Paime</option>
            <option value="Paipa">Paipa</option>
            <option value="Pajarito">Pajarito</option>
            <option value="Palermo">Palermo</option>
            <option value="Palestina">Palestina</option>
            <option value="Palmar">Palmar</option>
            <option value="Palmar de Varela">Palmar de Varela</option>
            <option value="Palmas del Socorro">Palmas del Socorro</option>
            <option value="Palmira">Palmira</option>
            <option value="Palmito">Palmito</option>
            <option value="Palocabildo">Palocabildo</option>
            <option value="Pamplona">Pamplona</option>
            <option value="Pamplonita">Pamplonita</option>
            <option value="Pandi">Pandi</option>
            <option value="Panqueba">Panqueba</option>
            <option value="Páramo">Páramo</option>
            <option value="Paratebueno">Paratebueno</option>
            <option value="Pasca">Pasca</option>
            <option value="Pasto">Pasto</option>
            <option value="Patía (El Bordo)">Patía (El Bordo)</option>
            <option value="Pauna">Pauna</option>
            <option value="Paya">Paya</option>
            <option value="Paz de Ariporo">Paz de Ariporo</option>
            <option value="Paz de Río">Paz de Río</option>
            <option value="Pedraza">Pedraza</option>
            <option value="Pelaya">Pelaya</option>
            <option value="Pensilvania">Pensilvania</option>
            <option value="Peñol">Peñol</option>
            <option value="Peque">Peque</option>
            <option value="Pereira">Pereira</option>
            <option value="Pesca">Pesca</option>
            <option value="Piamonte">Piamonte</option>
            <option value="Pie de Cuesta">Pie de Cuesta</option>
            <option value="Piedras">Piedras</option>
            <option value="Piendamó">Piendamó</option>
            <option value="Pijao">Pijao</option>
            <option value="Pijiño del Carmen">Pijiño del Carmen</option>
            <option value="Pinchote">Pinchote</option>
            <option value="Pinillos">Pinillos</option>
            <option value="Piojó">Piojó</option>
            <option value="Pisva">Pisva</option>
            <option value="Pital">Pital</option>
            <option value="Pitalito">Pitalito</option>
            <option value="Pivijay">Pivijay</option>
            <option value="Planadas">Planadas</option>
            <option value="Planeta Rica">Planeta Rica</option>
            <option value="Plato">Plato</option>
            <option value="Policarpa">Policarpa</option>
            <option value="Polonuevo">Polonuevo</option>
            <option value="Ponedera">Ponedera</option>
            <option value="Popayán">Popayán</option>
            <option value="Pore">Pore</option>
            <option value="Potosí">Potosí</option>
            <option value="Pradera">Pradera</option>
            <option value="Prado">Prado</option>
            <option value="Providencia">Providencia</option>
            <option value="Publoviejo">Publoviejo</option>
            <option value="Pueblo Bello">Pueblo Bello</option>
            <option value="Pueblo Nuevo">Pueblo Nuevo</option>
            <option value="Pueblo Rico">Pueblo Rico</option>
            <option value="Pueblorrico">Pueblorrico</option>
            <option value="Puente Nacional">Puente Nacional</option>
            <option value="Puerres">Puerres</option>
            <option value="Puerto Asís">Puerto Asís</option>
            <option value="Puerto Berrío">Puerto Berrío</option>
            <option value="Puerto Boyacá">Puerto Boyacá</option>
            <option value="Puerto Caicedo">Puerto Caicedo</option>
            <option value="Puerto Carreño">Puerto Carreño</option>
            <option value="Puerto Colombia">Puerto Colombia</option>
            <option value="Puerto Concordia">Puerto Concordia</option>
            <option value="Puerto Escondido">Puerto Escondido</option>
            <option value="Puerto Gaitán">Puerto Gaitán</option>
            <option value="Puerto Guzmán">Puerto Guzmán</option>
            <option value="Puerto Inírida">Puerto Inírida</option>
            <option value="Puerto Leguízamo">Puerto Leguízamo</option>
            <option value="Puerto Libertador">Puerto Libertador</option>
            <option value="Puerto Lleras">Puerto Lleras</option>
            <option value="Puerto López">Puerto López</option>
            <option value="Puerto Nare">Puerto Nare</option>
            <option value="Puerto Nariño">Puerto Nariño</option>
            <option value="Puerto Parra">Puerto Parra</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Puerto Rondón">Puerto Rondón</option>
            <option value="Puerto Salgar">Puerto Salgar</option>
            <option value="Puerto Santander">Puerto Santander</option>
            <option value="Puerto Tejada">Puerto Tejada</option>
            <option value="Puerto Triunfo">Puerto Triunfo</option>
            <option value="Puerto Wilches">Puerto Wilches</option>
            <option value="Pulí">Pulí</option>
            <option value="Pupiales">Pupiales</option>
            <option value="Puracé (Coconuco)">Puracé (Coconuco)</option>
            <option value="Purificación">Purificación</option>
            <option value="Purísima">Purísima</option>
            <option value="Quebradanegra">Quebradanegra</option>
            <option value="Quetame">Quetame</option>
            <option value="Quibdó">Quibdó</option>
            <option value="Quimbaya">Quimbaya</option>
            <option value="Quinchia">Quinchia</option>
            <option value="Quípama">Quípama</option>
            <option value="Quipile">Quipile</option>
            <option value="Rafael">Rafael</option>
            <option value="Ragonvalia">Ragonvalia</option>
            <option value="Ramiquirí">Ramiquirí</option>
            <option value="Ráquira">Ráquira</option>
            <option value="Recetor">Recetor</option>
            <option value="Regidor">Regidor</option>
            <option value="Remedios">Remedios</option>
            <option value="Remolino">Remolino</option>
            <option value="Repelón">Repelón</option>
            <option value="Restrepo">Restrepo</option>
            <option value="Retiro">Retiro</option>
            <option value="Ricaurte">Ricaurte</option>
            <option value="Río de Oro">Río de Oro</option>
            <option value="Río Viejo">Río Viejo</option>
            <option value="Rioblanco">Rioblanco</option>
            <option value="Riofrío">Riofrío</option>
            <option value="Riohacha">Riohacha</option>
            <option value="Rionegro">Rionegro</option>
            <option value="Riosucio">Riosucio</option>
            <option value="Risaralda">Risaralda</option>
            <option value="Rivera">Rivera</option>
            <option value="Roberto Payán (San José)">Roberto Payán (San José)</option>
            <option value="Roldanillo">Roldanillo</option>
            <option value="Roncesvalles">Roncesvalles</option>
            <option value="Rondón">Rondón</option>
            <option value="Rosas">Rosas</option>
            <option value="Rovira">Rovira</option>
            <option value="Sabalarga">Sabalarga</option>
            <option value="Sabana de Torres">Sabana de Torres</option>
            <option value="Sabanagrande">Sabanagrande</option>
            <option value="Sabanalarga">Sabanalarga</option>
            <option value="Sabaneta">Sabaneta</option>
            <option value="Saboyá">Saboyá</option>
            <option value="Sácama">Sácama</option>
            <option value="Sáchica">Sáchica</option>
            <option value="Sahagún">Sahagún</option>
            <option value="Saladoblanco">Saladoblanco</option>
            <option value="Salamina">Salamina</option>
            <option value="Salazar">Salazar</option>
            <option value="Saldaña">Saldaña</option>
            <option value="Salento">Salento</option>
            <option value="Salgar">Salgar</option>
            <option value="Samacá">Samacá</option>
            <option value="Samaná">Samaná</option>
            <option value="Samaniego">Samaniego</option>
            <option value="Sampués">Sampués</option>
            <option value="San Agustín">San Agustín</option>
            <option value="San Alberto">San Alberto</option>
            <option value="San Andrés">San Andrés</option>
            <option value="San Andrés Sotavento">San Andrés Sotavento</option>
            <option value="San Antero">San Antero</option>
            <option value="San Antonio">San Antonio</option>
            <option value="San Antonio de Tequendama">San Antonio de Tequendama</option>
            <option value="San Benito">San Benito</option>
            <option value="San Benito Abad">San Benito Abad</option>
            <option value="San Bernardo">San Bernardo</option>
            <option value="San Bernardo del Viento">San Bernardo del Viento</option>
            <option value="San Calixto">San Calixto</option>
            <option value="San Carlos">San Carlos</option>
            <option value="San Carlos de Guaroa">San Carlos de Guaroa</option>
            <option value="San Cayetano">San Cayetano</option>
            <option value="San Cristóbal">San Cristóbal</option>
            <option value="San Diego">San Diego</option>
            <option value="San Eduardo">San Eduardo</option>
            <option value="San Estanislao">San Estanislao</option>
            <option value="San Fernando">San Fernando</option>
            <option value="San Francisco">San Francisco</option>
            <option value="San Gil">San Gil</option>
            <option value="San Jacinto">San Jacinto</option>
            <option value="San Jacinto del Cauca">San Jacinto del Cauca</option>
            <option value="San Jerónimo">San Jerónimo</option>
            <option value="San Joaquín">San Joaquín</option>
            <option value="San José">San José</option>
            <option value="San José de Miranda">San José de Miranda</option>
            <option value="San José de Montaña">San José de Montaña</option>
            <option value="San José de Pare">San José de Pare</option>
            <option value="San José del Fragua">San José del Fragua</option>
            <option value="San José del Guaviare">San José del Guaviare</option>
            <option value="San José del Palmar">San José del Palmar</option>
            <option value="San Juan de Arama">San Juan de Arama</option>
            <option value="San Juan de Betulia">San Juan de Betulia</option>
            <option value="San Juan de Rioseco">San Juan de Rioseco</option>
            <option value="San Juan de Urabá">San Juan de Urabá</option>
            <option value="San Juan del Cesar">San Juan del Cesar</option>
            <option value="San Juan Nepomuceno">San Juan Nepomuceno</option>
            <option value="San Juanito">San Juanito</option>
            <option value="San Lorenzo">San Lorenzo</option>
            <option value="San Luis">San Luis</option>
            <option value="San Luis de Gaceno">San Luis de Gaceno</option>
            <option value="San Luis de Palenque">San Luis de Palenque</option>
            <option value="San Marcos">San Marcos</option>
            <option value="San Martín">San Martín</option>
            <option value="San Martín de Loba">San Martín de Loba</option>
            <option value="San Mateo">San Mateo</option>
            <option value="San Miguel">San Miguel</option>
            <option value="San Miguel de Sema">San Miguel de Sema</option>
            <option value="San Onofre">San Onofre</option>
            <option value="San Pablo">San Pablo</option>
            <option value="San Pablo de Borbur">San Pablo de Borbur</option>
            <option value="San Pedro">San Pedro</option>
            <option value="San Pedro de Cartago">San Pedro de Cartago</option>
            <option value="San Pedro de Urabá">San Pedro de Urabá</option>
            <option value="San Pelayo">San Pelayo</option>
            <option value="San Rafael">San Rafael</option>
            <option value="San Roque">San Roque</option>
            <option value="San Sebastián">San Sebastián</option>
            <option value="San Sebastián de Buuenavista">San Sebastián de Buuenavista</option>
            <option value="San Vicente">San Vicente</option>
            <option value="San Vicente de Chucurí">San Vicente de Chucurí</option>
            <option value="San Vicente del Caguán">San Vicente del Caguán</option>
            <option value="San Zenón">San Zenón</option>
            <option value="Sandoná">Sandoná</option>
            <option value="Santa Ana">Santa Ana</option>
            <option value="Santa Bárbara">Santa Bárbara</option>
            <option value="Santa Bárbara (Iscuandé)">Santa Bárbara (Iscuandé)</option>
            <option value="Santa Catalina">Santa Catalina</option>
            <option value="Santa Cruz (Guachávez)">Santa Cruz (Guachávez)</option>
            <option value="Santa Helena del Opón">Santa Helena del Opón</option>
            <option value="Santa Isabel">Santa Isabel</option>
            <option value="Santa Lucía">Santa Lucía</option>
            <option value="Santa María">Santa María</option>
            <option value="Santa Marta">Santa Marta</option>
            <option value="Santa Rosa">Santa Rosa</option>
            <option value="Santa Rosa de Cabal">Santa Rosa de Cabal</option>
            <option value="Santa Rosa de Osos">Santa Rosa de Osos</option>
            <option value="Santa Rosa de Viterbo">Santa Rosa de Viterbo</option>
            <option value="Santa Rosa del Sur">Santa Rosa del Sur</option>
            <option value="Santa Rosalia">Santa Rosalia</option>
            <option value="Santa Sofía">Santa Sofía</option>
            <option value="Santafé de Bogotá">Santafé de Bogotá</option>
            <option value="Santana">Santana</option>
            <option value="Santander de Quilichao">Santander de Quilichao</option>
            <option value="Santiago">Santiago</option>
            <option value="Santo Domingo">Santo Domingo</option>
            <option value="Santo Tomás">Santo Tomás</option>
            <option value="Santuario">Santuario</option>
            <option value="Sapuyés">Sapuyés</option>
            <option value="Saravena">Saravena</option>
            <option value="Sardinata">Sardinata</option>
            <option value="Sasaima">Sasaima</option>
            <option value="Sativanorte">Sativanorte</option>
            <option value="Sativasur">Sativasur</option>
            <option value="Segovia">Segovia</option>
            <option value="Sesquilé">Sesquilé</option>
            <option value="Sevilla">Sevilla</option>
            <option value="Siachoque">Siachoque</option>
            <option value="Sibate">Sibate</option>
            <option value="Sibundoy">Sibundoy</option>
            <option value="Silos">Silos</option>
            <option value="Silvania">Silvania</option>
            <option value="Silvia">Silvia</option>
            <option value="Simacota">Simacota</option>
            <option value="Simijaca">Simijaca</option>
            <option value="Simití">Simití</option>
            <option value="Sincé">Sincé</option>
            <option value="Sincelejo">Sincelejo</option>
            <option value="Sipí">Sipí</option>
            <option value="Sitionuevo">Sitionuevo</option>
            <option value="Soacha">Soacha</option>
            <option value="Soatá">Soatá</option>
            <option value="Socha">Socha</option>
            <option value="Socorro">Socorro</option>
            <option value="Socotá">Socotá</option>
            <option value="Sogamoso">Sogamoso</option>
            <option value="Solano">Solano</option>
            <option value="Soledad">Soledad</option>
            <option value="Solita">Solita</option>
            <option value="Somondoco">Somondoco</option>
            <option value="Sonsón">Sonsón</option>
            <option value="Sopetrán">Sopetrán</option>
            <option value="Soplaviento">Soplaviento</option>
            <option value="Sopó">Sopó</option>
            <option value="Sora">Sora</option>
            <option value="Soracá">Soracá</option>
            <option value="Sotaquirá">Sotaquirá</option>
            <option value="Sotará (Paispamba)">Sotará (Paispamba)</option>
            <option value="Suaita">Suaita</option>
            <option value="Suán">Suán</option>
            <option value="Suárez">Suárez</option>
            <option value="Suazá">Suazá</option>
            <option value="Subachoque">Subachoque</option>
            <option value="Sucre">Sucre</option>
            <option value="Suesca">Suesca</option>
            <option value="Supatá">Supatá</option>
            <option value="Supía">Supía</option>
            <option value="Suratá">Suratá</option>
            <option value="Susa">Susa</option>
            <option value="Susacón">Susacón</option>
            <option value="Sutamarchán">Sutamarchán</option>
            <option value="Sutatausa">Sutatausa</option>
            <option value="Sutatenza">Sutatenza</option>
            <option value="Tabio">Tabio</option>
            <option value="Tadó">Tadó</option>
            <option value="Talaigua Nuevo">Talaigua Nuevo</option>
            <option value="Tamalameque">Tamalameque</option>
            <option value="Támara">Támara</option>
            <option value="Tame">Tame</option>
            <option value="Támesis">Támesis</option>
            <option value="Taminango">Taminango</option>
            <option value="Tangua">Tangua</option>
            <option value="Tarazá">Tarazá</option>
            <option value="Tarqui">Tarqui</option>
            <option value="Tarso">Tarso</option>
            <option value="Tasco">Tasco</option>
            <option value="Tatamá">Tatamá</option>
            <option value="Tauramena">Tauramena</option>
            <option value="Tausa">Tausa</option>
            <option value="Tello">Tello</option>
            <option value="Tena">Tena</option>
            <option value="Tenerife">Tenerife</option>
            <option value="Tenjo">Tenjo</option>
            <option value="Tenza">Tenza</option>
            <option value="Teorama">Teorama</option>
            <option value="Teruel">Teruel</option>
            <option value="Tesalia">Tesalia</option>
            <option value="Tibacuy">Tibacuy</option>
            <option value="Tibaná">Tibaná</option>
            <option value="Tibasosa">Tibasosa</option>
            <option value="Tibiritá">Tibiritá</option>
            <option value="Tibú">Tibú</option>
            <option value="Tierralta">Tierralta</option>
            <option value="Timaná">Timaná</option>
            <option value="Timbío">Timbío</option>
            <option value="Timbiquí">Timbiquí</option>
            <option value="Tinjacá">Tinjacá</option>
            <option value="Tipacoque">Tipacoque</option>
            <option value="Tiquisio (Puerto Rico)">Tiquisio (Puerto Rico)</option>
            <option value="Titiribí">Titiribí</option>
            <option value="Toca">Toca</option>
            <option value="Tocaima">Tocaima</option>
            <option value="Tocancipá">Tocancipá</option>
            <option value="Toguí">Toguí</option>
            <option value="Toledo">Toledo</option>
            <option value="Tolú">Tolú</option>
            <option value="Toluviejo">Toluviejo</option>
            <option value="Tona">Tona</option>
            <option value="Tópaga">Tópaga</option>
            <option value="Topaipí">Topaipí</option>
            <option value="Toribío">Toribío</option>
            <option value="Toro">Toro</option>
            <option value="Tota">Tota</option>
            <option value="Totoro">Totoro</option>
            <option value="Trinidad">Trinidad</option>
            <option value="Trujillo">Trujillo</option>
            <option value="Tubará">Tubará</option>
            <option value="Tuluá">Tuluá</option>
            <option value="Tumaco">Tumaco</option>
            <option value="Tunja">Tunja</option>
            <option value="Tunungua">Tunungua</option>
            <option value="Túquerres">Túquerres</option>
            <option value="Turbaco">Turbaco</option>
            <option value="Turbaná">Turbaná</option>
            <option value="Turbo">Turbo</option>
            <option value="Turmequé">Turmequé</option>
            <option value="Tuta">Tuta</option>
            <option value="Tutazá">Tutazá</option>
            <option value="Ubalá">Ubalá</option>
            <option value="Ubaque">Ubaque</option>
            <option value="Ubaté">Ubaté</option>
            <option value="Ulloa">Ulloa</option>
            <option value="Úmbita">Úmbita</option>
            <option value="Une">Une</option>
            <option value="Unguía">Unguía</option>
            <option value="Uramita">Uramita</option>
            <option value="Uribía">Uribía</option>
            <option value="Urrao">Urrao</option>
            <option value="Urumita">Urumita</option>
            <option value="Usiacurí">Usiacurí</option>
            <option value="Útica">Útica</option>
            <option value="Valdivia">Valdivia</option>
            <option value="Valencia">Valencia</option>
            <option value="Valle de San José">Valle de San José</option>
            <option value="Valle de San Juan">Valle de San Juan</option>
            <option value="Valledupar">Valledupar</option>
            <option value="Valparaíso">Valparaíso</option>
            <option value="Vegachí">Vegachí</option>
            <option value="Vélez">Vélez</option>
            <option value="Venadillo">Venadillo</option>
            <option value="Venecia">Venecia</option>
            <option value="Venecia (Ospina Pérez)">Venecia (Ospina Pérez)</option>
            <option value="Ventaquemada">Ventaquemada</option>
            <option value="Vergara">Vergara</option>
            <option value="Versalles">Versalles</option>
            <option value="Vetas">Vetas</option>
            <option value="Vianí">Vianí</option>
            <option value="Victoria">Victoria</option>
            <option value="Vigía del Fuerte">Vigía del Fuerte</option>
            <option value="Vijes">Vijes</option>
            <option value="Villa de Leyva">Villa de Leyva</option>
            <option value="Villa del Rosario">Villa del Rosario</option>
            <option value="Villa Gamuez (La Hormiga)">Villa Gamuez (La Hormiga)</option>
            <option value="Villa Garzón">Villa Garzón</option>
            <option value="Villacaro">Villacaro</option>
            <option value="Villagómez">Villagómez</option>
            <option value="Villahermosa">Villahermosa</option>
            <option value="Villamaría">Villamaría</option>
            <option value="Villanueva">Villanueva</option>
            <option value="Villapinzón">Villapinzón</option>
            <option value="Villarrica">Villarrica</option>
            <option value="Villavicencio">Villavicencio</option>
            <option value="Villavieja">Villavieja</option>
            <option value="Villeta">Villeta</option>
            <option value="Viotá">Viotá</option>
            <option value="Viracachá">Viracachá</option>
            <option value="Vistahermosa">Vistahermosa</option>
            <option value="Viterbo">Viterbo</option>
            <option value="Yacopí">Yacopí</option>
            <option value="Yacuanquer">Yacuanquer</option>
            <option value="Yaguará">Yaguará</option>
            <option value="Yalí">Yalí</option>
            <option value="Yarumal">Yarumal</option>
            <option value="Yolombó">Yolombó</option>
            <option value="Yondó (Casabe)">Yondó (Casabe)</option>
            <option value="Yopal">Yopal</option>
            <option value="Yotoco">Yotoco</option>
            <option value="Yumbo">Yumbo</option>
            <option value="Zambrano">Zambrano</option>
            <option value="Zapatoca">Zapatoca</option>
            <option value="Zaragoza">Zaragoza</option>
            <option value="Zarzal">Zarzal</option>
            <option value="Zetaquirá">Zetaquirá</option>
            <option value="Zipacón">Zipacón</option>
            <option value="Zipaquirá">Zipaquirá</option>
        </select>

      <br>
      Desde que fecha vive en la Localidad (Aprox.):<input class="form-control" type="date" min="0" name="tiempoEnLocalidad">

      --> 
      <br>
      <br>
      
      <div class="col-md-12">
      <div style="overflow-y:hidden;" class="pre-scrollable">
            <table id="tabla" >
                  <b><div class="panel-heading text-center">COMPOSICIÓN FAMILIAR (Iniciar con el Jefe de Hogar)</div></b>
                  <tr>
                      <td>Nombre y Apellidos</td>
                      <td>No. Documento</td>
                      <td>Sexo</td>
                      <td>Edad</td>
                      <td>Fecha Nacimiento</td>
                      <td>Estado Civil</td>
                      <td>Condición Especial</td>
                      <td>Etnia</td>
                      <td>Parentesco</td>
                      <td>Escolaridad</td>
                      <td>Ocupación</td>
                      <td>Actividad</td>
                      <td>Ingresos</td>
                      <td>Cuánto dinero aporta a la familia?</td>
                      <td>Enfermedades</td>
                      <td>Discapacidad</td>
                      <td>Seguridad Social</td>
                      <td>Puntaje SISBEN</td>
                      <td>Caja Compensación</td>
                      <td>Subsidio del Estado</td>
                  </tr>
<!-- fila 1 -->
                  <tr id="miFila">
                        <td>
                              <input class="form-control" type="text" name="nombre[]" >
                        </td>
                        <td>
                              <input class="form-control" type="number" name="documento[]"  >
                        </td>
                        <td>
                              <select class="form-control" name="sexo[]" >
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                              </select>
                        </td>
                        <td> 
                              <input class="form-control" type="number" name="edad[]" min="0" max="120" >
                        </td>
                        <td> 
                              <input class="form-control" type="date" name="fechaN[]" >
                        </td>
                        <td>
                              <select class="form-control" name="estadoC[]">
                                <option value="Soltero">Soltero/a</option>
                                <option value="Casado">Casado/a</option>
                                <option value="UnionLibre">Unión Libre</option>
                                <option value="Separado">Separado - Divorciado</option>
                                <option value="Viudo">Viudo</option>
                              </select>
                        </td>
                        <td>
                              <select class="form-control" name="condicionEspecial[]">
                                <option value="Reinsertado">Reinsertado</option>
                                <option value="Reasentado">Reasentado</option>
                                <option value="Desplazado">Desplazado</option>
                                <option value="Ninguna">Ninguna</option>
                              </select>
                        </td>
                        <td>
                              <select class="form-control" name="etnia[]">
                                <option value="Afrocolombiano">Afrocolombiano</option>
                                <option value="Mestizo">Mestizo</option>
                                <option value="Indígena">Indígena</option>
                                <option value="Raizal">Raizal</option>
                                <option value="Palenquero">Palenquero</option>
                                <option value="ROM">ROM o gitano</option>
                                <option value="Blanco">Blanco</option>
                                <option value="Mulato">Mulato</option>
                              </select>
                        </td>
                        <td>
                              <select class="form-control" name="parentesco[]">
                                <option value="Jefe de Hogar">Jefe de Hogar</option>
                                <option value="Cónyuge o Compañero">Cónyuge o Compañero-a</option>
                                <option value="Padres">Padre/Madre </option>
                                <option value="Padrastro ">Padrastro/Madrastra </option>
                                <option value="Hijo">Hijo/a </option>
                                <option value="Abuelo">Abuelo/a </option>
                                <option value="Hermano">Hermano/a </option>
                                <option value="Tio">Tío/a </option>
                                <option value="Primo">Primo/a </option>
                                <option value="Sobrino">Sobrino/a </option>
                                <option value="Nieto">Nieto/a </option>
                                <option value="Hijastro">Hijastro/a </option>
                                <option value="exConyuge">Ex cónyuge  </option>
                                <option value="Suegro">Suegro/a </option>
                                <option value="Novio ">Novio/a </option>
                                <option value="Hermanastro">Hermanastro/a</option>
                                <option value="Nuero">Nuero/a </option>
                                <option value="Yerno">Yerno/a</option>
                                <option value="Otro">Otro </option>
                              </select>
                        </td>
                        <td>
                              <select class="form-control" name="escolaridad[]">
                                <option value="Ninguna">Ninguna</option>
                                <option value="Preescolar">Preescolar</option>
                                <option value="PreJardin">PreJardín</option>
                                <option value="Jardin">Jardín</option>
                                <option value="Transicion">Transición</option>
                                <option value="Educacion Basica">Educación Básica</option>
                                <option value="Primaria">Primaria</option>
                                <option value="Bachillerato ">Bachillerato </option>
                                <option value="Bachillerato Tecnico">Bachillerato Técnico</option>
                                <option value="Tecnico">Técnico/Tecnología</option>
                                <option value="Profesional">Profesional</option>
                                <option value="Especializado">Especialización/Maestría/Postgrado/Doctorado</option>
                                
                                <option value="Otro">Otro </option>
                              </select>
                        </td>
                        <td>
                              <select class="form-control" name="ocupacion[]" >
                                      <option value="Estudiante">Estudiante</option>
                                      <option value="Empleado">Empleado</option>
                                      <option value="Independiente">Independiente </option>
                                      <option value="Rentista">Rentista</option>
                                      <option value="Desempleado">Desempleado</option>
                                      <option value="Inactivo">Inactivo(Pensionado)</option>
                                      <option value="Ama de casa">Ama/o de casa</option>
                                      <option value="No Informa">No Informa</option>
                                      <option value="Ninguna">Ninguna </option>
                                      <option value="Otro">Otro </option>
                              </select> 
                        </td>
                        <td>
                              <select class="form-control" name="actividad[]">
                                      <option value="Comercio restaurantes hoteles">Comercio, restaurantes y hoteles</option>
                                      <option value="Servicios comunales sociales personales">Servicios comunales, sociales y personales</option>
                                      <option value="Agricultura ganaderia silvicultura pesca">Agricultura ganaderia silvicultura pesca</option>
                                      <option value="Industria manufacturera">Industria manufacturera</option>
                                      <option value="Transporte almacenamientos comunicaciones">Transporte, almacenamientos y comunicaciones</option>
                                      <option value="Inmobiliarias empresariales alquiler">Actividades Inmobiliarias, empresariales y alquiler</option>
                                      <option value="Vigilancia Seguridad">Vigilancia Seguridad</option>
                                      <option value="Servicios Generales">Servicios Generales</option>
                                      <option value="Construccion">Construccion </option>
                                      <option value="Otro">Otro </option>
                                      <option value="Ninguna">Ninguna</option>
                              </select> 
                        </td>
                        <td>
                              <input class="form-control" name="ingresos[]" type="number" >
                        </td>
                        <td>
                              <input class="form-control" name="aporteIngresos[]" type="number" >
                        </td>
                        <td>
                             <select class="form-control" name="enfermedades[]" >
                                      <option value="Respiratorias">Respiratorias</option>
                                      <option value="Gastrointestinales">Gastrointestinales</option>
                                      <option value="Dermatologicas">Dermatológicas </option>
                                      <option value="Neurologicas">Neurologicas</option>
                                      <option value="Cancer">Cáncer</option>
                                      <option value="Hipertension">Hipertensión</option>
                                      <option value="Diabetes">Diabetes</option>
                                      <option value="Obesidad">Obesidad</option>
                                      <option value="Enfermedades de la Boca">Enfermedades de la Boca</option>
                                      <option value="Ninguna">Ninguna</option>
                                      <option value="Otras">Otras</option>

                              </select>  
                        </td>
                        <td>
                              <select class="form-control" name="discapacidad[]" >
                                      <option value="Fisica">Física</option>
                                      <option value="Cognitiva">Cognitiva</option>
                                      <option value="Sensorial">Sensorial</option>
                                      <option value="Ninguna">Ninguna</option>
                              </select>  
                        </td>
                        <td>
                              <select class="form-control" name="segSocial[]">
                                      <option value="Contributivo">Contributivo</option>
                                      <option value="Subsidiado">Subsidiado</option>
                                      <option value="Ninguna">Ninguna</option>
                              </select>  
                        </td>
                        <td>
                              <!-- los niveles del sisben son manejados de un rango entre 1 a 6 -->
                              <input class="form-control" type="number" name="sisben[]" max="6" min="1">
                        </td>
                        <td>
                              <select class="form-control" name="cajaComp[]">
                                      <option value="Cafam">Cafam</option>
                                      <option value="Compensar">Compensar</option>
                                      <option value="Colsubsidio">Colsubsidio</option>
                                      <option value="Comfacund">Comfacund</option>
                                      <option value="Comcaja">Comcaja</option>
                                      <option value="Caja de Retiro de las Fuerzas Militares">Caja de Retiro de las Fuerzas Militares</option>
                                      <option value="Ninguna">Ninguna</option>
                                      <option value="Otro">Otro</option>
                              </select>  
                        </td>
                        <td>
                              <select class="form-control" name="subEstado[]" >
                                      <option value="Adulto Mayor">Adulto Mayor</option>
                                      <option value="Canasta Familiar">Canasta Familiar</option>
                                      <option value="Familias en Accion">Familias en Acción</option>
                                      <option value="ICBF">ICBF</option>
                                      <option value="Alcadia Local">Alcadía Local</option>
                                      <option value="Ninguna">Ninguna</option>
                                      <option value="Otro">Otro</option>
                              </select>  
                        </td>                         
                  </tr>
<a class="btn-sm btn-success" href="javascript:agregarFila();">+ Agregar Fila</a>
            </table>

      </div><!-- scroll -->     
      </div>
      <br>
      <br>
      <br>
      <br>
      

      <input class="btn btn-primary" type="submit" value=" Continuar ">
      <a href="3_IndicadoresSocieconomicos.php">Demo</a>
</form>

</body>


<script type="text/javascript">
      

      //evento Click mediante jQuery http://api.jquery.com/click/
      function agregarFila(){
            $('#miFila').clone().insertAfter("#tabla tr:last");
      }
      // $('#agregar').click(function(){
                           
      // });
   

  //funcion para cargar formulario 2
  function cargarForm2( lugarCiudad, lugarDepartamento,tiempoEnLocalidad){

    var formulario = document.form2;
    formulario.lugarCiudad.value = lugarCiudad;
    formulario.lugarDepartamento.value = lugarDepartamento;
    formulario.tiempoEnLocalidad.value = tiempoEnLocalidad;
    
  }

  //Funcion para llenar la tabla del formulario 2 con cada uno de los familiares ingresados
  function cargarForm2Composicion(index,  nombre,  documento,  sexo,  edad,  fechaN,  estadoC,  condicionEspecial,  etnia,  parentesco,  escolaridad,  ocupacion,  actividad,  ingresos,  aporteIngresos,  enfermedades,  discapacidad,  segSocial,  sisben,  cajaComp,  subEstado,  lugarCiudad,  lugarDepartamento){

       //Se evita crear una fila adicional cada que se consulte
       if(index !=1){
         $('#miFila').clone().insertAfter("#tabla tr:first");
       }

       var x=document.getElementById('tabla').rows;
       var y=x[1].cells;
       var completos = nombre.split(' ');
       nombre = nombre.toString();
       
       //Nombre
       y[0].innerHTML=  "<tr id=\"miFila\">"+
                        "<td>"+
                              "<input class=\"form-control\" type=\"text\" name=\"nombre[]\" value ="+ completos +" >"+
                        "</td>";
        //Cedula
        y[1].innerHTML= "<td>"+
                              "<input class=\"form-control\" type=\"number\" name=\"documento[]\" value ="+ documento +" >"+
                        "</td>";
                        
        //Genero
        if(sexo == 'Masculino'){
             y[2].innerHTML = "<td>"+
                              "<select class=\"form-control\" name=\"sexo[]\" >"+
                              "<option value=\"Masculino\">Masculino</option>"+
                              "<option value=\"Femenino\">Femenino</option>"+
                              "</select>"+
                              "</td>";
        }
        if(sexo == 'Femenino'){
             y[2].innerHTML = "<td>"+
                              "<select class=\"form-control\" name=\"sexo[]\" >"+
                              "<option value=\"Femenino\">Femenino</option>"+
                              "<option value=\"Masculino\">Masculino</option>"+
                              "</select>"+
                              "</td>";
        }
        y[3].innerHTML = "<td>"+
                         "<input class=\"form-control\" type=\"number\" name=\"edad[]\" value =" + edad + " min=\"0\" max=\"120\" >"+
                         "</td>";
        y[4].innerHTML = "<td>"+ 
                         "<input class=\"form-control\" type=\"date\" name=\"fechaN[]\" value = " + fechaN + " >"+
                         "</td>";
        y[5].innerHTML = "<td>"+
                          "<select class=\"form-control\" name=\"estadoC[]\">"+
                          "<option value=\""+estadoC+"\">"+estadoC+"</option>"+
                          "<option value=\"Soltero\">Soltero/a</option>"+
                          "<option value=\"Casado\">Casado/a</option>"+
                          "<option value=\"UnionLibre\">Unión Libre</option>"+
                          "<option value=\"Separado\">Separado - Divorciado</option>"+
                          "<option value=\"Viudo\">Viudo</option>"+
                          "</select>"+
                          "</td>";
                          
        y[6].innerHTML =  "<td>"+
                          "<select class=\"form-control\" name=\"condicionEspecial[]\">"+
                          "<option value=\""+condicionEspecial+"\">"+condicionEspecial+"</option>"+
                          "<option value=\"Reinsertado\">Reinsertado</option>"+
                          "<option value=\"Reasentado\">Reasentado</option>"+
                          "<option value=\"Desplazado\">Desplazado</option>"+
                          "<option value=\"Ninguna\">Ninguna</option>"+
                          "</select>"+
                          "</td>";


        y[7].innerHTML =   "<td>"+
                           "<select class=\"form-control\" name=\"etnia[]\">"+
                           "<option value=\""+etnia+"\">"+etnia+"</option>"+
                           "<option value=\"Afrocolombiano\">Afrocolombiano</option>"+
                           "<option value=\"Mestizo\">Mestizo</option>"+
                           "<option value=\"Indígena\">Indígena</option>"+
                           "<option value=\"Raizal\">Raizal</option>"+
                           "<option value=\"Palenquero\">Palenquero</option>"+
                           "<option value=\"ROM\">ROM o gitano</option>"+
                           "<option value=\"Blanco\">Blanco</option>"+
                           "<option value=\"Mulato\">Mulato</option>"+
                           "</select>"+
                           "</td>";
        y[8].innerHTML =   "<td>"+
                           "<select class=\"form-control\" name=\"parentesco[]\">"+
                                "<option value=\""+parentesco+"\">"+parentesco+"</option>"+
                                "<option value=\"Jefe de Hogar\">Jefe de Hogar</option>"+
                                "<option value=\"Cónyuge o Compañero\">Cónyuge o Compañero-a</option>"+
                                "<option value=\"Padres\">Padre/Madre </option>"+
                                "<option value=\"Padrastro \">Padrastro/Madrastra </option>"+
                                "<option value=\"Hijo\">Hijo/a </option>"+
                                "<option value=\"Abuelo\">Abuelo/a </option>"+
                                "<option value=\"Hermano\">Hermano/a </option>"+
                                "<option value=\"Tio\">Tío/a </option>"+
                                "<option value=\"Primo\">Primo/a </option>"+
                                "<option value=\"Sobrino\">Sobrino/a </option>"+
                                "<option value=\"Nieto\">Nieto/a </option>"+
                                "<option value=\"Hijastro\">Hijastro/a </option>"+
                                "<option value=\"exConyuge\">Ex cónyuge  </option>"+
                                "<option value=\"Suegro\">Suegro/a </option>"+
                                "<option value=\"Novio\">Novio/a </option>"+
                                "<option value=\"Hermanastro\">Hermanastro/a</option>"+
                                "<option value=\"Nuero\">Nuero/a </option>"+
                                "<option value=\"Yerno\">Yerno/a</option>"+
                                "<option value=\"Otro\">Otro </option>"+
                                "</select>"+
                                "</td>";
        y[9].innerHTML =     "<td>"+
                              "<select class=\"form-control\" name=\"escolaridad[]\">"+
                              "<option value=\""+escolaridad+"\">"+escolaridad+"</option>"+
                              "<option value=\"Ninguna\">Ninguna</option>"+
                              "<option value=\"Preescolar\">Preescolar</option>"+
                              "<option value=\"PreJardin\">PreJardín</option>"+
                              "<option value=\"Jardin\">Jardín</option>"+
                              "<option value=\"Transicion\">Transición</option>"+
                              "<option value=\"Educacion Basica\">Educación Básica</option>"+
                              "<option value=\"Primaria\">Primaria</option>"+
                              "<option value=\"Bachillerato\">Bachillerato </option>"+
                              "<option value=\"Bachillerato Tecnico\">Bachillerato Técnico</option>"+
                              "<option value=\"Tecnico\">Técnico/Tecnología</option>"+
                              "<option value=\"Profesional\">Profesional</option>"+
                              "<option value=\"Especializado\">Especialización/Maestría/Postgrado/Doctorado</option>"+
                              "<option value=\"Otro\">Otro </option>"+
                              "</select>"+
                              "</td>";
        y[10].innerHTML =     "<td>"+
                              "<select class=\"form-control\" name=\"ocupacion[]\" >"+
                              "<option value=\""+ocupacion+"\">"+ocupacion+"</option>"+
                                      "<option value=\"Estudiante\">Estudiante</option>"+
                                      "<option value=\"Empleado\">Empleado</option>"+
                                      "<option value=\"Independiente\">Independiente </option>"+
                                      "<option value=\"Rentista\">Rentista</option>"+
                                      "<option value=\"Desempleado\">Desempleado</option>"+
                                      "<option value=\"Inactivo\">Inactivo(Pensionado)</option>"+
                                      "<option value=\"Ama de casa\">Ama/o de casa</option>"+
                                      "<option value=\"No Informa\">No Informa</option>"+
                                      "<option value=\"Ninguna\">Ninguna </option>"+
                                      "<option value=\"Otro\">Otro </option>"+
                              "</select>"+
                              "</td>";

         y[11].innerHTML =    "<td>"+
                              "<select class=\"form-control\" name=\"actividad[]\">"+
                              "<option value=\""+actividad+"\">"+actividad+"</option>"+
                              "<option value=\"Comercio restaurantes hoteles\">Comercio, restaurantes y hoteles</option>"+
                              "<option value=\"Servicios comunales sociales personales\">Servicios comunales, sociales y personales</option>"+
                              "<option value=\"Agricultura ganaderia silvicultura pesca\">Agricultura ganaderia silvicultura pesca</option>"+
                              "<option value=\"Industria manufacturera\">Industria manufacturera</option>"+
                              "<option value=\"Transporte almacenamientos comunicaciones\">Transporte, almacenamientos y comunicaciones</option>"+
                              "<option value=\"Inmobiliarias empresariales alquiler\">Actividades Inmobiliarias, empresariales y alquiler</option>"+
                              "<option value=\"Vigilancia Seguridad\">Vigilancia Seguridad</option>"+
                              "<option value=\"Servicios Generales\">Servicios Generales</option>"+
                              "<option value=\"Construccion\">Construccion </option>"+
                              "<option value=\"Otro\">Otro </option>"+
                              "<option value=\"Ninguna\">Ninguna</option>"+
                              "</select>"+ 
                              "</td>";

         y[12].innerHTML =   "<td>"+
                             "<input class=\"form-control\" name=\"ingresos[]\" type=\"number\" value ="+ ingresos +">"+
                             "</td>";
         y[13].innerHTML =   "<td>"+
                             "<input class=\"form-control\" name=\"aporteIngresos[]\" type=\"number\"value ="+ aporteIngresos +" >"+
                             "</td>";

         y[14].innerHTML =   "<td>"+
                             "<select class=\"form-control\" name=\"enfermedades[]\" >"+
                                      "<option value=\""+enfermedades+"\">"+enfermedades+"</option>"+
                                      "<option value=\"Respiratorias\">Respiratorias</option>"+
                                      "<option value=\"Gastrointestinales\">Gastrointestinales</option>"+
                                      "<option value=\"Dermatologicas\">Dermatológicas </option>"+
                                      "<option value=\"Neurologicas\">Neurologicas</option>"+
                                      "<option value=\"Cancer\">Cáncer</option>"+
                                      "<option value=\"Hipertension\">Hipertensión</option>"+
                                      "<option value=\"Diabetes\">Diabetes</option>"+
                                      "<option value=\"Obesidad\">Obesidad</option>"+
                                      "<option value=\"Enfermedades de la Boca\">Enfermedades de la Boca</option>"+
                                      "<option value=\"Ninguna\">Ninguna</option>"+
                                      "<option value=\"Otras\">Otras</option>"+
                            "</select>"+  
                            "</td>";
        y[15].innerHTML =   "<td>"+
                            "<select class=\"form-control\" name=\"discapacidad[]\" >"+
                                      "<option value=\""+discapacidad+"\">"+discapacidad+"</option>"+
                                      "<option value=\"Fisica\">Física</option>"+
                                      "<option value=\"Cognitiva\">Cognitiva</option>"+
                                      "<option value=\"Sensorial\">Sensorial</option>"+
                                      "<option value=\"Ninguna\">Ninguna</option>"+
                            "</select>"+  
                            "</td>";

        y[16].innerHTML =     "<td>"+
                              "<select class=\"form-control\" name=\"segSocial[]\">"+
                                      "<option value=\""+segSocial+"\">"+segSocial+"</option>"+
                                      "<option value=\"Contributivo\">Contributivo</option>"+
                                      "<option value=\"Subsidiado\">Subsidiado</option>"+
                                      "<option value=\"Ninguna\">Ninguna</option>"+
                              "</select>" +
                              "</td>";
        y[17].innerHTML =     "<td>"+
                              "<input class=\"form-control\" type=\"number\" name=\"sisben[]\" max=\"6\" min=\"1\" value ="+ sisben+">"+
                              "</td>";
                              
        y[18].innerHTML =     "<td>"+
                              "<select class=\"form-control\" name=\"cajaComp[]\">"+
                                     "<option value=\""+cajaComp+"\">"+cajaComp+"</option>"+ 
                                     "<option value=\"Cafam\">Cafam</option>"+
                                     "<option value=\"Compensar\">Compensar</option>"+
                                     "<option value=\"Colsubsidio\">Colsubsidio</option>"+
                                     "<option value=\"Comfacund\">Comfacund</option>"+
                                     "<option value=\"Comcaja\">Comcaja</option>"+
                                     "<option value=\"Caja de Retiro de las Fuerzas Militares\">Caja de Retiro de las Fuerzas Militares</option>"+
                                     "<option value=\"Ninguna\">Ninguna</option>"+
                                     "<option value=\"Otro\">Otro</option>"+
                              "</select>"+ 
                              "</td>";

         y[19].innerHTML =    "<td>"+
                              "<select class=\"form-control\" name=\"subEstado[]\" >"+
                                      "<option value=\""+subEstado+"\">"+subEstado+"</option>"+ 
                                      "<option value=\"Adulto Mayor\">Adulto Mayor</option>"+
                                      "<option value=\"Canasta Familiar\">Canasta Familiar</option>"+
                                      "<option value=\"Familias en Accion\">Familias en Acción</option>"+
                                      "<option value=\"ICBF\">ICBF</option>"+
                                      "<option value=\"Alcadia Local\">Alcadía Local</option>"+
                                      "<option value=\"Ninguna\">Ninguna</option>"+
                                      "<option value=\"Otro\">Otro</option>"+
                              "</select>"+
                              "</td>"+
                              "</tr>";                                 
        

  }

</script>

<?php

      @session_start();
      $id = $_SESSION["usuario"]['encuestado'];

      include("controller/consultas.php");
       /**
         * 
         * Llamado de la clase de consultas.php para traer el método que carga cada uno de 
         * los familiares del encuestado, trae a todos los familiares basados en la cédula 
         * de ciudadanía que viene siendo el id que se pasa desde la vista anterior
         * 
         * @return array[] arreglo de familiares que se van a desplegar en la tabla correspondiente
         */

      $array = llenarFormulario2Composicion( $id );

      
      if($array!=0)
      {    
            $conteo = 0;
            //Obtengo cada uno de los familiares del encuestado y sus datos
            foreach ($array as $familiar) {
                $conteo++;
               
               echo('<script> cargarForm2Composicion("'.$conteo.'","'.$familiar['nombre'].'" ,
                                                     "'.$familiar['documento'].'","'.$familiar['sexo'].'" ,
                                                     "'.$familiar['edad'].'","'.$familiar['fechaN'].'" ,
                                                     "'.$familiar['estadoC'].'","'.$familiar['condicionEspecial'].'", 
                                                     "'.$familiar['etnia'].'","'.$familiar['parentesco'].'",
                                                     "'.$familiar['escolaridad'].'",
                                                     "'.$familiar['ocupacion'].'","'.$familiar['actividad'].'",

                                                     "'.$familiar['ingresos'].'","'.$familiar['aporteIngresos'].'",

                                                     "'.$familiar['enfermedades'].'","'.$familiar['discapacidad'].'",

                                                     "'.$familiar['segSocial'].'","'.$familiar['sisben'].'",

                                                     "'.$familiar['cajaComp'].'","'.$familiar['subEstado'].'"

                                                                                            ); 
                    </script>');
               
                 
            }

           //El arreglo es bidimensional, donde el primer numero identifica la fila y la segunda cada columna
            
           // echo('<script> cargarForm2("'.$array['lugarCiudad'].'","'.$array['lugarDepartamento'].'" ,"'.$array['tiempoEnLocalidad'].'"); </script>');
            //echo('<script> cargarForm2Composicion("'.$array['id'].'","'.$array['nombre'].'" ,"'.$array['documento'].'"); </script>');
                       
      }
?>
</html>