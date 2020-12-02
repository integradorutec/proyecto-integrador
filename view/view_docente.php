<!DOCTYPE html >
<html lang="es">
	<head>
    <link href="stilos.css" rel="stylesheet" type="text/css" > 
    <meta name="viewport" content="width=device-width"/>
		<title>Ver Docente</title>
    <link rel="stylesheet" type="text/css" href="/css/stilos.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<h2 class="stiloslabel">VISTA DE DATOS DEL DOCENTE</h2>
<?php
    $clave = $_GET['CLAVEPROFESOR'];

    $db = new SQLite3("../justificantes.db");
    $resultado = $db->query("SELECT * from TBLPROFESOR where CLAVEPROFESOR='$clave';");

    while ($row = $resultado->fetchArray()) {
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

    $form = "<div class='form-group'>
            <label for='CLAVEPROFESOR'>CLAVE</label>
            <input type='text' readonly class='form-control' id='CLAVEPROFESOR' name='CLAVEPROFESOR' aria-describedby='CLAVEPROFESOR' value='$clave'>
        </div>
        <div class='form-group'>
            <label for='NOMBRE_P'>NOMBRE</label>
            <input type='text' class='form-control' id='NOMBRE_P' name='NOMBRE_P' aria-describedby='nombre' value='$profe'>
        </div>
        <div class='form-group'>
            <label for='APELLIDOP_P'>APELLIDO PATERNO</label>
            <input type='text' class='form-control' id='APELLIDOP_P' name='APELLIDOP_P' aria-describedby='paterno' value='$apellidop'>
        </div>
        <div class='form-group'>
            <label for='APELLIDOM_P'>APELLIDO MATERNO</label>
            <input type='text' class='form-control' id='APELLIDOM_P' name='APELLIDOM_P' aria-describedby='materno' value='$apellidom'>
        </div>
        <div class='form-group'>
            <label for='GENERO_P'>GENERO</label>
            <input type='text' class='form-control' id='GENERO_P' name='GENERO_P' aria-describedby='genero' value='$genero'>
        </div>
        <div class='form-group'>
            <label for='EMAIL_P'>EMAIL</label>
            <input type='text' class='form-control' id='EMAIL_P' name='EMAIL_P' aria-describedby='email_profe' value='$email'>
        </div>
        <div class='form-group'>
          <label for='TELEFONO_P'>TELEFONO</label>
            <input type='text' class='form-control' id='TELEFONO_P' name='TELEFONO_P' aria-describedby='eltelefono' value='$telefono'>
        </div>
        <div class='form-group'>
            <label for='usuario'>USUARIO</label>
            <input type='text' class='form-control' id='USUARIO' name='USUARIO' aria-describedby='usuario' value='$usuario'>
        </div>
        <div class='form-group'>
            <label for='FKCOORDINADOR'>COORDINADOR</label>
            <input type='text' class='form-control' id='FKCOORDINADOR' name='FKCOORDINADOR' aria-describedby='cordi' value='$coordi'>
        </div>";

    print($form);
?>
 <a href="/general/registro_docente.php" aling=center>Regresar</a>
</body>
</html>