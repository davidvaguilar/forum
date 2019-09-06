<?php
       require_once dirname(__FILE__,4)."/route.php";
       include Route::ruta."includes/configuracion.php";
       require Route::ruta."includes/conexion.php";

    $control = $_GET['control'];
        if($control == 'agregarComentario'){
            try{
                
                $com = $_POST['comen']; //Recibe desde AJAX
                $insertar = "INSERT INTO comentario (comContenido, com_usuId) VALUES('".$com."', ".$_SESSION['usuId']." );";                                                      
                                                      
                $db->exec($insertar);
                echo 1;
            }catch(PDOException $ex){
                echo $ex;
            }
        }else if($control == 'cargarComentarios'){
            $cargar = "SELECT pubId,pubContenido, comContenido, usuNombre FROM publicacion INNER JOIN usuarios INNER JOIN comentario ON com_pubId = pubId AND com_usuId = usuId";
            
            $cantCom = "SELECT COUNT(*) FROM comentario INNER JOIN publicacion ON com_pubId = pubId;";
            
            $query = $db->query($cargar);
            
            while($filares = $query->fetch(PDO::FETCH_OBJ)){
                $res[] = array(
                                "usuNombre" => $filares->usuNombre,
                                "comContenido" => $filares->comContenido
                );
            };
            $queryCant = $db->query($cantCom);
            while($filares = $queryCant->fetch(PDO::FETCH_OBJ)){
                $resCant[] = array(
                                ""
                );
            };
            echo json_encode($res);
        }
?>