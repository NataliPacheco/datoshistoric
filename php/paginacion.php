<?php

//conexion con la base de datos
    include("conexion.php");

 //cantidad de registros por pagina
     $por_pagina= 500;

     if (isset($_GET['pagina'])) {
     	$pagina= $_GET['pagina'];

     }else{
     	$pagina = 1;
     }

   //la pagina inicia en 0 y se multiplica $por_pagina
    
    $empieza = ($pagina-1) * $por_pagina;

    //seleccionar los registros de la tabla programas con LIMIT

    $query = "SELECT * FROM programas order by id_programa  LIMIT $empieza, $por_pagina";

    $resultado = mysql_query($query);
    $json = array();

    while($fila = mysql_fetch_assoc($resultado)){
      $json[] = $fila;
    } 
    echo json_encode($json);

    //seleccionar todo de la tabla programas
    $query = "SELECT * FROM programas";

    $resultado = mysql_query($query);

    //contar el total de registros

    $total_registros = mysql_num_rows($resultado);

    //usando ceil para dividir el total de registro enre $por_pagina

    $total_paginas = ceil($total_registros / $por_pagina);

    // link a primera pagina

    echo"<a href='paginacion.php?pagina=1'>". 'Primera' ."</a>";

    $paginas = '';
    for($i=1; $i<=$total_paginas; $i++){
    	$paginas .= "<a href='paginacion.php?pagina=".$i."'>".$i."</a";
    }
    echo $paginas;
  
  //link a la ultima pagina

  echo"<a href='paginacion.php?pagina=$total_paginas'>".'Ultima'."</a>";    


?>