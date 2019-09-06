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
                                        <a class="nav-item nav-link" id="nav-edition-profile" data-toggle="tab" href="#nav-edit-profile" role="tab" aria-controls="nav-edit-profile" aria-selected="false"><i class="fa fa-tachometer"></i>Todos los Perfiles</a>
                                        <a class="nav-item nav-link" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false"><i class="fa fa-plus-square-o"></i>Crear Perfil</a>
                                    </div>
                                </div><!--acc-leftbar end-->
                            </div>
                            <div class="col-lg-9">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
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
                                                            <option>Centro Capacitación Laboral</option>
                                                            <option>Escuela Artística Violeta Parra</option>
                                                            <option>Escuela Castro Ramos</option>
                                                            <option>Escuela Centenario</option>
                                                            <option>Escuela Chipana</option>
                                                            <option>Escuela España</option>
                                                            <option>Escuela Eduardo Llanos</option>
                                                            <option>Escuela Flor del Inca</option>
                                                            <option>Escuela Gabriela Mistral</option>
                                                            <option>Escuela Paula Jaraquemada</option>
                                                            <option>Escuela Patricio Lynch</option>
                                                            <option>Escuela Placido Villaroel</option>
                                                            <option>Escuela República Italia</option>
                                                            <option>Escuela Thilda Portillo Olivares</option>
                                                            <option>Liceo Bernardo O'Higgins</option>
                                                            <option>Liceo Bicentenario D.S.M</option>
                                                            <option>Liceo Comercial Baldomero Wolnitzky</option>
                                                            <option>Liceo C.E.I.A</option>
                                                            <option>Liceo D.T.P. Elena Duvauchelle</option>
                                                            <option>Liceo Luiz Cruz Martinez</option>
                                                            <option>Liceo Politécnico</option>
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
<!--======================================================================================================================================--> 
<!-- ************************************** EDITAR PERFIL DE USUARIO ******************************************************************** -->
<!--======================================================================================================================================--> 
                                   <div class="tab-pane fade show active" id="nav-edit-profile" role="tabpanel" aria-labelledby="nav-edition-profile">
                                        <section class="companies-info">
			                                <div class="container">
				                                <div class="companies-list">
					                                <div class="row" id="listarUsuarios"></div>
				                                </div><!--companies-list end-->
			                                 </div>
		                                </section><!--companies-info end-->
                                    </div> 
                                    
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
<!--
                                          <div class="modal-body">
                                                <h3>res[i]['usuNombre_apellido']</h3>
                                                <h4>res[i]['usuTipo']</h4>
                                          </div>
-->
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                            
<!--======================================================================================================================================-->
<!-- ******************************************** ELIMINAR PERFIL DE USUARIO ************************************************************ -->
<!--======================================================================================================================================--> 
                            
                            
                            
                            
                            
<!--======================================================================================================================================--> 
                                </div> <!-- tab-content -->                     
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
        <script type="text/javascript" src="lib/jquery/usuarios/usuManager.js" ></script>
<!--======================================================================================================-->
        <script type="text/javascript" src="lib/plugins/toastr/toastr.js"></script>
<!--======================================================================================================-->
    </body>
</html>