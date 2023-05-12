<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Bienvenido</title>
</head>

<body>
    <!-- seccion header -->

    <div class="">
        <header class="header">
            <div class="imageContainer">
                <img src="assets/Recurso 54.png" alt="">
            </div>
            <div>
                <ul style="list-style: none;" class="listHeader">
                    <li><a href=""><img class="list__header__icon" src="assets/home.png"
                                alt=""></a></li>
                    <li><a href=""><img class="list__header__icon" src="assets/perfil.png"
                                alt=""></a></li>
                    <li><span onclick="openNav()"><img class="list__header__icon"
                                src="assets/menu.png" alt=""></span>
                    </li>
                </ul>
            </div>
        </header>
    </div>
    <div class="main" onclick="closeNav()">
        <!-- seccion menu sidenav -->
        <section>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">MENU</a>
                <a href="#">POWER STREET</a>
                <a href="#">AREAS</a>
                <a href="#">TESTING</a>
                <a href="#">APLICACIONES POWER STREET</a>
                <a href="../cursos/cursos.php">CAPACITACION</a>
            </div>

            <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

        </section>
        <!-- seccion about us de la empresa -->
        <div class="container">
            <div>
                <div class="container__aboutUs__title">
                    <h1 style="text-align: center; font-size: 40px; margin: 0;">PowerStreet</h1>
                </div>
                <div class="container__aboutUs__text">
                    <p style="text-align: center; font-size: x-large; line-height: 40px;">Somos una empresa
                        especializada en el desarrollo de soluciones integrales para la automatizacion
                        de
                        procesos comerciales para canales aldetalle, mayoristas autoservicios entre otros</p>
                </div>
            </div>
            <div class="container__aboutUs__image">
                <img style="width: 700px;" src="assets/elementos-fisicos-almacen.png" alt="">
            </div>
        </div>
        <!-- seccion mision, vision de power street -->
        <section>
            <div class="container__mision">
                <img src="assets/mision.png" alt="">
            </div>
        </section>
        <!-- seccion con elearning e informacion -->
        <div class="container__elearning">
            <div>
                <iframe src="../Modulo1/Contexto_de_la_empresa/index.html" frameborder="0"></iframe>
            </div>
            <div class="container__info">
                <div class="container__center">
                    <h1 style="font-size: 70px">Enterprise</h1>
                </div>
                <div class="container__center">
                    <img src="assets/base.png" alt="">
                </div>
                <div class="container__center">
                    <p>Enterprice gestiona envia y recibe el flujo de la informacion de todas la demas soluciones de
                        powerstreet
                        al
                        instante</p>
                </div>
            </div>
        </div>
        <!-- seccion listas de servicios de power street -->
        <div class="container__servicios" style="display: grid">
            <div class="container">
                <div class="container__servicios__list">
                    <div id="circle">
                        <img src="assets/lista-de-precios.png" alt="">
                    </div>

                    <p>Productos y listas de precios</p>
                </div>
                <div class="container__servicios__list">
                    <div id="circle">
                        <img src="assets/pilas-de-almacenamiento.png" alt="">
                    </div>

                    <p>Almacenes e inventarios</p>
                </div>
                <div class="container__servicios__list">
                    <div id="circle">
                        <img src="assets/jefe.png" alt="">
                    </div>

                    <p>-clientes con multiples sucursales</p>
                </div>
                <div class="container__servicios__list">
                    <div id="circle">
                        <img src="assets/lista-de-verificacion.png" alt="">
                    </div>

                    <p>Backorder</p>
                </div>
            </div>

            <div class="container">
                <div class="container__servicios__list">
                    <div id="circle">
                        <img src="assets/lista-de-verificacion.png" alt="">
                    </div>

                    <p>Control de exhibidores</p>
                </div>
                <div class="container__servicios__list">
                    <div id="circle">
                        <img src="assets/ventas.png" alt="">
                    </div>

                    <p>Politicas de ventas por diferentes criterios</p>
                </div>
                <div class="container__servicios__list">
                    <div id="circle">
                        <img src="assets/inventario.png" alt="">
                    </div>

                    <p>Politicas de promocion y liquidacion de comisiones</p>
                </div>
                <div class="container__servicios__list">
                    <div id="circle">
                        <img src="assets/lista-de-precios.png" alt="">
                    </div>

                    <p>Motivos de no venta, anulacion o devoluciones</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <footer>
            <div class="cont__image">
                <img src="assets/Recurso 54.png" alt="">
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
    <?php

    //include('../Menu/menuprincipal.php');
    
    ?>
</body>

</html>