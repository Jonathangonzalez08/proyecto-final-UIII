<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM automóvil";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PAGINA UBER CHOFER</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="matricula_auto" placeholder="Matricula del Auto">
                                    <input type="text" class="form-control mb-3" name="marca_auto" placeholder="Marca del Auto">
                                    <input type="date" class="form-control mb-3" name="fecha_reg" placeholder="Fecha en que registro el auto">
                                    <input type="text" class="form-control mb-3" name="color_auto" placeholder="Color del Auto">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion del auto">
                                    <input type="text" class="form-control mb-3" name="año_auto" placeholder="Año del auto">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a></li> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idauto</th>
                                        <th>matricula_auto</th>
                                        <th>marca_auto</th>
                                        <th>fecha_reg</th>
                                        <th>color_auto</th>
                                        <th>descripcion</th>
                                        <th>año_auto</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idauto']?></th> 
                                                <th><?php  echo $row['matricula_auto']?></th>
                                                <th><?php  echo $row['marca_auto']?></th>
                                                <th><?php  echo $row['fecha_reg']?></th>   
                                                <th><?php  echo $row['color_auto']?></th>
                                                <th><?php  echo $row['descripcion']?></th> 
                                                <th><?php  echo $row['año_auto']?></th>      
                                                <th><a href="actualizar.php?id=<?php echo $row['idauto'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idauto'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>

