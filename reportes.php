<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Diagnóstico Socioeconómico</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="menuAdministrador.php"><i class="fa fa-dashboard"></i>Resumen</a></li>
            <li class="active"><a href="reportes.php"><i class="fa fa-bar-chart-o"></i>Reportes</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a> -->
              <li><a href="/assets/controller/logout.php">Cerrar Sesión</a></li>
              <li><a href="#">Ayuda</a></li>
              <ul class="dropdown-menu">
               <!--  <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview"> -->
                  <!-- <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a> -->
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <!-- <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li> -->
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            
            <div class="media">
              <a class="pull-left" href="#">
                <!-- logo de la javeriana -->
                <img class="media-object" src="/assets/img/logojaveriana.png" alt="...">
              </a>
                <h2>Menú Administrador</h2>
            </div>
            <hr class="featurette-divider">
            
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              A continuación ingrese el reporte que desea:
            </div>
          </div>
        </div><!-- /.row -->
        <form class="form-inline" role="form" action="/assets/controller/ReportesBusqueda.php" method="POST" name="form1" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-3">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div >
                      <input type="text" name="reporte1NI" placeholder= "Cédula o apellido">
                    </div>
                  </div>
                </div>
                  <div class="panel-footer announcement-bottom">
                    <div class="row">
                      <div class="col-xs-6">
                        
                      </div>
                      <div class="col-xs-6 text-right">
                        <input type="submit" value="buscar" class="btn btn-primary"/>
                        <i class="fa fa-arrow-circle-right"></i>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="panel panel-warning">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-check fa-5x"></i>
                    </div>
                    <div >
                      <input type="text" name="reporte2Barrio" placeholder= "Barrio">
                    </div>
                  </div>
                </div>
                

                  <div class="panel-footer announcement-bottom">
                    <div class="row">
                      <div class="col-xs-6">
                        <!-- Complete Tasks -->
                      </div>
                      <div class="col-xs-6 text-right">
                        <input type="submit" value="buscar" class="btn btn-primary"/>
                        <i class="fa fa-arrow-circle-right"></i>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="panel panel-danger">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div >
                      <input type="text" name="reporte3Direccion" placeholder= "Dirección">
                    </div>
                  </div>
                </div>
                <a href="#">
                  <div class="panel-footer announcement-bottom">
                    <div class="row">
                      <div class="col-xs-6">
                        <!-- Fix Issues -->
                      </div>
                      <div class="col-xs-6 text-right">
                        <input type="submit" value="buscar" class="btn btn-primary"/>
                        <i class="fa fa-arrow-circle-right"></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            
          </form>
          
          <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Reportes</h3>
                </div>
                <div class="panel-body">

                  <table class="table">
                    <?php 
                    
                    //revisar si ya hubi una busqueda
                      if (isset($_SESSION['answr'])) {
                        echo "<th>id</th><th>fechaE</th><th>horaInicio</th><th>horaFin</th><th>estado</th><th>vistoBueno</th><th>nombre</th><th>telefono</th><th>celular</th><th>parentesco</th><th>estadocivil</th><th>edad</th><th>genero</th><th>direccionnueva</th><th>upz</th><th>barrio</th><th>estrato</th><th>numerohogares</th><th>tiempobarrio</th><th>carrera</th><th>supervisor</th><th>encuestador</th><th>ver</th>";
                        $query= $_SESSION['answr'];
                        foreach ($query as $key => $value) {
                          echo "<tr>";
                          //se imprime cada uno de los valores coincidentes
                          for ( $i =0; $i<count($value)/2 ;$i++) {

                            echo "<td>".$value[$i]."</td>";
                          }
                          //Solo falta imprimir el boton de ver
                          echo "<td><form class=\"form-inline\" role=\"form\" action=\"/assets/controller/AdmnVer.php\" method=\"POST\" name=\"form".$i."\" enctype=\"multipart/form-data\">";
                          echo "<input type=\"hidden\" name=\"id\" value=".$value[0]."><input type=\"submit\" value=\"ver\" class=\"btn btn-primary\"/>";
                          echo "</form></td>";
                          echo "</tr>";
                        }

                      }
                      //limpiar para evitar memory overflow
                      unset($_SESSION['answr']);
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div><!-- /.row -->
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>