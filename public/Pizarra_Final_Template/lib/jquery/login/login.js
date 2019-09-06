$(document).ready(function(){
   $("#btn_login").click(function(){
      var correo = $("#correo").val();
      var clave = $("#clave").val();
       /* == SE VERIFICAN SI UNO DE LOS CAMPOS QUE SE PIDEN NO ESTEN VACIO == */
       if( correo == '' || clave == ''){ 
           var errorCorreo = document.getElementById('correo');
           var errorClave = document.getElementById('clave');
           toastr.error('Verifique los Campos.','¡Error!');
        
       }else{
           $.ajax({
			type: 'post',
			url: 'lib/php/login/login.php?control=login',
			data: {correo:correo, clave:clave},
			success: function(respuesta){
				if(respuesta == 1){
					location.href="index.php";
				}else{
					toastr.error('Verifique los Campos Ingresados','¡Error!');
				}
			},
			error: function(respuesta){

			}
           });
       }
   });
});