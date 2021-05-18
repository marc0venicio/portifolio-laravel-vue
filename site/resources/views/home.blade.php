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
          <h1>Olá {{ explode(' ', trim(auth()->User()->name))[0] }} </h1>
          <p>Bem vindo ao seu painel administrativo</p>
        </div>
      </div>

      <!-- MAIN TITLE ENDS HERE -->

      <!-- MAIN CARDS STARTS HERE -->
      <div class="main__cards">
        <div class="card">
          <i
            class="fa fa-user-o fa-2x text-lightblue"
            aria-hidden="true"
          ></i>
          <div class="card_inner">
            <p class="text-primary-p">Números de inscritos</p>
            <span class="font-bold text-title">578</span>
          </div>
        </div>

        <div class="card">
          <i class="fa fa-calendar fa-2x text-red" aria-hidden="true"></i>
          <div class="card_inner">
            <p class="text-primary-p">Tempos de observação</p>
            <span class="font-bold text-title">2467</span>
          </div>
        </div>

        <div class="card">
          <i
            class="fa fa-video-camera fa-2x text-yellow"
            aria-hidden="true"
          ></i>
          <div class="card_inner">
            <p class="text-primary-p">Números de Videos</p>
            <span class="font-bold text-title">340</span>
          </div>
        </div>

        <div class="card">
          <i
            class="fa fa-thumbs-up fa-2x text-pink"
            aria-hidden="true"
          ></i>
          <div class="card_inner">
            <p class="text-primary-p">Números de Likes</p>
            <span class="font-bold text-title">645</span>
          </div>
        </div>
      </div>
      <!-- MAIN CARDS ENDS HERE -->

      <!-- CHARTS STARTS HERE -->
      <div class="charts">
        <div class="charts__left">
          <div class="charts__left__title">
            <div>
              <h1>Reportagens diárias</h1>
              <p>Manaus, AM Brasil</p>
            </div>
            <i class="fa fa-usd" aria-hidden="true"></i>
          </div>
          <div id="apex1"></div>
        </div>

        <div class="charts__right">
          <div class="charts__right__title">
            <div>
              <h1>Relatórios de estatísticas</h1>
              <p>Cupertino, California, USAManaus, AM Brasil</p>
            </div>
            <i class="fa fa-usd" aria-hidden="true"></i>
          </div>

          <div class="charts__right__cards">
            <div class="card1">
              <h1>Renda</h1>
              <p>R$75,300</p>
            </div>

            <div class="card2">
              <h1>Vendas</h1>
              <p>R$124,200</p>
            </div>

            <div class="card3">
              <h1>Usuários</h1>
              <p>3900</p>
            </div>

            <div class="card4">
              <h1>Pedidos</h1>
              <p>1881</p>
            </div>
          </div>
        </div>
      </div>
      <!-- CHARTS ENDS HERE -->
    </div>
  </main>

  

@endsection
