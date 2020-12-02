<?php
        session_start();
        $db = new SQLite3('../justificantes.db');
        $email = $_POST['email'];
        $password = $_POST['password'];
        $usuario =$_POST['usuario'];      
        
        
        if($usuario=='profesor'){
            $consulta = $db->query("SELECT * FROM TBLPROFESOR  WHERE  EMAIL_P = '$email' AND CONTRASENA = '$password' LIMIT 1;");
            while ($row = $consulta->fetchArray()) {
            $clave = $row[ 'CLAVEPROFESOR' ];
            $profe = $row['NOMBRE_P'];
            $apellidop = $row['APELLIDOP_P'];
            $apellidom = $row['APELLIDOM_P'];
            $genero = $row['KGENERO_P'];
            $email = $row['EMAIL_P'];
            $telefono = $row['TELEFONO_P'];
            $usuario = $row['USUARIO'];
            $coordi = $row["FKCOORDINADOR"];
        }
                if($consulta != $email || $consulta != $password){ 
            header("location: justificantes.php");
            echo ("el correo o contraseña es incorrecto");      
        } 
        if($email &  $password = $consulta->fetchArray()) {
            header("location: ../view/view_docente.php");
        } else {
            header("location: ../error_sesion.php");
        }      
        }


        if ($usuario=='alumno')    {
        $consulta = $db->query("SELECT * FROM TBLALUMNO  WHERE EMAIL_A = '$email' AND CONTRASENA = '$password' LIMIT 1;");
        while ($row = $consulta->fetchArray()) {
        $matricula = $row[ 'PKMATRICULA_A' ];
        $_SESSION['PKMATRICULA_A']=$matricula;
        $alumno = $row['NOMBRE_A'];
        $_SESSION['NOMBRE_A']=$alumno;
        $apellidop = $row['APELLIDOP_A'];
        $_SESSION['APELLIDOP_A']=$apellidop;
        $apellidom = $row['APELLIDOM_A'];
        $_SESSION['APELLIDOM_A']=$apellidom;
        $genero = $row['GENERO_A'];
        $_SESSION['GENERO_A']=$genero;
        $email = $row['EMAIL_A'];
        $_SESSION['EMAIL_A']=$email;
        $telefono = $row['TELEFONO_A'];
        $_SESSION['TELEFONO_A']=$telefono;
        $carrera = $row['KCARRERA'];
        $_SESSION['KCARRERA']=$carrera;
        $coordi = $row['KCOORDINADOR'];
        $_SESSION['KCOORDINADOR']=$coordi;
        $usuario = $row['USUARIO'];
        $_SESSION['USUARIO']=$usuario;
        $grupo = $row['KGRUPO'];
        $_SESSION['KGRUPO']=$grupo;
        }   

        if($consulta != $email || $consulta != $password){ 
            header("location: justificantes.php");
            echo ("el correo o contraseña es incorrecto");      
        } 

        if($email & $password = $consulta->fetchArray()) {
                   
        header("location: solicitud.php");
         }else {
            header("location: ../error_sesion.php");
        }}

        ?>