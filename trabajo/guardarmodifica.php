<?php

		if(isset($_POST['descripcion'])         && !empty($_POST['descripcion'])
			&&	isset($_POST['involucrados'])   &&!empty($_POST['involucrados'])
			&& isset($_POST['fecha']) &&!empty($_POST['fecha'])){

			$descripcionregis = $_POST['descripcion'];
			$involucradosregis = $_POST['involucrados'];
			$fecharegis = $_POST['fecha'];
			$region = $_POST['region'];
			$entidad = $_POST['entidad'];
			$tipoactividad = $_POST['tipo'];
			$statusactividad = $_POST['status'];
			$idregistro= $_POST['id'];

			$db= "test";
			$host= "localhost"; 	
			$ps= "xXx2o15";
			$user= "root";

			$con = mysql_connect($host,$user,$ps)or die ("No se pudo conectar a la base de datos");
			mysql_select_db($db,$con)or die ("No se encontro la base de datos");
			
			mysql_query("UPDATE tabla_registro SET region = '$region',
				entidad ='$entidad', involucrados = '$involucradosregis',
				tipo = '$tipoactividad', fecha = '$fecharegis',
				descripcion ='$descripcionregis',status ='$statusactividad' WHERE idregistro='$idregistro'");

			/**mysql_query("INSERT INTO registro values ('','$descripcionregis','$involucradosregis','$fecharegis')");	
			mysql_query("INSERT INTO tipoac   values('','$tipoactividad','$statusactividad')");
			mysql_query("INSERT INTO ubicacion values ('','$entidad','$region')");*/
			echo "<center>Se realizo con existo la modificacion</center><br>";
			echo "<center><a href='index.php'>Volver al menu</a></center>";	

		}
			else 
			{
				echo "Se deben de llenar todos los camppos";
			}

			
 ?>