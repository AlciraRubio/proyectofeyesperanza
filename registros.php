<?php 
    include("conexion.php");
    $con=conectar();

    $con=('registros.php')
    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);
?>

<div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Identificacion</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Email</th>
                                        <th>Nacionalidad</th>
                                        <th>Sexo</th>
                                        <th>Grado</th>
                                        <th>Edad</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Lugar</th>
                                        <th>Telefono</th>
                                        <th>Direccion</th>
                                        <th>Barrio</th>
                                        <th>Ciudad</th>
                                        <th>Departamento</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_estudiante']?></th>
                                                <th><?php  echo $row['identificacion']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>  
                                                <th><?php  echo $row['email']?></th>  
                                                <th><?php  echo $row['nacionalidad']?></th>  
                                                <th><?php  echo $row['sexo']?></th>  
                                                <th><?php  echo $row['grado']?></th>  
                                                <th><?php  echo $row['edad']?></th>  
                                                <th><?php  echo $row['fecha de nacimiento']?></th>  
                                                <th><?php  echo $row['lugar']?></th>  
                                                <th><?php  echo $row['telefono']?></th>  
                                                <th><?php  echo $row['direccion']?></th>  
                                                <th><?php  echo $row['barrio']?></th>
                                                <th><?php  echo $row['ciudad']?></th>
                                                <th><?php  echo $row['departamento']?></th>        
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>