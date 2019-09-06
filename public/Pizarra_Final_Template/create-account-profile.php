<?php
	session_start();
	if($_SESSION['nombre_apellido'] == ''){
		echo '<script>location.href="login.php";</script>';
	}
?>
<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<!--======================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!--======================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
<!--======================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<!--======================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
<!--======================================================================================================-->
    <link rel="stylesheet" href="lib/plugins/toastr/build/toastr.css">
<!--======================================================================================================-->	
    </head>
    <body>
        <div class="wrapper">
<!--======================================================================================================-->	
            <?php include("header.html"); ?>
<!--======================================================================================================-->	            
            <section class="profile-account-setting">
                <div class="container">
                    <div class="account-tabs-setting">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="acc-leftbar">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false"><i class="fa fa-plus-square-o"></i>Crear Perfil de Usuario</a>
                                        <a class="nav-item nav-link" id="nav-notification-tab" data-toggle="tab" href="#nav-notification" role="tab" aria-controls="nav-notification" aria-selected="false"><i class="fa fa-pencil-square-o"></i>Editar Perfil de Usuario</a>
                                        <a class="nav-item nav-link" id="nav-notification-tab" data-toggle="tab" href="#nav-notification" role="tab" aria-controls="nav-notification" aria-selected="false"><i class="fa fa-trash-o"></i>Eliminar Perfil </a>
                                    </div>
                                </div><!--acc-leftbar end-->
                            </div>
                            <div class="col-lg-9">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
                                        <div class="acc-setting">
                                            <h3><i class="fa fa-user-plus"></i> Crear Perfil Usuario</h3>
                                            <form>
											<div class="cp-field">
												<h5>Nombre *</h5>
												<div class="cpp-fiel">
													<input type="text"  placeholder="Nombre" id="nombre">
													<i class="fa fa-user"></i>
												</div>

											</div>
											<div class="cp-field">
												<h5>Apellido Paterno *</h5>
												<div class="cpp-fiel">
													<input type="text"  placeholder="Apellido Paterno" id="apepaterno">
													<i class="fa fa-user"></i>
												</div>

											</div>
											<div class="cp-field">
												<h5>Apellido Materno (Opcional)</h5>
												<div class="cpp-fiel">
													<input type="text"  placeholder="Apellido Materno" id="apematerno">
													<i class="fa fa-user"></i>
												</div>

											</div>
											<div class="cp-field">
												<h5>Sexo *</h5>
												<div class="cpp-fiel">
													<select class="cpp-fiel" id="sexo"> 
														<option> - - - </option>
														<option>Masculino</option>
														<option>Femenino</option>
													</select>
													<i class="fa fa-venus-mars"></i>
												</div>
											</div>
											
											<div class="cp-field">
												<h5>Establecimiento *</h5>
												<div class="cpp-fiel">
													<select class="cpp-fiel" id="establecimiento"> 
														<option> - - - </option>
														<option>Cormudesi - Casa Central</option>
														<option>Liceo Bernardo O'Higgins</option>
														<option>Flor del Inca</option>
														<option>Liceo Comercial Baldomero Wolnitzky</option>
														<option>Escuela Thilda Portillo Olivares</option>
													</select>
													<i class="fa fa-university"></i>
												</div>
											</div>
								
							                <div class="cp-field">
												<h5>Perfil de Usuario *</h5>
												<div class="cpp-fiel">
													<select class="cpp-fiel" id="tipo"> 
														<option> - - - </option>
														<option>Administrador</option>
														<option>Usuario</option>
													</select>
													<i class="fa fa-id-card"></i>
												</div>
											</div>
						
											
											<div class="cp-field">
												<h5>Correo Electrónico *</h5>
												<div class="cpp-fiel">
													<input type="text"  id="correo" placeholder="Correo Electrónico">
													<i class="fa fa-envelope"></i>
												</div>

											</div>
																						
											<div class="cp-field">
												<h5>Contraseña *</h5>
												<div class="cpp-fiel">
													<input type="password"  id="clave" placeholder="Contraseña">
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="save-stngs pd3">
												<ul>
													<li><button type="button" id="btn_insUsuario">Guardar</button></li>
												</ul>
											</div><!--save-stngs end-->
											<div id="error"></div>
										</form>
                                        
                                        </div><!--acc-setting end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--account-tabs-setting end-->
                </div>
            </section>
<!--======================================================================================================-->
            <?php include ("footer.html"); ?>
<!--======================================================================================================-->
        </div><!--theme-layout end-->
<!--======================================================================================================-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
<!--======================================================================================================-->
        <script type="text/javascript" src="js/popper.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--======================================================================================================-->
        <script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<!--======================================================================================================-->
        <script type="text/javascript" src="lib/slick/slick.min.js"></script>
<!--======================================================================================================-->
        <script type="text/javascript" src="js/script.js"></script>
<!--======================================================================================================-->
        <script type="text/javascript" src="lib/jquery/usuarios/InsertarUsuario.js" ></script>
<!--======================================================================================================-->
        <script type="text/javascript" src="lib/plugins/toastr/toastr.js"></script>
<!--======================================================================================================-->
    </body>
</html>