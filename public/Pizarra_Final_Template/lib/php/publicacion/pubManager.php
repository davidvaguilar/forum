<?php
    session_start();   
    require_once dirname(__FILE__,4)."/route.php";
       include Route::ruta."includes/configuracion.php";
       require Route::ruta."includes/conexion.php";

    $control = $_GET['control'];
    if($control == 'agregarPublicacion'){
        try{
            $desc = $_POST['desc']; //Recibe desde AJAX
            $insertar = "INSERT INTO publicacion (pubContenido, pub_usuId) VALUES('".$desc."', ".$_SESSION['usuId'].");";  
            $db->exec($insertar);
            echo 1;
        }catch(PDOException $ex){
            echo $ex;
        }
    }else if($control == 'cargarPublicacion'){
        $consulta = "SELECT pubId,pubContenido, usuNombre FROM publicacion INNER JOIN usuarios ON usuId = pub_usuId ORDER BY pubId DESC;";
        $query = $db->query($consulta);
        while($filaRes = $query->fetch(PDO::FETCH_OBJ)){
            $res[] = array(
                "pubId" => $filaRes->pubId,
                "usuNombre" => $filaRes->usuNombre,
                "pubContenido" => $filaRes->pubContenido
            );
        }
        echo json_encode($res);
    }
?>