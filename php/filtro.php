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

$consulta=mysql_query("SELECT programas.num_referencia,programas.nombre_programa,cat_convocatoria.nombre_convocatoria,cat_convocatoria.id_convocatoria,cat_evaluadores.nombre_evaluador,cat_evaluadores.cvu_evaluador, comite.fecha_comite,comite.id_comite,cat_dictamen.estatus, cat_dictamen.id_dictamen, cat_nivel.id_nivel,cat_nivel.nombre_nivel,cat_institucion.nombre_institucion,cat_institucion.id_institucion FROM programas 
    inner join cat_convocatoria  on programas.id_convocatoria = cat_convocatoria.id_convocatoria
    inner join cat_institucion on programas.id_institucion = cat_institucion.id_institucion
    inner join cat_evaluadores on programas.cvu_evaluador = cat_evaluadores.cvu_evaluador
    inner join comite on programas.id_comite = comite.id_comite
    inner join cat_dictamen on programas.id_dictamen = cat_dictamen.id_dictamen
    inner join cat_nivel on programas.id_nivel = cat_nivel.id_nivel order by id_programa  LIMIT $empieza, $por_pagina WHERE $agregar",$con) or die ("No se puede realizar la consulta");

while($row=mysql_fetch_assoc($consulta)) {

	$json[]=$row;

}

  echo json_encode($json);

 ?>