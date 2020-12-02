<?php
    $db = new SQLite3("../justificantes.db");
    $resultado = $db->query("SELECT PKCOORDINADOR, NOMBRE_C, APELLIDOP_C, APELLIDOM_C,
    GENERO_C, EMAIL_C, TEFEFONO_C, KCARRERA_C, USUARIO FROM TBLCOORDINADOR;");

     $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>Clave</th>
                <th>Nombre Coordinador</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Genero</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Carrera</th>
                <th>Usuario</th>
            </tr>
            </thead>
            ";
    print($table);

    while ($row = $resultado->fetchArray()) {
        $codigo = $row[ 'PKCOORDINADOR' ];
        $coordi = $row['NOMBRE_C'];
        $apellidop = $row['APELLIDOP_C'];
        $apellidom = $row['APELLIDOM_C'];
        $genero = $row['GENERO_C'];
        $email = $row['EMAIL_C'];
        $telefono = $row['TEFEFONO_C'];
        $carrera = $row['KCARRERA_C'];
        $usuario = $row['USUARIO'];
        $table = "
            <tr>
                <td>$codigo</td>
                <td>$coordi</td>
                <td>$apellidop</td>
                <td>$apellidom</td>
                <td>$genero</td>
                <td>$email</td>
                <td>$telefono</td>
                <td>$carrera</td>
                <td>$usuario</td>
                <td><a href='/view/view_coordi.php?PKCOORDINADOR=$codigo'>Ver</a></td>
                <td><a href='/delete/delete_coordi.php?PKCOORDINADOR=$codigo'>Eliminar</a></td>
                <td><a href='/update/modificar_coordi.php?PKCOORDINADOR=$codigo'>Modificar</a></td>
            </tr>";

        print($table);
    }
 
    print("</table>");
?>