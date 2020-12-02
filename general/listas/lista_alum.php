<?php
    $db = new SQLite3("../justificantes.db");
    $resultado = $db->query("SELECT PKMATRICULA_A, NOMBRE_A, APELLIDOP_A, APELLIDOM_A,
     GENERO_A, EMAIL_A, TELEFONO_A, KCARRERA, KCOORDINADOR, 
     CONTRASENA BLOB, USUARIO, KGRUPO FROM TBLALUMNO;");

     $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombre Alumno</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Genero</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Carrera</th>
                <th>Coordinador</th>
                <th>Usuario</th>
                <th>Grupo</th>
            </tr>
            </thead>
            ";
    print($table);

    while ($row = $resultado->fetchArray()) {
        $matricula = $row[ 'PKMATRICULA_A' ];
        $alumno = $row['NOMBRE_A'];
        $apellidop = $row['APELLIDOP_A'];
        $apellidom = $row['APELLIDOM_A'];
        $genero = $row['GENERO_A'];
        $email = $row['EMAIL_A'];
        $telefono = $row['TELEFONO_A'];
        $carrera = $row['KCARRERA'];
        $coordi = $row['KCOORDINADOR'];
        $usuario = $row['USUARIO'];
        $grupo = $row["KGRUPO"];
        $table = "
            <tr>
                <td>$matricula</td>
                <td>$alumno</td>
                <td>$apellidop</td>
                <td>$apellidom</td>
                <td>$genero</td>
                <td>$email</td>
                <td>$telefono</td>
                <td>$carrera</td>
                <td>$coordi</td>
                <td>$usuario</td>
                <td>$grupo</td>
                <td><a href='/view/view_alumno.php?PKMATRICULA_A=$matricula'>Ver</a></td>
                <td><a href='/delete/delete_alumno.php?PKMATRICULA_A=$matricula'>Eliminar</a></td>
                <td><a href='/update/modificar_alumno.php?PKMATRICULA_A=$matricula'>Modificar</a></td>";

        print($table);
    }
 
    print("</table>");
?>