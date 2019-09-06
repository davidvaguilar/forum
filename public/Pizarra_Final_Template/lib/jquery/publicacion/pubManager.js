function cargarPublicaciones(){
  $("#listaPublicaciones").html('');
    $.ajax({
       type: 'post' ,
        url: 'lib/php/publicacion/pubManager.php?control=cargarPublicacion',
        data: {},
        success: function(respuesta){
            var res = $.parseJSON(respuesta);
            if(res.length >= 1){
                for(i=0;i<res.length;i++){
                    $componenteHTML = 
                            '<div class="post-bar" id-comentario='+res[i]['pubId']+'>'+
                                '<div class="post_topbar">'+
                                    '<div class="usy-dt">'+
                                        '<img src="images/resources/us-pc2.png" alt="">'+
                                        '<div class="usy-name">'+
                                            '<h3>'+res[i]['usuNombre']+'</h3>'+
                                            '<span><img src="images/clock.png" alt="">3 min ago</span>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="ed-opts">'+
                                        '<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>'+
                                        '<ul class="ed-options">'+
                                            '<li><a href="#" title="">Eliminar</a></li>'+
                                        '</ul>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="epi-sec">'+
                                '</div>'+
                                '<div class="job_descp">'+
                                    '<p>'+res[i]['pubContenido']+'</p>'+
                                '</div>'+
                                '<div class="job-status-bar">'+
                                    '<ul class="like-com"> '+
                                        '<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>'+
                                    '</ul>'+
                                '</div>'+
                            '<div class="comment-section">'+
                                '<div class="comment-sec" id="listaComentarios" >'+
                                        
                            
                        
                                '</div>'+ //<!--comment-sec end-->
                                '<div class="post-comment">'+
                                    '<div class="cm_img">'+
                                        '<img src="images/resources/bg-img4.png" alt="">'+
                                    '</div>'+
                                    '<div class="comment_box">'+
                                        '<form>'+
                                            '<input type="text" placeholder="Comenta aqui..." id="descComen">'+
                                            '<button type="button" id="btn_comentar">Comentar</button>'+
                                        '</form>'+
                                    '</div>'+
                                '</div>'+ //<!--post-comment end-->
                            '</div>'+ //<!--comment-section end-->
                        '</div>'; //<!--post-bar end-->
                        
                            
                    

                    
                    $("#listaPublicaciones").append($componenteHTML);
                }
            }
        },
        error: function(respuesta){

        }
    });
};
$(document).ready(function(){
    cargarPublicaciones();
    /* === LLAMAR AL BOTON PUBLICAR ==== */
    $('#btn_publicar').click(function(){
       var descPubli = $("#descPubli").val();
        if(descPubli == ''){
            toastr.error('Detalla Tú Problema.','¡Error!');
        }else{
            $.ajax({
               type: 'post' ,
                url: 'lib/php/publicacion/pubManager.php?control=agregarPublicacion',
                data: {desc:descPubli},
                success: function(respuesta){
                    if(respuesta == 1){
                        toastr.success ('Publicación agregado Correctamente');
                        $("#descPubli").val('');
                        location.reload();
                    }
                },
                error: function(respuesta){
                    
                }
            });
        }
    });
});

