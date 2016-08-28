<?php
session_start();
if(isset($_SESSION['usuario']))
{
  echo "...";
 }else {
   
 header("Location:login.html");
}

$variable=$_GET['variable'];
//echo $variable;
?>
<!DOCTYPE html >
<html lang="en" >
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
    <script language="javascript">
      function ConfirmaEli(){
      //Ingresamos mensaje a mostrar
      var mensaje = confirm ("¿REALMENTE DESEA ELIMINARLO?");
      if (mensaje){
        alert("Se eliminara el registro");
      }
      else {
        alert("Se cancelo la elimancion");
        return false;
      }
      }
   /*   var agree=confirm();
    	if (agree) return true;
    	else return false;
    */
    </script>
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
            <a  class="logo"><b>SRDGAAEA</b></a>
            <!--logo end--></header>
      <!--header end-->


<!--******PARTE DEL SIDEBAR MENU************-->
  <!--sidebar start-->
  <aside>
    <div id="sidebar" class="nav-collapse">
      <!--sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion"></ul>
                <p class="centered"><a ><img src="assets/img/Perfil.jpg" class="img-circle" width="80"></a></p>
                  <h5 class="centered">
                       <?php
                  ini_set('display_errors', 'off');
                  ini_set('display_startup_errors', 'off');
                 error_reporting(0);
                  session_start();
                 echo $_SESSION['usuario']."<br>"."Ha iniciado Sesión";
                 

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
                    <span>Generar Reporte :</span> 
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
      </aside>
      <!--sidebar end-->

<div>
	<fieldset>
		<legend>
			Datos recuperados</legend>
		<div>
        <section id="main-content">
          <section  class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Secion de actividades</h3>
        <div  class="row mt">
              <div a class="col-lg-12">
                      <div  class="content-panel">
              <h4><i class="fa fa-angle-right"></i>Actividades Registradas Ultimamente:</h4>
                          <section  id="no-more-tables">
  <?php 
    echo '<label>Mostrar ordenados por fecha :</label>
    <button type="button" class="btn btn-theme02"><a href="mporfecha2.php?var='.$variable.'">Por Fecha
    </a></button>';
	?>
  		<?php
			include("otros.php");
			 $Con = new conexion();
			 $Con->recuperarDatos();
			  ?>
		</section>
		</div>
		</div>
		</div>
		</section>
		</section>
		</div>
		</fieldset>
		</div>
	</fieldset>
</div>
</body>
</html>