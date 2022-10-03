<?php 
    include("conexion.php");
    $con=conectar();
    if ( !defined ('ROOT')){
        define( "ROOT", 'http:// .$_SERVER'['HTTP_HOST'] .getFolderProject());
    }

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="estilos/estilos.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="cod estudiante">
                                    <input type="text" class="form-control mb-3" name="identificacion" placeholder="Identificacion">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="email" placeholder="Email">
                                    <input type="text" class="form-control mb-3" name="nacionalidad" placeholder="Nacionalidad">
                                    <input type="text" class="form-control mb-3" name="sexo" placeholder="Sexo">
                                    <input type="text" class="form-control mb-3" name="Grado" placeholder="Grado">
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
                                    <input type="text" class="form-control mb-3" name="fechadenacimiento" placeholder="FechadeNacimiento">
                                    <input type="text" class="form-control mb-3" name="lugar" placeholder="Lugar">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="barrio" placeholder="Barrio">
                                    <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad">
                                    <input type="text" class="form-control mb-3" name="departamento" placeholder="Departamento">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        
                    </div>  
            </div>
    </body>
</html>