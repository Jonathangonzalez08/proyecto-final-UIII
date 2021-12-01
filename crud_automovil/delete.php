<?php

include("conexion.php");
$con=conectar();

$idauto=$_GET['id'];

$sql="DELETE FROM automóvil  WHERE idauto='$idauto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: automovil.php");
    }
?>

