
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo 2 - Series</title>
    <link rel="stylesheet" href="../css/estilos.css">
    
    
  

</head>
<body>
<?php

include('../Menu/menuprincipal.php');

?>
<center>
    <br>
        <h1>Modulo 2 - Depositos demostracion</h1>
        <br>
            <iframe id="frame" src="DepositosDemostracion/index.html" width=1090 height=660 ></iframe>
</center>
        
   
    
    <script>
        var iframes = document.querySelector("iframe");
        var iframeDocument = iframes.contentWindow.document;
        var video = iframeDocument.querySelector("#project");
    </script>
</body>
</html>