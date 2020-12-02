<?php
    $matricula = $_GET['matricula'];
    $nombre = $_GET['nombre'];
    $apellido_pa = $_GET['apellido_pa'];
    $apellido_ma= $_GET['apellido_ma'];
    $genero = $_GET['genero'];
    $email = $_GET['email'];
    $telefono = $_GET['telefono'];
    $carrera = $_GET['carrera'];
    $contraseña = $_GET['contraseña'];
    $usuario = $_GET['usuario'];

    $db = new SQLite3('../justificantes.db');

    $db->exec("INSERT INTO TBLCOORDINADOR (PKCOORDINADOR, NOMBRE_C, APELLIDOP_C, APELLIDOM_C, GENERO_C, EMAIL_C, TEFEFONO_C, KCARRERA_C, CONTRASENA, USUARIO) 
    VALUES ('$matricula','$nombre','$apellido_pa','$apellido_ma','$genero','$email','$telefono','$carrera','$contraseña','$usuario');");

    header("Location: ../general/registro_coordi.php");
?>

