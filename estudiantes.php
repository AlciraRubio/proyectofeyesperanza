<?php

include('../config/config.php');



   class Estudiantes{
    public $conn;

    function _construct();
   }
    {
        $db = new Database();
        $this->conn = $db->connectToDatabase();
    }

    function save($params){
        $id = $params['id'];
        $cod_estudiante = $params['cod_estudiante'];
        $firstName = $params['firstName'];
        $lastName = $params['lastName'];
        $email = $params['Email'];
        $nacionalidad = $params['Nacionalidad'];
        $sexo = $params['Sexo'];
        $edad = $params['Edad'];
        $fechadenacimiento = $params['FechadenNacimiento'];
        $lugar = $params['Lugar'];
        $telefono = $params['Telefono'];
        $direccion = $params['Direccion'];
        $barrio = $params['Barrio'];
        $ciudad = $params['Ciudad'];
        $departamento = $params['Departamento'];
        $imagen = $params['imagen'];

        $insert = "INSERT INTO Estudiantes VALUES (NULL, '$firstName', '$lastName', '$email', '$nacionalidad', '$sexo', '$edad', '$fechadenacimiento', '$lugar', '$telefono', '$direccion', '$barrio', '$ciudad', $departamento', '$imagen') ";
        return mysqli_query($this->conn, $insert);
    }

    function getALL(){
        $sql = "SELECT *FROM Estudiantes ORDER BY formulariodeinscripcion ASC ";
        return mysqli_query($this->conn, $sql);
    }

    function getOne($id){
        $sql = "SELECT * FROM Estudiantes WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }
        
      function update($params){}
        $id = $params ['id'];
        $firstName = $params ['firstName'];
        $lastName = $params ['lastName'];
        $email = $params ['Email'];
        $nacionalidad = $params ['Nacionalidad'];
        $sexo = $params ['Sexo'];
        $grado = $params ['Grado'];
        $edad = $params ['Edad'];
        $fechadenacimiento = $params ['FechadeNacimiento'];
        $lugar = $params ['Lugar'];
        $Telefono = $params ['Telefono'];
        $direccion = $params ['Direccion'];
        $barrio = $params ['Barrio'];
        $ciudad = $params ['Ciudad'];
        $departamento = $params ['Departamento'];
        $imagen = $params ['Imagen'];  
       
       $update = " UPDATE Estudiantes SET firstName='$firstName', lastName='$lastName', email='$email',  nacionalidad='$nacionalidad', sexo='$sexo', grado='$grado', edad='$edad', fechadenacimiento='$fechadenacimiento', lugar='$lugar', telefono='$telefono', direccion='$direccion', barrio='$barrio', ciudad='$ciudad', departamento='$departamento', imagen='$imagen', id='$id';
      return mysqli_query($this->conn, $update);
      
     }
 
     function remove($id){
       $remove = REMOVE FROM Estudiantes WHERE id = $id;
       return mysqli_query($this->conn, $remove);
       }
       ?>