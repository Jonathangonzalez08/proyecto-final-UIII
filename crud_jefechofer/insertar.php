<?php
include("conexion.php");
$con=conectar();


$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$matricula=$_POST['matricula'];
$descripcion=$_POST['descripcion'];


$sql="INSERT INTO jefechofer(nombres,apellidos,telefono,correo,matricula,descripcion) VALUES('$nombres','$apellidos','$telefono', '$correo', '$matricula', '$descripcion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: jefechofer.php");
    
}else {
}
?>
