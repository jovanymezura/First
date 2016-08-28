
<?php
$variableaborrar=$_GET['variable1'];
?>


<?php
$conn  = mysql_connect('localhost','root','xXx2o15') 
 		or die 
 			("<h2>No se pudo conectar</h2>");
		 
$base  = mysql_select_db('test',$conn) 
		or die 
			("<h2>No se encontro base de datos</h2>");


$sql = "DELETE FROM tabla_registro WHERE idregistro=$variableaborrar";

$realizar=mysql_query($sql) or
    	
    		die('No se pudo realizar la eliminacion del registro:'.mysql_error());
   
    		echo "<center><h3>Exito al eliminarar el registro</h3></center>";
    	echo "<center><a href='index.php'>Regresar</a></center>";
mysql_close($conn);

    	



?>	