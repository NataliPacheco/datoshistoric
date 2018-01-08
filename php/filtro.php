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

 	$agregar .= "num_referencia= '".$num_ref."' and ";
 }

 if ($convocatoria) {

 	$agregar .= "id_convocatoria= '".$convocatoria."' and ";
 }

 if ($nombre_eva) {

 	$agregar .= "cvu_evaluador= '".$nombre_eva."' and ";
 }

 if ($cvu_evalu) {

 	$agregar .= "cvu_evaluador= '".$cvu_evalu."' and ";
 }

 if ($fecha_eva) {

 	$agregar .= "id_comite= '".$fecha_eva."' and ";
 }

 if ($dictamen) {

 	$agregar .= "id_dictamen= '".$dictamen."' and ";
 }

 if ($nivel) {

 	$agregar .= "id_nivel= '".$nivel."' and ";
 }

if ($institucion) {

	$agregar .= "id_institucion= '".$institucion."'";
} 

//print_r(explode(" ", $agregar, -1));
if ("and" == array_slice(explode(" ",$agregar,-1), -1)[0]) {
	$agregar = substr($agregar, 0, -5);
}
//echo $agregar."\n";

$consulta=mysql_query("SELECT * FROM programas WHERE $agregar",$con) or die ("No se puede realizar la consulta");

while($row=mysql_fetch_assoc($consulta)) {

	$json[]=$row;

}

  echo json_encode($json);

 ?>