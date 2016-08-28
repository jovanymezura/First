<?php
session_start();
if(isset($_SESSION['usuario']))
{
  echo "...";
 }else {
   
 header("Location:login.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome">
<link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/dateranngepicker.css">
<!--esta parte es para poder tener acceso con los iconos de la misma pagina-->
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">  
 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<title>REgistro de base de datos</title>
</head>
<body>
  <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a class="logo"><b>SRDGAAEA...</b></a>
            <!--logo end-->
            
          
        </header>
      <!--header end-->
<!--******PARTE DEL SIDEBAR MENU************-->
  <!--sidebar start-->
  <aside>
    <div id="sidebar" class="nav-collapse">
      <!--sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion"></ul>
                <p class="centered"><img src="assets/img/Perfil.jpg" class="img-circle" width="80"></p>
                  <h5 class="centered">
                  <?php
                  ini_set('display_errors', 'off');
                  ini_set('display_startup_errors', 'off');
                 error_reporting(0);
                  session_start();
                 echo $_SESSION['usuario']."<br>"."Ha iniciado Sesión";
                 $opcion=$_SESSION['idusuario'];
                 ?>
                 </h5>

                  <li class="sub-menu" style="font-family:Bodoni;font-size:20px">
                      <a href="Inicio.php">
                          <i class="fa fa-desktop"></i>
                          <span>Inicio :</span>
                      </a>
                  </li>
              
                  <li class="sub-menu" style="font-family:Bodoni;font-size:20px">
                      <a href="index1.php">
                          <i class="li_note"></i>
                          <span>Nuevo Registro:</span>
                      </a>
                  </li>

                  <li class="sub-menu" style="font-family:Bodoni;font-size:20px">
                    <a href="tablareporte.php">
                    <i class="fa fa-dashboard"></i>
                    <span>Generar Reporte:</span> 
                    </a>                       
                  </li>

                  <li class="sub-menu" style="font-family:Bodoni;font-size:20px">
                      <a href="index.php" >
                          <i class="li_eye"></i>
                          <span>Buscar Actividad:</span>
                      </a>
                      
                  </li>


                   <li class="sub-menu" style="font-family:Bodoni;font-size:20px">
                      <a href="cerrar.php">
                          <i class="li_paperplane"></i>
                          <span>Salir-</span>
                      </a>
                
                  </li>
                 
    <style type="text/css">
      
      * {
        margin:0px;
        padding:0px;
      }
      
      #header {
        margin:auto;
        width:500px;
        font-family:Arial, Helvetica, sans-serif;
      }
      
      ul, ol {
        list-style:none;
      }
      
      .nav > li {
        float:left;
      }
      .nav li a:hover {
        background-color:#434343;
      }
      
      .nav li ul {
        display:none;
        position:absolute;
        min-width:140px;
      }
      
      .nav li:hover > ul {
        display:block;
      }
      
      .nav li ul li {
        position:relative;
      }
      
      .nav li ul li ul {
        right:-140px;
        top:0px;
      }
      
    </style>
      <ul class="nav">
        <li class="sub-menu" style="font-family:Bodoni;font-size:20px">
                      <a href="javascript:;" >
                          <i class="li_user"></i>
                          <span>Buscar en :</span>
          <ul>
            <li><a href="demas.php?variable=1">Liliana Ivonne</a> </li>
            <li><a href="demas.php?variable=2">Luis Alberto</a></li>
            <li><a href="demas.php?variable=3">Graciela de lo A.</a></li>
            <li><a href="demas.php?variable=4">Miguel Angel</a></li>
            <li><a href="demas.php?variable=5">Jose Raymundo</a></li>
            <li><a href="demas.php?variable=6">Francisco Braulio</a></li>
            <li><a href="demas.php?variable=7">Gloria V.</a></li>
        </a>
            </ul>
                        <!-- sidebar menu end-->
          </div>
      
      </aside>
      <!--sidebar end-->

<!--Aqui empieza la parte del formulario para el registro de las actividades-->

	<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Nuevo Registro de Actividad</h3>
<div class="row mt">	
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form action="registrado.php" class="form-horizontal style-form" method="post" name="datos">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Region</label>
                              <div class="col-sm-8">
                              		<select name="region" class="form-control">
										<option value="0">------</option>
										<option value="1">Xalapa</option>
										<option value="2">Veracruz</option>
										<option value="3">Cordoba-Orizaba</option>
										<option value="4">Coatzacoalcos-Minatitlan</option>
										<option value="5">PozaRica-Tuxpan</option>
									</select>
                              </div>
                          </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Entidad</label>
                              <div class="col-sm-8">
 
                                  	<select name="entidad" class="form-control">
									<optgroup label="Xalapa"> 
											<option value="0">------</option>
											<option value="1">Contaduria-Administracion</option>
											<option value="2">Economia</option>
											<option value="3">Estadistica-e-Informatica</option>
											<option value="4">Ciencias-Administrativas-Sociales</option>
									</optgroup>
									<optgroup label="Veracruz">
											<option value="5">Administracion-de-Empresas-y-Turisticas</option>
											<option value="6">Contaduria</option>
									</optgroup>
									<optgroup label="Cordoba-Orizaba">
											<option value="1">Contaduria-Administracion</option>
									</optgroup>
									<optgroup label="Coatzacoalcos-Minatitlan">
											<option value="1">Contaduria-Administracion</option>
									</optgroup>
									<optgroup label="Poza-Rica-Tuxpan">
											<option value="5">Contaduria</option>
									</optgroup>
									</select>
                                 
                              </div>
                          </div>

                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Involucrados</label>
                              <div class="col-sm-8">
                                  <input name="involucrados" class="form-control" id="participantes" type="text" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tipo-de-Actividad</label>
                              <div class="col-sm-8">
                              <select name="tipo" class="form-control">
                              <?php 
                              if($opcion=="2"){
                              echo ' 
                              <option value="0"></option>
                               <option value="Generico">Generico</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>';
                                    }
                                    else if ($opcion=="3") {
                                      echo '
                                      <option value="0"></option>
                                  <option value="Generico">Generico</option>
                                      <option value="D">D</option>
                                      <option value="E">E</option>
                                      <option value ="F">F</option>';
                                    }
                                    else if ($opcion=="4"){
                                      echo '
                                  <option value="0"></option>
                                  <option value="Generico">Generico</option>
                                      <option value="G">G</option>
                                      <option value="H">H</option>
                                      <option value="I">I</option>';
                                    }
                                    else if ($opcion=="5"){
                                      echo '
                                    <option value="0"></option>
                                    <option value="Generico">Generico</option>
                                      <option value="J">J</option>
                                      <option value="K">K</option>
                                      <option value="L">L</option>';
                                    }
                                    else{
                                      echo '
                                      <option value="0"></option>
                                      <option value="Generico">Generico</option>
                                      </select>
                                        
                                         ';
                                    }
                                 
                                ?>
                                </select>
                                </div>
                                </div>
                              
                           
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Fecha-Actividad</label>
                              <div class="col-sm-8">
                              <input type="datetime" name="fecha" class="form-control"placeholder="Año/Mes/Dia">
                                  <!--<input name=" fecha" type="text"  class="form-control" id="lugaryfecha" placeholder="Año/Mes/Dia">-->
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Descripcion</label>
                              <div class="col-sm-8">
                                 <textarea id="descripcionEvento" name="descripcion" class="form-control"></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">StatusActividad</label>
                              <div class="col-lg-8">
                                  <select name="status" class="form-control">
                                    <option value="0"></option>
                                    <option value="Activa">Activa</option>
                                    <option value="Concluida">Concluida</option>
                                    <option value="Cancelada">Cancelada</option>
                                  </select>


                              <br>
                              
                              
                              <button type="submit" class="btn btn-theme03">Aceptar</button>
                              </div>

                          </div>
                      </form>
                      <button type="submit" class="btn btn-theme04" onclick="location='Inicio.php'">Cancelar</button>
                  
          
          	</section>

          	</section>
	<!--	Descripcion:<input type="text" name="descripcion"></input><br>
		Involucrados:<input type="text" name="involucrados"></input><br>
		Fecha : <input type="text" name="fecha"></input><br>
		<input type="submit" name="botonguardar" value="Guardar"><br>
		<a href="index.php">IR a otro lado</a>-->


</body>
</html>