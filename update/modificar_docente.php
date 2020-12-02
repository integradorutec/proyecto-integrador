<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Modificar Docente</title>
</head>

<body>
    <div class='container-fluid'>
        <h2 class='stilolabel'>Modificar</h2>
        <form action='mod_docente.php' method='GET'>
            <?php include '/workspace/proyecto-integrador/view/view_docente.php'; ?>
            <button type='submit' class='btn btn-primary'>Modificar</button>
        </form>

    </div>
</body>

</html>