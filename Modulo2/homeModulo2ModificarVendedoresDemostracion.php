<?php include('../validaciones/sesion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo 1 - Modificar Vendedores</title>
    <link rel="stylesheet" href="../css/temas.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script type="text/javascript" src="modulo1.js"></script>
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
                    <li><a href=""><img class="list__header__icon" src="assets/home.png" alt=""></a></li>
                    <li><a href=""><img class="list__header__icon" src="assets/perfil.png" alt=""></a></li>
                    <li><span onclick="openNav()"><img class="list__header__icon" src="../assets/perfil.png"
                                alt=""></span>
                    </li>
                </ul>
            </div>
        </header>
    </div>

    <!-- seccion Contenido de la pagina -->
    <div class="main">
        <div class="cantainer__I">
            <div class="contaainer__image">
                <img src="../assets/imagenDeTemas.png" style="width: 300px;">
            </div>
            <div class="contaainer__description">
                <div class="contaainer__description__title">
                    <h1>1.4 MODIFICAR VENDEDORES</h1>
                </div>
                <div class="contaainer__description__text">
                    <p>
                        Proporcionar las herramientas necesarias <br>
                        para la configuración de un nuevo vendedor <br>
                        para hacer más fácil la creación y modificación de los mismos.<br>
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container__title">
                <div class="container__instructios">
                    <div class="container__instructios__description">
                        <h3>Instrucciones</h3>
                    </div>
                    <div class="container__instructios__text">
                        <p>
                            1.-Da clic en botón reproducir para empezar tu capacitación.<br>
                            2.-Al terminar el video de capacitación, verás el botón<br>
                            <span>Terminar Módulo</span>, por favor haz clic en el botón<br>
                            <span>Terminar Módulo</span>, para dar como finalizado el módulo.<br>
                            3.-Haz clic en el botón <span>Formación</span>
                        </p>
                    </div>
                </div>
                <h1>1.4.1 Demostración</h1>
            </div>
            <div class="container__iframe">
                <center>
                    <iframe src="ModificarVendedoresDemostracion/index.html" style=""></iframe>
                </center>
            </div>
        </div>
        <div class="container">
            <div class="container__subtitle">
                <button id="demo">Formación</button>
            </div>
        </div>
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
document.getElementById("demo").onclick = function() {myFunction()};

function myFunction() {
    console.log("Clic");
    $.post("../validaciones/existe.php",{"modulo":'modificarvendedores', "apartado":'demostracion', "numero":'modulo2'},
        function(respuesta){
	    console.log(respuesta)
        if(respuesta == 1)
            window.location.href = "./homeModulo2ModificarVendedoresFormacion.php";
        else 
            alert("Debe finalizar el módulo para avanzar");
    });
}
</script>

</html>