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
    
<div class="container-blog-dashboard">
	
	<div class="table">
		<div class="table-header">
			<div class="header__item"><a id="name" class="filter__link" href="#">Name</a></div>
			<div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Wins</a></div>
			<div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Draws</a></div>
			<div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Losses</a></div>
			<div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Total</a></div>
		</div>
		<div class="table-content">	
			<div class="table-row">		
				<div class="table-data">Tom</div>
				<div class="table-data">2</div>
				<div class="table-data">0</div>
				<div class="table-data">1</div>
				<div class="table-data">5</div>
			</div>
			<div class="table-row">
				<div class="table-data">Dick</div>
				<div class="table-data">1</div>
				<div class="table-data">1</div>
				<div class="table-data">2</div>
				<div class="table-data">3</div>
			</div>
			<div class="table-row">
				<div class="table-data">Harry</div>
				<div class="table-data">0</div>
				<div class="table-data">2</div>
				<div class="table-data">2</div>
				<div class="table-data">2</div>
			</div>
		</div>	
	</div>
</div>
  </main>

@endsection