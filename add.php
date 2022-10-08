<?php
include("../config/config.php");


if (isset($_POST) && !empty($_POST)) {
    $Estudiantes = new Estudiantes();
    if ($_FILE['image']['nombre']  !== ''){
        $_POST ['image'] = saveImage($_FILE);
    }
    $save = $Estudiantes->save($_POST);
    if ($save){
        $error = '<div claass="alert-success" role="alert">Estudiante creado correctamente</div>';
     }else{
        $error ='<div class="alert alert-danger" role="alert" > Error al crear Estudiante </div>';
     }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Crear Estudiate </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcd.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-vKOO8x4CGsO3+Hhxv8T/Q5 
</head>

 <body>
    <?php include("../menu.php") ?>
    <div class="container">
    <?php
    if (isset($error)){
        echo $error;
    }
    ?>
    <h2 class="text-center mb-5>Registro de Usuario</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="row mb-2">
            <div class="col">
                <input type="text" name="firstName" placeholder="Nombres" require class="form-control" />
</div>
 <div class="col">
    <input type="text" name="lastName" id="lastName" placeholder="Apellidos" require class="form-control" />
</div>
</div>

<div class="row mb-2">
    <div class="col">
        <input type="email" name="email" id="email" placeholder="Email" require class="form-control" />
</div>
<div class="row mb-2">
<div class="col">
    <input type="text" name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad" require class="form-control" />
</div>
<div class="col">
    <input type="text" name="sexo" id="sexo" placeholder="Sexo" require class="form-control" />
</div>
<div class="row mb-2">
<div class="col">
    <input type="text" name="grado" id="grado" placeholder="Grado" require class="form-control" />
</div>
<div class="col">
    <input type="text" name="edad" id="edad" placeholder="Edad" require class="form-control" />
</div>
<div class="col">
    <input type="text" name="Fechadenacimiento" id="Fechadenacimiento" placeholder="Fechadenacimiento" require class="form-control" />
</div>
<div class="col">
    <input type="text" name="lugar" id="lugar" placeholder="Lugar" require class="form-control" />
</div>
<div class="col">
    <input type="text" name="telefono" id="telefono" placeholder="Telefono" require class="form-control" />
</div>
<div class="col">
    <input type="text" name="direccion" id="direccion" placeholder="Direccion" require class="form-control" />
</div>
<div class="col">
    <input type="text" name="barrio" id="barrio" placeholder="Barrio" require class="form-control" />
</div>
<div class="col">
    <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" require class="form-control" />
</div>
<div class="col">
    <input type="text" name="departamento" id="departamento" placeholder="Departamento" require class="form-control" />
</div>
<div class="row mb-2">
    <div class="col">
        <input type="file" name="image" id="image" class="form-control" />
</div>

<button class="btn btn-success"> Registrar </button>
</form>
</div>
</body>

</html>