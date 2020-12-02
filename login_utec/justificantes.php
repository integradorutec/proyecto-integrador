<!DOCTYPE html>
<html lang="es">
<head>
  <title>Justificantes UTEC</title>
  <link rel="stylesheet" type="text/css" href="/css/stilos.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="body_login">
  <h2 class="stiloslabel">SISTEMA INSTITUCIONAL DE JUSTIFICANTES</h2>
  <div  class="modal-dialog text-center">
    <div class="col-sm-13 main-section" aling="center">
        <div class="modal-content " >
            <form action="action_page.php" method="POST" class="was-validated">
              <div class="stiloslabel1">
                <div class="contact-image" aling="center">
                  <img src="/logo/logo.png" width="187" height="200">
                </div>
                <div class="form-check">
                <label class="radio-inline"><input type="radio" name="usuario"  value="coordinador"> Coordinador </label>
                <label class="radio-inline"><input type="radio" name="usuario"  value="profesor"> Profesor </label>
                <label class="radio-inline"><input type="radio" name="usuario"  value="alumno"> Alumno </label>
                </div>
                <div class="form-group">
                  <label for="user"></label>
                  <input type="email" class="form-control" id="email" placeholder="Correo electronico institucional" name="email"  value="1719110305@UTECTULANCINGO.EDU.MX" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Por favor llenar este campo.</div>
                </div>
                <div class="form-group">
                  <label for="password"></label>
                  <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Por favor llenar este campo.</div>
                </div>
                <button type="submit" class="btn btn-success">Ingresar</button>
                <br>
                <br>
                
              </div>
            </form>
          
        </div>
      </div>
    </div>
  </div>
</body>
</html>

