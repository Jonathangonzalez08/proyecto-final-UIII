<?php
include("conexion.php");
$con=conectar();


$nombres=$_POST['nombres'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$fecha_nac=$_POST['fecha_nac'];

$sql="INSERT INTO usuario(nombres,paterno,materno,correo,telefono,direccion,fecha_nac) VALUES('$nombres','$paterno','$materno', '$correo', '$telefono', '$direccion', '$fecha_nac')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>

