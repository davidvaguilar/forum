<?php
        require_once dirname(__FILE__,4)."/route.php";
       include Route::ruta."includes/configuracion.php";
       require Route::ruta."includes/conexion.php";


    $control = $_GET['control'];
        if($control == 'agregarUsuario'){
            try{
                $nombre = $_POST['nombre'];
                $paterno = $_POST['paterno'];
                $materno = $_POST['materno'];
                $sexo = $_POST['sexo'];
                $establecimiento = $_POST['establecimiento'];
                $tipo = $_POST['tipo'];
                $correo = $_POST['correo'];
                $clave = md5($_POST['clave']);
                $insertar = "INSERT INTO usuarios (usuNombre,usuApePaterno, usuApeMaterno, usuSexo, usuEstablecimiento, usuTipo, usuCorreo, usuClave)
                VALUES
                ('".$nombre."', '".$paterno."', '".$materno."', '".$sexo."', '".$establecimiento."', '".$tipo."', '".$correo."', '".$clave."');";                                                      
                                                      
                $db->exec($insertar);
                echo 1;
            }catch(PDOException $ex){
                echo $ex;
            }
        }else if($control == 'cargarUsuarios'){
            $consultaUsuario = "SELECT usuNombre, usuApePaterno, usuTipo FROM usuarios;";
            $query = $db->query($consultaUsuario);
                while($usuResult = $query->fetch(PDO::FETCH_OBJ)){
                    $res[] = array(
                                    "usuNombre_apellido" => $usuResult->usuNombre .' '.$usuResult->usuApePaterno,
                                    "usuTipo" => $usuResult->usuTipo
                        
                                  );
                }
            echo json_encode($res);
            
        }
?>