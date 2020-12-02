<?php
    $db = new SQLite3("../justificantes.db");

    $resultado = $db->query("SELECT COD_JUSTIFICANTE,PKMATRICULA_A, NOMBRE_A,NOMBRE_C, FECHASOLICITUD, 
    MOTIVO,INICIOJ,FINALJ,RESPUESTA FROM TBLJUSTIFICANTE AS T1 INNER JOIN TBLALUMNO AS T2 ON T2.PKMATRICULA_A=T1.KSOLICITANTE
    INNER JOIN TBLCOORDINADOR AS T3 ON T3.PKCOORDINADOR=T1.KCOODINADOR INNER JOIN TBLMOTIVOJUS AS T4 ON T4.CODMOTIVO=T1.KMOTIVO 
    INNER JOIN TBLRESPUESTAJUS AS T5 ON T5.COD_JUSTIFRES=T1.KCOD_JUSTIFRES;"

);

    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>Clave</th>
                <th>Matricula</th>
                <th>Nombre Alumno</th>
                <th>Coordinador</th>
                <th>Fecha</th>
                <th>Motivo</th>
                <th>Inicio</th>
                <th>Final</th>
                <th>Estado</th>
            </tr>
            </thead>
            ";

    print($table);

    while ($row = $resultado->fetchArray()) {
        //Forma 1 para mostrar datos
        $clave = $row[ 'COD_JUSTIFICANTE'];
        $matricula = $row['PKMATRICULA_A'];
        $alumno = $row['NOMBRE_A'];
        $coordi = $row['NOMBRE_C'];
        $fecha = $row['FECHASOLICITUD'];
        $motivo = $row['MOTIVO'];
        $inicio = $row['INICIOJ'];
        $final = $row['FINALJ'];
        $estado = $row["RESPUESTA"];
        $table = "
            <tr>
                <td>$clave</td>
                <td>$matricula</td>
                <td>$alumno</td>
                <td>$coordi</td>
                <td>$fecha</td>
                <td>$motivo</td>
                <td>$inicio</td>
                <td>$final</td>
                <td>$estado</td>
            </tr> ";

        print($table);
    }
 
    print("</table>");
?>