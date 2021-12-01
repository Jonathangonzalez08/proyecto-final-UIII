<?php

include("conexion.php");
$con=conectar();

$idusuario=$_GET['id'];

$sql="DELETE FROM usuario  WHERE idusuario='$idusuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>

