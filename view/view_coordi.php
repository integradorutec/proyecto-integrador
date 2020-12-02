<!DOCTYPE html >
<html lang="es">
	<head>
    <link href="stilos.css" rel="stylesheet" type="text/css" > 
    <meta name="viewport" content="width=device-width"/>
		<title>Ver Coordinador</title>
    <link rel="stylesheet" type="text/css" href="/css/stilos.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<h2 class="stiloslabel">VISTA DE DATOS DEL COORDINADOR</h2>
<?php
    $codigo = $_GET['PKCOORDINADOR'];

    $db = new SQLite3("../justificantes.db");
    $resultado = $db->query("SELECT * from TBLCOORDINADOR where PKCOORDINADOR='$codigo';");

    while ($row = $resultado->fetchArray()) {
        $codigo = $row[ 'PKCOORDINADOR' ];
        $nombrecoordi = $row['NOMBRE_C'];
        $apellidop = $row['APELLIDOP_C'];
        $apellidom = $row['APELLIDOM_C'];
        $genero = $row['GENERO_C'];
        $email = $row['EMAIL_C'];
        $telefono = $row['TEFEFONO_C'];
        $carrera =$row['KCARRERA_C'];
        $usuario = $row['USUARIO'];
    }

    $form = "<div class='form-group'>
            <label for='codigo'>CODIGO</label>
            <input type='text' readonly class='form-control' id='PKCOORDINADOR' name='PKCOORDINADOR' aria-describedby='clave' value='$codigo'>
        </div>
        <div class='form-group'>
            <label for='NOMBRE_C'>NOMBRE</label>
            <input type='text' class='form-control' id='NOMBRE_C' name='NOMBRE_C' aria-describedby='nombre' value='$nombrecoordi'>
        </div>
        <div class='form-group'>
            <label for='APELLIDOP_C'>APELLIDO PATERNO</label>
            <input type='text' class='form-control' id='APELLIDOP_C' name='APELLIDOP_C' aria-describedby='paterno' value='$apellidop'>
        </div>
        <div class='form-group'>
            <label for='APELLIDOM_C'>APELLIDO MATERNO</label>
            <input type='text' class='form-control' id='APELLIDOM_C' name='APELLIDOM_C' aria-describedby='materno' value='$apellidom'>
        </div>
        <div class='form-group'>
            <label for='GENERO_C'>GENERO</label>
            <input type='text' class='form-control' id='GENERO_C' name='GENERO_C' aria-describedby='genero' value='$genero'>
        </div>
        <div class='form-group'>
            <label for='EMAIL_C'>EMAIL</label>
            <input type='text' class='form-control' id='EMAIL_C' name='EMAIL_C' aria-describedby='email_coordi' value='$email'>
        </div>
        <div class='form-group'>
          <label for='TELEFONO_C'>TELEFONO</label>
            <input type='text' class='form-control' id='TEFEFONO_C' name='TEFEFONO_C' aria-describedby='eltelefono' value='$telefono'>
        </div>
        <div class='form-group'>
            <label for='usuario'>USUARIO</label>
            <input type='text' class='form-control' id='USUARIO' name='USUARIO' aria-describedby='usuario' value='$usuario'>
        </div>
        <div class='form-group'>
            <label for='carrera'>CARRERA</label>
            <input type='text' class='form-control' id='KCARRERA_C' name='KCARRERA_C' aria-describedby='cordi' value='$carrera'>
        </div>";

    print($form);
?>
 <a href="/general/registro_coordi.php" aling=center>Regresar</a>
</body>
</html>