<?php
include("conexion.php");
$con=conectar();


$matricula_auto=$_POST['matricula_auto'];
$marca_auto=$_POST['marca_auto'];
$fecha_reg=$_POST['fecha_reg'];
$color_auto=$_POST['color_auto'];
$descripcion=$_POST['descripcion'];
$año_auto=$_POST['año_auto'];



$sql="INSERT INTO automóvil(matricula_auto,marca_auto,fecha_reg,color_auto,descripcion,año_auto) VALUES('$matricula_auto','$marca_auto','$fecha_reg', '$color_auto', '$descripcion', '$año_auto')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: automovil.php");
    
}else {
}
?>

