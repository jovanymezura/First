<?php
$variablelocal=$_GET['variable1']; 
echo "<h2>".$variablelocal."</h2>";
?>

<?php
$conn  = mysql_connect('localhost','root','xXx2o15') 
    or die 
      ("<h2>No se pudo conectar</h2>");
     
$base  = mysql_select_db('test',$conn) 
    or die 
      ("<h3>No se pudo realizar la conexion con la base de datos");
    $sql ="SELECT *FROM tabla_registro WHERE idregistro=$variablelocal";
$resultado=mysql_query($sql);
  
  while ($registro=mysql_fetch_array($resultado)){
      ("<h2>No se encontro base de datos</h2>");
    echo '<section id="main-content">';
    echo        '<section class="wrapper">';
    echo    	'<h3><i class="fa fa-angle-right"></i>Nuevo Registro de Actividad</h3>';
echo '<div class="row mt">';	
    echo      		'<div class="col-lg-12">';
    echo              '<div class="form-panel">';

    echo     '<form action="guardamodifica.php/?variable1=<?php $_REQUEST["variablelocal"]; ?>" class="form-horizontal style-form" method="post" name="datos">
                          <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Region</label>
                          <div class="col-sm-8">
                           		<select name="region" class="form-control">
                <option value="0">'.$registro['region'].'</option>
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
											<option value="0">'.$registro['entidad'].'</option>
											<option value="1">Contaduria-Administracion</option>
											<option value="2">Economia</option>
											<option value="3">Estadistica-e-Informatica</option>
											<option value="4">Ciencias-Administrativas-Sociales</option>
									</optgroup>
									<optgroup label="Veracruz">
											<option value="1">Administracion-de-Empresas-y-Turisticas</option>
											<option value="2">Contaduria</option>
									</optgroup>
									<optgroup label="Cordoba-Orizaba">
											<option value="1">Contaduria-Administracion</option>
									</optgroup>
									<optgroup label="Coatzacoalcos-Minatitlan">
											<option value="1">Contaduria-Administracion</option>
									</optgroup>
									<optgroup label="Poza-Rica-Tuxpan">
											<option value="1">Contaduria</option>
									</optgroup>
									</select>
                                 
                              </div>
                          </div>

                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Involucrados</label>
                              <div class="col-sm-8">
                                  <input name="involucrados" class="form-control" id="participantes" type="text"
                                  value="'.$registro['involucrados'].'">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tipo-de-Actividad</label>
                              <div class="col-sm-8">
                              <select name="tipo" class="form-control">
                                <option value="0">'.$registro['tipo'].'</option>
                                <option value="1">Generica</option>
                                <option value="2">Movilidad</option>
                                <option value="3">Plaza</option>
                              </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Fecha-Actividad</label>
                              <div class="col-sm-8">
                                  <input name="fecha" type="text"  class="form-control" id="lugaryfecha" 
                                  placeholder="dd/mm/aa" value="'.$registro['fecha'].'">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Descripcion</label>
                              <div class="col-sm-8">
                                 <input id="descripcionEvento" name="descripcion" class="form-control" 
                                 value="'.$registro['descripcion'].'">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-lg-2 col-sm-2 control-label">StatusActividad</label>
                              <div class="col-lg-8">
                                  <select name="status" ="form-control">
                                    <option value="0">'.$registro['status'].'</option>
                                    <option value="1">Activa</option>
                                    <option value="2">Concluida</option>
                                    <option value="3">Cancelada</option>
                                  </select>


                              <br>
                              
                              <button type="submit" class="btn btn-theme04">Cancelar</button>
                              <button type="submit" class="btn btn-theme03">Aceptar</button>
                              </div>

                          </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	</section>
          	</section>';

}
?>