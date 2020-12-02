<?php
    $matricula = $_GET['matricula'];
    $nombre = $_GET['nombre'];
    $apellido_pa = $_GET['apellido_pa'];
    $apellido_ma= $_GET['apellido_ma'];
    $genero = $_GET['genero'];
    $email = $_GET['email'];
    $telefono = $_GET['telefono'];
    $coordinador = $_GET['coordinador'];
    $contraseña = $_GET['contraseña'];
    $usuario = $_GET['usuario'];
    
    $db = new SQLite3('../justificantes.db');

    $db->exec("INSERT INTO TBLPROFESOR (CLAVEPROFESOR,NOMBRE_P,APELLIDOP_P,APELLIDOM_P,KGENERO_P,EMAIL_P,TELEFONO_P,CONTRASENA,USUARIO,FKCOORDINADOR) 
    VALUES ('$matricula', '$nombre','$apellido_pa','$apellido_ma','$genero','$email','$telefono','$contraseña','$usuario','$coordinador');");
    

    header("Location: ../general/registro_docente.php");
?>