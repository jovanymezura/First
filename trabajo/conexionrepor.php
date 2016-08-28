<?php 

	/**sesiones de php
	* 
	*/
	ini_set('display_errors', 'off');
		ini_set('display_startup_errors', 'off');
		error_reporting(0);

	class  conexion{
		function recuperarDatos(){
			$host = "localhost";
			$user = "root";
			$ps   = "xXx2o15";
			$db   = "test";
		//$mysqli=new mysqli($host,$user,$ps,$db);
		 $conn = mysql_connect($host,$user,$ps) or die ("<h2>No se pudo conectar</h2>");
			mysql_select_db($db,$conn) or die ("<h2>No se encontro base de datos</h2>");	

                  ini_set('display_errors', 'off');
                  ini_set('display_startup_errors', 'off');
                 error_reporting(0);
                  session_start();
              //  echo $_SESSION['idusuario']."<br>"."Ha iniciado Sesion";
                 $idusuario = $_SESSION['idusuario'];
               //  echo $idusuario;
                 

                 	


			$query = $query = "SELECT Region.nombreregion,Entidad.NombreEntidad,tabla_registro.idregistro
,tabla_registro.involucrados,tabla_registro.descripcion
,tabla_registro.fecha,tabla_registro.status,tabla_registro.tipo FROM tabla_registro 

			LEFT JOIN Region  ON tabla_registro.region=Region.id
			 LEFT JOIN Entidad ON tabla_registro.entidad=Entidad.idEntidad WHERE tabla_registro.id_Usuario =
			 $idusuario ORDER BY tabla_registro.fecha ASC" ; 
			//hace de nuevo la conexion para eso sirce mysqli
			$resultado = mysql_query($query);
	

		
echo "<table class='table table-bordered table-striped table-condensed cf'>";	
echo "<thead >";
        	echo  "<tr>";
            echo  "<th><font face='verdana'>Region</th>";
            echo  "<th><font face='verdana'>Entidad</th>";
            echo  "<th><font face='verdana'>Involucrados</th>";
            echo  "<th><font face='verdana'>Descripcion</th></font>";
            echo  "<th><font face='verdana'>Fecha</th></font>";
            echo  "<th><font face='verdana'>Tipo</th>";
            echo  "<th><font face='verdana'>EstadoAct</th>";
                      
            echo  "</tr>";
            echo  "</thead>";
//Devuelve en un array todo lo que pide el query recient4emente creado 
			echo "<tbody>";
			while ($row =mysql_fetch_array($resultado)){
			 	echo "<tr>";
						echo "<td><div style='width:70px; overflow:hidden;'>";
						echo $row['nombreregion'];
						$var=$row['idregistro'];
						echo "</td>";
						echo "<td><div style='width:30x; overflow:hidden;'>";
						 	echo $row['NombreEntidad'];
						echo "</td>";
			 	echo "<td><div style='width:100px;  overflow:hidden;'>";	
			 	echo  $row['involucrados'];
				echo "</td>";
				echo  "<td><div style='width:100px;  overflow:hidden;'>";
				echo  $row['descripcion'];
				echo "</div>";
				echo  "</td>";
				echo  "<td><div style='width:50px; overflow:hidden;'>";
				echo  $row['fecha'];
				echo  "</td>";
			 			echo  "<td><div style='width:50px; overflow:hidden;'>";
							echo  $row['tipo'];
							echo "</td>";
							echo "<td><div style='width:80px; overflow:hidden;'>";
							echo $row['status'];
							echo "</td>";
					
			
			}

		   echo "</tr>";
	echo "</tbody>";
	echo "</table>";	

echo '
<form action="" method="get">
<input type="button" name="imprimir" value="Imprimir"  onClick="window.print();"/>
"<button type="button" name="regresar" ><a href="Inicio.php">Cancelar</a></button>"
</form>';
}		

	}
	?>