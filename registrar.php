!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="estilos1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    
</head>
<body>
<form action="validar1.php" method="post" style="text-align: center;" >
    <font size="7" color="yellow"><h1> Registro</h1>
    <font size="6"><p>Usuario <input type="text" placeholder="ingrese nombre de usuario" name="usuario"></p>
    <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="password"></p></font></font>
    <input type="submit" name="enviar" value="Registrarse"> 
    </form>
     
    <br>
    <center><a href="index.php"><input type="button" value="volver al inicio"></center>
</body>
</html>
<?php
