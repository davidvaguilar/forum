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
    <link rel="icon" href="images/logito.png"  alt="icono pochilam"/>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
<!--===========================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/animate.css">
<!--===========================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--===========================================================================================================-->	    
    <link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<!--===========================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<!--===========================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!--===========================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
<!--===========================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<!--===========================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<!--===========================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/style.css">
<!--===========================================================================================================-->	
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
<!--===========================================================================================================-->
   <link rel="stylesheet" type="text/css" href="lib/plugins/jQuery-File-Upload-10.0.0/css/jquery.fileupload.css">
<!--===========================================================================================================--> 
   <link rel="stylesheet" href="lib/plugins/toastr/build/toastr.css">
<!--===========================================================================================================-->  
    </head>
<body>
	<div class="wrapper">
<!--===========================================================================================================-->		
        <?php include("header.html");?>
<!--===========================================================================================================-->       
		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-4 col-md-4 pd-left-none no-pd">
								<div class="main-left-sidebar no-margin">
									<div class="user-data full-width">
										<div class="user-profile">
											<div class="username-dt">
												<div class="usr-pic">
													<img src="images/resources/user-pic.png" alt="">
												</div>
											</div><!--username-dt end-->
											<div class="user-specs">
												<h3><?= $_SESSION['nombre_apellido']?></h3>
												<span><?= $_SESSION['tipo']?></span>
											</div>
										</div><!--user-profile end-->
										<ul class="user-fw-status">
											<li>
												<h4>Establecimiento</h4>
												<span><?=$_SESSION['establecimiento']?></span>
											</li>
										</ul>
									</div><!--user-data end-->									
								</div><!--main-left-sidebar end-->
							</div>
							<div class="col-lg-8 col-md-8 no-pd">
								<div class="main-ws-sec">
									<div class="post-topbar">
										<div class="user-picy">
											<!-- <img src="images/resources/user-pic.png" alt=""> -->
										</div>
										<div class="col-lg-12">
											<textarea id="descPubli" class="form-control" rows="4" placeholder="Detallanos tú problema"></textarea>
										</div>
										<br>
										<div class="post-st" style="float:left;">
											<ul>
												<li><a id="btn_publicar" class="active" href="#" title="" style="margin-left: 15px; padding: 0 30px 0 30px;">Publicar</a></li>
												<span class="btn btn-success fileinput-button">
                                                    <i class="fa fa-paperclip attach"></i>
                                                    <span class="attach">Adjuntar Imagen</span>
												    <input type="file" name="file[]" multiple="">
												</span>
											</ul>
										</div><!--post-st end-->
										
									</div><!--post-topbar end-->
<!--=========================================================================================================-->								
									<?php include("publicacion.html"); ?>
<!--=========================================================================================================-->	
								</div><!--main-ws-sec end-->
							</div>
							
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>¿Qué nos tienes para hoy?</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<textarea name="description" placeholder="Detallanos tú problema"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Publicar</button></li>
									<li><a href="#" title="" type="file"><i class="la la-paperclip" ></i>Adjuntar Imagen</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->
<!--=========================================================================================================-->		
		<?php include("footer.html"); ?>
<!--=========================================================================================================-->
	</div><!--theme-layout end-->

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

<!-- Mirrored from gambolthemes.net/workwise_demo/HTML/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2019 15:00:09 GMT -->
</html>