<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location: ../../../index.php');
    }else{
        if((time() - $_SESSION['time']) > 3600){
            header('location: ../validaciones/cerrar-sesion.php');
        }
    }
    
?>