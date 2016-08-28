 <?php
    ini_set('display_startup_errors', 'off');
    error_reporting(0);
			session_start();
			$variable= $_SESSION['idusuario'];
		
			?>
<?php
/*----Comprueba que exista algo en el campo y no esten nulos------*/
		if(isset($_POST['descripcion'])         && !empty($_POST['descripcion'])
			&&  isset($_POST['tipo'])           &&!empty($_POST['tipo'])
			&&  isset($_POST['status'])         &&!empty($_POST['status'])
			&&  isset($_POST['involucrados'])   &&!empty($_POST['involucrados'])
			&&  isset($_POST['fecha'])          &&!empty($_POST['fecha'])){
			ini_set('display_errors', 'off');

/*---Asigna a variables el valor de los campos en el formulario a travez de $_POST---*/			
			$descripcionregis = $_POST['descripcion'];
			$involucradosregis = $_POST['involucrados'];
			$fecharegis = $_POST['fecha'];
			$region = $_POST['region'];
			$entidad = $_POST['entidad'];
			$tipoactividad = $_POST['tipo'];
			$statusactividad = $_POST['status'];
			$idusuario=$variable;
/*----Realiza la conexion con la base de datos y Seleciona la base de datos----*/
			$db= "test";
			$host= "localhost"; 	
			$ps= "xXx2o15";
			$user= "root";

			$con = mysql_connect($host,$user,$ps)or die ("No se pudo conectar a la base de datos");
			mysql_select_db($db,$con)or die ("No se encontro la base de datos");
		

/*Inserta todos los valores de la base de datos */
			mysql_query("INSERT INTO tabla_registro values ('','$region','$entidad','$involucradosregis',
				'$tipoactividad','$fecharegis','$descripcionregis','$statusactividad','$idusuario')");	

			//mysql_query("INSERT INTO tipoac   values('','$tipoactividad','$statusactividad')");
			//mysql_query("INSERT INTO ubicacion values ('','$entidad','$region')");
			echo "<center><p>Se realizo con exito el registro</p></center><br>";
			echo "<center><a href='index1.php'>Volver al menu</a></center>";	

		}
			else 
			{
				echo "<center><p>Se deben de llenar todos los campos</p></center>";
			}

			
 ?>