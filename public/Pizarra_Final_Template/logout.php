<?php
    session_start();
    session_destroy();
    echo '<script>setTimeout(function(){location.href="index.php"} , 1000);</script>';
?>
<!DOCTYPE html>
<html lang="en">
        <head>
    <meta charset="UTF-8">
    <title>WorkWise Html Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
<!--======================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/animate.css">
<!--======================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--======================================================================================================-->	    
    <link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<!--======================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<!--======================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!--======================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
<!--======================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<!--======================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<!--======================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/style.css">
<!--======================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
<!--======================================================================================================-->	
    </head>
    <body>
                       <div class="col-md-6">
                           <div class="cerrarSesion">
                           <div class="logout">
                            <h1>Sesión Cerrada Correctamente</h1> 
                           </div>
                            <hr>
                           <div class="seccion">
                               <p>Redireccionando, por favor espere</p>
                           </div> 
                        </div>
                       </div>
                        

                
    </body>
</html>