<!DOCTYPE html>
<html lang="es">
<head>
  <title>Solicitud de Justificante</title>
  <link rel="stylesheet" type="text/css" href="css/stilos.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="body_solicitud">
<nav class="navbar navbar-expand-lg" style="background-color: #1c1c44" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" >Sistema de justificantes</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>    
  </div>
</nav>
<?php
    include 'conexion.php';
    $resultado = $db->query("SELECT * from TBLMOTIVOJUS");

?>
<form action="../insertar/db_insert_justificante.php" method="POST" enctype="multipart/form-data">
  <div class="form-group" aling= "center">
    <label for="motivo"><h2>Motivo de justificante<h2></label>
  </div>
                <label >Selecciona tu motivo</label>    
              <select class="form-control" id="motivo" name="motivo">
                  <option value="0" selected>Selecciona un motivo</option>
                    <?php 
                        
                        while ($row = $resultado->fetchArray())
                        {
                    ?>
                                <option data-id="<?php echo $row['CODMOTIVO']?>" value="<?php echo $row['CODMOTIVO']?>"> <?php echo $row['MOTIVO']?></option>
                    <?php
                          
                        }
                    ?> 
            
              </select>      
              <div class="form-group">      
              <label for="fechainicial" >Ingresa la fecha de inicio a justificar</label>   
              <br>
              <input type="date" id="fechainicial" name="fechainicial"  min="1900-01-01" > 
              </div>
              <div class="form-group">      
              <label for="fechafinal" >Ingresa la fecha final a justificar</label>   
              <br>
              <input type="date" id="fechafinal" name="fechafinal"  min="1900-01-01" > 
              </div>
  </div>
  <div class="form-group">
    <label for="archivo">Adjuntar la imagen del comprobante a justificar</label>
    <br> <br>
    <input type="file" id="archivo" name="archivo" accept="image/*">
    <br>
    <br>
  <div class="checkbox">
    <label>
      <input type="checkbox"> ¿Son correctos tus datos?
    </label>
    <br>
    <br>
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>
</form>
</body>
</html>