<?php

include("conexion.php");
$con=conectar();

$idusuario=$_POST['idusuario'];
$nombres=$_POST['nombres'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$fecha_nac=$_POST['fecha_nac'];

$sql="UPDATE usuario SET  nombres='$nombres',paterno='$paterno', materno='$materno', correo='$correo', telefono='$telefono', direccion='$direccion', fecha_nac='$fecha_nac' WHERE idusuario='$idusuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>

