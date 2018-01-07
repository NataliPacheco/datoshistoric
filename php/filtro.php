<?php

include"conexion.php";
$json=array();
$agregar="";
$num_ref=$_POST["num_ref"];
$convocatoria=$_POST["convocatoria"];
$nombre_eva=$_POST["nombre_eva"];
$cvu_evalu=$_POST["cvu_evalu"];
$fecha_eva=$_POST["fecha_eva"];
$dictamen=$_POST["dictamen"];
$nivel=$_POST["nivel"];
$institucion=$_POST["institucion"];
 
 if ($num_ref) {

 	$agregar .= $num_ref."and ";
 }

 if ($convocatoria) {

 	$agregar .= $convocatoria."and ";
 }

 if ($nombre_eva) {

 	$agregar .= $nombre_eva."and ";
 }

 if ($cvu_evalu) {

 	$agregar .= $cvu_evalu."and ";
 }

 if ($fecha_eva) {

 	$agregar .= $fecha_eva."and ";
 }

 if ($dictamen) {

 	$agregar .= $dictamen."and ";
 }

 if ($nivel) {

 	$agregar .= $nivel."and ";
 }

if ($institucion) {

	$agregar .= $institucion;
} 

 

$consulta=mysql_query("SELECT * FROM programas WHERE $agregar",$con) or die ("No se puede realizar la consulta");

while($row=mysql_fetch_assoc($consulta)) {

	$json[]=$row;

}

  echo json_encode($json);

 ?>