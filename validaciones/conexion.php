<?php

define("SERVIDOR","localhost");
define("USUARIO","root");
define("PASSWORD","");
define("BD","elearning");


function conexion()
{
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "elearning";
    return $conexion=mysqli_connect($host_db,$user_db,$pass_db,$db_name);
}
$conexion = conexion();
$servidor="mysql:dbname=".BD.";host=".SERVIDOR;
try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
    );
    // echo "<script> alert('Conectando.')</script>";
}
catch(PDOException $e){
    // echo "<script>alert('Error.')</script>";
}

function tabla_usuarios()
{            
    return "users";
}

function server() {
    return $_SERVER['SERVER_NAME'];
}
?>
