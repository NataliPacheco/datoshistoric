<?php
   //Establecer conexion con la base de datos
  include("conexion.php");
  $json=array();
  $consulta=mysql_query("SELECT programas.id_programa,programas.num_referencia,programas.nombre_programa,cat_convocatoria.nombre_convocatoria,
       cat_evaluadores.nombre_evaluador,cat_evaluadores.cvu_evaluador, comite.fecha_comite,cat_dictamen.estatus,
       cat_nivel.nombre_nivel,cat_institucion.nombre_institucion FROM programas 
  	inner join cat_convocatoria  on programas.id_convocatoria = cat_convocatoria.id_convocatoria
  	inner join cat_institucion on programas.id_institucion = cat_institucion.id_institucion
    inner join cat_evaluadores on programas.cvu_evaluador = cat_evaluadores.cvu_evaluador
    inner join comite on programas.id_comite = comite.id_comite
    inner join cat_dictamen on programas.id_dictamen = cat_dictamen.id_dictamen
    inner join cat_nivel on programas.id_nivel = cat_nivel.id_nivel order by id_programa",$con) or die ("No se puede realizar la consulta");

  while($row=mysql_fetch_assoc($consulta)) {

  	$json[]=$row;
  }
  
  echo json_encode($json);

?>