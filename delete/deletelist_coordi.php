<?php
    $clave = $_GET['PKCOORDINADOR'];

    $db= new SQLite3("../justificantes.db");

    $db->exec("DELETE FROM TBLCOORDINADOR where PKCOORDINADOR = '$clave';");

    header("Location: /general/registro_coordi.php");
?>