function cargarComentarios(){
  $("#listaComentarios").html('');
    $.ajax({
       type: 'post' ,
        url: 'lib/php/comentario/comManager.php?control=cargarComentarios',
        data: {},
        success: function(respuesta){
            var res = $.parseJSON(respuesta);
            if(res.length >= 1){
                for(i=0;i<res.length;i++){
                    $componenteHTML =
                        '<ul>'+
                            '<li>'+
                                '<div class="comment-list">'+
                                    '<div class="bg-img">'+
                                       ' <img src="images/resources/bg-img3.png" alt="">'+
                                    '</div>'+
                                    '<div class="comment">'+
                                        '<h3>'+res[i]['usuNombre']+'</h3>'+
                                        '<span><img src="images/clock.png" alt=""> 3 min ago</span>'+
                                        '<p>'+res[i]['comContenido']+'</p>'+
                                    '</div>'+
                                '</div>'+ //<!--comment-list end-->
                            '</li>'+
                        '</ul>';
                    $("#listaComentarios").append($componenteHTML);
                }
            }
        },
        error: function(respuesta){

        }
    });
};

$(document).ready(function(){
    /* === LLAMAR FUNCIONAR DE CARGA DE COMENTARIOS ==== */
    cargarComentarios();
    /* === LLAMAR AL BOTON PUBLICAR ==== */
    $('#btn_comentar').click(function(){
       var descComen = $("#descComen").val();
        if(descComen == ''){
            toastr.error('¡Error!. Comentario Vacio');
        }else{
            $.ajax({
               type: 'post' ,
                url: 'lib/php/comentario/comManager.php?control=agregarComentario',
                data: {comen:descComen},
                success: function(respuesta){
                    if(respuesta == 1){
                        toastr.success('Comentario agregado Correctamente');
                        $("#descComen").val('');
                    }
                },
                error: function(respuesta){
                    
                }
            });
        }
    });
});

