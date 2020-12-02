<?php
    $clave = $_GET['CLAVEPROFESOR'];

    $db= new SQLite3("../justificantes.db");

    $db->exec("DELETE FROM TBLPROFESOR where CLAVEPROFESOR = '$clave';");

    header("Location: /general/registro_docente.php");
?>