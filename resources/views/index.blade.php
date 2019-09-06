@extends('layouts.panel')

@section('content')
  <div class="card-body">
    @if( session('notification') )
      <div class="alert alert-success" role="alert">
        {{ session('notification') }}
      </div>
    @endif
  </div>
  @foreach( $publications as $publication )
  <div class="posts-section">
    <div class="post-bar">
      <div class="post_topbar">
        <div class="usy-dt">
          <img src="images/resources/us-pic.png" alt="">
          <div class="usy-name">
            <h3>{{ $publication->user->name }}</h3>
            <a href="#" title="" ><i class="fa fa-pencil"></i></a>
            <span><img src="images/clock.png" alt="">{{ $publication->created_at }}</span>
          </div>
        </div>
        <ul class="bk-links">

          <form action="{{ url('/publicaciones/'.$publication->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <li><a href="#" title="" class="ed-box-open"><i class="la la-plus"></i></a></li>
          <!--  <li><button type="button"><i class="la la-edit"></i></button></li>-->
            <li><button type="submit"><i class="la la-close"></i></button></li>
          </form>
        </ul>

      </div>
      <div class="job_descp">

        <p>{{ $publication->description }}</p>

      </div>
      <div class="job-status-bar">

        @foreach( $publication->comments as $comment )
          <div class="user-profile-ov">
            <p>{{ $comment->description }}</p>
            <ul class="bk-links">
              <form action="{{ url('/comentarios/'.$comment->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
              <!--  <li><button type="button"><i class="la la-edit"></i></button></li>-->
                <li><button type="submit"><i class="la la-close"></i></button></li>
              </form>
            </ul>
          </div>
        @endforeach

      </div>
    </div><!--post-bar end-->
  </div><!--posts-section end-->
  @endforeach

  <div class="overview-box" id="overview-box">
    <div class="overview-edit">
      <h3>Registrar Publicación</h3>
      <form action="/publicaciones" method="post">
        {{ csrf_field() }}
        <!--<input type="text" name="subject" placeholder="Asunto">-->
        <textarea name="description" required></textarea>
        <button type="submit" class="save">Guardar</button>
        <button type="button" class="cancel">Cancelar</button>
      </form>
      <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
    </div>
  </div>

  <div class="overview-box" id="education-box">
    <div class="overview-edit">
      <h3>Registrar Comentario</h3>
      <form action="/comentarios" method="post">
        {{ csrf_field() }}
        <input type="text" name="publication_id" value="1" >
        <textarea name="description" required></textarea>
        <button type="submit" class="save">Guardar</button>
        <button type="button" class="cancel">Cancelar</button>
      </form>
      <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
    </div><!--overview-edit end-->
  </div><!--overview-box end-->
@endsection
