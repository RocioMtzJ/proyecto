<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

    <form action="validarAdministrador.php" method="post" style="text-align: center;" >
    <font size="7" color="yellow"><h1> INICIAR SESION COMO ADMINISTRADOR</h1>
    <font size="6"><p>Usuario <input requierd type="text" placeholder="ingrese nombre de usuario" name="usuario"></p>
    <p>Contraseña <input required type="password" placeholder="ingrese su contraseña" name="password"></p></font></font>
    <input type="submit" value="Ingresar">  
    
    </form>
</body>
</html>
<?php
