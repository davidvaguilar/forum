$(document).ready(function(){
   
    $("#btn_insUsuario").click(function(){
       var errorDiv = document.getElementById('error');
       var nombre = $("#nombre").val(); 
       var apepaterno = $("#apepaterno").val(); 
       var apematerno = $("#apematerno").val(); 
       var sexo = $("#sexo").val(); 
       var establecimiento = $("#establecimiento").val();
       var tipo = $("#tipo").val(); 
       var correo = $("#correo").val();
       var clave = $("#clave").val();
            if(nombre == '' || apepaterno == '' || sexo == '' || establecimiento == '' || tipo == '' || correo == '' || clave == '' ){
               
                toastr.error('Por Favor, Ingrese todos los datos.','Datos Obligatorios Vacios.');
                errorDiv.style.border = '3px solid red';
            
                
               }else{
                   $.ajax({
                        type: 'post',
                        url: 'lib/php/usuarios/insertar.php?control=agregarUsuario',
                        data: {nombre:nombre, paterno:apepaterno, materno:apematerno, sexo:sexo, establecimiento:establecimiento, tipo:tipo, correo:correo, clave:clave},
                        success: function(respuesta){
                                if(respuesta == 1){
                                    toastr.success('Usuario Agregado Exitosamente');
                                    $("#nombre").val(''); 
                                    $("#apepaterno").val(''); 
                                    $("#apematerno").val(''); 
                                    $("#sexo").val(''); 
                                    $("#establecimiento").val('');
                                    $("#tipo").val(''); 
                                    $("#correo").val('');
                                    $("#clave").val('');
                                }
                        },
                        error: function(respuesta){
                            
                        }
                   });
               }
        
        
        
        
    });
});