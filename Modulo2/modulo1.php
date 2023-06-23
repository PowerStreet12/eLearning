<?php include('../validaciones/sesion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo 1</title>
    <link rel="stylesheet" href="../css/modulo.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>



<body>
    <!-- seccion header -->

    <?php
    include("../header/header.php");
    require "../validaciones/conexion.php";
    $id_user = $_SESSION['id'];
    $sql = mysqli_query($conexion,"SELECT JSON_EXTRACT(series , '$.evaluacion') as depositos,
                        JSON_EXTRACT(depositos , '$.evaluacion') as vendedores,
                        JSON_EXTRACT(vendedores , '$.evaluacion') as modificarvendedores
                        FROM `modulo2` WHERE id_user=$id_user;");
    $data = mysqli_fetch_array($sql);
    if($data == null){
        $data = array("depositos"=>0, "vendedores"=>0, "modificarvendedores"=>0);
    }
    ?>

    <!-- seccion menu sidenav -->
    <section>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Menú</a>
            <a href="../home/index.php">Inicio</a>
            <a href="#">Áreas</a>
            <a href="#">Testing</a>
            <a href="#">Aplicaciones Power Street</a>
            <a href="../cursos/cursos.php">Capacitación</a>
            <a href="../validaciones/cerrar-sesion.php">Cerrar sesión</a>
        </div>

        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

    </section>

    <!-- seccion contenido de la pagina -->
    <div class="container" onclick="closeNav()">
        <!-- seccion titulo y descripccion -->
        <section class="section__title">
            <div class="title">
                <h1>Modulo 1</h1>
            </div>
            <hr class="line__I">
            <div class="description">
                <p>
                    En este curso aprenderás los apartados de series,<br>
                    depósitos vendedores y como modificar los vendedores.<br>
                    Cada apartado viene con demostración y evaluación<br>
                    lee con atención y ¡suerte!
                </p>
            </div>
            <hr class="line__II">
        </section>

        <!-- seccion contenido de la pagina -->
        <section class="content">
            <div class="content__grid">
                <div class="content__item__I">
                    <a href="./homeModulo2SeriesDemostracion.php">
                        <button class="button">
                            <h2>1.1 SERIES</h2>
                            <img src="../assets/book.png" style="width: 100px;">
                        </button>
                    </a>

                </div>
                <div class="content__item__II">
                    <?php if($data['vendedores']){ ?>
                        <a href="./homeModulo2VendedoresDemostracion.php">
                    <?php }else {?>
                        <a onClick="alert('Debe terminar el módulo anterior para poder acceder a este')" style="cursor:pointer;">
                    <?php } ?>
                    <button class="button">
                        <h2>1.3 VENDEDORES</h2>
                        <img src="../assets/book.png" style="width: 100px;">
                    </button>
                </a>
                    
                </div>
            </div>
            <div class="content__grid">
                <div class="content__item__III">
                    <?php if($data['vendedores']){ ?>
                        <a href="./homeModulo2DepositosDemostracion.php">
                    <?php }else {?>
                        <a onClick="alert('Debe terminar el módulo anterior para poder acceder a este')" style="cursor:pointer;">
                    <?php } ?>
                        <button class="button">
                            <h2>1.2 DEPOSITOS</h2>
                            <img src="../assets/book.png" style="width: 100px;">
                        </button>
                    </a>
                </div>
                <div class="content__item__IV">
                    <?php if($data['vendedores']){ ?>
                        <a href="./homeModulo2ModificarVendedoresDemostracion.php">
                    <?php }else {?>
                        <a onClick="alert('Debe terminar el módulo anterior para poder acceder a este')" style="cursor:pointer;">
                    <?php } ?>
                        <button class="button">
                            <h2>1.4 MODIFICAR VENDEDORES</h2>
                            <img src="../assets/book.png" style="width: 100px;">
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- SECCION FOOTER -->
    <div>
        <footer>
            <div class="cont__image">
                <img src="../assets/Recurso 54.png" alt="">
            </div>
        </footer>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";

        }
    </script>
</body>

</html>