<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$identificacion=$_POST['identificacion'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$nacionalidad=$_POST['nacionalidad'];
$sexo=$_POST['sexo'];
$grado=$_POST['grado'];
$edad=$_POST['edad'];
$fechadenacimiento=$_POST['fecha de nacimiento'];
$lugar=$_POST['lugar'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$barrio=$_POST['barrio'];
$ciudad=$_POST['ciudad'];
$departamento=$_POST['departamento'];


$sql="INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>