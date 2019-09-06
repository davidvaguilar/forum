<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--======================================================================================================-->	
	<link rel="icon" type="image/png" href="lib/login/images/icons/favicon.ico"/>
<!--======================================================================================================-->
	<link rel="stylesheet" type="text/css" href="lib/login/vendor/bootstrap/css/bootstrap.min.css">
<!--======================================================================================================-->
	<link rel="stylesheet" type="text/css" href="lib/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--======================================================================================================-->
	<link rel="stylesheet" type="text/css" href="lib/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--======================================================================================================-->
	<link rel="stylesheet" type="text/css" href="lib/login/vendor/animate/animate.css">
<!--======================================================================================================-->	
	<link rel="stylesheet" type="text/css" href="lib/login/vendor/css-hamburgers/hamburgers.min.css">
<!--======================================================================================================-->
	<link rel="stylesheet" type="text/css" href="lib/login/vendor/animsition/css/animsition.min.css">
<!--======================================================================================================-->
	<link rel="stylesheet" type="text/css" href="lib/login/vendor/select2/select2.min.css">
<!--======================================================================================================-->	
	<link rel="stylesheet" type="text/css" href="lib/login/vendor/daterangepicker/daterangepicker.css">
<!--======================================================================================================-->
	<link rel="stylesheet" type="text/css" href="lib/login/css/util.css">
<!--======================================================================================================-->	
	<link rel="stylesheet" type="text/css" href="lib/login/css/main.css">
<!--======================================================================================================-->
    <link rel="stylesheet" href="lib/plugins/toastr/build/toastr.css">
<!--======================================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(lib/login/images/bg-01.jpg);">
					<span class="login100-form-title-1">Inicio de Sesión</span>
				</div>

				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Campo Obligatorio">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="email" id="correo"  placeholder="Ingrese Usuario">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Campo Obligatorio">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" id="clave"  placeholder="Ingrese Contraseña">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">Recuérdame</label>
						</div>

						<div>
							<a href="#" class="txt1">¿Olvidaste tú contraseña?</a>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button type="button" id="btn_login" class="login100-form-btn">Entrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="lib/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="lib/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="lib/login/vendor/bootstrap/js/popper.js"></script>
	<script src="lib/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="lib/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="lib/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="lib/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="lib/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="lib/login/js/main.js"></script>
<!--===============================================================================================-->
	<script src="lib/jquery/login/login.js"></script>
<!--======================================================================================================-->
    <script type="text/javascript" src="lib/plugins/toastr/toastr.js"></script>
<!--======================================================================================================-->

</body>
</html>