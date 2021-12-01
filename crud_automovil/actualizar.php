<?php 
    include("conexion.php");
    $con=conectar();

$idauto=$_GET['id'];

$sql="SELECT * FROM automóvil WHERE idauto='$idauto'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idauto" value="<?php echo $row['idauto']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="matricula_auto" placeholder="Matricula del Auto" value="<?php echo $row['matricula_auto']  ?>">
                                <input type="text" class="form-control mb-3" name="marca_auto" placeholder="Marca del Auto" value="<?php echo $row['marca_auto']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_reg" placeholder="Fecha en que registro el auto" value="<?php echo $row['fecha_reg']  ?>">
                                <input type="text" class="form-control mb-3" name="color_auto" placeholder="Color del Auto" value="<?php echo $row['color_auto']  ?>">
                                <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion del auto" value="<?php echo $row['descripcion']  ?>">
                                <input type="text" class="form-control mb-3" name="año_auto" placeholder="Año del auto" value="<?php echo $row['año_auto']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
