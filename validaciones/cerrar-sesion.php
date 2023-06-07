<?php
include_once 'basededatos1.php';
session_start();
$tabla=tabla_usuarios();
$conexion=conexion();

$sql="UPDATE $tabla SET conectado='0' WHERE id='".$_SESSION['id']."' " ;
$result=mysqli_query($conexion,$sql); 

session_unset(); 
session_destroy(); 

$url = "https://" . $_SERVER['HTTP_HOST'];
$url = str_replace('validaciones/cerrar-sesion.php', "", $url);

echo "<meta http-equiv='Refresh' content='0;url=".$url."'>";


?>