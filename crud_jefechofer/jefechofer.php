<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM jefechofer";
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

                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo electronico">
                                    <input type="text" class="form-control mb-3" name="matricula" placeholder="Matricula del Auto">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion del Auto">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idjefe</th>
                                        <th>nombres</th>
                                        <th>apellidos</th>
                                        <th>telefono</th>
                                        <th>correo</th>
                                        <th>matricula</th>
                                        <th>descripcion</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idjefe']?></th> 
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['telefono']?></th>   
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['matricula']?></th> 
                                                <th><?php  echo $row['descripcion']?></th>      
                                                <th><a href="actualizar.php?id=<?php echo $row['idjefe'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idjefe'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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

