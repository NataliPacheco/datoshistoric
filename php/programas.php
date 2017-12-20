<?php
   //Establecer conexion con la base de datos
  include("conexion.php");
  $json=array();
  $consulta=mysql_query("SELECT num_referencia, nombre_programa, id_convocatoria, cvu_evaluador, id_comite, id_dictamen, id_nivel FROM programas",$con) or die ("No se puede realizar la consulta");

  while($row=mysql_fetch_assoc($consulta)) {

  	$json[]=$row;
  }
  
  echo json_encode($json);

?>