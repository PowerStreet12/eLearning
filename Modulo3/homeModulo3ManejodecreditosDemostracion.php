<?php include('../validaciones/sesion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo 2 - Manejo de creditos</title>
    <link rel="stylesheet" href="../css/temas.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script type="text/javascript" src="modulo2.js"></script>
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
                    <h1>2.3 MANEJO DE CREDITOS</h1>
                </div>
                <div class="contaainer__description__text">
                    <p>
                        El manejo de créditos, se refiere principalmente a las configuraciones <br>
                        que se realizan en el sistema, para que se puedan hacer ventas a los clientes,<br>
                        pero que las mismas se liquiden después de cierto plazo de tiempo,<br>
                        caso contrario a las ventas de contado,<br>
                        dado que son pagadas inmediatamente.
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
                            3.-Haz clic en el botón <span>Cursos</span>.
                        </p>
                    </div>
                </div>
                <h1>2.3.1 Demostracion</h1>
            </div>
            <div class="container__iframe">
                <center>
                    <iframe src="ManejodecreditosDemostracion/index.html" style=""></iframe>
                </center>
            </div>
        </div>
        <div class="container">
            <div class="container__subtitle">
                <button id="demo">Cursos</button>
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
    $.post("../validaciones/existe.php",{"modulo":'manejodecreditos', "apartado":'demostracion', "numero":'modulo3'},
        function(respuesta){
	    console.log(respuesta)
        if(respuesta == 1)
            window.location.href = "./modulo2.php";
        else 
            alert("Debe finalizar el módulo para avanzar");
    });
}
</script>

</html>