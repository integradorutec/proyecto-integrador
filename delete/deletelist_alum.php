<?php
    $matricula = $_GET['PKMATRICULA_A'];

    $db= new SQLite3("../justificantes.db");

    $db->exec("DELETE FROM TBLALUMNO where PKMATRICULA_A = '$matricula';");

    header("Location: /general/registro_alum.php");
?>