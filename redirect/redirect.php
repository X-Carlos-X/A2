<!DOCTYPE html>
<?php
include 'index.php';
?>
<html>
    <head>
        <title>Benvenido</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
        if (($_COOKIE["Usuario"]) == 'Carlos' && ($_COOKIE["Contrasenya"]) == 1234){
            echo "<div>Bienvenido usuario: ".$_COOKIE["Usuario"]."</div>";
            echo "<div>Última sesió iniciada el dia: ".date('d-m-Y')." a las ".date('G:i')."h</div>";
        }
        else {
            echo "<div>El usuario: ".$_COOKIE["Usuario"]." no tiene permiso a acceder aquí</div>";
            echo "<form action='/index.php' method='get'>"
            . "<button type='submit' value='Volver al Login'>Vovler al Login</button>";
            unset($_COOKIE['Usuario']);
            unset($_COOKIE['Contrasenya']); 
        }
        ?>
    </body>
</html>


