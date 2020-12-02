<!DOCTYPE html >
<html lang="es">
	<head>
    <link href="/css/stilos.css" rel="stylesheet" type="text/css" > 
    <meta name="viewport" content="width=device-width"/>
		<title>Insertar coordinadores</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body class="body_insertar">
    <img src="/images/insertcordi.png">
    <form action="db_insert_coord.php" method="GET">
      <div class="row" class="cssfondo" class="form-group">
        <div class="col-xs-12 col-sm-3 text-left" >
          <label> NUMERO DE EMPLEADO: <p>
          <input type="number" id="matricula" name="matricula" class="form-control"/></p></label>
          <label> APELLIDO MATERNO: <p>
          <input type="text" id="apellido_ma" name="apellido_ma" class="form-control"/></p></label>
          <label>TELEFONO: <p>
          <input type="text" id= "telefono" name="telefono" class="form-control"/></p></label>
          <label>CONTRASEÑA: <p>
          <input type="text" id= "contraseña" name="contraseña" class="form-control"/></p></label>
          </p>
        </div>
        <div class="col-xs-12 col-sm-3 text-left">
          <label>NOMBRE: <p>
          <input type="text" id="nombre" name= "nombre" class="form-control"/></p></label>
          <label>GENERO: <p>
          <input type="text" id="genero" name="genero" class="form-control"/></p></label>
          <label>CARRERA: <p>
          <input type="text" id="carrera" name="carrera" class="form-control"/></p></label>
         
        </div>
        <div class="col-xs-12 col-sm-3 text-left">
          <label> APELLIDO PATERNO: <p>
          <input type="text" id="apellido_pa" name="apellido_pa" class="form-control"/></p></label>
          <label> EMAIL:<p>
          <input type="text" id="email" name="email" class="form-control" /></p></label>
          <label> USUARIO: <p>
          <input type="text" id="usuario" name="usuario" class="form-control"/></p></label>
          <p><p><button type="submit" class="btn btn-success">Insertar</button></p></p>
        </div>
      </div>
    </form>
  </body>
</html>