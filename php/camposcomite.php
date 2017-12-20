<?php
   //Establecer conexion con la base de datos
  include("conexion.php");
  $json=array();
  $consulta=mysql_query("SELECT id_comite, fecha_comite FROM comite",$con) or die ("No se puede realizar la consulta");

  while($row=mysql_fetch_assoc($consulta)) {

  	$json[]=$row;
  }
  
  echo json_encode($json);

?>