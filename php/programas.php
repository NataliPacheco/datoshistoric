<?php
   //Establecer conexion con la base de datos
  include("conexion.php");
  $json=array();
  $consulta=mysql_query("SELECT programas.num_referencia,programas.nombre_programa, cat_convocatoria.nombre_convocatoria FROM cat_convocatoria inner join programas on programas.id_convocatoria = cat_convocatoria.id_convocatoria",$con) or die ("No se puede realizar la consulta");

  while($row=mysql_fetch_assoc($consulta)) {

  	$json[]=$row;
  }
  
  echo json_encode($json);

?>