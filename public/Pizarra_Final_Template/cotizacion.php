<?php
	session_start();
	if($_SESSION['nombre_apellido'] == ''){
		echo '<script>location.href="login.php";</script>';
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cotización</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
<!--=================================================================================================================-->	
        <link rel="stylesheet" type="text/css" href="css/animate.css">
<!--=================================================================================================================-->	
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--=================================================================================================================-->	    
        <link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<!--=================================================================================================================-->	
        <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<!--=================================================================================================================-->	
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!--=================================================================================================================-->	
        <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
<!--=================================================================================================================-->	
        <link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<!--=================================================================================================================-->	
        <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<!--=================================================================================================================-->	
        <link rel="stylesheet" type="text/css" href="css/style.css">
<!--=================================================================================================================-->	
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
<!--=================================================================================================================-->
        <link rel="stylesheet" type="text/css" href="lib/plugins/jQuery-File-Upload-10.0.0/css/jquery.fileupload.css">
<!--=================================================================================================================--> 
        <link rel="stylesheet" href="lib/plugins/toastr/build/toastr.css">
<!--=================================================================================================================-->  
    </head>
    <body>
        <div class="wrapper">
<!--=========================================================================================================-->           
            <?php include("header.html");?>
<!--=========================================================================================================-->            
            <section class="companies-info">
                <div class="container">
                    <div class="company-title">
                        <h3>Cotizaciones</h3>
                    </div>
                </div>
            </section>
            <section class="profile-account-setting">
                <div class="container">
                    <div class="account-tabs-setting">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="acc-leftbar">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false"><i class="fa fa-tachometer"></i>Todas las cotizaciones</a>
                                        <a class="nav-item nav-link" id="nav-edition-profile" data-toggle="tab" href="#nav-edit-profile" role="tab" aria-controls="nav-edit-profile" aria-selected="false"><i class="fa fa-pencil-square-o"></i>Cotizar</a>
                                    </div>
                                </div> <!-- Acc leftbar end -->
                            </div>
                            <div class="col-lg-9">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
                                        <div class="acc-setting">
                                            <table class="table">
                                                <thead class="thead-color">
                                                    <tr>
                                                        <th scope="col">N°</th>
                                                        <th scope="col">Referencia</th>
                                                        <th scope="col">Emision</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Laboratorio Chanavayita</td>
                                                        <td>15-07-2019</td>
                                                        <td>$ 1.520.650</td>
                                                        <td><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></button><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane fade" id="nav-edit-profile" role="tabpanel" aria-labelledby="nav-edition-profile">
                                        <div class="acc-setting">
                                            <table class="table">
                                                <thead class="thead-color">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Producto</th>
                                                        <th scope="col">Cantidad</th>
                                                        <th scope="col">Precio Unitario</th>
                                                        <th scope="col">Total</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><input type="text" class="form-control"></td>
                                                        <td>0</td>
                                                        <td>$ 0</td>
                                                        <td>$ 0</td>
                                                        <td><button class="btn btn-danger"><i class="fa fa-times"></i>
</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-success">Exportar PDF <i class="fa fa-file-pdf-o"></i></button>
                                        </div>
                                    </div>
                                    
                                </div> <!-- tab-content end -->
                            </div> <!-- col-lg-9 end --> 
                        </div> <!-- row end -->
                    </div> <!-- account-tabs-setting end -->
                </div> <!-- container end -->
            </section>
        </div> <!-- wrapper  end -->
        
        
        
        
        
<!--======================================================================================================-->	
    <script type="text/javascript" src="js/jquery.min.js"></script>
<!--======================================================================================================-->	
    <script type="text/javascript" src="js/popper.js"></script>
<!--======================================================================================================-->	
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--======================================================================================================-->	
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<!--======================================================================================================-->	
    <script type="text/javascript" src="lib/slick/slick.min.js"></script>
<!--======================================================================================================-->	
    <script type="text/javascript" src="js/scrollbar.js"></script>
<!--======================================================================================================-->	
    <script type="text/javascript" src="js/script.js"></script>
<!--======================================================================================================-->	
    <script type="text/javascript" src="lib/jquery/publicacion/pubManager.js"></script>
<!--======================================================================================================-->
    <script type="text/javascript" src="lib/jquery/comentario/comManager.js"></script>
<!--======================================================================================================-->
    <script type="text/javascript" src="lib/plugins/jQuery-File-Upload-10.0.0/js/jquery.fileupload.js"></script>
<!--======================================================================================================-->
    <script type="text/javascript" src="lib/plugins/toastr/toastr.js"></script>
<!--======================================================================================================-->
    </body>
</html>