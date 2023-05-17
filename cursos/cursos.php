<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cursos.css">
    <title>Cursos</title>
</head>

<body>
    <!-- seccion header -->
    <?php

    include('../header/header.php');
    
    ?>
    
    <!-- seccion menu sidenav -->
    <section>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">MENU</a>
            <a href="../home/index.php">POWER STREET</a>
            <a href="#">AREAS</a>
            <a href="#">TESTING</a>
            <a href="#">APLICACIONES POWER STREET</a>
            <a href="../cursos/cursos.php">CAPACITACION</a>
        </div>

        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

    </section>

    <!-- seccion descripccion de la pagina de cursos -->
    <div class="container">
        <div class="container__description">
            <div class="container__description__title">
                <h1>Modulos</h1>
            </div>
            <div class="container__description__text">
                <p>Aprenderas mas de Enterprice en estos cursos, hechos para ti en los cuales tendras que leer </p>
            </div>
            <div class="container__description__line">
                <hr>
            </div>
        </div>
    </div>

    <!-- seccion cuerpo de la pagina con los diferentes cursos -->
    <div class="container">
        <div class="container__cursos">
            <div class="container__cursos__list">
                <ul>
                    <div class="container__cursos__item__I">
                        <div class="item__img">
                            <img src="../assets/trabajo-en-equipo.jpg" alt="">
                        </div>
                        <div class="item__button">
                            <a href="../Modulo2/modulo1.php">
                                <button>
                                    <h2>Modulo 1</h2>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="container__cursos__item__III">
                        <div class="item__img">
                            <img src="../assets/trabajo-en-equipo.jpg" alt="">
                        </div>
                        <div class="item__button">
                            <a href="">
                                <button>
                                    <h2>Modulo 3</h2>
                                </button>
                            </a>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="container__cursos__list">
                <ul>
                    <div class="container__cursos__list">
                        <div class="container__cursos__item__II">
                            <div class="item__button__II">
                                <a href="../Modulo3/modulo2.php">
                                    <button>
                                        <h2>Modulo 2</h2>
                                    </button>
                                </a>
                            </div>
                            <div class="item__img">
                                <img src="../assets/trabajo-en-equipo.jpg" alt="">
                            </div>

                        </div>
                        <div class="container__cursos__item__IV">
                            <div class="item__button__II">
                                <a href="">
                                    <button>
                                        <h2>Modulo 4</h2>
                                    </button>
                                </a>
                            </div>
                            <div class="item__img">
                                <img src="../assets/trabajo-en-equipo.jpg" alt="">
                            </div>

                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>

    <!-- seccion footer -->
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