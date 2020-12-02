<?php
    $db = new SQLite3("../justificantes.db");
    $resultado = $db->query("SELECT CLAVEPROFESOR, NOMBRE_P, APELLIDOP_P, APELLIDOM_P,
     KGENERO_P, EMAIL_P, TELEFONO_P, USUARIO, FKCOORDINADOR FROM TBLPROFESOR;");

     $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>Clave</th>
                <th>Nombre Doscente</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Genero</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Usuario</th>
                <th>Coordinador</th>
            </tr>
            </thead>
            ";
    print($table);

    while ($row = $resultado->fetchArray()) {
        $clave = $row[ 'CLAVEPROFESOR' ];
        $docente = $row['NOMBRE_P'];
        $apellidop = $row['APELLIDOP_P'];
        $apellidom = $row['APELLIDOM_P'];
        $genero = $row['KGENERO_P'];
        $email = $row['EMAIL_P'];
        $telefono = $row['TELEFONO_P'];
        $usuario = $row['USUARIO'];
        $coordi = $row['FKCOORDINADOR'];
        $table = "
            <tr>
                <td>$clave</td>
                <td>$docente</td>
                <td>$apellidop</td>
                <td>$apellidom</td>
                <td>$genero</td>
                <td>$email</td>
                <td>$telefono</td>
                <td>$usuario</td>
                <td>$coordi</td>
                <td><a href='/view/view_docente.php?CLAVEPROFESOR=$clave'>Ver</a></td>
                <td><a href='/delete/delete_docente.php?CLAVEPROFESOR=$clave'>Eliminar</a></td>
                <td><a href='/update/modificar_docente.php?CLAVEPROFESOR=$clave'>Modificar</a></td>
            </tr>";

        print($table);
    }
 
    print("</table>");
?>