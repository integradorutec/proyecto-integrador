<?php
    $matricula = $_GET['PKMATRICULA_A'];
    $alumno = $_GET['NOMBRE_A'];
    $apellidop = $_GET['APELLIDOP_A'];
    $apellidom= $_GET['APELLIDOM_A'];
    $genero = $_GET['GENERO'];
    $email = $_GET['EMAIL_A'];
    $telefono = $_GET['TELEFONO_A'];
    $carrera = $_GET['KCARRERA'];
    $coordi = $_GET['KCOORDINADOR'];
    $usuario = $_GET['USUARIO'];
    $grupo = $_GET['GRUPO'];

    $db= new SQLite3("../justificantes.db");
    $db->exec("UPDATE TBLALUMNO SET NOMBRE_A='$alumno', 
    APELLIDOP_A='$apellidop', APELLIDOM_A='$apellidom',
    GENERO_A='$genero', EMAIL_A='$email', TELEFONO_A='$telefono',
    KCARRERA='$carrera', KCOORDINADOR='$coordi',  
    USUARIO='$usuario', KGRUPO='$grupo'WHERE PKMATRICULA_A='$matricula';");
    header("Location: /general/registro_alum.php");
?>