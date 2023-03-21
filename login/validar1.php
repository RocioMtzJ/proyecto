<?php

if(isset($_POST['enviar'])){
$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];
include('db.php');

$consulta="INSERT INTO usuarios(usuario,password)values('".$USUARIO."','".$PASSWORD."')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
    echo " <script language='JavaScript'>
            alert('los datos fueron ingresados
            correctamente a la base de datos');
            location.assign('index.php');
            </script>
            ";
}else{
    echo "<script language='JavaScript'>
    alert('ERROR:los datos NO fueron ingresados
    correctamente a la base de datos');
    location.assign('index.php');
    </script>
    ";

}
mysqli_close($conexion);
}else{

}
?>
<style>
 h1 {text-align: center;}
 p {text-align: center;}
</style>
    
    <font color="red"><h1><p class="center">SE HAN AGREGADO LOS DATOS INTRODUCIDOS</p></h1></font>
    <center><a href="index.php"><input type="button" value="volver al inicio"></center>
    <?php
    
?>