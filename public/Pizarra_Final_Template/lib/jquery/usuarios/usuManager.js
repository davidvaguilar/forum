function listarUsuarios(){
    $("#listarUsuarios").html('');
        $.ajax({
           type: 'POST',
            url: 'lib/php/usuarios/usuManager.php?control=cargarUsuarios',
            data: {},
            success: function(respuesta){
                var res = $.parseJSON(respuesta)
                    if(res.length >= 1){
                        for(i=0; i<res.length;i++){
                            $componenteHTML=
                                           '<div class="col-lg-3 col-md-4 col-sm-6 col-12">'+
                                               '<div class="company_profile_info">'+
                                                    '<div class="company-up-info">'+
                                                        '<img src="images/resources/pf-icon4.png" alt="">'+
                                                        '<h3>'+res[i]['usuNombre_apellido']+'</h3>'+
                                                       ' <h4>'+res[i]['usuTipo']+'</h4>'+
                                                    '</div>'+
                                                    '<a href="#" title="" class="view-more-pro"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>'+
                                                '</div>'+//<!--company_profile_info end-->'
                                            '</div>'+
                                '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'+
                                      '<div class="modal-dialog" role="document">'+
                                        '<div class="modal-content">'+
                                          '<div class="modal-header">'+
                                            '<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>'+
                                            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                              '<span aria-hidden="true">&times;</span>'+
                                            '</button>'+
                                          '</div>'+
                                          '<div class="modal-body">'+
                                                '<h3>'+res[3]['usuNombre_apellido']+'</h3>'+
                                                '<p>'+res[3]['usuTipo']+'</p>'+
                                          '</div>'+
                                          '<div class="modal-footer">'+
                                            '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'+
                                            '<button type="button" class="btn btn-primary">Save changes</button>'+
                                          '</div>'+
                                        '</div>'
                                      '</div>'+
                                    '</div>';
                            
                            
                            
                            
                            
                            
//                            alert (res[i]['usuNombre_apellido'] );
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            $("#listarUsuarios").append($componenteHTML);
                        }
                    }
                }
            });
}

function actualizar(){
    location.reload();
}

$(document).ready(function(){
   listarUsuarios();
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
                        url: 'lib/php/usuarios/usuManager.php?control=agregarUsuario',
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