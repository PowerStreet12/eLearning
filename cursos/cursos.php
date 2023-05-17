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
    <div class="">
        <header class="header">
            <div class="imageContainer">
                <img src="../assets/Recurso 54.png" alt="">
            </div>
            <div>
                <ul style="list-style: none;" class="listHeader">
                    <li><a href=""><img style="width: 30px;" class="list__header__icon" src="../assets/home.png"
                                alt=""></a></li>
                    <li><a href=""><img style="width: 30px;" class="list__header__icon" src="../assets/perfil.png"
                                alt=""></a></li>
                    <li><span onclick="openNav()"><img style="width: 30px;" class="list__header__icon"
                                src="../assets/menu.png" alt=""></span>
                    </li>
                </ul>
            </div>
        </header>
    </div>

    <!-- seccion descripccion de la pagina de cursos -->
    <div class="container">
        <div class="container__description">
            <div class="container__description__title">
                <h1>Cursos</h1>
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
                    <div class="container__cursos__item">
                        <div class="item__img">
                            <img src="../assets/trabajo-en-equipo.jpg" alt="">
                        </div>
                        <div class="item__button">
                            <a href=""><button>Curso 1</button></a>
                        </div>
                    </div>
                    <div class="container__cursos__item">
                        <div class="item__img">
                            <img src="../assets/trabajo-en-equipo.jpg" alt="">
                        </div>
                        <div>
                            <button class="item__button">
                                <a href="">Curso 2</a>
                            </button>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="container__cursos__list">
                <ul>
                    <div class="container__cursos__list">
                        <div class="container__cursos__item">
                            <div class="item__img">
                                <img src="../assets/trabajo-en-equipo.jpg" alt="">
                            </div>
                            <div>
                                <button class="item__button">
                                    <a href="">Curso 3</a>
                                </button>
                            </div>
                        </div>
                        <div class="container__cursos__item">
                            <div class="item__img">
                                <img src="../assets/trabajo-en-equipo.jpg" alt="">
                            </div>
                            <div>
                                <button class="item__button">
                                    <a href="">Curso 4</a>
                                </button>
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
</body>

</html>