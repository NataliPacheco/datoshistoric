<?php
  include("conexion.php");
  $json = array();
  $consulta = mysql_query("SELECT * FROM cat_tipo_institucion",$con) or die ("No se puede realizar la consulta");

  while($row = mysql_fetch_assoc($consulta)) {

  	$json[] = $row;
  }

  echo json_encode($json);

?>