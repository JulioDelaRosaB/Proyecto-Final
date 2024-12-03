
<?php

include('db.php');

$USUARIO=$_POST['usuario']; 
$PASSWORD=$_POST['password'];

$consulta = "SELECT *FROM Personal WHERE usuario = '$USUARIO' AND password = 'password' ";
$resultado=mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas){
    header("location::home.html");
}
else{
    include("index.html");
    ?>
    <h1>ERROR DE AUTENFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>