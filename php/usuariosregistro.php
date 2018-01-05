<?php
 //Establecer conexion con la base 
 include"conexion.php";
 $json=array();
 $id_perfil=$_POST["id_perfil"];
 $usuario=$_POST["usuario"];
 $contraseña=$_POST["contraseña"];

 $consulta=mysql_query ("INSERT INTO  usuarios (id_perfil, usuario, contraseña) VALUES ('$id_perfil','$usuario','$contraseña')",$con) or die ("No se puede realizar el registro de usuarios");
 
   echo ("Registrado");

?>