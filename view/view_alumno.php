<!DOCTYPE html >
<html lang="es">
	<head>
    <link href="stilos.css" rel="stylesheet" type="text/css" > 
    <meta name="viewport" content="width=device-width"/>
		<title>Ver Alumno</title>
    <link rel="stylesheet" type="text/css" href="/css/stilos.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<h2 class="stiloslabel">VISTA DE DATOS</h2>
<?php
    $matricula = $_GET['PKMATRICULA_A'];

    $db = new SQLite3("../justificantes.db");
    $resultado = $db->query("SELECT * from TBLALUMNO where PKMATRICULA_A='$matricula';");

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
    }

    $form = "<div class='form-group'>
            <label for='PKMATRICULA_A'>MATRICULA</label>
            <input type='text' readonly class='form-control' name='PKMATRICULA_A' id='PKMATRICULA_A' matricula='PKMATRICULA_A' aria-describedby='PKMATRICULA_A' value='$matricula'>
        </div>
        <div class='form-group'>
            <label for='NOMBRE_A'>NOMBRE</label>
            <input type='text' class='form-control' id='NOMBRE_A' name='NOMBRE_A' aria-describedby='alumno' value='$alumno'>
        </div>
        <div class='form-group'>
            <label for='APELLIDOP_A'>APELLIDO PATERNO</label>
            <input type='text' class='form-control' id='APELLIDOP_A' name='APELLIDOP_A' aria-describedby='paterno' value='$apellidop'>
        </div>
        <div class='form-group'>
            <label for='APELLIDOM_A'>APELLIDO MATERNO</label>
            <input type='text' class='form-control' id='APELLIDOM_A' name='APELLIDOM_A' aria-describedby='materno' value='$apellidom'>
        </div>
        <div class='form-group'>
            <label for='GENERO_A'>GENERO</label>
            <input type='text' class='form-control' id='GENERO_A' name='GENERO' aria-describedby='genero' value='$genero'>
        </div>
        <div class='form-group'>
            <label for='EMAIL_A'>EMAIL</label>
            <input type='text' class='form-control' id='EMAIL_A' name='EMAIL_A' aria-describedby='email_alum' value='$email'>
        </div>
        <div class='form-group'>
          <label for='TELEFONO_A'>TELEFONO</label>
            <input type='text' class='form-control' id='TELEFONO_A' name='TELEFONO_A' aria-describedby='eltelefono' value='$telefono'>
        </div>
        <div class='form-group'>
            <label for='KCARRERA'>CARRERA</label>
            <input type='text' class='form-control' id='KCARRERA' name='KCARRERA' aria-describedby='carrera' value='$carrera'>
        </div>
        <div class='form-group'>
            <label for='KCOORDINADOR'>COORDINADOR</label>
            <input type='text' class='form-control' id='KCOORDINADOR' name='KCOORDINADOR' aria-describedby='cordi' value='$coordi'>
        </div>
        <div class='form-group'>
            <label for='usuario'>USUARIO</label>
            <input type='text' class='form-control' id='USUARIO' name='USUARIO' aria-describedby='usuario' value='$usuario'>
        </div>
        <div class='form-group'>
            <label for='KGRUPO'>GRUPO</label>
            <input type='text' class='form-control' id='KGRUPO' name='GRUPO' aria-describedby='grupo' value='$grupo'>
        </div>";

    print($form);
?>
 <a href="/general/registro_alum.php" aling=center>Regresar</a>
</body>
</html>