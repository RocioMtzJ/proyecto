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

    <form action="validar.php" method="post" style="text-align: center;" >
    <font size="7" color="yellow"><h1> Bienvenido a MMA EXERCISE</h1>
    <font size="6"><p>Usuario <input required type="text" placeholder="ingrese nombre de usuario" name="usuario"></p>
    <p>Contraseña <input required type="password" placeholder="ingrese su contraseña" name="password"></p></font></font>
    <input type="submit" value="Ingresar">  
    
    </form>
    <br>
    <center><a href="registrar.php"><input type="button" value="Registrarse"></center>
	<br>
	<center><a href="administrador.php"><input type="button" value="Entrar como administrador"></center>
</body>
</html