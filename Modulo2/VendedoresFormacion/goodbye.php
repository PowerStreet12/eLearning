<?php require "../../validaciones/conexion.php";?>

<html><body>
    <style>
        .title {
            font-family: 'Roboto', sans-serif;
            font-size: xx-large;
            background-color: #5196BF;
            border-radius: 30px;
            width: 87%;
            height: 115px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: aliceblue;
        }
    </style>
    <center>
        <br><br><br><br><br>
        <h1 class="title">Gracias por completar este contenido. Puedes continuar al siguiente modulo.</h1>
    </center>
    
    <?php
        session_start();
        $id_user = $_SESSION['id'];
        $sql = mysqli_query($conexion," UPDATE modulo2 SET 	vendedores = JSON_REPLACE( vendedores, '$.formacion', 1) WHERE id_user = $id_user;");
    ?>
</body></html>