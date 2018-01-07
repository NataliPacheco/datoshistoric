<?php
    //Establecer conexion con la base de datos
    include("conexion.php");
    $json='';
    $consulta = mysql_query("SELECT * FROM cat_orientacion",$con) or die ("No se puede realizar la consulta");

    while ($row=mysql_fetch_assoc($consulta)) {
    	 $json.= json_encode($row).",";
    	//$json.= $row; 
    }

echo "[".substr($json, 0,-1)."]";


 ?>