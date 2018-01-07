<?php

include"conexion.php";
$json=array();
$filtro=$_POST["filtro"];

$consulta=mysql_query("SELECT * FROM programas WHERE $filtro",$con) or die ("No se puede realizar la consulta");

while($row=mysql_fetch_assoc($consulta)) {

	$json[]=$row;

}

  echo json_encode($json);

 ?>