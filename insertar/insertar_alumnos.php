<!DOCTYPE html >
<html lang="es">
	<head>
    <link href="stilos.css" rel="stylesheet" type="text/css" > 
    <meta name="viewport" content="width=device-width"/>
		<title>Insertar alumnos</title>
    <link rel="stylesheet" type="text/css" href="/css/stilos.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
	<body class="body_insertar">
    <img src= "/images/insert.png/">
    <form action="db_insert_alum.php" method="GET">
      <div class="row" class="cssfondo" class="form-group">
        <div class="col-xs-12 col-sm-3 text-left" >
          <label> MATRICULA: <p>
          <input type="number" id="matricula" name="matricula" class="form-control" /></p>
          <label> APELLIDO MATERNO: <p>
          <input type="text" id="apellido_ma" name="apellido_ma" class="form-control" /></p></label>
          <label> TELEFONO: <p>
          <input type="text" id="telefono" name="telefono" class="form-control" /></p></label>
          <label> USUARIO:<p>
          <input type="text" id="usuario" name="usuario" class="form-control" /></p></label>
        </div>

        <div class="col-xs-12 col-sm-3 text-left">
          <label> NOMBRE: <p>
          <input type="text" id="nombre" name="nombre" class="form-control" /></p></label>
          <label> GENERO: <p>
          <input type="text" id="genero" name="genero" class="form-control"/></p></label>
          <label> GRUPO: <p>
          <input type="text" id="grupo" name="grupo" class="form-control" /></p></label>
          <label> CONTRASEÑA:<p>
          <input type="text" id="contraseña" name="contraseña" class="form-control"/></p></label>
          <p><p><button type="submit" class="btn btn-success">Insertar</button></p></p>
        </div>

        <div class="col-xs-12 col-sm-3 text-left">
          <label> APELLIDO PATERNO: <p>
          <input type="text" id="apellido_pa" name="apellido_pa" class="form-control"/></p></label>
          <label> E-MAIL: <p>
          <input type="text" id="email" name="email" class="form-control"/></p></label>
          <label> CARRERA: <p>
          <input type="text" id="carrera" name="carrera" class="form-control"/></p></label>
          <label> COORDINADOR: <p>
          <input type="text" id="coordinador" name="coordinador" class="form-control"/></p></label>
        </div>
      </div>
    </form>
  </body>
</html>