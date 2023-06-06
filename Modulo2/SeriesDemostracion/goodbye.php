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
        $existe = mysqli_query($conexion, "SELECT id FROM modulo2 WHERE id_user = $id_user");
        $row_cnt = $existe->num_rows;
        // echo $row_cnt;
        if($row_cnt === 0) {
            $add = mysqli_query($conexion, "INSERT INTO modulo2(id_user, depositos, modificarvendedores, series, vendedores) 
                    VALUES ($id_user, JSON_OBJECT('demostracion',0,'formacion',0,'evaluacion',0),
                    JSON_OBJECT('demostracion',0,'formacion',0,'evaluacion',0),
                    JSON_OBJECT('demostracion',1,'formacion',0,'evaluacion',0),
                    JSON_OBJECT('demostracion',0,'formacion',0,'evaluacion',0));");

            $add2 = mysqli_query($conexion, "INSERT INTO modulo3(id_user, listasdeprecios, modificarlistasdeprecios, manejodecreditos, librosderuta, manejodeinventarios, politicasdeventa) 
            VALUES ($id_user, JSON_OBJECT('demostracion',0,'formacion',0,'evaluacion',0),
                    JSON_OBJECT('demostracion',0,'formacion',0,'evaluacion',0),
                    JSON_OBJECT('demostracion',0),
                    JSON_OBJECT('demostracion',0,'formacion',0,'evaluacion',0),
                    JSON_OBJECT('demostracion',0,'formacion',0,'evaluacion',0),
                    JSON_OBJECT('demostracion',0,'formacion',0,'evaluacion',0,'ajustemercaderia',0));");
        }
        // $sql = mysqli_query($conexion," UPDATE modulo2 SET depositos = JSON_REPLACE(depositos, '$.demostracion', 1) WHERE id_user = 15;");
    ?>
</body></html>