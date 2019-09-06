<?php
    session_start();
    require_once dirname(__FILE__,4)."/route.php";
       include Route::ruta."includes/configuracion.php";
       require Route::ruta."includes/conexion.php";

    

    $tmp = "";
    $sql = "SELECT CONCAT(usuNombre, ' ', usuApePaterno)"
?>