<?php

include("conexion.php");
$con=conectar();

$idjefe=$_GET['id'];

$sql="DELETE FROM jefechofer  WHERE idjefe='$idjefe'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: jefechofer.php");
    }
?>

