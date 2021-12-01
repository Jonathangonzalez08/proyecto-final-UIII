<?php

include("conexion.php");
$con=conectar();

$idauto=$_POST['idauto'];
$matricula_auto=$_POST['matricula_auto'];
$marca_auto=$_POST['marca_auto'];
$fecha_reg=$_POST['fecha_reg'];
$color_auto=$_POST['color_auto'];
$descripcion=$_POST['descripcion'];
$año_auto=$_POST['año_auto'];

$sql="UPDATE automóvil SET  matricula_auto='$matricula_auto',marca_auto='$marca_auto', fecha_reg='$fecha_reg', color_auto='$color_auto', descripcion='$descripcion', año_auto='$año_auto' WHERE idauto='$idauto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: automovil.php");
    }
?>

