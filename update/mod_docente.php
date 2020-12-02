<?php
    $clave = $_GET['CLAVEPROFESOR'];
    $profe= $_GET['NOMBRE_P'];
    $apellidop = $_GET['APELLIDOP_P'];
    $apellidom= $_GET['APELLIDOM_P'];
    $genero = $_GET['GENERO_P'];
    $email = $_GET['EMAIL_P'];
    $telefono = $_GET['TELEFONO_P'];
    $coordi = $_GET['FKCOORDINADOR'];
    $usuario = $_GET['USUARIO'];

    $db= new SQLite3("../justificantes.db");
    $db->exec("UPDATE TBLPROFESOR SET NOMBRE_P='$profe', 
    APELLIDOP_P='$apellidop', APELLIDOM_P='$apellidom',
    KGENERO_P='$genero', EMAIL_P='$email', TELEFONO_P='$telefono',
    FKCOORDINADOR='$coordi', USUARIO='$usuario' WHERE CLAVEPROFESOR='$clave';");
    header("Location: /general/registro_docente.php");
?>