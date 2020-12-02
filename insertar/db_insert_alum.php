<?php
    $matricula = $_GET['matricula'];
    $nombre = $_GET['nombre'];
    $apellido_pa = $_GET['apellido_pa'];
    $apellido_ma= $_GET['apellido_ma'];
    $genero = $_GET['genero'];
    $email = $_GET['email'];
    $telefono = $_GET['telefono'];
    $carrera = $_GET['carrera'];
    $coordinador = $_GET['coordinador'];
    $contraseña = $_GET['contraseña'];
    $usuario = $_GET['usuario'];
    $grupo = $_GET['grupo'];
    

    $db = new SQLite3('../justificantes.db');

    $db->exec("INSERT INTO TBLALUMNO (PKMATRICULA_A,NOMBRE_A,APELLIDOP_A,APELLIDOM_A,GENERO_A,EMAIL_A,TELEFONO_A,KCARRERA,KCOORDINADOR,CONTRASENA,USUARIO,KGRUPO) 
    VALUES ('$matricula', '$nombre','$apellido_pa','$apellido_ma','$genero','$email','$telefono','$carrera','$coordinador','$contraseña','$usuario','$grupo');");
    
    header("Location: ../general/registro_alum.php");

?>

