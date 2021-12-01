<?php
include("conexion.php");
$con=conectar();


$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];


$sql="INSERT INTO chofer(nombre,paterno,materno,correo,direccion) VALUES('$nombre','$paterno','$materno', '$correo', '$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: chofer.php");
    
}else {
}
?>
