<?php
    $codigo = $_GET['PKCOORDINADOR'];
    $nombrecoordi = $_GET['NOMBRE_C'];
    $apellidop = $_GET['APELLIDOP_C'];
    $apellidom= $_GET['APELLIDOM_C'];
    $genero = $_GET['GENERO_C'];
    $email = $_GET['EMAIL_C'];
    $telefono = $_GET['TEFEFONO_C'];
    $carrera = $_GET['KCARRERA_C'];
    $usuario = $_GET['USUARIO'];

    $db= new SQLite3("../justificantes.db");
    $db->exec("UPDATE TBLCOORDINADOR SET NOMBRE_C='$nombrecoordi', 
    APELLIDOP_C='$apellidop', APELLIDOM_C='$apellidom',
    GENERO_C='$genero', EMAIL_C='$email', TEFEFONO_C='$telefono',
    KCARRERA_C='$carrera', USUARIO='$usuario' where PKCOORDINADOR='$codigo';");
    header("Location: /general/registro_coordi.php");
?>