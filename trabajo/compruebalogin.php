<?php
		ini_set('display_errors', 'off');
		ini_set('display_startup_errors', 'off');
		error_reporting(0);

			$username = $_POST['usuario'];
			$password = $_POST['contraseña'];
		
if (isset($_POST['usuario'])     && !empty($_POST['usuario'])
 &&	isset($_POST['contraseña']) && !empty($_POST['contraseña'])) {
	
	$conn = mysql_connect("locahost","root","xXx2o15");
	$base=mysql_select_db("test");
	$consulta=mysql_query("SELECT id_usuario FROM usuario WHERE Nombre='".$username."' AND Contra = '".$password."'");
	
		if ($row = mysql_fetch_array($consulta)){
				$var = $row['id_usuario'];
		}

	 if (mysql_num_rows($consulta) > 0)
	 {
	 	session_start();
	 	$_SESSION['usuario']=$username;
	 	$_SESSION['idusuario']=$var;
	 	
	 ?>
	 <script type="text/javascript">
	 window.location="Inicio.php";
	 </script>
	 <?php
	 }
	 else
	 {
	 	echo "<center><p>Datos de acceso incorrectos</p></center>";
	 	echo "<center><a href='login.html'>Iniciar Sesion</a><center>";
	 }
}
	/*function Conectarse()
	{
		if(!($link=mysql_connect("localhost","root"))) 
		{
			echo "Error al conectarse al servidor.";
			exit();
		}
		if (!mysql_select_db("test",$link))
		{
			echo "Error seleciando la base de datos";
			exit();
		}
		return $link;
	}
	$con = Conectarse();
	$query = "SELECT * FROM usuario WHERE Nombre='".$username."' AND Contra = '".$password."'";
	$q = mysql_query($query,$con);

	try{

		if(mysql_result($q, 0)){
			 $result = mysql_result($q, 0);

				//echo "Usuario valido Correctamente";
		 header("Location: http://localhost/tets/index1.php");
	}else 
		echo "Usuario o Contraseña incorrectos";
			
	}catch(Exception $error){}
		mysql_close($con);*/
								
?>