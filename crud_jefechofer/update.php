<?php

include("conexion.php");
$con=conectar();

$idjefe=$_POST['idjefe'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$matricula=$_POST['matricula'];
$descripcion=$_POST['descripcion'];

$sql="UPDATE jefechofer SET  nombres='$nombres',apellidos='$apellidos', telefono='$telefono', correo='$correo', matricula='$matricula', descripcion='$descripcion' WHERE idjefe='$idjefe'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: jefechofer.php");
    }
?>

