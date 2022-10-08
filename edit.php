<?php
include('../config/config.php');
include('Estudiantes.php');
$p = new Estudiante();
$data = mysqli_fetch_object($->getOne($_GET['id']));
$date = new DateTime($data->inscripcionestudiante);

if(isset(_POST) && !empty($_POST)){
    $_POST['image'] = $data->image;
    if ($_FILES['image'] = saveImage($_FILES);
}
$update = $p->update($_POST);
if ($update){
    $error = '<div class="alert alert-success" role="alert">Estudiantes modificado correctamente</div>';
}else{
    $error = '>div class="alert alert-danger" role="alert" > Error al modificar un estudiante </div>';
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
<?php include('../menu.php') ?>
<div class="container">
    <?php
    if (isset($error)){
        echo $error;
    }    
    ?>
    <h2 class="text-center mb-5"> Modificar estudiante </h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="row mb-2">
            <div class="col">
                <input type="text" name="firstName" id="firstName" placeholder="Nombres" require class="form-control" value="<?= $data->firstName ?>" />
                <input type="hidden" name="id" id="id" value="<?= $data->id" />
                </div>
                <div class="col">
                <input type="text" name="lastName" id="lastName" placeholder="Apellidos" require class="form-control" value="<?= $data->lastName ?>" />
                </div>
                </div>

                <div class="row mb-2">
                <div class="col">
                <input type="email" name="email" id="email" placeholder="Email" require class="form-control" value="<? $data->emaiil ?>" />
                </div>
                <div class="col">
                <input type="nacionalidad" name="nacionalidad" id="nacionalidad" placeholder="Nacionalidad" require class="form-control" value="<? $data->nacionalidad ?>" />
                </div>
                </div>
                <div class="col">
                <input type="sexo" name="sexo" id="sexo" placeholder="Sexo" require cass="form-control" value="<? $data->sexo ?>" />
                </div>
                <div class="col">
                <input type="grado" name="grado" id="grado" placeholder="Grado" require cass="form-control" value="<? $data->grado ?>" />
                </div>
                <div class="col">
                <input type="edad" name="edad" id="edad" placeholder="Edad" require cass="form-control" value="<? $data->edad ?>" />
                </div>
                <div class="col">
                <input type="Fechadenacimiento" name="Fechadenacimiento" id="Fechadenacimiento" placeholder="Fechadenacimiento" require cass="form-control" value="<? $data->Fechadenacimiento ?>" />
                </div>
                <div class="col">
                <input type="lugar" name="lugar" id="lugar" placeholder="Lugar" require cass="form-control" value="<? $data->lugar ?>" />
                </div>
                <div class="col">
                <input type="Telefono" name="Telefono" id="Telefono" placeholder="Telefono" require cass="form-control" value="<? $data->Telefono ?>" />
                </div>
                <div class="col">
                <input type="direccion" name="direccion" id="direccion" placeholder="Direccion" require cass="form-control" value="<? $data->Direccion ?>" />
                </div>
                <div class="col">
                <input type="barrio" name="barrio" id="barrio" placeholder="Barrio" require cass="form-control" value="<? $data->Barrio ?>" />
                </div>
                <div class="col">
                <input type="ciudad" name="ciudad" id="ciudad" placeholder="Ciudad" require cass="form-control" value="<? $data->Ciudad ?>" />
                </div>
                <div class="col">
                <input type="departamento" name="departamento" id="departamento" placeholder="Departamento" require cass="form-control" value="<? $data->Departamento ?>" />
                </div>
                <div class="row mb-2">
                <div class="col">
                <input type="file" name="images" id="images" placeholder="Images" require cass="form-control" value="<? $data->images ?>" />
                </div>
                </div>
                
                <button class="btn btn-sucess"> Modificar </button>
                </form>
                </div>
                </body>
                
                </html>