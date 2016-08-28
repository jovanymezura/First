<?php
$variablechecar=$_GET['variable1'];
?>

<?php
$conn  = mysql_connect('localhost','root','xXx2o15') 
 		or die 
 			("<h2>No se pudo conectar</h2>");
//limitar caracteres cambiar root acceso solo de root sobre la base de datos 		 
$base  = mysql_select_db('test',$conn) 
		or die 
			("<h2>No se encontro base de datos</h2>");

$sql ="SELECT Region.nombreregion,Entidad.NombreEntidad,tabla_registro.idregistro
,tabla_registro.involucrados,tabla_registro.descripcion
,tabla_registro.fecha,tabla_registro.status,tabla_registro.tipo FROM tabla_registro 

            LEFT JOIN Region  ON tabla_registro.region=Region.id
             LEFT JOIN Entidad ON tabla_registro.entidad=Entidad.idEntidad
              WHERE idregistro=$variablechecar";
$resultado=mysql_query($sql);
	
	while ($registro=mysql_fetch_assoc($resultado)){
        //la class del table hjace qye el table se vea bonito 
				echo "  <table class='table table-bordered table-striped table-condensed cf'>
            <caption>Detalles del registro en tabla</caption>
            <thead>
            <tr>
            <th>Dato</th>
            <th>Informacion</th>
            </tr>
            <tr>
                <td style='width: 15%';>Region :</td>
                <td>".$registro['nombreregion']."</td>
            </tr>
            <tr>
                <td>Entidad :</td>
            	<td width='150'>".$registro['NombreEntidad']."</td>
            </tr>
                <td>Involucrados :</td>
                <td width='150'>".$registro['involucrados']."</td>
            </tr>
            <tr>
                <td>Descripcion :</td>
                <td width='150'>".$registro['descripcion']."</td>
            </tr>
            <tr>
                <td>Fecha :</td>
                <td width='150'>".$registro['fecha']."</td>
            </tr>
            <tr>
                <td>Tipo :</td>
                <td width='150'>".$registro['tipo']."</td>
            </tr>
             <tr>
                <td>Status :</td>
                <td width='150'>".$registro['status']."</td>
            </tr>
        </table>
		";
	}
	mysql_close($conn);
	
?>

