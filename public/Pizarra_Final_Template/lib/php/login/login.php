<?php
    session_start();
       require_once dirname(__FILE__,4)."/route.php";
       include Route::ruta."includes/configuracion.php";
       require Route::ruta."includes/conexion.php";

    $control = $_GET['control'];
        if($control == 'login'){
            $Correo = $_POST['correo'];
            $Clave = md5($_POST['clave']);
            $contUsuario = 0;
            
            $consultaUsuario = "SELECT * FROM usuarios WHERE usuCorreo = '".$Correo."' AND usuClave =  '".$Clave."'; ";
            $queryUsuario = $db->query($consultaUsuario);
                while($resUsuario = $queryUsuario->fetch(PDO::FETCH_OBJ)){
                    $_SESSION['usuId'] = $resUsuario ->usuId;
                    $_SESSION['nombre'] = $resUsuario ->usuNombre;
                    $_SESSION['nombre_apellido'] = $resUsuario->usuNombre . ' ' . $resUsuario->usuApePaterno;
                    $_SESSION['establecimiento'] = $resUsuario->usuEstablecimiento;
                    $_SESSION['tipo'] = $resUsuario->usuTipo;
                    $contUsuario++;
                }
            if($contUsuario == 0){
                echo -1;
            }else{
                echo 1;
            }
        }

?>