@extends('layout.dashboard')

@section('content')
<nav class="navbar">
    <div class="nav_icon" onclick="toggleSidebar()">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <div class="navbar__left">
      <a href="#">Números de inscritos</a>
      <a href="#">Gestão de videos</a>
      <a class="active_link" href="#">Admin</a>
    </div>
    <div class="navbar__right">
      <a href="#">
        <i class="fa fa-search" aria-hidden="true"></i>
      </a>
      <a href="#">
        <i class="fa fa-clock-o" aria-hidden="true"></i>
      </a>
      <a href="#">
        <img width="30" src="app/assets/avatar.svg" alt="" />
        <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
      </a>
    </div>
  </nav>
  <main>
    <div class="main__container">
      <!-- MAIN TITLE STARTS HERE -->

      <div class="main__title">
        <img src="app/assets/hello.svg" alt="" />
        <div class="main__greeting">
          <h1>Painel de post</h1>
          <p>Bem vindo ao seu painel administrativo</p>
        </div>
      </div>
    </div>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="blog-create" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form__group field">
                    <input type="text" class="form__field" placeholder="title" name="title" id='title' required />
                    <label for="name" class="form__label">Título</label>
                </div>
                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="description" name="description" id='description' required />
                    <label for="name" class="form__label">Conteúdo</label>
                </div>
                <div class="form__group field">
                    <input type="file" class="form__field" placeholder="imagem destacada" name="image" id='image' required />
                    <label for="name" class="form__label">Imagem destacada</label>
                </div>
                <div>
                    <button type="submit" class="button">Enviar</button>
                </div>
    </form>
        
  </main>

@endsection