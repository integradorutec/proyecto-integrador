<?php
    $db = new SQLite3('../justificantes.db');
    session_start();
    $motivo=$_POST['motivo'];
    $matricula=$_SESSION['PKMATRICULA_A'];
    $coordinador=$_SESSION['KCOORDINADOR'];   
    $motivo = $_POST['motivo'];
    $fechaactual=  date("j, n, Y");
    $fechainicial= $_POST['fechainicial'];
    $fechafinal = $_POST['fechafinal'];
    $archivo = $_POST['archivo'];
    $descripcion=$_POST['archivo'];
    
    $idProductos = isset($_POST['idProductos']) ? $_POST['idProductos'] : '';
 $productoS= $_POST['producto'];
    
    include 'conexion.php';  
    $db = new SQLite3("../tienda.db");
    

    $productos = explode(";",$idProductos);
    foreach ($productos as $producto) {
    $productoYCantidad = explode(":",$producto);
    if(!isset($productoYCantidad[0]) || !isset($productoYCantidad[1])){
        continue;
    }
     $db->exec("INSERT INTO TBLJUSTIFICANTE (KSOLICITANTE,KCOODINADOR,FECHASOLICITUD,KMOTIVO,INICIOJ,FINALJ,DESCRIPCION,KCOD_JUSTIFRES)
    values ($matricula, $coordinador, $fechaactual, $motivo, $fechainicial,$fechafinal, $descripcion, 'E');");
    
    $db->exec("INSERT INTO ticket (cantidad_producto,producto,total_producto) VALUES ('$productoYCantidad[1]', '$productoYCantidad[0]', '$existencias');");
   

    

   
    header("Location: ../general/registro_alum.php");

}
?>