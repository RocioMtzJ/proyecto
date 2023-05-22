<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["usuario"]) || !isset($_POST["password"])) exit();

#conexion a la base de datos
$password = "";
$usuario = "root";
$nombre_base_de_datos = "login";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $password);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
    }
#Si todo va bien, se ejecuta esta parte del código...
$usuario = $_POST["usuario"];
$password = $_POST["password"];


/*
	Al incluir el archivo "base_de_datos.php", todas sus variables están
	a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
	copiado y pegado el código
*/
$sentencia = $base_de_datos->prepare("INSERT INTO usuarios(usuario, password) VALUES (?, ?);");
$resultado = $sentencia->execute([$usuario, $password]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if($resultado === TRUE) echo "Insertado correctamente";
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>