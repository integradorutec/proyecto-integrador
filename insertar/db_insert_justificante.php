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
    
    $nombre=$_FILES['archivo']['name'];
    $guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('archivos')){
	mkdir('archivos',0777,true);
	if(file_exists('archivos')){
		if(move_uploaded_file($guardado, 'sql/archivos/'.$nombre)){
			echo "Archivo guardado con exito";
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
		echo "Archivo guardado con exito";
	}else{
		echo "Archivo no se pudo guardar";
	}
}


    include 'conexion.php'; 
    $db = new SQLite3("../justificantes.db");
    
    
    $motivos = explode(":",$motivo);
    if(!isset($motivos[1])){
        continue;
     $db->exec("INSERT INTO TBLJUSTIFICANTE (KSOLICITANTE,KCOODINADOR,FECHASOLICITUD,KMOTIVO,INICIOJ,FINALJ,DESCRIPCION,KCOD_JUSTIFRES)
    values ($matricula, $coordinador, $fechaactual, $motivos[1], $fechainicial,$fechafinal, $descripcion, 'E');");
    
    header("Location: ../general/registro_alum.php");

}
    
    



    
?>