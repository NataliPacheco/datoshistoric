<?php

//conexion con la base de datos

include("conexion.php");
 //cantidad de registros por pagina
     $por_pagina= 10;

     if (isset($_GET['pagina'])) {
     	$pagina= $_GET['pagina'];

     }else{
     	$pagina = 10;
     }     

   //la pagina inicia en 0 y se multiplica $por_pagina
    
    $empieza = ($pagina-1) * $por_pagina;


    $query = "SELECT programas.num_referencia,programas.nombre_programa,cat_convocatoria.nombre_convocatoria,
       cat_evaluadores.nombre_evaluador,cat_evaluadores.cvu_evaluador, comite.fecha_comite,cat_dictamen.estatus,
       cat_nivel.nombre_nivel,cat_institucion.nombre_institucion FROM programas 
    inner join cat_convocatoria  on programas.id_convocatoria = cat_convocatoria.id_convocatoria
    inner join cat_institucion on programas.id_institucion = cat_institucion.id_institucion
    inner join cat_evaluadores on programas.cvu_evaluador = cat_evaluadores.cvu_evaluador
    inner join comite on programas.id_comite = comite.id_comite
    inner join cat_dictamen on programas.id_dictamen = cat_dictamen.id_dictamen
    inner join cat_nivel on programas.id_nivel = cat_nivel.id_nivel order by id_programa  LIMIT $empieza, $por_pagina";

    $resultado = mysql_query($query);
    $json = array();

    while($fila = mysql_fetch_assoc($resultado)){
      $json[] = $fila;
    } 
    echo json_encode($json);

      


?>