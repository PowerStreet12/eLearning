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
    ?>

    <!-- seccion contenido de la pagina -->
    <div class="container">
        <!-- seccion titulo y descripccion -->
        <section class="section__title">
            <div class="title">
                <h1>Modulo 1</h1>
            </div>
            <hr class="line__I">
            <div class="description">
                <p>En este curso aprenderas los apartados de series, depositos vendedores y como modificar los
                    vendedores cada partado viene con demostracion y evaluacion lee con mucha atencion y suerte!</p>
            </div>
            <hr class="line__II">
        </section>

        <!-- seccion contenido de la pagina -->
        <section class="content">
            <div class="content__grid">
                <div class="content__item__I">
                    <button class="button">
                        <h2>1.1 SERIES</h2>
                        <img src="../assets/book.png" style="width: 100px;">
                    </button>
                </div>
                <div class="content__item__II">
                    <button class="button">
                        <h2>1.3 VENDEDORES</h2>
                        <img src="../assets/book.png" style="width: 100px;">
                    </button>
                </div>
            </div>
            <div class="content__grid">
                <div class="content__item__III">
                    <button class="button">
                        <h2>1.2 DEPOSITOS</h2>
                        <img src="../assets/book.png" style="width: 100px;">
                    </button>
                </div>
                <div class="content__item__IV">
                    <button class="button">
                        <h2>1.4 MODIFICAR VENDEDORES</h2>
                        <img src="../assets/book.png" style="width: 100px;">
                    </button>
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
</body>

</html>