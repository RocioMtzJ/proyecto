<?php
include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];

$consulta="SELECT* FROM usuarios where usuario='$USUARIO' and  password='$PASSWORD'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    include("index.php");
    ?>
<style>
 h1 {text-align: center;}
 p {text-align: center;}
</style>
    
    <font color="red"><h1><p class="center">¡¡¡ERROR DE AUTENTIFICACION!!!</p></h1></font>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
